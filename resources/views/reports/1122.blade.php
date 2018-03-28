@extends('layouts.reports')

@section('content')


<!-- Page 1 -->
<div class="page">
    <table class="one">
        <tr>
            <td>
                @include('reports.partials.intro')
                <h3 class="page1">
                    1112<br/>
                    Triple Dominant Profile<br/>
                    The Analyst - Implementer - Humanitarian
                </h3>
            </td>
        </tr>
    </table>
</div>



<!-- Section Page 1 -->
<div class="page">

    @include('reports.partials.header')

    <table class="section-internal">
        <tr>
            <td valign="middle" style="text-align: center;">
                <img src="{{ base_path('public/images/reports/section1.png') }}" alt="">
            </td>
        </tr>
    </table>

    <h2 class="code">Profile: 1112</h2>
    @include('reports.partials.footer')

</div>



<!-- Page 2 -->
<div class="page two">

    @include('reports.partials.header')

    @include('reports.partials.page2')

    @include('reports.partials.footer')

</div>



<!-- Page 3 -->
<div class="page">

    @include('reports.partials.header')

    <div class="page3-title">
        <h4>Investor DNA - STYLE CHART – Profile 1112</h4>
        <p style="text-align: center">The Analyst Implementer Humanitarian<br/>
        Quadrant Scores:  {{ $data["individual_score"] }}</p>

    </div>

    <table class="internal" style="height: 1200px">
    <tr>
        <td>
            <img src="{{ base_path('public/images/reports/page3.png') }}" width="100%" alt="" style="margin-bottom: 20px">
        </td>
    </tr>
    <tr>
        <td style="padding: 10px;" class="page3">
            <p>Your Investor DNA profile measures how you prefer to process investment information <span>(Intellectual vs. Instinctive)</span>,
                how you prefer to make your investment decisions <span>(Analytical vs. Beliefs)</span>, How you prefer to plan, organise
                and manage your investments <span>(Structured vs. Flexible)</span>, and your preference for new, novel or traditional investments.
                <span>(Creative vs. Practical)</span> Your profile also identifies your appetite for risk, preferred asset classes, propensity
                for unconscious investment bias and Adviser behaviours that build or reduce trust.  Investor DNA identifies your
                primary and secondary investment styles: Analyst, Implementer, Humanitarian or Entrepreneur. An individual can
                be dominant in one or more of these four styles, and all of us possess all four styles to varying degrees, with
                your strongest score representing your ‘home base’ or default position.  There is no single best style or combination
                of styles, as each has its own specific advantages & disadvantages. Successful investing requires a balance between
                your rational and emotional mind and the challenge is to develop your non-dominant investment styles to enable better
                investment decisions.</p>
        </td>
    </tr>
    </table>

    @include('reports.partials.footer')

</div>


<!-- Page 4 -->
<div class="page">

    @include('reports.partials.header')

    <table class="page4-internal">
    <tr>
        <td colspan="3" class="page4">
            <h4>Investor DNA – Personal Profile – Style Dashboard</h4>
        </td>
    </tr>
    <tr>
        <td>Name:</td>
        <td>{{ $data["first_name"] }} {{ $data["last_name"] }}</td><!--TODO (client name)-->
        <td rowspan="5" style="vertical-align: bottom; text-align: right;">
            <img src="{{ base_path('public/images/reports/logow.jpg') }}" width="100px" alt="">
        </td>
    </tr>
    <tr>
        <td>Adviser:</td>
        <td>{{ $data["advisor_name"] }}</td><!--TODO (adviser name)-->
    </tr>
    <tr>
        <td>Advisory:</td>
        <td>{{ $data["firm_name"] }}</td><!--TODO (advisory name)-->
    </tr>
    <tr>
        <td>Code</td>
        <td>Triple Dominant Profile - 1112</td>
    </tr>
    <tr>
        <td>Investment style:</td>
        <td>Analyst - Implementer - Humanitarian </td>
    </tr>

    <table class="page4-internal-second">
    <tr>
        <td width="50%">
            <table class="inside" cellspacing="0" style="width: 99%; float: left; text-align: left">
                <tr>
                    <th style="width: 80%">
                        General Characteristics
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Factual</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Interpersonal</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Social</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Conceptual</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Creative</td>
                    <td class="sha"></td>
                </tr>
            </table>
        </td>
        <td>
            <table class="inside" cellspacing="0" style="width: 99%; float: right; text-align: left">
                <tr>
                    <th style="width: 80%">
                        Decision-Making
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Analytical based on facts & figures</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Completes rigorous due diligence</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Follows a step-by-step process </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Detailed and meticulous</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Based on personal values & beliefs </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Relies on their intuitive insight</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Thinks laterally & ‘outside the box’</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Challenges the ‘status quo’</td>
                    <td class="sha"></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td>
            <table class="inside" cellspacing="0" style="width: 99%; float: left; text-align: left">
                <tr>
                    <th style="width: 80%">
                        Investment Strengths
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Rational</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Rigorous</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Organised </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Detailed</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Intuitive</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Inclusive</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Integrator</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Innovator</td>
                    <td class="sha"></td>
                </tr>
            </table>
        </td>
        <td>
            <table class="inside" cellspacing="0" style="width: 99%; float: right; text-align: left">
                <tr>
                    <th style="width: 80%">
                        Investment Weaknesses
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>May fail to consider all available data</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May base decisions on limited analysis</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May overlook critical details or facts </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May be too disorganised or lack focus</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May be closed off to different opinions </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May lack genuine empathy for others</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May lose sight of the ‘bigger picture’</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>May not think ‘outside the square’</td>
                    <td class="sha">X</td>
                </tr>
            </table>
        </td>
    </tr>

    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td>
            <table class="inside" cellspacing="0" style="width: 99%; float: left; text-align: left">
                <tr>
                    <th style="width: 80%">
                        Appetite for Risk
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Very High</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>High</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Moderate to High </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Moderate</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Low to Moderate</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Low</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Very Low</td>
                    <td class="sha"></td>
                </tr>
            </table>
        </td>
        <td>
            <table class="inside" cellspacing="0" style="width: 99%; float: right; text-align: left">
                <tr>
                    <th style="width: 80%">
                        Suitable Asset Classes
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Derivatives – Options FX</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Equities – Australian</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Equities – International - Blue Chips </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Property Residential</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Property – Industrial, Commercial </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Fixed Interest – Bonds, Hybrids</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Cash, bank deposits, accounts, bullion</td>
                    <td class="sha">X</td>
                </tr>
            </table>
        </td>
    </tr>

    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td>
            <table class="inside" cellspacing="0" style="width: 99%; float: left; text-align: left">
                <tr>
                    <th style="width: 80%">
                        Preferred Communication Style
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Visual – Prefers pictures & diagrams</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Auditory – Prefers the spoken word</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Kinaesthetic – Interprets via feelings </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Prefers written documentation/reports</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Prefers a direct and factual approach </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Prefers a detailed approach</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Prefers an interpersonal style</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>Prefers a big picture holistic approach</td>
                    <td class="sha"></td>
                </tr>
            </table>
        </td>
        <td>
            <table class="inside" cellspacing="0" style="width: 99%; float: right; text-align: left">
                <tr>
                    <th style="width: 80%; background: red;">
                        Under Pressure...
                    </th>
                    <th style="background: red;">
                    </th>
                </tr>
                <tr>
                    <td>May suffer from ‘analysis paralysis’</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>May become overly stubborn</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May retreat into excessive details </td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>May be overly rigid and inflexible</td>
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>May become irrational or illogical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May be overly emotional or sensitive</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May become too vague or lost in ideas</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>May overlook critical details</td>
                    <td class="sha"></td>
                </tr>
            </table>
        </td>
    </tr>

    </table>

    @include('reports.partials.footer')

