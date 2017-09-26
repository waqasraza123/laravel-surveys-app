<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 30px;
            font-size:12px;
        }
    </style>
</head>


<p>Dear {{ $name }},</p>

<p>Thank you for creating an account with InvestorDNA.</p>

<p>Please click on the link below to verify your email address and login.</p>

<p><a href="{{ URL::to('register/verify/' . $confirmation_code) }}">Verify Email</a></p>

<p>Kind Regards,<br/>

    Team @ Investor DNA</p>


<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666;">
                                Email disclaimer to go here<br/><br/></span>

</body>
</html>



