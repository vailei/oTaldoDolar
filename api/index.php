<html lang="pt-br">
<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__.'/public/html/index.html');
?>
<body>
    <header>
        <div class="menu">
            <a href="">Dólar</a>
            <a href="">Euro</a>
            <a href="">Libra</a>
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
</body>
</html>
