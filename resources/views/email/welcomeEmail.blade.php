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

{{--<p><b>NOTIFICATION TO NEW FINANCIAL ADVISOR  - WELCOME LETTER –--}}
{{--SELF REGISTERING – PENDING APPROVAL FROM ADMINISTRATOR--}}
{{--</b></p>--}}


<p>Hello {{ $user->name }}, </p>

<p>Thank you for registering with the Investor DNA system.</p>

<p>You now have been grated full access the Investor DNA system.
    When you login you will be taken to your Administrator dashboard, and you will be able to:</p>

<p>1. Purchase tokens to allow advisers to use the Investor DNA system<br/>
2. Register new advisers from your Financial Practice<br/>
3. Approve advisers who have registered directly onto our system<br/>
    4. Keep track of all adviser activity as they use the Investor DNA system</p>

<p>Please note that Financial Advisers using Investor DNA must be registered with either the
    Association of Financial Advisers (AFA) with Fellow Chartered Financial Practitioner
    delegation (FChFP) or Chartered Life Financial Practitioner (ChLP) designation and/or
    the Financial Planning Association (FPA) with Certified Financial Planner CFP designation.</p>

<p>You will receive an email if your advisers register directly onto the Investor DNA system,
    and they are require your approval to access the system. Please go to your Financial Practice
    Dashboard to approve their registration and allow system access.</p>

<p>Please ensure that your financial adviser meets the above requirements for approval.</p>

<p>Once approved your financial advisers will be granted access to the Investor DNA system.
    All financial advisers are required to participate in an Investor DNA induction program within 6
    months from date of approval to maintain active registration status.</p>


<p>Kind Regards,<br/>
    <b><em>Your Investor DNA Team</em></b></p>

<p style="padding-bottom: 0px"><img src="http://128.199.88.244/images/sig.png" alt="Investor DNA"></p>
<p><a href="http://www.investordna.com.au">www.investordna.com.au</a><br/>
    p: 61 3 12345678<br/>
    e: info@investordna.com.au</p>


<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666; font-style: italic">
TKH Group International PTY LTD (ACN 613731445) as trustee for the TKH Group Trust (ABN 13 186 714 215) is the owner of
    Investor DNA and all materials, including Investor DNA logo, brand, Investor profiles, websites, tools, processes
    and/or systems. The name ‘Investor’ DNA is protected under trademark 01898732 and is registered ® with IP Australia.
    Please visit our website at <a href="http://www.investordna.com.au">www.investordna.com.au</a> to view our full terms and conditions.

<br/><br/></span>

</body>
</html>