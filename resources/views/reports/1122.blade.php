@extends('layouts.reports')

@section('content')
<!-- Page 1 -->
<div class="page">
    <table class="one">
        <tr>
            <td><img src="{{ asset('images/reports/intro.png') }}" width="100%">
                <h1>Confidential Report – {{ $data["first_name"] }} {{ $data["last_name"] }}</h1><!--TODO (client name)-->
                <h3 class="page1">
                    1122<br/>
                    Double Dominant Profile<br/>
                    The Analyst - Implementer
                </h3>
            </td>
        </tr>
    </table>


<!-- Section Page 1 -->

    <table class="internal">
        <tr>
            <td><img src="{{ base_path('public/images/reports/section1.png') }}" alt="" width="100%"></td>
        </tr>
    </table>
</div>

<!-- Page 2 -->
<div class="page">
<table class="internal">
    <tr>
        <td>
            <h4>Investor DNA: Your Thinking, Your Wealth</h4>

            <p>We all have a different ways in which we see and interpret the world. Whilst some prefer to look at the ‘big picture’, others prefer a more detailed approach. Whilst some prefer concepts and ideas, others prefer facts, figures and objective analysis. These preferences are neither right nor wrong, but simply different, yet they hold significant implications for your investment decision-making and subsequent long-term wealth creation. The field of Investment Psychology is the science of understanding the relationship between your thinking and your investment decision-making and subsequent wealth creation.</p>

            <p>These thinking preferences are unconscious, habitual, automatic, and therefore make you prone to ‘unconscious bias’: a leaning towards buying or selling certain investments without ‘rhyme nor reason’. At the heart of making good investment decisions is an inner struggle between your ‘rational’ logical mind and your ‘emotional’ intuitive mind. Your Investor DNA profile helps you be consciously aware of your own natural inner biases, investment predispositions and thinking preferences, helping you make better investment decisions over time.</p>

            <p>Your Investor DNA profile provides you with self-insight into your own Investment Psychology. This includes your decision-making style, risk appetite and preferred asset classes, innate biases and preferred communication style.  It also identifies key factors that influence the level of trust between you and your adviser. Investor DNA helps your adviser provide a tailored investment solution, whilst helping you make better investment decisions over time. It is worth considering that your financial net worth today is the sum of all of your financial decisions made up until this point in time. It makes intuitive sense then, that by improving your investment decision-making you will increase your net wealth over time, safeguarding your lifestyle today and in the future.</p>

            <img src="{{ base_path('public/images/reports/p1.jpg') }}" width="100%" alt="">
        </td>
    </tr>
</table>
</div>
<!-- Page 3 -->
<div class="page">
<table class="internal">
    <tr>
        <td>
            <img src="{{ base_path('public/images/reports/chart.png') }}" width="100%" alt="">
        </td>
    </tr>
    <tr>
        <td style="padding: 5px" class="page2">
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
</div>
<!-- Page 4 -->
<div class="page">
<table class="internal" style="border: 7px solid #666666; padding: 10px; margin-bottom: 30px">
    <tr>
        <td colspan="3" class="page4">
            <h3>Investor DNA – Personal Profile – Investor Style Dashboard</h3>
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
        <td>1122</td>
    </tr>
    <tr>
        <td>Investment style:</td>
        <td>The Analyst - Implementer</td>
    </tr>
    <tr>
        <td>Quadrant scores:</td>
        <td>{{ $data["individual_score"] }}</td>
    </tr>
    <tr>
        <td>Sub Categories scores:</td>
        <td>{{ $data["subCatScores"] }}</td>
    </tr>
</table>

