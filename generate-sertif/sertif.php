<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
            body {
                color: black;
                display: table;
                font-family: montserrat, Georgia;
                font-size: 28px;
                text-align: center;
            }
            .container {
                border: 20px solid #38435F;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: #38435F;
            }

            .marquee {
                color: #38435F;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                Lumintu Logic
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
                Ari Sukarizo
            </div>

            <div class="reason">
                Peserta Magang Terbaik<br/>
                di Lumintu Logic
            </div>
            <?php
                require_once 'generate-sertif/phpqrcode/qrlib.php';
                $file = "generate-sertif/AriSukarizo.png";
                $link = 'https://symposium.kratonjogja.id/';
                $sertif = QRcode::png($link, $file);
                echo "<center><img src='".$file."'><center>";
                
            ?>
        </div>
    </body>
</html>
