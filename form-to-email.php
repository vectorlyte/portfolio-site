<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit</title>
    <style>
        *{
            margin: 0;
            font-family: sans-serif;
        }
        #background{
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgb(0, 0, 0), rgb(1, 40, 0));
            color: rgb(50, 230, 100);
        }
        h1{
            color: rgb(50, 230, 100);
            animation-name: sentAni;
            animation-duration: 2s;
        }

        @keyframes sentAni{
            from {
                margin-top: -300px;
            }
            to {
                margin-top: 0px;
            }
        }

        h4{
            color: transparent;
            animation-name: reveal;
            animation-duration: 1s;
            animation-delay: 2s;
            animation-fill-mode: forwards;
        }

        @keyframes reveal{
            from{ color: transparent}
            to{ color: white}
        }

        #page-body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
            height: 50vh;
        }
    </style>
</head>
<body>
    <div id="background">
        <section id="page-body">
        <h1>Message sent</h1>
        <h4 id="redirect">redirecting back to home page in: <span id="counter"></span></h4>
        </section>
    </div>
    <script src="redirect.js"></script>
</body>
</html>


<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "vectorlite@gmail.com";
$email_subject = "Portfolio site message";
$email_body = 'New message recieved from $name.\n'.

$to = "vectorlite@gmail.com";
$headers = 'From: $email_from \r\n';
$headers .= 'Reply-To: $visitor_email \r\n';

mail($to,$email_subject,$email_body,$headers);
?>