<table class="internal">
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
                    <td>Interpersonal </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Social</td>
                    <td class="sha"></td>
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
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Relies on their intuitive insight</td>
                    <td class="sha"></td>
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
                    <td>Intuitive </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Inclusive</td>
                    <td class="sha"></td>
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
                    <td class="sha">X</td>
                </tr>
                <tr>
                    <td>May lack genuine empathy for others</td>
                    <td class="sha">X</td>
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
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Low to Moderate</td>
                    <td class="sha">X</td>
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
                    <td class="sha"></td>
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
                    <td class="sha"></td>
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
                    <td class="sha"></td>
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
                    <td class="sha">X</td>
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
</div>
<!-- Page 5 -->
<div class="page">
<table class="internal">
    <tr>
        <td colspan="2" class="page5">
            <h3>INVESTMENT STYLE SUMMARY <br/>
                DOUBLE DOMINANT PROFILE:  THE ANALYST - IMPLEMENTER</h3>
        </td>
    </tr>
    <tr>
        <td width="50%">CODE: 1122 – (Key: 1 = Strong; 2 = Medium; 3 = Avoid)</td>
        <td style="text-align: right">Scores:  {{ $data["individual_score"] }} </td><!-- TODO 4 Scores -->
    </tr>
    <tr>
        <td colspan="2">
        Primary Styles: Analyst and Implementer<br/>
        Secondary Styles: Humanitarian and Entrepreneur. Avoids: none
        </td>
    </tr>

    <tr>
        <td colspan="2" style="vertical-align: middle"><p class="italic" style="margin-top: 30px">
                <img src="{{ base_path('public/images/reports/p12.jpg') }}" alt="" width="180px"
                     style="float: left;
                            margin-right: 30px;
                            margin-bottom: 30px">
                (Blue- Green) has left-brain, neo-cortex dominant and left-brain, limbic dominant thinking preferences. Key descriptors include being thorough, logical, analytical, numerical, factual, planned, process driven, procedural, sequential, orderly, detailed, administrative, controlled, structured, and safekeeping. This combination provides a high level of rigor and a focus on results. An investor with this profile gathers all the relevant facts to enable them to conduct
                a detailed analysis in an objective manner, and then defines the steps required for 1. effective pragmatic implementation. This profile has a moderate appetite for risk,2. preferring investments that produce reliable and consistent returns.</p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h4 style="padding-top: 20px">1.	General characteristics of your investment style:</h4>

            <p>Overall, your investment style combines your strong preference for facts, data and analysis with a methodical, logical, step-by-step approach to your investment activities and decision-making. Other descriptors of your investment style include factual, measured, intellectual, controlled, detailed and pragmatic. Your analytical style means that you gather and assess all relevant factual and numerical information in reaching your investment decisions. You remain rational and objective, grasping the technical aspects of any investment quickly and effectively. Equipped with the facts, you may feel that you are right in most situations, and indeed you may be the smartest person in the room. You are highly intellectual and ‘do not suffer fools gladly’, and could benefit from being more open to different points of view.</p>

            <p>You are highly numerical, and may shown a talent for mathematics from an early age. If so, you are likely to perform complex calculations when making your investment selections, analyzing and scrutinizing the data with a high level of detail and precision, calculating ‘averages’, ‘medians’ or ‘percentages’ to project potential returns and arrive at your investment decisions. As such, you remain rational and clinical in your approach, rarely allowing your emotions to cloud your objectivity and judgment, making you an astute investor committed to the facts. You are methodical, adopting a structured step-by-step approach, with a pragmatic focus on achieving results. Your attention to detail means that you are careful in reading the fine print in all documentation, with particular regard for contractual and compliance matters to ensure that there are no surprises down the track.</p>

            <p>You prefer your communications to be clear, logical and structured, with key decisions and actions documented in writing. This provides you with clarity and a sense of control over your investment activities, and structure to move forward. You prefer Investment information and reports to be detailed, structured, orderly, and precise, with quantitative numerical data presented in tables, spreadsheets or graphed to highlight patterns in the data. Given your structured approach you may have some difficulty managing change, whether that be to your routine, changes in the market or compliance requirements. During a market downturn, remain flexible and adopt a ‘big picture’ approach allowing you to see things in their proper perspective and your long-term goals, rather than reacting to short-term market fluctuations.</p>


        </td>
    </tr>

