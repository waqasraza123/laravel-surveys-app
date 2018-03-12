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

<p>Welcome aboard!</p>

<p>Your firm’s Investor DNA Administrator {{ $firm->name }} will now be notified of your registration and your membership is pending approval.
</p>

<p>Investor DNA is an exciting client profiling tool based on leading Neuroscience and Psychology and is designed to help you unlock your client’s unique investment style, appetite for risk, preferred asset classes and communication style. Importantly, you will learn about your client’s trust enables; those essential factors that build the level of trust between you and your client.
</p>

<p>Once approved you will be granted full access to the power of the Investor DNA system.</p>

<p>To use the Investor DNA system you require a current approved designation from either the AFA or the FPA.
    Approved designations for using the Investor DNA system include the ‘Fellow Chartered Financial Practitioner delegation’
    <b>(FChFP) <u>or</u></b> Chartered Life Financial Practitioner <b>(ChLP)</b> designation issued by the AFA, or alternatively,
    Certified Financial Planner <b>(CFP)</b> designation issued by Financial Planning Association of Australia. (FPA)
</p>

<p><b><u>Induction Program</u></b></p>

<p>Once your registration is approved we will invite you to attend our Investor DNA induction program. This will show you how
    to use Investor DNA to provide a tailored financial solution and to build stronger client relationships.
</p>

<p>The induction program is delivered online at a time suitable for you. Your participation in the induction program
    will help you understand the features and client benefits of Investor DNA and is required within 6 months from date of initial registration to maintain your system accreditation status.
</p>


<p>Please email us on <a href="mailto:info@investordna.com.au">info@investordna.com.au</a> to arrange your induction program.
    If you have any questions please don't
    hesitate to contact us.
</p>

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