</div>


<!-- Page 5 -->
<div class="page">

    @include('reports.partials.header')

    <h4 class="page5">TRIPLE DOMINANT PROFILE:  THE ANALYST - IMPLEMETER - HUMANITARIAN</h4>


    <table class="page5-internal">
        <tr>
            <td width="50%">CODE: 1122 – (Key: 1 = Strong; 2 = Medium; 3 = Avoid)</td>
            <td style="text-align: right">Scores:  <span style="color: #897f4a">{{ $data["individual_score"] }}</span> </td>
        </tr>
        <tr>
            <td colspan="2">
                Primary Styles: Analyst, Implementer, Humanitarian     Secondary Style: Entrepreneur	Avoids: none
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Construct Scores: {{ $data["subCatScores"] }}
            </td>
        </tr>
    </table>

    <table class="page5-internal-second">
        <tr>
            <td colspan="2" style="vertical-align: middle">
                <p class="italic" style="margin-top: 30px">
                    <img src="{{ base_path('public/images/reports/p5.jpg') }}" alt="" width="180px"
                         style="float: left;
                                margin-right: 30px;
                                margin-bottom: 30px">
                    The ‘Analyst – Implementer – Humanitarian’ is a triple dominant profile (Blue, Yellow, Red) that has left-brain, neo
                    cortex and limbic dominant preferences, combined with right brain combined with right brain limbic dominant thinking
                    preferences. Key descriptors include factual, analytical, planned, sequential, orderly, interpersonal and intuitive
                    with people. This investor gathers facts and conducts detailed and rigorous analysis on possible investments, whilst
                    using their interpersonal and intuitive skills to build trust and influence others. This investor is analytical,
                    methodical, passionate, social, determined, values driven, highly pragmatic and results focused.
                    The Analyst – Implementer – Humanitarian applies a rigorous and detailed approach to make sound investment decisions.
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h4 style="padding-top: 0px; margin-top: 10px">1.	General characteristics of your investment style:</h4>


                <p>Overall, your investment style combines analysis, practicality with a personal approach. Other descriptors of your investment
                    style include factual, measured, detailed, controlled, intuitive, practical, intellectual, social and principled. You have
                    a preference for making your investment decisions based on the facts, figures and all available data to ensure you make well
                    informed and robust investment decisions. Given your factual and analytical approach, you remain confident and self-assured
                    in your decision-making, often buying & selling counter-cyclical to the prevailing market sentiment. You are highly intellectual
                    and ‘do not suffer fools gladly’. Your mind is agile and sharp, and you grasp both the technical and detailed aspects of an
                    investment quickly and comprehensively, and you may have shown a talent for numbers or mathematics from an early age.
                    If mathematical, you are likely to perform various calculations and permutations on potential investments, looking at the
                    ‘risk versus reward’ equation to guide your decisions.</p>

                <p>Your implementer preference means that you are methodical, determined, structured and detailed, preferring a ‘step-by-step’
                    approach to the investment process. Whilst you gather data and adopt a rigorous analytical approach, at the end of the day
                    you remain pragmatic and results focused. You prefer to follow a clearly defined process with a start and end point with
                    targets along the way you can tick off, providing you with a sense of progress and accomplishment. This enables you to
                    track your progress and provides you with the structure, control and sense of accomplishment that you need to get results.
                    Your attention to detail means that you are capable of understanding the fine print in documentation, taking the time to
                    think things through in a systematic manner. Your detailed approach ensures that all investment matters comply with all
                    relevant legislative and regulatory requirements and that all of the boxes are ticked.</p>

                <p>Whilst analytical and pragmatic, you are also highly social and interpersonal. You also have a friendly communicative style
                    and are intuitive with people, sensing how others are feeling at any point in time. This means you have genuine empathy for
                    others and feel things deeply. You display a high level of ‘emotional intelligence’, being aware of your own emotional state
                    and that of others. You are passionate and favour investments that are aligned with your strongly held values and beliefs.
                    Consequently, you may like ‘ethical investing’ (socially responsible investments) that seeks positive environmental and social
                    outcomes in addition to financial returns. This can include investments in alternative energy, (solar, geothermal, hydro, wind)
                    companies that respect human rights, organic food, education and science & technology. For you, it is important that your
                    investments have genuine meaning and as sense of purpose in addition to producing financial returns and growth.</p>
            </td>
        </tr>
    </table>

    @include('reports.partials.footer')

</div>