</table>
</div>
<!-- Page 6 -->
<div class="page">
<table class="internal">
    <tr>
        <td>
            <p>Your safekeeping approach means that you are cautious with your investments, being more conservative than speculative. Whilst this protects you from selecting investments with excessive risk, be mindful of being overly ‘risk-averse’ in your portfolio design. Risk averse behavior naturally avoids risk and favors guaranteed returns over higher risk, higher returning assets. This might include, for example, debentures, index funds or government bonds. Whilst such assets are considered ‘safe’, they should represent only one part of your portfolio design. The key is to ensure that your portfolio structure and risk level does not compromise your ability to reach your financial goals within your desired timeframe. Critical is identifying investments that hold the potential for higher returns but with an acceptable level of risk.</p>

            <p>Your analytical skills are a key strength, however be mindful not to ‘cherry pick’ your data, as your mind will easily see data that supports your views whilst subconsciously screening out data that runs to the contrary. If left unchecked, this can lead to a lack of diversification across your portfolio, especially shares. To counter, take time to ensure that you have sufficient diversification across your asset and share portfolio thereby spreading your investment risk and reducing your exposure. Your structured approach means that you are well organized, thoughtful and highly capable at managing administrative matters. Be mindful not to get caught up in excess bureaucracy, worrying too much about the procedure or the ‘rules’. In summary, your investment style is factual, analytical, pragmatic and detailed, helping you in make informed and effective investment decisions essential for long term-wealth creation.</p>

            <h4>2.	The Investor Psychology Cycle:</h4>

            <p>All investment decisions are affected by emotion. The more you control your emotion, the better the chances are that you will make sound investment decisions. Given your double dominant style, you are pragmatic and controlled and unlikely to be persuaded by emotion or passing fads. Investors are at most risk in making poor investment choices when feeling euphoric from recent successes, which can cloud personal judgment. The optimal point in time to take advantage of financial opportunity is at the bottom of the emotional curve, running counter cyclical to the market. When the market is euphoric and buying, shrewd investors are selling, and vise versa. As Warren Buffett wisely says, “attempt to be fearful when others are greedy and to be greedy only when others are fearful”.</p>

            <h4>The Investor Psychology Cycle – ‘The roller coaster of investor emotion’:</h4>

            <img src="{{ base_path('public/images/reports/p6.jpg') }}" alt="" width="100%">

        </td>
    </tr>
</table>

<!-- Section Page 2 -->

<table class="internal">
    <tr>
        <td>
            <img src="{{ base_path('public/images/reports/section2.png') }}" alt="" width="100%">
        </td>
    </tr>
