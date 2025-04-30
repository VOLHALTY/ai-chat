<?php function q0($h1,$b2){$c3=urlencode($h1);$q4="https://open.wiki-api.ir/apis-1/ChatGPT-Save?q=$c3&user=2125984486&key=$b2";$k5=@file_get_contents($q4);$c6=json_decode($k5,true);$v7=$c6;if(isset($c6[base64_decode('ZGV0YWls')][base64_decode('ZGF0YQ==')])){echo htmlspecialchars($c6[base64_decode('ZGV0YWls')][base64_decode('ZGF0YQ==')]);}else{echo base64_decode('2b7Yp9iz2K4g2YbYp9mF2LnYqtio2LEg2KfYsiDYs9ix2YjYsS4=');}}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=z, initial-scale=1.0">
    <title>Ai chat</title>
    <link rel="shortcut icon" href="ai.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    <footer data-aos="zoom-in">
        <div class="logo">
            <img src="ai.png" alt="">
        </div>

        <ul>
            <li>
                <div class="fles-icon">
                    <a href="https://t.me/VOLHALTY" target="_blank"> <i class="fab fa-telegram-plane"></i> Telegram
                        channel</a>
                </div>
            </li>
            <li>
                <div class="fles-icon">
                    <a href="https://github.com/VOLHALTY"><i class="fab fa-github-square"></i> GitHub</a>
                </div>
            </li>
            <li>
                <div class="fles-icon">
                    <a href="https://t.me/ETAAL"><i class="fas fa-chart-line"></i> Developer</a>
                </div>
            </li>
        </ul>
    </footer>

    <main data-aos="fade-up">
        <div class="respanse-ai">
            <p id="typing-text"><?php if(!empty($_GET[base64_decode('dXNlcnRleHQ=')])&&isset($_GET[base64_decode('c2VuZA==')])){$t8=htmlspecialchars($_GET[base64_decode('dXNlcnRleHQ=')]);q0(urlencode($t8),base64_decode('NlBxUVFnSi1pZHloZnZXLUdzYXJtUkUtYXJZaWJHWi1MaXFmNnBO'));}?></p>
        </div>

        <div class="user-input">
            <form method="get">
                <div class="user-box1">
                    <input id="3" type="text" name="usertext" placeholder="اینجا متن بنویس">
                    <input type="submit" name="send" value="ارسال">
                </div>
            </form>
        </div>
    </main>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Vazirmatn:400,500,700');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn';
        }

        .fles-icon {
            display: flex;
            flex-direction: row;
            align-items: center;
            direction: rtl;

        }

        input::placeholder {
            text-align: right;
        }

        i {
            margin-right: 10px;
        }

        .gred {
            opacity: 90%;
            filter: blur(130px);
            width: 100%;
            height: 50px;
            margin-top: 10px;

            background-color: rgb(195, 0, 255);
            position: absolute;
            box-shadow: 0 0 20px rgb(195, 0, 255);
        }

        .respanse-ai {
            width: 90%;
            height: 500px;
            background: linear-gradient(90deg, #2b2b2b, #1c1c1c);
            color: aliceblue;
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 10px 30px;
            border-radius: 8px 8px 0 0;
            overflow: scroll;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
        }

        img {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        body {
            background-color: #111;
            color: aliceblue;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        p {
            text-align: right;
            padding: 10px 30px;
            line-height: 2;
            font-size: 1rem;
            direction: rtl;
            white-space: pre-wrap;
        }

        footer {
            width: 90%;
            background: linear-gradient(90deg, #2b2b2b, #1c1c1c);
            padding: 10px 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 10px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);

        }

        ul {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            gap: 20px;
        }

        li {
            list-style-type: none;

        }

        a {
            padding: 10px 20px;
            text-decoration: none;
            color: aliceblue;
            font-weight: bold;
            transition: all 1s ease;


        }

        .fles-icon:hover {
            background: linear-gradient(90deg, rgb(70, 70, 70), rgba(28, 28, 28, 0.84));
            border-radius: 9px;
            transition: background 0.6s ease, border-radius 0.3s ease;
        }

        .user-box1 {
            width: 110%;
            display: flex;
            flex-direction: row;
            gap: 10px;
            text-align: right;
        }

        .user-input {
            width: 90%;
            padding: 10px;
            background: linear-gradient(90deg, rgb(70, 70, 70), rgba(28, 28, 28, 0.84));
            border-radius: 0 0 8px 8px;
        }

        main {
            width: 90%;
            padding: 10px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        input[type="text"] {
            width: 80.7%;
            padding: 8px 40px;
            background: linear-gradient(90deg, rgb(70, 70, 70), rgba(28, 28, 28, 0.84));
            border: none;
            color: aliceblue;
            direction: rtl;
        }

        input[type="text"]:focus {
            border: none;
            outline: none;
            border-bottom: 2px solid aliceblue;
        }

        input[type="submit"] {
            transition: all 0.5s ease;
            padding: 8px 40px;
            background-color: aliceblue;
            border-radius: 6px;



        }

        input[type="submit"]:hover {
            background: linear-gradient(90deg, #00ffd0, #00ffa2);
            color: #000;
            font-weight: bold;
        }

        @media screen and (max-width: 500px) {
            main {
                width: 100%;
            }

            footer {
                padding: 1px 10px;
                justify-content: center;
            }

            .respanse-ai {
                width: 100%;
                height: 600px;

            }

            p {
                font-size: 10px;
                padding: 5px;
            }

            a {
                font-size: 10px;
                padding: 20px 9px;
            }

            .logo {
                display: none;
            }

            .user-input {
                width: 100%;
            }

            input[type="text"] {
                font-size: 10px;
                width: 60%;
                padding: 5px;
            }

            input[type="submit"] {
                width: 20%;
                font-size: 10px;
                padding: 5px;

            }

            .user-box1 {

                align-items: center;
                justify-content: center;
            }

        }
    </style>
    <script>
        AOS.init();
    </script>

</body>

</html>