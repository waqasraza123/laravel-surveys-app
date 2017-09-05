<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 30px;
            font-size:12px;
        }
    </style>
</head>


<p>Dear {{ $client }},</p>

<p>{{ $advisor }} from {{ $firm }} have invited you to take the Investor DNA questionnaire.</p>

<p><a href="{{ URL::to('questioner/' . $code) }}">Click Here</a> to complete your questionnaire.</p>


<p>Kind Regards,<br/>

Team @ Investor DNA</p>

{{--<p><img src="http://staging.benhaqi.com/inhub/public/images/logo.png" alt="iNDevelopmentHub"></p>--}}


<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666;">
                                Email disclaimer to go here<br/><br/></span>

</body>
</html>