</table>
</div>
<!-- Page 7 -->
<div class="page">
<table class="internal" style="margin-bottom: -40px">
    <tr>
        <td>
            <h4>3. Unconscious Investment Bias – Susceptibility Analysis – 1122 Profile:</h4>
            <p>Investors are prone to unconscious bias that dramatically impacts and drives their decision-making. Such biases are unconscious, habitual and automatic. Being aware of one’s own emotional biases enables the investor to make more rational and objective investment decisions. The chart below outlines your level of susceptibility:</p>
        </td>
    </tr>
    <tr>
        <td>
            <table class="bias" cellspacing="0">
                <tr>
                    <th class="first" width="160px">BIAS</th>
                    <th>STATUS</th>
                    <th>DEFINITION AND IMPACT</th>
                    <th class="last">CORRECTIVE ACTION</th>
                </tr>
                <tr>
                    <td><h4>1. Confirmation Bias:</h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/red.png') }}" alt=""></td>
                    <td>May select (cherry pick) data that fits a preconceived point whilst rejecting alternatives. May distort information to confirm with own views.</td>
                    <td class="last">Suspend initial judgment. Remain objective and open to different data.  </td>
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
                    <td>Assumes past success predicts future success. May see future as an extension of the past, only relying on historical data & ignoring other factors.</td>
                    <td class="last">Remain open to exploring investments that lack historical data or success. </td>
                </tr>
                <tr>
                    <td><h4>5. Self-Serving Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Believes those things that are in their best interests to believe. May believe falling stocks will rebound or successful stocks will continue to rise.</td>
                    <td class="last">Remain objective & base all decisions on available data. Look at pros & cons.   </td>
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
                    <td>Over estimates one’s own investment abilities leading to an under-estimation of risks. Successes are attributed to self whilst losses to other factors. </td>
                    <td class="last">Listen to the advice of others whilst owning your successes & your failures.</td>
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
                    <td>Places an over emphasis on rules, regulations, order or structure, in an attempt to maintain control. May lead to a lack of investment agility. </td>
                    <td class="last">Remain open to changing investment strategies and remain open and flexible.  </td>
                </tr>
                <tr>
                    <td><h4>10. Anecdotal Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Believes stories, anecdotes and gossip over facts & evidence. May believe family, friends or stock tips from strangers, e.g. cabbies, hair dressers etc.</td>
                    <td class="last">Listen to informed experts & avoid reacting to general opinions. </td>
                </tr>
                <tr>
                    <td><h4>11. Recency Bias: </h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/caution.png') }}" alt=""></td>
                    <td>Makes decisions based on recent successes rather than historical trends. May be caught up in the euphoria of bull markets/panic of falling markets.</td>
                    <td class="last">Take a longer-term rational approach based on the facts and evidence. </td>
                </tr>
                <tr>
                    <td><h4>12. Predisposition Bias:</h4></td>
                    <td class="img"><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""></td>
                    <td>Forms an emotional attachment (relationship) to investments classes, stocks, markets or industries, irrespective of data. May lead to biased portfolio construction and/or reluctance to sell if required.</td>
                    <td class="last">Avoid forming personal attachments to your investments. Use data not sentiment to guide you.  </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table class="internal biasl key">
    <tr>
        <td>K</td>
        <td><img src="{{ base_path('public/images/reports/red.png') }}" alt=""> Red Alert! ! - You have a <u>high probability</u> of being susceptible to this form of bias. </td>
    </tr>
    <tr>
        <td>E</td>
        <td><img src="{{ base_path('public/images/reports/caution.png') }}" alt=""> Caution! -  You may be susceptible to this bias if you are not mindful to avoid it.</td>
    </tr>
    <tr>
        <td>Y</td>
        <td><img src="{{ base_path('public/images/reports/ok.png') }}" alt=""> OK - You are unlikely to be susceptible to this particular bias based on your profile. </td>
    </tr>
