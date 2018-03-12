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

{{--<p><b>NOTIFICATION<br/>--}}
      {{--TO FINANCIAL ADVISORY ADMINISTRATOR<br/>--}}
      {{--NEW FINANCIAL ADVISOR REGISTRATION</b></p>--}}


<p>Hello {{ $firmName }}, </p>

<p>This is to advise you that {{ $name }} has just registered with the Investor DNA system.</p>

<p>Financial Advisers using Investor DNA must be registered with either the Association of Financial
    Advisers (AFA) with Fellow Chartered Financial Practitioner delegation <b>(FChFP)</b> or Chartered Life Financial
    Practitioner <b>(ChLP)</b> designation and/or the Financial Planning Association (FPA) with <b>Certified Financial Planner CFP</b> designation.</p>

<p>Please go to your Financial Practice Dashboard to approve their registration and allow system access. Please ensure that your financial adviser
    meets the above requirements prior to granting system approval.</p>

<p>Once approved your financial adviser will have preliminary access to the Investor DNA system, invite clients to complete the
    investor DNA questionnaire and view their Investor DNA profile.
</p>

<p>All approved financial advisers are invited to attend an Investor DNA induction program within 6 months from date of approval.
    Attendance is required to maintain accreditation status to use the system. Once approved, your financial adviser will be sent
    a confirmation email that contains a link to register for our Investor DNA induction program. The investor DNA induction
    program is a 2-hour program delivered online.
</p>

<p>If you have any questions please don't hesitate to contact us at any time.</p>

<p>Kind Regards,<br/>
    <b>Your Investor DNA Team</b></p>

<p style="padding-bottom: 0px"><img src="http://128.199.88.244/images/adminLogo.png" alt="Investor DNA" width="150px"></p>
<p><a href="http://www.investordna.com.au">www.investordna.com.au</a><br/>
    p: 61 3 12345678<br/>
    e: info@investordna.com.au</p>


<span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #666;">
TKH Group International PTY LTD (ACN 613731445) as trustee for the TKH Group Trust (ABN 13 186 714 215) is the owner of
    Investor DNA and all materials, including Investor DNA logo, brand, Investor profiles, websites, tools, processes
    and/or systems. The name ‘Investor’ DNA is protected under trademark 01898732 and is registered ® with IP Australia.
    Please visit our website at <a href="http://www.investordna.com.au">www.investordna.com.au</a> to view our full terms and conditions.

<br/><br/></span>

</body>
</html>