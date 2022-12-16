<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../public/css/index.css">
    <link rel="apple-touch-icon" sizes="180x180" href="src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/favicon/site.webmanifest">
    <title>oTalDoDolar</title>

    <style>
        html,body {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            background-color: aqua;
            font-family: 'Montserrat', sans-serif;
        }

        header {
            width: 100%;
            background-color: red;
        }

        .menu {
            width: 50%;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .menu a {
            margin: 0 auto;
            text-decoration: none;
            font-size: 30px;
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 1%;
            padding-bottom: 1%;
        }

        .menu a:hover {
            background-color: blue;
        }

        .main {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }

        .coinname {
            display: flex;
            width: 80%;
            margin: 0 auto;
            margin-top: 3%;
            background-color: aquamarine;
        }

        .coinname h2 {
            justify-content: center;
            display: flex;
            margin: 0 auto;
            font-size: 50px;
        }

        .coinvalor {
            display: flex;
            width: 80%;
            margin: 0 auto;
            background-color: blueviolet;
        }       

        #valor {
            justify-content: center;
            display: flex;
            margin: 0 auto;
            font-size: 30px;
        }
    </style>
</head>
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