</table>
</div>
<!-- Page 8 -->
<div class="page">
<table class="internal" style="margin-bottom: -40px">
    <tr>
        <td>
            <h4>4. The Trusted Adviser – Trust Enablers – 1122 Profile:</h4>
            <p>Trust Enablers impact the level of trust between you and your adviser and lie at the heart of the trusted Client – Adviser relationship. Whilst all of these are important, the following graph identifies those that are most important for you for forging and maintaining a successful long-term relationship with your adviser.</p>
        </td>
    </tr>
    <tr>
        <td>
            <table class="trust" cellspacing="0">
                <tr>
                    <th class="first" width="150px">BIAS</th>
                    <th>STATUS</th>
                    <th>DEFINITION AND IMPACT</th>
                    <th class="last">CORRECTIVE ACTION</th>
                </tr>
                <tr>
                    <td><h4>1. Adviser Track Record: </h4></td>
                    <td class="img">
                        @if($data["part7"][1] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][1] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the successful track record of the adviser, including depth, breadth and years of experience, and results attained.  </td>
                    <td class="last">Provide extensive information on your overall track record  </td>
                </tr>
                <tr>
                    <td><h4>2. Industry/Asset Track Record:  </h4></td>
                    <td class="img">
                        @if($data["part7"][2] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][2] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the specific track record of a particular industry, asset class or sub class. Trust is likely to be based on results attained.  </td>
                    <td class="last">Provide extensive performance data by industry type/asset class. </td>
                </tr>
                <tr>
                    <td><h4>3. Client Centricity: </h4></td>
                    <td class="img">
                        @if($data["part7"][3] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][3] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the degree to which the adviser is proactive and responsive, placing their client’s needs above their own needs. </td>
                    <td class="last">Always remain focused on the client’s needs. Remain modest and understated.  </td>
                </tr>
                <tr>
                    <td><h4>4. Communication and listening skills: </h4></td>
                    <td class="img">
                        @if($data["part7"][4] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][4] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on two-way communication. Has client empathy, actively listens, and acknowledges both words and feelings. </td>
                    <td class="last">Seek to understand and then to be understood. Listen with real empathy. </td>
                </tr>
                <tr>
                    <td><h4>5. Character and Integrity:  </h4></td>
                    <td class="img">
                        @if($data["part7"][5] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][5] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on character of the adviser, including honesty, integrity, reliability, authenticity, transparency and dedication.</td>
                    <td class="last">Always operate with integrity and transparency in all actions taken.  </td>
                </tr>
                <tr>
                    <td><h4>6. Analytical and Rational:</h4></td>
                    <td class="img">
                        @if($data["part7"][6] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][6] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the degree to which the adviser analyses all available information and takes a rational approach. </td>
                    <td class="last">Conduct thorough due diligence on all potential investments based data.</td>
                </tr>
                <tr>
                    <td><h4>7. Regulatory Compliance:  </h4></td>
                    <td class="img">
                        @if($data["part7"][7] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][7] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on Advisers knowledge of the regulatory requirements, ensuring that an investor has minimal exposure. </td>
                    <td class="last">Take time to explain to the client all legislative requirements. </td>
                </tr>
                <tr>
                    <td><h4>8. Creativity and innovation:  </h4></td>
                    <td class="img">
                        @if($data["part7"][8] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][8] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the Adviser’s ability to seek out and identify creative and new investment opportunities that exist in new ventures. </td>
                    <td class="last">Take time to seek unusual, unique or different investment. </td>
                </tr>
                <tr>
                    <td><h4>9. Emotional control:  </h4></td>
                    <td class="img">
                        @if($data["part7"][9] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][9] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on maintaining emotional control, both in terms of general interaction but also in the face of market volatility. </td>
                    <td class="last">Remain calm, logical and rational when explaining your recommendations. </td>
                </tr>
                <tr>
                    <td><h4>10. Focus on Results: </h4></td>
                    <td class="img">
                        @if($data["part7"][10] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][10] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the extent to which the adviser meets their commitments and focuses on results irrespective of intention or activity.</td>
                    <td class="last">Maintain a focus on meeting commitments and achieving key results. </td>
                </tr>
                <tr>
                    <td><h4>11. Alignment on Values </h4></td>
                    <td class="img">
                        @if($data["part7"][11] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][11] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the degree to which the adviser and investor share common values, and philosophy, such as family, freedom etc.</td>
                    <td class="last">Share your core values and philosophy to build a strong client connection.</td>
                </tr>
                <tr>
                    <td><h4>12. Numerical / Technical ability </h4></td>
                    <td class="img">
                        @if($data["part7"][12] == "4")
                            <img src="{{ base_path('public/images/reports/high.png') }}" alt="">
                        @elseif($data["part7"][12] == "3")
                            <img src="{{ base_path('public/images/reports/medium.png') }}" alt="">
                        @else
                            <img src="{{ base_path('public/images/reports/low.png') }}" alt="">
                        @endif
                    </td>
                    <td>Trust is based on financial, numerical, technical or mathematical ability. Trust is increased through demonstrating your investment capabilities as a subject matter expert.</td>
                    <td class="last">Conduct a thorough financial analysis on all recommendations made.</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table class="internal trustl key">
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
</div>