<!-- Page 6 -->
<div class="page">

    @include('reports.partials.header')

    <table class="internal">
    <tr>
        <td>

            <p>Given your need for facts and analysis, be mindful not to ‘cherry pick’ your data as your mind will easily see data that supports
            your views whilst subconsciously screening out data that runs to the contrary. This is your ‘reticular activating system’ in action.
            The RAS is a small net of cells at the base of the brain whose sole purpose in life is to screen out the ‘crud’. Only things of
            relevance or value cut through. This can lead to ‘tunnel vision’, being blinded to data that runs to the contrary or loading up
            on particular investments whilst ignoring others. At its extreme this can lead to a lack of diversification across your investment
            portfolio. Spread your risk and reduce your financial exposure. Given your analytical preference, you may enjoy online trading.
            However, avoid trading excessively; this is proven to reduce the annual rate of return. Warren Buffet says, “Most investors
            cannot resist the temptation to continuously buy and sell”. Gender appears to play a role, with men on average trading 50%
                more frequently than women. (Barber & Odean)</p>

            <p>You prefer your adviser to be analytical, detailed, methodical and personal, with their communication clear, structured and
            logical. You prefer information to be presented in tables, spreadsheets or graphs, with key data presented in its numerical
            format so you can examine the detail. Given your analytical nature your financial adviser must be technically competent and
            have a sound track record. Equally, they must meet their commitments as promised to you and have good follow through which
            are both essential to holding your trust. Trust is very important and your financial adviser needs to take the time to
            understand your ‘hot buttons’; your personal philosophy and values in addition to your financial goals. Overall, your
            investment style is analytical, pragmatic and intuitive, resulting in sound investment decisions that are essential
                for successful long-term wealth creation.</p>

            <table style="margin-top: 50px">
                <tr>
                    <td width="200px"><img src="{{ base_path('public/images/reports/p5-1.jpg') }}" alt="" width="180px"></td>
                    <td valign="middle"><h4 class="key">Key Investment Style Strengths - Profile 1112:</h4></td>
                </tr>
            </table>

            <div class="key-investment">

                <p class="primary">Key Investment Style Strengths/Descriptors:</p>
                <p>
                    <span>1.</span>	Your investment decisions are based on facts, analysis, logic and your intuition.<br />
                    <span>2.</span>	You are highly intellectual and have an inquisitive and logical mind.<br />
                    <span>3.</span>	You are more conservative than speculative in approach.<br />
                    <span>4.</span>	You prefer information presented in a structured, organised, concrete & detailed manner.<br />
                    <span>5.</span>	You adopt a systematic ‘step-by-step’ approach to your investment activities.<br />
                    <span>6.</span>	You have an eye for detail, studying the ‘fine print’ in investment documentation.<br />
                    <span>7.</span>	You have a strong safekeeping approach, preferring reliable & consistent returns.<br />
                    <span>8.</span>	Your Investment decisions are based upon your strong personal values and principles.<br />
                    <span>9.</span>	Your relationships are based on trust, loyalty, integrity and transparency.<br />
                    <span>10.</span> You are highly expressive, and have good interpersonal and communication skills.<br />
                </p>

            </div>


        </td>
    </tr>
    </table>

    @include('reports.partials.footer')

</div>


<!-- Page 6 -->
<div class="page">

    @include('reports.partials.header')

    <table class="internal" style="margin-bottom: 30px">

        <tr>
            <td>
                <h4>2. Investor Style Vulnerabilities - Profile 1112:</h4>
                <table style="margin-bottom: 30px;">
                    <tr>
                        <td width="200px"><img src="{{ base_path('public/images/reports/p5-1.jpg') }}" alt="" width="180px"></td>
                        <td>
                            <p>All investment decisions are affected by emotion. Whilst you are passionate, your analytical and pragmatic
                                approach holds your emotions in check and reduces the likelihood of making decisions on impulse, including
                                reactive buy/sell decisions. Investors are most at risk of making poor investment choices when feeling
                                euphoric from recent successes, or over reacting to sudden market fluctuations or market sentiment.</p>
                        </td>
                    </tr>
                </table>


                <div class="key-investment">

                    <p class="primary">Key Investment Style Strengths/Descriptors:</p>
                    <p>
                        <span>1.</span>	May lack an over arching investment strategy to guide your investment decisions. <br />
                        <span>2.</span>	May become overly bureaucratic or concerned with process or detail.<br />
                        <span>3.</span>	May subconsciously ignore or not see data that is inconsistent with your beliefs.<br />
                        <span>4.</span>	May form attachments to ‘pet’ investments based on your values, clouding your judgment.<br />
                        <span>5.</span>	May lose sight of the ‘bigger picture’ or become lost in the details.<br />
                    </p>

                </div>

                <h4>The Investor Psychology Cycle – <em>‘The roller coaster of investor emotion’:</em></h4>

                <p>The optimal point in time to take advantage of financial opportunity is at the bottom of the emotional
                    curve, running counter cyclical to the market. When the market is euphoric and buying, shrewd investors
                    are selling, and vise versa. As Warren Buffett wisely says, “attempt to be fearful when others are greedy
                    and to be greedy only when others are fearful”.
                </p>

                <img src="{{ base_path('public/images/reports/p6.jpg') }}" alt="" width="100%">

            </td>
        </tr>

    </table>

    @include('reports.partials.footer')


</div>



<!-- Section Page 2 -->
<div class="page">

    @include('reports.partials.header')

    <table class="section-internal">
        <tr>
            <td valign="middle" style="text-align: center;">
                <img src="{{ base_path('public/images/reports/section2.png') }}" alt="">
            </td>
        </tr>
    </table>

    <h2 class="code">Profile: 1112</h2>
    @include('reports.partials.footer')

</div>



