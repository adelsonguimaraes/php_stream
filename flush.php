<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    header('Connection: keep-alive');
    header('X-Accel-Buffering: no'); // Nginx: unbuffered responses suitable for Comet and HTTP streaming applications

    // aumentando o tempo de execução permitido do php
    // set_time_limit( 60 ); // executa por 1 minuto e depois encerra

    while(true) {
        $data = file_get_contents('./mock.json');
        $data = json_decode($data, true);

        echo "retry: 10000\n"; // controla o timeout do retry da requisição do js, depois que a conexão for encerrada
        echo "data: " . json_encode($data) . "\n\n";
        // echo "data: " . date('d/m/Y H:m:s') . "\n\n";
        $valor_atual = $data['monster'];
        ob_flush (); 
        flush ();
        sleep(1);
    }
?>