<!-- Page 9 -->
<div class="page">
<table class="internal">
    <tr>
        <td>
            <h4>5.	Investment Decision-Making – 1122 Profile:</h4>

            <ul class="page9">
            <li>You based your decisions on all of the available facts and evidential data.</li>
            <li>You are careful, structured, precise and methodical in your approach.</li>
            <li>You calculate projected returns and best/worse case scenarios.</li>
            <li>Your mind is agile and sharp which aids in your investment decision-making.</li>
            <li>You arrive at your decisions based on careful analysis and thorough due diligence.</li>
            <li>You approach your decision-making in a sequential step-by-step methodical manner.</li>
            <li>You like to ensure that all potential investments satisfy all legal compliance requirements.</li>
            <li>Your decisions are always highly pragmatic and focused on getting results.</li>
            <li>You remain objective, rational, in control and are not generally subject to emotional impulse.</li>
            <li>You don't ‘follow the herd’ and do not respond emotionally when things get tough.</li>
            <li>You are capable of being very detailed, ensuring that you “dot the i’s and cross the t’s”.</li>
            </ul>

        </td>
    </tr>
    <tr><td><h3 style="text-align: left">Investor DNA: Decision-Making Model – 1122 Profile:</h3>
            <p class="italic">The relative importance of the criteria below depends upon the strength of your quadrant scores.
                (See scores on page 6) The higher the quadrant score, the greater the level of influence on your investment decisions.
                Optimal decision-making involves both rigorous factual analysis (left-brain) and your intuition. (right-brain)</p>
        </td></tr>
    <tr><td><img src="{{ base_path('public/images/reports/p9.jpg') }}" width="100%" alt=""></td></tr>
</table>


<!-- Section Page 3 -->

<table class="internal">
    <tr>
        <td><img src="{{ base_path('public/images/reports/section3.png') }}" alt="" width="100%"></td>
    </tr>
</table>
</div>
<!-- Page 10 -->
<div class="page">
<td class="internal">
    <tr>
        <td>
            <h4>6. Your Appetite for Investment Risk – 1122 Profile:</h4>
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
    <td>
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
</div>
<!-- Page 11 -->
<div class="page">
<table class="internal">
    <tr>
        <td>
            <h4>In summary, your approach to risk can be best characterised as follows:</h4>
            <ul>
                <li>Generally a low to moderate appetite for risk.</li>
                <li>More conservative than speculative.</li>
                <li>Prefers a factual, analytical, planned, detailed approach when data is available.</li>
                <li>Ensures that all investment options satisfy all relevant compliance requirements.</li>
                <li>Adopts a naturally structured, safekeeping and methodical approach to minimise risk.</li>
                <li>Examines all potential risks in detail based on available data and detailed analysis.</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <h4>UNDER PRESSURE...</h4>
            <ul>
                <li>May retreat into facts, figures, or excessive analysis. (i.e. “analysis paralysis”)</li>
                <li>May become overly stubborn or quickly dismissive of other’s views.</li>
                <li>May become pre-occupied with the rules, regulations, or bureaucratic processes.</li>
                <li>May overlook people’s feelings and be seen as somewhat emotionally detached.</li>
                <li>May not see the ‘forest for the trees’, losing sight of the big picture.</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="page11">
            <p>Investment Strategy x Risk x Asset Class:</p>
            <img src="{{ base_path('public/images/reports/p11.jpg') }}" alt="" width="100%">
        </td>
    </tr>

</table>
</div>

<!-- Page 12 -->
<div class="page">
<table class="internal">
    <tr>
        <td><img src="{{ base_path('public/images/reports/p12.jpg') }}" alt="" width="120px"></td>
        <td style="vertical-align: middle"><h4>7. THE ANALYST - IMPLEMENTER - 1122 PROFILE - SUMMARY:</h4></td>
    </tr>
    <tr>
    <tr>
        <td colspan="2">
            <h4 class="serif">INVESTOR STYLE STRENGTHS:</h4>
            <div class="pbox">
                <h4>Key Investment Style Strengths/Descriptors:</h4>
                <ol>
                    <li>Your investment decisions are based on the facts, figures, analysis and logic.</li>
                    <li>You prefer to communicate through words supported by documents, tables and graphs.</li>
                    <li>You are factual, analytical, methodical and detailed in your approach.</li>
                    <li>You are highly intellectual and have an inquisitive and logical mind.</li>
                    <li>You are more conservative than speculative in approach.</li>
                    <li>You ensure that all potential investments are compliant with all legislative requirements.</li>
                    <li>You adopt a systematic ‘step-by-step’ approach to your investment activities.</li>
                    <li>You have an eye for detail, studying the ‘fine print’ in investment documentation.</li>
                    <li>You are pragmatic and results focused, seeing things through to completion.</li>
                    <li>You prefer to focus on one thing at a time.</li>
                </ol>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h4 class="serif">INVESTOR STYLE VULNERABILITIES:</h4>
            <div class="pbox2">
                <h4>Key Investment Style Vulnerabilities:</h4>
                <ol>
                    <li>May be caught up in excessive fact-finding, data collection or analysis. (i.e. ‘analysis paralysis’)</li>
                    <li>May lose sight of the ‘bigger picture’ or be consumed in the detail.</li>
                    <li>May overlook the feelings of others or be perceived as clinical or emotionally detached.</li>
                    <li>May be overly concerned with financial rules, regulations and legal compliance matters.</li>
                    <li>May be overly structured or rigid in their thinking or have difficulty thinking ‘outside the box’.</li>
                </ol>
            </div>
        </td>
    </tr>