<!-- Page 7 -->
<div class="page">

    @include('reports.partials.header')

    <table class="table" style="margin-bottom: 0px">
    <tr>
        <td>
            <h4>3. Unconscious Investment Bias - Susceptibility Analysis - 1112 Profile:</h4>
            <p>Investors are prone to unconscious bias that dramatically impacts their decision-making.
                Such biases are unconscious, habitual and automatic. Being aware of your own emotional biases enables
                you to make more rational and objective investment decisions. The chart below outlines your level of susceptibility:
            </p>
        </td>
    </tr>
    </table>
    <table class="table" style="margin-bottom: 20px">
    <tr>
        <td>
            <table class="bias" cellspacing="0" style="margin-bottom: 0px">
                <tr>
                    <th class="first" width="250px">BIAS</th>
                    <th>STATUS</th>
                    <th>DEFINITION / IMPACT</th>
                    <th class="last">COUNTER ACTION</th>
                </tr>
                <tr>
                    <td style="border-top: 0px solid #fff;"><h4>1. Confirmation Bias:</h4></td>
                    <td class="img" style="border-top: 0px solid #fff;"><img src="{{ base_path('public/images/reports/red.png') }}" alt="" width="100%" height="60px"></td>
                    <td style="border-top: 0px solid #fff;">May unconsciously cherry pick data that is consistent with a pre-conceived point of view whilst distorting/rejecting data that runs contrary.</td>
                    <td class="last" style="border-top: 0px solid #fff;">Suspend initial judgment. Remain objective and open to different data.    </td>
                </tr>
                <tr>
                    <td><h4>2. Optimism Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Is overly optimistic, over estimating the potential gains whilst underestimating risks. The higher the perceived potential gains the stronger the bias.</td>
                    <td class="last">Take time to conduct thorough due diligence based on facts and data. </td>
                </tr>
                <tr>
                    <td><h4>3. Loss Aversion: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Fear of making a loss. May fail to take corrective action, holding onto negative positions for too long and failing to ‘cut their losses’ and sell out.</td>
                    <td class="last">Be prepared to exit from poor performing assets & stocks. Remain rational.  </td>
                </tr>
                <tr>
                    <td><h4>4. Success Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/caution.png') }}" alt=""></td>
                    <td>Assumes past success predicts future success. May see future as an extension of the past, only relying on historical data & ignoring other factors. </td>
                    <td class="last">Remain open to exploring investments that lack historical data or success.</td>
                </tr>
                <tr>
                    <td><h4>5. Self-Serving Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Believes those things that are in their best interests to believe. May believe falling stocks will rebound or successful stocks will continue to rise.</td>
                    <td class="last">Remain objective & base all decisions on available data. Look at pros & cons.    </td>
                </tr>
                <tr>
                    <td><h4>6. Analysis Bias:</h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/red.png') }}" alt=""></td>
                    <td>Collects & processes excessive amounts of data.  May over analyze the data leading to ‘analysis paralysis’, procrastination and delayed decisions.</td>
                    <td class="last">Collect & analyse only enough data to allow you to make timely decisions. </td>
                </tr>
                <tr>
                    <td><h4>7. Over Confidence: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/red.png') }}" alt=""></td>
                    <td>Over estimates one’s own investment abilities leading to an under-estimation of risks. Successes are attributed to self whilst losses to other external factors.  </td>
                    <td class="last">Listen to the advice of others whilst owning your successes & your failures. </td>
                </tr>
                <tr>
                    <td><h4>8. Herding Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Follows others on mass (the ‘herd’) irrespective of contrary advice or data. May make emotional or irrational decisions when markets are volatile.</td>
                    <td class="last">Remain objective. Sell when others are buying & vise versa to run counter.  </td>
                </tr>
                <tr>
                    <td><h4>9. Bureaucratic Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/red.png') }}" alt=""></td>
                    <td>Places an over emphasis on rules, regulations, order or structure, in an attempt to maintain control. May lead to a lack of investment agility.  </td>
                    <td class="last">Remain open to changing investment strategies and remain open and flexible.</td>
                </tr>
                <tr>
                    <td><h4>10. Anecdotal Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Believes stories, anecdotes and gossip over facts & evidence. May believe family, friends or stock tips from strangers, e.g. cabbies, hair dressers etc.</td>
                    <td class="last">Listen to informed experts & avoid reacting to general opinions.</td>
                </tr>
                <tr>
                    <td><h4>11. Recency Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/caution.png') }}" alt=""></td>
                    <td>Makes decisions based on recent successes rather than historical trends. May be caught up in the euphoria of bull markets/panic of falling markets.</td>
                    <td class="last">Take a longer-term rational approach based on the facts and evidence.</td>
                </tr>
                <tr>
                    <td><h4>12. Predisposition Bias:</h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Forms an emotional attachment to investments classes, stocks, markets or industries, irrespective of data, leading to biased portfolio construction and/or reluctance to sell.</td>
                    <td class="last">Use rational decision making processes and avoid making decisions on sentiment.  </td>
                </tr>
            </table>
        </td>
        </tr>
    </table>

    <table class="biasl key" style="margin-bottom: 25px">
        <tr>
            <td>K</td>
            <td><img src="{{ base_path('public/images/reports/red.png') }}" alt=""> Red Alert! ! - You have a <u>high probability</u> of being susceptible to this form of bias. </td>
        </tr>
        <tr>
            <td>E</td>
            <td><img src="{{ base_path('public/images/reports/caution.png') }}" alt=""> Caution! -  You <u>may be susceptible</u> to this bias if you are not mindful to avoid it.</td>
        </tr>
        <tr>
            <td>Y</td>
            <td><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""> OK - You are <u>unlikely</u> to be susceptible to this particular bias based on your profile. </td>
        </tr>
    </table>


    @include('reports.partials.footer')

</div>




