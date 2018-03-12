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
            font-size:13px;
        }
    </style>
</head>

<body>

<img src="{{ asset('images/email-header.jpg') }}" alt="" width="100%">

<p><b>NOTIFICATION: TO INVESTOR DNA</b></p>
<p><b>NEW ADVISER APPROVAL BY FIRM ADMINISTRATOR</b></p>
<p>Name of Financial Advisory Firm: {{ $firm->firm_name }}</p>
<p>Financial Advisory ID: {{ $firm->code }}</p>
<p>Name of Financial Advisory Administrator: {{ $firm->name }}</p>
<p>Name of registered Financial Adviser: {{ $user->name }}</p>
<p>Financial Adviser email address: {{ $user->email }}</p>
<p>Financial Adviser mobile: {{ $user->mobile_number }}</p>

<img src="{{ asset('images/adminLogo.png') }}" alt="" width="150px">


</body>
</html>
