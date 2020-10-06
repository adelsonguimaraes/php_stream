<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

    $data = file_get_contents('./mock.json');
    $data = json_decode($data, true);

    echo "data: " . json_encode($data) . "\n\n";
    $valor_atual = $data['monster'];
    flush();
?>