<!-- Page 8 -->
<div class="page">

    @include('reports.partials.header')

    <table class="internal">
        <tr>
            <td>
                <h4>4. Your Appetite for Investment Risk - 1112 Profile:</h4>
            </td>
        </tr>
        <tr>
            <td>

            @if($data["part7"] == "5")
                    <img src="{{ base_path('public/images/reports/highp.png') }}" width="100%" alt="">
                @elseif($data["part7"] == "4")
                    <img src="{{ base_path('public/images/reports/moderate_to_high.png') }}" width="100%" alt="">
                @elseif($data["part7"] == "3")
                    <img src="{{ base_path('public/images/reports/moderate.png') }}" width="100%" alt="">
                @elseif($data["part7"] == "2")
                    <img src="{{ base_path('public/images/reports/low_to_moderate.png') }}" width="100%" alt="">
                @elseif($data["part7"] == "1")
                    <img src="{{ base_path('public/images/reports/lowp.png') }}" width="100%" alt="">
                @endif
            </td>
        </tr>

    <tr>
        <td>


        @if($data["part7"] == "5")

            <p>Your investment ‘appetite for risk’ is the extent to which you feel comfortable accepting a level of risk associated with a particular asset class or sub class. It is part biology, your genetic ‘DNA’, and how this is shaped through experience, including
                messages from parents and significant others. Psychologists believe that messages are accepted as true by the brain with little filtering up until the age of seven. Repeated messages create deep neural pathways in your brain that are ingrained and unconscious,
                shaping your attitudes and beliefs. Thus, financial ‘programming’ is passed on from parent to child, generation to generation, significantly influencing your perception of ‘acceptable risk’ and your investment decisions. For example, a belief formed at an
                early age and reinforced over time that ‘debt is bad’ may cause an investor to avoid any form of debt to leverage returns, such as negative gearing, despite it being a legitimate wealth creation strategy.</p>

            <p>Self-awareness is key. It is vital to understand your own ‘financial programming’ and how it influences your investment choices in order to make better investment decisions. Your profile indicates that you are comfortable with all asset classes in the high investment
                risk category and below, as indicated in the ‘Asset Pyramid’ above. This means that are comfortable with both defensive and growth assets that could include FX currency trading (FOREX), options trading, Australian and International equities, blue chip stocks,
                collectables, residential, industrial and/or commercial real estate, listed property vehicles, fixed interest, government bonds, corporate bonds, mortgages and some hybrid securities. It also indicates that you are also comfortable to bank deposits, terms
                deposits, savings and cheque accounts, cash management trusts, bullion and cash equivalents.</p>


        @elseif($data["part7"] == "4")

            <p>Your investment ‘appetite for risk’ is the extent to which you feel comfortable accepting a level of risk associated with a particular asset class or sub class. It is part biology, your genetic ‘DNA’, and how this is shaped through experience, including messages
                from parents and significant others. Psychologists believe that messages are accepted as true by the brain with little filtering up until the age of seven. Repeated messages create deep neural pathways in your brain that are ingrained and unconscious, shaping
                your attitudes and beliefs. Thus, financial ‘programming’ is passed on from parent to child, generation to generation, significantly influencing your perception of ‘acceptable risk’ and your investment decisions. For example, a belief formed at an early age
                and reinforced over time that ‘debt is bad’ may cause an investor to avoid any form of debt to leverage returns, such as negative gearing, despite it being a legitimate wealth creation strategy.</p>

            <p>Self-awareness is key. It is vital to understand your own ‘financial programming’ and how it influences your investment choices in order to make better investment decisions. Your profile indicates that you are comfortable with all asset classes in the moderate to
                high investment risk category and below, as indicated in the ‘Asset Pyramid’ above. This means that are comfortable with both defensive and growth assets that could include Australian and International equities, blue chip stocks, collectables, residential, industrial
                and/or commercial real estate, listed property vehicles, fixed interest, government bonds, corporate bonds, mortgages and some hybrid securities. It also indicates that you are also comfortable to bank deposits, terms deposits, savings and cheque accounts, cash management
                trusts, bullion and/or cash equivalents.</p>


        @elseif($data["part7"] == "3")

            <p>Your investment ‘appetite for risk’ is the extent to which you feel comfortable accepting a level of risk associated with a particular asset class or sub class. It is part biology, your genetic ‘DNA’, and how this is shaped through experience, including messages from parents
                and significant others. Psychologists believe that messages are accepted as true by the brain with little filtering up until the age of seven. Repeated messages create deep neural pathways in your brain that are ingrained and unconscious, shaping your attitudes and beliefs.
                Thus, financial ‘programming’ is passed on from parent to child, generation to generation, significantly influencing your perception of ‘acceptable risk’ and your investment decisions. For example, a belief formed at an early age and reinforced over time that ‘debt is bad’
                may cause an investor to avoid any form of debt to leverage returns, such as negative gearing, despite it being a legitimate wealth creation strategy.</p>

            <p>Self-awareness is key. It is vital to understand your own ‘financial programming’ and how it influences your investment choices in order to make better investment decisions. Your profile indicates that you are comfortable with all asset classes in the moderate investment
                risk category and below, as indicated in the ‘Asset Pyramid’ above. This means that are most comfortable with both defensive and growth assets that could include blue chip stocks, residential, industrial and/or commercial real estate, listed property vehicles, fixed interest,
                government bonds, corporate bonds, mortgages and some hybrid securities. It also indicates that you are comfortable with bank deposits, terms deposits, savings and cheque accounts, cash management trusts, bullion and/or cash equivalents.</p>


        @elseif($data["part7"] == "2")

            <p>Your investment ‘appetite for risk’ is the extent to which you feel comfortable accepting a level of risk associated with a particular asset class or sub class. It is part biology, your genetic ‘DNA’, and how this is shaped through experience, including messages from parents and significant others. Psychologists believe
                that messages are accepted as true by the brain with little filtering up until the age of seven. Repeated messages create deep neural
                pathways in your brain that are ingrained and unconscious, shaping your attitudes and beliefs. Thus, financial ‘programming’ is passed on from parent to child, generation to generation, significantly influencing your perception of
                ‘acceptable risk’ and your investment decisions. For example, a belief formed at an early age and reinforced over time that ‘debt is bad’ may cause an investor to avoid any form of debt to leverage returns, such as negative gearing, despite it being a legitimate wealth creation strategy.</p>

            <p>Self-awareness is key. It is vital to understand your own ‘financial programming’ and how it influences your investment choices in order to make better investment decisions. Your profile indicates that you are comfortable with all asset classes in the low to moderate investment
                risk category and below, as indicated in the ‘Asset Pyramid’ above. This means that are most comfortable with defensive assets that produce a fixed rate of return, and could include government bonds, corporate bonds, mortgages and some hybrid securities, and also low risk options including bank deposits, terms deposits, savings and cheque accounts, cash management trusts, bullion and/or cash equivalents.</p>


        @elseif($data["part7"] == "1")

            <p>Your investment ‘appetite for risk’ is the extent to which you feel comfortable accepting a level of risk associated with a particular asset class or sub class. It is part biology, your genetic ‘DNA’, and how this is shaped through experience, including messages from parents and significant others. Psychologists
                believe that messages are accepted as true by the brain with little filtering up until the age of seven. Repeated messages create deep neural pathways in your brain that are ingrained and unconscious, shaping your attitudes and beliefs. Thus, financial ‘programming’ is passed on from parent to child, generation to
                generation, significantly influencing your perception of ‘acceptable risk’ and your investment decisions. For example, a belief formed at an early age and reinforced over time that ‘debt is bad’ may cause an investor to avoid any form of debt to leverage returns, such as negative gearing, despite it being a legitimate wealth creation strategy.</p>

            <p>Self-awareness is key. It is vital to understand your own ‘financial programming’ and how it influences your investment choices in order to make better investment decisions. Your profile indicates that you are comfortable with all asset classes in the low investment risk category, as indicated in the
                ‘Asset Pyramid’ above. This means that are most comfortable with defensive assets that could include bank deposits, terms deposits, savings and cheque accounts, cash management trusts, bullion and/or cash equivalents.</p>

        @endif

        </td>
    </tr>
    </table>

    @include('reports.partials.footer')

</div>


