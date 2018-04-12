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

<img src="{{ asset('images/email-header2.jpg') }}" alt="" width="100%">

{{--<p><b>CLIENT INVITATION</b></p>--}}

<p>Hello {{ $client }},</p>

<p>Your financial adviser {{ $advisor }} from {{ $firm }} has invited you to complete the Investor DNA questionnaire.</p>


<p>The Investor DNA financial styles questionnaire is a designed to provide you with insight into your unique
    investment style - Analyst, Implementer, Humanitarian and/or Entrepreneur.</p>

<p>Your profile explains your investment decision-making style.</p>

<p>These insights will help you make better investment decisions whilst helping your adviser to ‘tune into your
    wavelength’ and provide a more tailored financial solution. </p>

<p>The questionnaire should take you 20 to 25 minutes to complete.</p>

<p>There are no right or wrong answers, and your responses are entirely confidential.</p>

<p>Please <a href="{{ URL::to('questioner/' . $code) }}">Click Here</a> to complete your questionnaire.
    Once completed your financial adviser will arrange at time to explain your investor DNA profile to you.
</p>



<p>Kind Regards,<br/>
    <b>Your Investor DNA Team</b></p>

<p style="padding-bottom: 0px"><img src="http://128.199.88.244/images/adminLogo.png" alt="Investor DNA" width="150px"></p>
<p><a href="http://www.investordna.com.au">www.investordna.com.au</a><br/>
    p: 61 3 12345678<br/>
    e: info@investordna.com.au</p>


<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666;">
<em>TKH Group International PTY LTD (ACN 613731445) as trustee for the TKH Group Trust (ABN 13 186 714 215) is the owner of Investor
    DNA and all materials, including Investor DNA logo, brand, Investor profiles, websites, tools, processes and/or systems.
    The name ‘Investor’ DNA is protected under trademark 01898732 and is registered ® with IP Australia.
    Please visit our website at <a href="http://www.investordna.com.au">www.investordna.com.au</a> to view our full terms and conditions. </em>


<br/><br/></span>



</body>
</html>


