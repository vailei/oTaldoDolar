<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/index.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/favicon/site.webmanifest">
    <title>oTalDoDolar</title>
</head>
<body>
    <header>
        <div class="menu">
            <a href="/">Dólar</a>
            <a href="euro">Euro</a>
            <a href="libra">Libra</a>
        </div>
    </header>
    <div class="main">
        <div class="coinname">
            <h2>Dólar</h2>
        </div>
        <div class="coinvalor">
            <?php
                $ch = curl_init();
                $timeout = 0;
                curl_setopt($ch, CURLOPT_URL, 'https://economia.awesomeapi.com.br/json/last/USD-BRL');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                $conteudo = curl_exec ($ch);
                curl_close($ch);
    
                $json = $conteudo;
                $data = json_decode($json);
                $data2 = $data->USDBRL->ask;
                $exibir = substr($data2, 0, 4);
                
                echo '<p id="valor">R$',$exibir,'</p>';
            ?>
        </div>
    </div>
<script type="text/javascript"> var infolinks_pid = 3383715; var infolinks_wsid = 0; </script> <script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>
</body>
</html>