<!-- Page 9 -->
<div class="page">

    @include('reports.partials.header')

    <table class="internal">

        <tr>
            <td>
                <p class="primary">In summary, your approach to risk can be best characterised as follows:</p>
                <ul>
                    <li> Overall you adopt a sensible approach that balances risk versus reward.</li>
                    <li> You take a factual, analytical and planned approach that helps mitigate risk.</li>
                    <li> You may be numerical or mathematical, helping you calculate the risks involved.</li>
                    <li> You also align your decisions to your deeply held values and principles.</li>
                    <li> You ensure that all potential investments meet their compliance requirements.</li>

                </ul>


                <p class="primary">UNDER PRESSURE…</p>
                <ul>
                    <li> You may gather excessive facts, figures or over analyse the situation. </li>
                    <li> May be slow to make decisions due to your need for large amounts of data and analysis.</li>
                    <li> You may become too pedantic or caught up in bureaucratic ‘red tape’.</li>
                    <li> May become overly emotional or irrational in your reactions. </li>
                    <li> May become overly stubborn or righteous, not willing to consider alternative views.</li>

                </ul>


                <p class="primary" style="margin-top: 0px">Investment Strategy x Risk x Asset Class:</p>

                <img src="{{ base_path('public/images/reports/p8.jpg') }}" alt="" width="100%">

            </td>
        </tr>

    </table>

    @include('reports.partials.footer')


</div>


<!-- Page 10 -->
<div class="page">

    @include('reports.partials.header')

    <table class="page9-internal">

        <tr>
            <td>
                <h4>5. Investment Decision-Making Style - 1112 Profile:</h4>

                <p>Good decision-making requires both rigorous factual analysis of all available information and data combined with your personal
                    judgment and intuition. Intuition is often dismissed too quickly in the investment decision-making process yet is a valid
                    process when used in conjunction with rigorous factual analysis. Intuition is the process by which your thinking or
                    ‘conscious’ mind accesses key insights and learning that are held deep within your subconscious, based on your collective
                    experience, So don't be too quick to disregard your intuition, as it can complement rigorous analysis. Learn to trust your
                    ‘inner voice’ in addition to relying on facts and analysis.</p>

                <p>The following diagram indicates your natural or ‘innate’ approach to decision-making. (Blue-Yellow-Red) It suggests
                    that you make your decisions based on the facts, logic, level of perceived risk, and your personal values and intuition.
                    You also follow a rigorous process that reduces the likelihood of making impulsive investment decisions.
                    The stronger your quadrant score, the greater the level of influence on your decision-making style.
                    The optimal approach utilizes the best characteristics of all four Investor DNA styles. To improve your
                    investment decision-making, focus on strengthening your non-dominant quadrants (those in white below),
                    whilst avoiding the pitfalls associated with your emotional biases flagged in your susceptibility analysis.
                    (Section 3) And importantly, always ensure that you are comfortable with the risks associated with any
                    potential investment as outlined under your ‘Appetite for Risk’ section in your Investor DNA profile. (Section 4)</p>


                <h4 style="margin: 10px 0px; line-height: 20px">Investor DNA Decision-Making Model:</h4>
                <p class="primary" style="margin: 0px 0px 10px; line-height: 20px"><em>(i.e. You base your investment decision on…)</em></p>

                <img src="{{ base_path('public/images/reports/p9.jpg') }}" alt="" width="100%">


                <ul class="nine">
                    <li>You make your decisions based on facts, logic, risk, analysis and personal intuition.</li>
                    <li>Your decision-making style is objective, detailed, rational and controlled.</li>
                    <li>You are methodical and adopt a systematic a step-by-step approach.</li>
                    <li>You are naturally intuitive with people, helping you decide whom to turn to for advice.</li>
                </ul>

            </td>
        </tr>

    </table>

    @include('reports.partials.footer')


</div>


<!-- Page 11 -->
<div class="page">

    @include('reports.partials.header')

    <table class="page10-internal">

        <tr>
            <td>
                <h4>6.	The Analyst - Implementer  - Humanitarian - 1112 Profile</h4>
                        <h4 style="line-height: 100%; padding: 0px; margin: -20px 0px 20px 25px">Key Improvement Recommendations:</h4>

                <img src="{{ base_path('public/images/reports/p10.jpg') }}" alt="" width="100%">



                <div class="page10">

                    <p class="primary">Key recommendations for improved decision-making and investment success:</p>

                    <p>
                    <span>1.</span>	Leverage your diverse range of capabilities including analysis, intuition and pragmatism. <br />
                    <span>2.</span> Take time to develop an overarching investment strategy to help guide your decisions.<br />
                    <span>3.</span> Don’t over analyse a situation, collecting only enough data to make timely decisions.<br />
                    <span>4.</span> Avoid rejecting potential investments ‘out of hand’ based on your first initial impressions.<br />
                    <span>5.</span> Draw upon a diverse range of views and opinions in reaching your investment decisions.<br />
                    <span>6.</span> Avoid becoming overly bureaucratic or getting caught up in too much detail.<br />
                    <span>7.</span> Remain flexible and open to modifying your investment strategy if circumstances change.<br />
                    <span>8.</span> Consider investments in the field of ‘ethical investing’ that align with your values.<br />
                    <span>9.</span> Avoid making any investment decisions when feeling emotional or unsettled.<br />
                    <span>10.</span> Remain objective and don't react emotionally to short-term market fluctuations<br />

                </p>

                </div>

                <div class="page10-second">
                    <p class="primary">And the Key Recommendation is to…</p>
                    <p class="primary">Ensure that you have a clear investment strategy in place to guide your investment decisions and ensure that you step back and consider the bigger picture.</p>
                </div>

            </td>
        </tr>
    </table>

    @include('reports.partials.footer')

</div>



<!-- Section Page 3 -->
<div class="page">

    @include('reports.partials.header')

    <table class="section-internal">
        <tr>
            <td valign="middle" style="text-align: center;">
                <img src="{{ base_path('public/images/reports/section3.png') }}" alt="">
            </td>
        </tr>
    </table>

    <h2 class="code">Profile: 1112</h2>
    @include('reports.partials.footer')

</div>



