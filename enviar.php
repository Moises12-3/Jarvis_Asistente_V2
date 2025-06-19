<?php
date_default_timezone_set('America/Managua');

if (isset($_POST['mensaje'])) {
    $mensaje = strtolower(trim($_POST['mensaje']));
    $respuesta = "";
    $hora_actual = (int)date('H');

    $archivo_saludos = 'json/saludos.json';
    $archivo_chistes = 'json/chistes.json';
    $archivo_historial = 'json/historial.json';

    $saludos = file_exists($archivo_saludos) ? json_decode(file_get_contents($archivo_saludos), true) : [];

    function saludoAleatorio($hora, $saludos) {
        if ($hora >= 6 && $hora < 12) {
            $tipo = 'mañana';
        } elseif ($hora >= 12 && $hora < 18) {
            $tipo = 'tarde';
        } else {
            $tipo = 'noche';
        }
        if (isset($saludos[$tipo]) && count($saludos[$tipo]) > 0) {
            return $saludos[$tipo][array_rand($saludos[$tipo])]['texto'];
        } else {
            return "¡Hola! ¿En qué puedo ayudarte?";
        }
    }

    $historial = [];
    if (file_exists($archivo_historial)) {
        $contenido_actual = file_get_contents($archivo_historial);
        $historial = json_decode($contenido_actual, true);
    }

    // Dentro de enviar.php, después de limpiar historial y demás, agregamos:

if (
    strpos($mensaje, 'tomar foto') !== false ||
    strpos($mensaje, 'foto') !== false ||
    strpos($mensaje, 'sacar foto') !== false
) {
    // Leer frases antes de tomar la foto
    $archivo_foto_antes = 'json/respuesta_foto_antes.json';
    $frases_antes = file_exists($archivo_foto_antes) ? json_decode(file_get_contents($archivo_foto_antes), true) : [];

    // Elegir frase aleatoria
    if (!empty($frases_antes)) {
        $frase_antes = $frases_antes[array_rand($frases_antes)]['texto'];
    } else {
        $frase_antes = "Preparando para tomar la foto...";
    }

    $tipo = "foto";

    // Agregar al historial con la frase antes de la foto
    $historial[] = [
        "fecha" => date("Y-m-d H:i:s"),
        "mensaje" => $_POST['mensaje'],
        "respuesta" => $frase_antes,
        "tipo" => $tipo
    ];

    file_put_contents($archivo_historial, json_encode($historial, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

    echo json_encode([
        'tipo' => $tipo,
        'mensaje' => $frase_antes
    ]);
    exit;
}

    // LIMPIAR HISTORIAL Y ELIMINAR IMÁGENES
    if (
        strpos($mensaje, 'limpiar historial') !== false || 
        strpos($mensaje, 'borrar historial') !== false || 
        strpos($mensaje, 'limpiar pantalla') !== false || 
        strpos($mensaje, 'limpiar') !== false || 
        strpos($mensaje, 'borrar') !== false
    ) {
        if (file_exists($archivo_historial)) {
            $contenido_actual = file_get_contents($archivo_historial);
            $historial_actual = json_decode($contenido_actual, true);

            if (is_array($historial_actual)) {
                foreach ($historial_actual as $registro) {
                    if (isset($registro['ruta_imagen']) && file_exists($registro['ruta_imagen'])) {
                        unlink($registro['ruta_imagen']); // elimina la imagen física
                    }
                }
            }
        }

        // Vaciar el historial
        file_put_contents($archivo_historial, json_encode([], JSON_PRETTY_PRINT));
        
        echo '<div class="message bot">El historial y las imágenes han sido eliminados correctamente.</div>';
        exit;
    }

    if (strpos($mensaje, 'hora') !== false) {
        $hora = date('g:i A');
        $respuesta = "Claro, son las $hora en este momento.";
    } // Chiste 
    elseif (strpos($mensaje, 'chiste') !== false) {
        if (file_exists($archivo_chistes)) {
            $chistes = json_decode(file_get_contents($archivo_chistes), true);
            if (is_array($chistes) && count($chistes) > 0) {
                $aleatorio = $chistes[array_rand($chistes)];
                $respuesta = $aleatorio['texto'];
            } else {
                $respuesta = "Lo siento, no encontré chistes disponibles.";
            }
        } else {
            $respuesta = "Archivo de chistes no encontrado.";
        }
    } // Saludos 
    elseif (
        strpos($mensaje, 'hola') !== false ||
        strpos($mensaje, 'jarvis') !== false ||
        strpos($mensaje, 'jarvis ayudame') !== false ||
        strpos($mensaje, 'ayudame') !== false ||
        strpos($mensaje, 'ayuda') !== false ||
        strpos($mensaje, 'buenos días') !== false ||
        strpos($mensaje, 'buenas tardes') !== false ||
        strpos($mensaje, 'buenas noches') !== false ||
        strpos($mensaje, 'saludo') !== false
    ) {
        $respuesta = saludoAleatorio($hora_actual, $saludos);
    }// BUSCAR EN WIKIPEDIA
    elseif (preg_match('/^(buscar|wikipedia)\s+(.+)/i', $mensaje, $matches)) {
        $busqueda = trim($matches[2]);

        if (!empty($busqueda)) {
            // Paso 1: Buscar título con la API de búsqueda
            $url_busqueda = "https://es.wikipedia.org/w/api.php?action=query&list=search&srsearch=" . urlencode($busqueda) . "&format=json";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url_busqueda);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERAGENT, 'MiBot/1.0');
            $respuesta_busqueda = curl_exec($ch);
            curl_close($ch);

            $datos_busqueda = json_decode($respuesta_busqueda, true);

            if (isset($datos_busqueda['query']['search'][0]['title'])) {
                $titulo = $datos_busqueda['query']['search'][0]['title'];

                // Paso 2: Obtener resumen con título encontrado
                $url_resumen = "https://es.wikipedia.org/api/rest_v1/page/summary/" . urlencode($titulo);

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url_resumen);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERAGENT, 'MiBot/1.0');
                $respuesta_resumen = curl_exec($ch);
                $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                if ($httpcode == 200 && $respuesta_resumen !== false) {
                    $datos_resumen = json_decode($respuesta_resumen, true);

                    if (isset($datos_resumen['extract']) && !empty($datos_resumen['extract'])) {
                        $respuesta = $datos_resumen['extract'];
                    } else {
                        $respuesta = "No encontré información detallada sobre '$busqueda'.";
                    }
                } else {
                    $respuesta = "No pude obtener el resumen de Wikipedia. Código HTTP: $httpcode";
                }
            } else {
                $respuesta = "No encontré resultados para '$busqueda' en Wikipedia.";
            }
        } else {
            $respuesta = "¿Qué deseas buscar en Wikipedia?";
        }
    }




    else {
        $respuesta = "Mensaje recibido: " . htmlspecialchars($_POST['mensaje']);
    }

    $historial[] = [
        "fecha" => date("Y-m-d H:i:s"),
        "mensaje" => $_POST['mensaje'],
        "respuesta" => $respuesta
    ];

    file_put_contents($archivo_historial, json_encode($historial, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

    
    $html = "";
foreach ($historial as $item) {
    $html .= "<div class='message user'>" . htmlspecialchars($item['mensaje']) . "</div>";
    
    // Mostrar respuesta de texto
    if (isset($item['respuesta'])) {
        $html .= "<div class='message bot'>" . htmlspecialchars($item['respuesta']) . "</div>";
    }





}

    echo $html;




} else {
    echo "No se recibió ningún mensaje.";
}
?>