</table>
</div>

<!-- Page 13 -->
<div class="page">
<table class="internal">
    <tr>
        <td>
            <h4>8. THE ANALYST - IMPLEMENTER - 1122 PROFILE - KEY RECOMMENDATIONS:</h4>
            <img src="{{ base_path('public/images/reports/p13.jpg') }}" alt="" width="100%">
        </td>
    </tr>
    <tr>
        <td>
            <h4>Key recommendations for improved decision-making and investment success:</h4>
            <ol>
                <li>Try to avoid over analysing things to ensure that you still make timely investment decisions.</li>
                <li>When communicating to others, acknowledging both their words and tone/feelings.</li>
                <li>Draw upon a diverse range of views and opinions in reaching your investment decisions.</li>
                <li>Be willing to shift ground on your views for greater flexibility; be less righteous.</li>
                <li>Remain open to considering new investments that lack definitive proof and track record.</li>
                <li>Keep the ‘big picture’ in mind to help guide your investment decisions and actions.</li>
                <li>Avoid being caught up in excessive bureaucratic or process matters.</li>
                <li>When change challenges your ‘comfort zone’, feel the fear and do it anyway.</li>
                <li>Let go of your need to be in control and learn how to effectively delegate to others.</li>
                <li>Be less judgemental of others who are less detailed or pragmatic as you are.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>
            <div class="pbox3">
                <p> And the Key Recommendation is to...</p>
                <p class="italic">Suspend your initial judgement when making your investment decisions and remain open to the views of others in the investment field.</p>
            </div>
        </td>
    </tr>
</table>
</div>

<!-- Page 14 -->
<div class="page">
<table class="internal">
    <tr>
        <td>
            <h4> 9. THE ANALYST - IMPLEMENTER - 1122 PROFILE - ADVISER COMMUNICATION TIPS:</h4>
            <img src="{{ base_path('public/images/reports/p14.jpg') }}" alt="" width="100%">
        </td>
    </tr>
    <tr>
        <td>
            <h4>An Adviser working with your investor style needs to:</h4>
            <ol>
                <li>Present all of the available facts, information and data to support all recommendations.</li>
                <li>Present the factual details first and then work back up to the ‘big picture’.</li>
                <li>Present information in its raw form in financial tables, graphs and spreadsheets.</li>
                <li>Conduct a thorough risk and return analysis for all potential investments.</li>
                <li>Ensure that you are well prepared and across all the finer details.</li>
                <li>Provide a structured, sequential step-by-step and detailed financial plan.</li>
                <li>Set clear goals and milestones to enable regular performance review against the plan.</li>
                <li>Present your arguments and make the point quickly, efficiently and without ‘waffling’.</li>
                <li>Provide thorough documentation and record all key decisions and agreed actions.</li>
                <li>Explain how potential investments satisfy all compliance requirements under law.</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>
            <h4>And during a MARKET DOWNTURN your adviser needs to...</h4>
            <ul>
                <li>Explain any reasons behind the current cyclic market and what’s driving the volatility.</li>
                <li>Present a higher level of factual information, data and further analysis on the situation.</li>
                <li>Re-affirm the overall strategy and logic underpinning your long-term financial goals.</li>
                <li>Provide theoretical models to help your client understand the market dynamics.</li>
                <li>Provide a step-by-step action plan to monitor and address the situation.</li>
            </ul>
        </td>
    </tr>