<!-- Page 12 -->
<div class="page">

    @include('reports.partials.header')

                <table class="page12-internal" style="margin-bottom: 0px">
        <tr>
            <td>
                <h4>7. The Trusted Adviser - Trust Enablers - 1112 Profile:</h4>
                <p>
                    Based on research, trust enablers directly influence the level of trust between client and adviser and are at the heart of
                    establishing a trusted client - adviser relationship. Whilst all are important, the following chart identifies those that
                    are most important for you in developing and maintaining trust with your financial adviser:
                </p>
            </td>
        </tr>
    </table>

                <table class="trust" cellspacing="0" style="margin-bottom: 20px">
                    <tr>
                        <th class="first" width="280px">TRUST ENABLERS</th>
                        <th>STATUS</th>
                        <th>DEFINITION</th>
                        <th class="last">ADVISER  NEEDS TO…</th>
                    </tr>

                    <tr>
                        <td><h4>1. Adviser Results: </h4></td>
                        <td class="img">
                            @if($data["part7"][1] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][1] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on a Financial Adviser‘s track record in delivering sustained growth and income and has demonstrated this ability over the long haul.  </td>
                        <td class="last">Provide extensive data to demonstrate  their successful track record over time.    </td>
                    </tr>

                    <tr>
                        <td><h4>2. Technical Capability:  </h4></td>
                        <td class="img">
                            @if($data["part7"][2] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][2] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on a Financial Adviser’s capability in regard to product knowledge, investment, cash flow analysis, taxation, retirement & estate planning. </td>
                        <td class="last">Highlight their technical capability and experience in providing financial advice. </td>
                    </tr>

                    <tr>
                        <td><h4>3. Industry/Asset Track Record: </h4></td>
                        <td class="img">
                            @if($data["part7"][3] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][3] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on the specific track record of a particular industry, asset class or sub class. Trust is likely to be based on results attained. </td>
                        <td class="last">Provide extensive performance data by industry type/asset class.  </td>
                    </tr>

                    <tr>
                        <td><h4>4. Client Focus: </h4></td>
                        <td class="img">
                            @if($data["part7"][4] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][4] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on a Financial Adviser’s level of client focus and their ability to listen, identify & respond to a client’s real needs, concerns, goals, values and beliefs. </td>
                        <td class="last">Put your needs and interests ahead of their own needs and interests at all times. </td>
                    </tr>

                    <tr>
                        <td><h4>5. Connecting with People:  </h4></td>
                        <td class="img">
                            @if($data["part7"][5] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][5] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on transparent two-way communication. Is able to explain complex financial concepts in simple terms whilst displaying a high level of client empathy.</td>
                        <td class="last">Simplify complex financial concepts where possible, & listen with empathyn.  </td>
                    </tr>
                    <tr>
                        <td><h4>6. Professionalism and Integrity:</h4></td>
                        <td class="img">
                            @if($data["part7"][6] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][6] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on the professional and ethical conduct of the Financial Adviser, including honesty, integrity, authenticity, transparency and client commitment. </td>
                        <td class="last">Operate at all times with integrity, authenticity, honesty and transparency.</td>
                    </tr>

                    <tr>
                        <td><h4>7. Analytical and Rational:  </h4></td>
                        <td class="img">
                            @if($data["part7"][7] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][7] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on the extent to which the Financial Adviser includes and analyses all available data and information, taking a rational and logical approach. </td>
                        <td class="last">Explain the data, rational & logic underpinning all advice recommendations. </td>
                    </tr>

                    <tr>
                        <td><h4>8. Regulations and Compliance:  </h4></td>
                        <td class="img">
                            @if($data["part7"][8] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][8] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on the Financial Adviser’s understanding and complying with all legislative & regulatory requirements throughout the Financial Advice process. </td>
                        <td class="last">Explain how their practice satisfies all regulatory compliance requirements. </td>
                    </tr>

                    <tr>
                        <td><h4>9. Creativity and innovation:  </h4></td>
                        <td class="img">
                            @if($data["part7"][9] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][9] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on the Adviser’s ability to seek out and identify creative and new investment opportunities that are bold, novel or ‘out of the box’. </td>
                        <td class="last">Be open to exploring unique or ‘out of the box’  investment opportunities. </td>
                    </tr>

                    <tr>
                        <td><h4>10. Emotional control: </h4></td>
                        <td class="img">
                            @if($data["part7"][10] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][10] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on a Financial Advisers’ level of emotional maturity and control under pressure, especially at times of market volatility and uncertainty.</td>
                        <td class="last">Remain calm, logical and rational at all times in their approach. </td>
                    </tr>

                    <tr>
                        <td><h4>11. Institutional Trust </h4></td>
                        <td class="img">
                            @if($data["part7"][11] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][11] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on the extent to which Financial Adviser recommends institutions that are ethical, trusted and held in high regard by the general public.</td>
                        <td class="last">Ensure all recommended institutions are well regarded and operate with integrity.</td>
                    </tr>

                    <tr>
                        <td><h4>12. Alignment on Values </h4></td>
                        <td class="img">
                            @if($data["part7"][12] == "4")
                                <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                            @elseif($data["part7"][12] == "3")
                                <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                            @else
                                <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                            @endif
                        </td>
                        <td>Trust is based on the degree of alignment between a Financial Adviser’s values and philosophy and those of their client, such as family, freedom, security etc.</td>
                        <td class="last">Share their  values and philosophy to build a strong professional relationship.</td>
                    </tr>

                </table>

                <table class="trustl key" style="margin-bottom: 10px">
                    <tr>
                        <td>K</td>
                        <td><img src="{{ base_path('public/images/reports/high.png') }}" width="32px" alt=""> HIGH - This is very important for you and has a high impact on developing trust. </td>
                    </tr>
                    <tr>
                        <td>E</td>
                        <td><img src="{{ base_path('public/images/reports/medium.png') }}" width="32px"  alt=""> MEDIUM - This is somewhat important for you and has a medium impact on developing trust.</td>
                    </tr>
                    <tr>
                        <td>Y</td>
                        <td><img src="{{ base_path('public/images/reports/low.png') }}" width="32px"  alt=""> LESS IMPORTANT - This is less important for you when compared to other factors for developing trust. </td>
                    </tr>
                </table>

    @include('reports.partials.footer')

</div>


<!-- Page 12 -->
<div class="page">
@include('reports.partials.header')

    <h4 style="text-align: center;">8. Investor DNA – Communication Style Chart - 1112</h4>

    <p style="text-align: center; font-sze: 20px"><em>Based on your Investor DNA style, your communication preferences<br/> are indicated in the coloured quadrants below:</em></p>

    <img src="{{ base_path('public/images/reports/p12.jpg') }}" alt="" width="100%" style="margin-bottom: 80px">

    @include('reports.partials.footer')

