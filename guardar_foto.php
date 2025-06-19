<?php 
date_default_timezone_set('America/Managua');

if (isset($_POST['foto'])) {
    $foto = $_POST['foto'];

    if (preg_match('/^data:image\/(\w+);base64,/', $foto, $tipo)) {
        $tipoImagen = $tipo[1];
        $foto = substr($foto, strpos($foto, ',') + 1);
        $foto = base64_decode($foto);

        if ($foto === false) {
            echo json_encode(['exito' => false, 'error' => 'No se pudo decodificar la imagen']);
            exit;
        }
    } else {
        echo json_encode(['exito' => false, 'error' => 'Formato de imagen inválido']);
        exit;
    }

    $carpeta = 'img/Fotografia/';
    if (!is_dir($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

    $nombreArchivo = 'foto_' . date('Ymd_His') . '.' . $tipoImagen;
    $rutaCompleta = $carpeta . $nombreArchivo;

    if (file_put_contents($rutaCompleta, $foto)) {
        // Leer frases del JSON respuesta_foto_despues.json
        $archivo_frases = 'json/respuesta_foto_despues.json';
        $frases = [];
        if (file_exists($archivo_frases)) {
            $contenido = file_get_contents($archivo_frases);
            $frases = json_decode($contenido, true);
        }

        if (!empty($frases)) {
            $frase_aleatoria = $frases[array_rand($frases)]['texto'];
        } else {
            $frase_aleatoria = "Se ha tomado una foto.";
        }

        // Guardar en historial.json
        $archivo_historial = 'json/historial.json';
        $historial = [];

        if (file_exists($archivo_historial)) {
            $contenido_actual = file_get_contents($archivo_historial);
            $historial = json_decode($contenido_actual, true);
        }

        $historial[] = [
            "fecha" => date("Y-m-d H:i:s"),
            "mensaje" => "foto",
            "respuesta" => $frase_aleatoria,
            "ruta_imagen" => $rutaCompleta
        ];

        file_put_contents($archivo_historial, json_encode($historial, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        echo json_encode(['exito' => true, 'ruta' => $rutaCompleta, 'mensaje' => $frase_aleatoria]);
    } else {
        echo json_encode(['exito' => false, 'error' => 'No se pudo guardar la imagen']);
    }
} else {
    echo json_encode(['exito' => false, 'error' => 'No se recibió imagen']);
}
?>
