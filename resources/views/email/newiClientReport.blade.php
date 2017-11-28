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

<p>You have successfully purchased Investor DNA questionnaire.</p>

<p><a href="{{ URL::to('questioner/' . $code) }}">Click Here</a> to complete your questionnaire.</p>


<p>Kind Regards,<br/>

Team @ Investor DNA</p>

<p><img src="http://128.199.88.244/images/adminLogo.png" alt="Investor DNA" width="150px"></p>


<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666;">
                                TKH Group International PTY LTD (CAN 613731445) as trustee for the TKH Group Trust (ABN 13 186 714 215) is the sole author and owner of Investor DNA and all related materials, including but not limited to the Investor DNA logo, brand, Investor profiles, websites, tools, processes and/or systems (materials). Investor DNA is protected under trademark 01898732 issued under Australian law and all materials are subject to copyright. TKH Group International provides Investment Psychology advice only and does not provide any financial advice whatsoever with regard to any investment products and services. Investor DNA does not make a claims, recommendations or product performance guarantees with regard to any financial product, related financial advice or financial performance. For specific financial advice, we recommend you talk to a registered Financial Adviser holding Association of Financial Advisers or Financial Planners Association of Australian Accreditation.
<br/><br/></span>

</body>
</html>