</div>

<!-- Page 13 -->
<div class="page">
    @include('reports.partials.header')

    <table style="margin: 30px 0px 0px">
        <tr>
            <td width="200px"><img src="{{ base_path('public/images/reports/p5-1.jpg') }}" alt="" width="180px"></td>
            <td>
                <h4 style="padding-top:40px">9.	The Analyst - Implementer - Humanitarian</h4>
                <h4 style="line-height: 100%; padding: 0px; margin: -20px 0px 20px 25px">1112 Profile - Communication Style:</h4>

            </td>
        </tr>

    </table>

    <p>By understanding your Investor DNA style, your adviser will be better equipped to ‘tune into your wavelength’ and be a much more effective communicator.
    </p>

    <p>Analysts prefer to communicate through the written word favoring reports that show facts, figures, data and the numbers <b><em>(i.e. the WHAT?);</em></b>
        Implementers prefer to communicate in clear and concise documentation presented in a structured, sequential and orderly manner
        <b><em>(i.e. the HOW?);</em></b> Humanitarians have a preference for personal connection and kinesthetic (feelings) communication,
        ‘sensing’ things through body language and voice tone, often ‘reading between the lines’ <b><em>(i.e. the WHO?);</em></b> and Entrepreneurs
        prefer to communicate visually through pictures, diagrams and graphs that illuminate patterns in data, helping them
        ‘connect the dots’ and see the ‘big picture’. <b><em>(i.e. the WHY?)</em></b>
    </p>

    <p class="primary" style="font-size: 20px">Communication Sequence Map:</p>

    <p>A communication sequence map represents your preferred method and order of communication – your preferred ‘communication sequence’ based on the relative strength of each of your four quadrant scores. Please review your scores for each of your four Investor DNA quadrants and rank them from highest (1) though to lowest (4). Transpose these rankings into the four boxes below. Next, draw an arrow connecting the 4 colored boxes in the order of their preference scores, from 1 to 2, to 3, to 4. This represents the ideal sequence of communication for maximum impact, showing your starting point (1) and the recommended order of communication.
    </p>


    <img src="{{ base_path('public/images/reports/p13.jpg') }}" alt="" width="100%" style="margin-bottom: 30px">

    @include('reports.partials.footer')

</div>


<!-- Page 14 -->
<div class="page">
    @include('reports.partials.header')

    <h4>10.	The Analyst – Implementer – Humanitarian - 1112 Profile</h4>
    <h4 style="line-height: 100%; padding: 0px; margin: -20px 0px 20px 35px">Adviser Communication Tips:</h4>

    <img src="{{ base_path('public/images/reports/p14.jpg') }}" alt="" width="100%" style="margin-bottom: 30px">

    <div class="page14">
        <p class="primary">An Adviser working with your investment style needs to:</p>

        <p>
            <span>1.</span>	Provide you with both the ‘big picture’ and also the details of potential investments.<br/>
            <span>2.</span>	Provide all historical facts, figures and data in support of their recommendations.<br/>
            <span>3.</span>	Present information in financial graphs, detailed reports and numerical tables.<br/>
            <span>4.</span>	Be analytical, logical, detailed and personal in their approach.<br/>
            <span>5.</span>	Provide a structured, sequential and step-by-step approach to the investment process.<br/>
            <span>6.</span>	Confirm that all regulatory compliance requirements are satisfied and explained to you.<br/>
            <span>7.</span>	Use language that is practical, precise, direct and in a ‘no nonsense’ style.<br/>
            <span>8.</span>	Explain the community and social benefit of all investment recommendations.<br/>
            <span>9.</span>	Focus on developing a strong personal relationship based on a high level of trust.<br/>
            <span>10.</span> Explore the new end emerging investment field of “ethical investing”.<br/>
        </p>

        <p class="primary">And during a MARKET DOWNTURN your financial adviser needs to…</p>

        <ul class="fourteen">
            <li>Present a high level of factual information and data to keep abreast of the current situation.</li>
            <li>Provide technical models or frameworks to provide insight explaining the market volatility.</li>
            <li>Re-affirm/reassess the overall investment strategy to ensure your plan is still appropriate.</li>
            <li>Increase the level of communication and meet on a more regular basis.</li>

        </ul>

    </div>

    @include('reports.partials.footer')
</div>


<!-- Page 15 -->
<div class="page">

    @include('reports.partials.header')

    <table class="internal">
        <tr>
            <td>
                <div class="pbox4">
                    <h3>DISCLAIMER AND COPYRIGHT</h3>
                    <p>TKH Group Trust (ABN 13 186 714 215) is the author and owner of Investor DNA system, its brand,
                        logo, investor profiles, websites, tools, materials, and associated processes and systems.</p>



                    <p>All profiles generated by the Investor DNA system including all recommendations, are of a general nature
                    only and are limited to an individual investor’s investment psychology. TKH Group International PTY LTD
                    (ACN 613731445) as trustee for the TKH Group Trust does not hold a financial license and our advice is
                    limited to psychology only. We do NOT provide any financial advice whatsoever and does not make any
                    investment product recommendations, claims or guarantees regarding the financial performance of any
                    investment product selected individually or through a third party and/or adviser that has been accredited
                    in the Investor DNA system.</p>

                    <p>TKH Group International PTY LTD and its directors, shareholders, employees, suppliers, licensees and
                    associates will not be held liable for any losses or damages, investment or otherwise, whatsoever arising
                    from the use of the Investor DNA system. By proceeding with and using the Investor DNA system you and
                    all affiliated companies, directly or indirectly, agree to unconditionally not to pursue legal action
                    against TKH Group International Pty Ltd, TKH Group Trust and their directors, shareholders, employees,
                    suppliers, licensees and associates for claimed losses.</p>

                    <p>The Investor DNA logo and name is protected under trademark 01808732 issued under Australian law by
                    IP Australia. Investor DNA, its logo, brand, profiles, websites, tools, materials, processes and
                    systems are owned by TKH Group Trust and are subject to copyright, and may not be used in any manner
                    other than its intended purpose, nor outside the conditions as specified in the Investor DNA
                    licensing agreement.  Any and all breaches will be prosecuted to the full extent of the law.
                    Whilst we are not vengeful we will protect our rights.</p>


            </td>
        </tr>
    </table>

    @include('reports.partials.footer')
</div>


@endsection