</table>
</div>

<!-- Page 15 -->
<div class="page">
<table class="internal">
    <tr>
        <td><img src="{{ base_path('public/images/reports/p12.jpg') }}" alt="" width="120px"></td>
        <td style="vertical-align: middle"><h4>10. THE ANALYST - IMPLEMENTER - 1122 PROFILE COMMUNICATION STYLE:</h4></td>
    </tr>
    <tr>
        <td colspan="2" class="page15">
            <p>By understanding your Investor DNA style, your adviser will be better equipped to ‘tune into your wavelength’ and be a much more effective communicator.</p>
            <p>Analysts prefer to communicate through the written word favoring reports that show facts, figures, data and the numbers <span>(i.e. the WHAT?);</span> Implementers
                prefer to communicate in clear and concise documentation presented in a structured, sequential and orderly manner <span>(i.e. the HOW?);</span> Humanitarians have a preference for
                personal connection and kinesthetic (feelings) communication, ‘sensing’ things through body language and voice tone, often ‘reading between the lines’ <span>(i.e. the WHO?);</span>
                and Entrepreneurs prefer to communicate visually through pictures, diagrams and graphs that illuminate patterns in data, helping them ‘connect the dots’
                and see the ‘big picture’. <span>(i.e. the WHY?)</span></p>
            <h4>Identifying your preferred ‘Communication Sequence Map’:</h4>
                <p>A communication sequence map represents your preferred method and order of communication – your preferred ‘communication sequence’ based on the relative strength of each of your
                    four quadrant scores. Please review your scores for each of your four Investor DNA quadrants and rank them from highest (1) though to lowest (4). Transpose these rankings into the
                    four boxes below. Next, draw an arrow connecting the 4 colored boxes in the order of their preference scores, from 1 to 2, to 3, to 4. This represents the ideal sequence of
                    communication for maximum impact, showing your starting point (1) and the recommended order of communication.</p>

            <img src="{{ base_path('public/images/reports/p15.jpg') }}" alt="" width="100%">
        </td>
    </tr>
</table>
</div>


<!-- Page 16 -->
<div class="page">
    <table class="internal">
        <tr>
            <td>
                <div class="pbox4">
                    <h3>DISCLAIMER AND COPYRIGHT</h3>
                    <p>TKH Group Trust (ABN 13 186 714 215) is the author and owner of Investor DNA and its logo, brand, profiles,
                        websites, tools, materials, processes and systems.</p>
                    <p>All text in the Investor DNA Personal Profile including recommendations, are of a general nature only and is limited to an individual investor’s investment psychology. TKH Group International PTY LTD (ACN 613731445) as trustee for the TKH Group Trust does not provide any financial advice whatsoever and does not make any specific investment product recommendations, claims or guarantees regarding the financial performance of any investment product selected individually or through a third party and/or adviser that has been accredited in the Investor DNA system.</p>
                    <p>TKH Group International PTY LTD and its directors, shareholders, employees, suppliers, licensees and associates will not be held liable for any losses or damages, investment or otherwise, whatsoever arising from the use of the Investor DNA profiling system. By proceeding with and using the Investment DNA profiling system you and any affiliated companies, directly or indirectly, agrees unconditionally not to pursue legal action against TKH Group International Pty Ltd, TKH Group Trust and their directors, shareholders, employees, suppliers, licensees and associates.</p>
                    <p>The Investor DNA is protected under trademark 01808732 issued under Australian law. Investor DNA and its logo, brand, profiles, websites, tools, materials, processes and systems are owned by TKH Group Trust and are subject to copyright, and may not be used in any manner other than its intended purpose, nor outside the conditions as specified in the Investor DNA licensing agreement. Any and all breaches will be prosecuted under law.</p>
                </div>
            </td>
        </tr>
    </table>
</div>


@endsection
