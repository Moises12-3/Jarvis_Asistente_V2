<?php
$archivo_historial = 'json/historial.json';

header('Content-Type: application/json');

$resultado = [
    'html' => '',
    'ultima_respuesta' => ''
];

if (file_exists($archivo_historial)) {
    $historial = json_decode(file_get_contents($archivo_historial), true);

    if ($historial && count($historial) > 0) {
        // Invertimos para mostrar del más reciente al más antiguo
        $historial_invertido = array_reverse($historial);

        foreach ($historial_invertido as $registro) {
            $resultado['html'] .= '<div class="message bot">' . htmlspecialchars($registro['respuesta']) . '</div>';

            if (!empty($registro['ruta_imagen'])) {
                $rutaImagenWeb = htmlspecialchars($registro['ruta_imagen']);

                // Corrección: no subir de nivel, img está en mismo nivel que el PHP
                $rutaImagenFisica = __DIR__ . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, trim($registro['ruta_imagen']));

                if (file_exists($rutaImagenFisica)) {
                    $resultado['html'] .= '<div class="message imagen"><img src="' . $rutaImagenWeb . '" alt="Imagen relacionada" style="max-width:300px; border:1px solid #ccc; margin:5px 0;"></div>';
                } else {
                    $resultado['html'] .= '<div class="message error">[Imagen no encontrada: ' . $rutaImagenWeb . ']</div>';
                }
            }


            $resultado['html'] .= '<div class="message user">' . htmlspecialchars($registro['mensaje']) . '</div>';
        }



        // La última respuesta es del último elemento original (sin invertir)
        $resultado['ultima_respuesta'] = $historial[count($historial) - 1]['respuesta'];
    } else {
        $resultado['html'] = '<div class="message bot">No hay historial disponible.</div>';
    }
} else {
    $resultado['html'] = '<div class="message bot">Archivo de historial no encontrado.</div>';
}

echo json_encode($resultado);
