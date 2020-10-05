<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

    // $time = date('r');
    // echo "data: The server time is: {$time}\n\n";
    $data = file_get_contents('./mock.json');
    $data = json_decode($data, true);
    echo "data: " . json_encode($data) . "\n\n";
    flush();
?>