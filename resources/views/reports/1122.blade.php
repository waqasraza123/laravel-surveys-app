@extends('layouts.reports')

<!-- Page 1 -->

<table class="one">
    <tr>
        <td><img src="/images/reports/intro.png" width="100%">
            <h1>Confidential Report – {{ $data["first_name"] }} {{ $data["last_name"] }}</h1><!--TODO (client name)-->
            <h3>
                1122<br/>
                Double Dominant Profile<br/>
                The Analyst - Implementer
            </h3>
        </td>
    </tr>
</table>

<!-- Page 2 -->

<table class="internal">
    <tr>
        <td>
            <h4>Investor DNA: Your Thinking, Your Wealth</h4>

            <p>We all have a different ways in which we see and interpret the world. Whilst some prefer to look at the ‘big picture’, others prefer a more detailed approach. Whilst some prefer concepts and ideas, others prefer facts, figures and objective analysis. These preferences are neither right nor wrong, but simply different, yet they hold significant implications for your investment decision-making and subsequent long-term wealth creation. The field of Investment Psychology is the science of understanding the relationship between your thinking and your investment decision-making and subsequent wealth creation.</p>

            <p>These thinking preferences are unconscious, habitual, automatic, and therefore make you prone to ‘unconscious bias’: a leaning towards buying or selling certain investments without ‘rhyme nor reason’. At the heart of making good investment decisions is an inner struggle between your ‘rational’ logical mind and your ‘emotional’ intuitive mind. Your Investor DNA profile helps you be consciously aware of your own natural inner biases, investment predispositions and thinking preferences, helping you make better investment decisions over time.</p>

            <p>Your Investor DNA profile provides you with self-insight into your own Investment Psychology. This includes your decision-making style, risk appetite and preferred asset classes, innate biases and preferred communication style.  It also identifies key factors that influence the level of trust between you and your adviser. Investor DNA helps your adviser provide a tailored investment solution, whilst helping you make better investment decisions over time. It is worth considering that your financial net worth today is the sum of all of your financial decisions made up until this point in time. It makes intuitive sense then, that by improving your investment decision-making you will increase your net wealth over time, safeguarding your lifestyle today and in the future.</p>

            <img src="/images/reports/p1.jpg" width="100%" alt="">
        </td>
    </tr>
</table>

<!-- Page 3 -->

<table class="internal">
    <tr>
        <td>
            <h3>Investor DNA – 1122 - YOUR PROFILE SUMMARY</h3>

            <img src="/images/reports/chart.png" width="100%" alt="">
        </td>
    </tr>
    <tr style="background: #32404f; color: #fff">
        <td style="padding: 5px">
            <p>Your Investor DNA profile measures how you prefer to process investment information (Intellectual vs. Instinctive), how you prefer to make your investment decisions (Analytical vs. Beliefs), How you prefer to plan, organise and manage your investments (Structured vs. Flexible), and your preference for new, novel or traditional investments. (Creative vs. Practical) Your profile also identifies your appetite for risk, preferred asset classes, propensity for unconscious investment bias and Adviser behaviours that build or reduce trust.  Investor DNA identifies your primary and secondary investment styles: Analyst, Implementer, Humanitarian or Entrepreneur. An individual can be dominant in one or more of these four styles, and all of us possess all four styles to varying degrees, with your strongest score representing your ‘home base’ or default position.  There is no single best style or combination of styles, as each has its own specific advantages & disadvantages. Successful investing requires a balance between your rational and emotional mind and the challenge is to develop your non-dominant investment styles to enable better investment decisions.</p>
        </td>
    </tr>
</table>

<!-- Page 4 -->

<table class="internal" style="border: 7px solid #666666; padding: 10px; margin-bottom: 30px">
    <tr>
        <td colspan="3">
            <h3>Investor DNA – Personal Profile – Investor Style Dashboard</h3>
        </td>
    </tr>
    <tr>
        <td>Name:</td>
        <td>{{ $data["first_name"] }} {{ $data["last_name"] }}</td><!--TODO (client name)-->
        <td rowspan="5" style="vertical-align: bottom; text-align: right;">
            <img src="/images/reports/logow.jpg" width="100px" alt="">
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
</table>

<table class="internal">
    <tr>
        <td>
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
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
                        General Characteristics
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Factual</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
    </tr>

    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td>
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
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
                        General Characteristics
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Factual</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
    </tr>

    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td>
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
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
                        General Characteristics
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Factual</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
    </tr>

    <tr><td colspan="2"><hr></td></tr>

    <tr>
        <td>
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
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
                        General Characteristics
                    </th>
                    <th>
                    </th>
                </tr>
                <tr>
                    <td>Factual</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Analytical</td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Practical </td>
                    <td class="sha"></td>
                </tr>
                <tr>
                    <td>Methodical</td>
                    <td class="sha"></td>
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
    </tr>

</table>

<!-- Page 5 -->

<table class="internal">
    <tr>
        <td colspan="2">
            <h3 style="text-align: left">INVESTMENT STYLE SUMMARY <br/>
                DOUBLE DOMINANT PROFILE:  THE ANALYST - IMPLEMENTER</h3>
        </td>
    </tr>
    <tr>
        <td>CODE: 1122 – (Key: 1 = Strong; 2 = Medium; 3 = Avoid)</td>
        <td style="text-align: right">Scores:  {{ $data["individual_score"] }} </td><!-- TODO 4 Scores -->
    </tr>
    <tr>
        <td colspan="2">
        Primary Styles: Analyst and Implementer<br/>
        Secondary Styles: Humanitarian and Entrepreneur. Avoids: none
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

<!-- Page 6 -->

<table class="internal">
    <tr>
        <td>
            <p>Your safekeeping approach means that you are cautious with your investments, being more conservative than speculative. Whilst this protects you from selecting investments with excessive risk, be mindful of being overly ‘risk-averse’ in your portfolio design. Risk averse behavior naturally avoids risk and favors guaranteed returns over higher risk, higher returning assets. This might include, for example, debentures, index funds or government bonds. Whilst such assets are considered ‘safe’, they should represent only one part of your portfolio design. The key is to ensure that your portfolio structure and risk level does not compromise your ability to reach your financial goals within your desired timeframe. Critical is identifying investments that hold the potential for higher returns but with an acceptable level of risk.</p>

            <p>Your analytical skills are a key strength, however be mindful not to ‘cherry pick’ your data, as your mind will easily see data that supports your views whilst subconsciously screening out data that runs to the contrary. If left unchecked, this can lead to a lack of diversification across your portfolio, especially shares. To counter, take time to ensure that you have sufficient diversification across your asset and share portfolio thereby spreading your investment risk and reducing your exposure. Your structured approach means that you are well organized, thoughtful and highly capable at managing administrative matters. Be mindful not to get caught up in excess bureaucracy, worrying too much about the procedure or the ‘rules’. In summary, your investment style is factual, analytical, pragmatic and detailed, helping you in make informed and effective investment decisions essential for long term-wealth creation.</p>

            <h4>2.	The Investor Psychology Cycle:</h4>

            <p>All investment decisions are affected by emotion. The more you control your emotion, the better the chances are that you will make sound investment decisions. Given your double dominant style, you are pragmatic and controlled and unlikely to be persuaded by emotion or passing fads. Investors are at most risk in making poor investment choices when feeling euphoric from recent successes, which can cloud personal judgment. The optimal point in time to take advantage of financial opportunity is at the bottom of the emotional curve, running counter cyclical to the market. When the market is euphoric and buying, shrewd investors are selling, and vise versa. As Warren Buffett wisely says, “attempt to be fearful when others are greedy and to be greedy only when others are fearful”.</p>

            <h4>The Investor Psychology Cycle – ‘The roller coaster of investor emotion’:</h4>

            <img src="/images/reports/p6.jpg" alt="" width="100%">

        </td>
    </tr>
</table>


<!-- Page 7 -->

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
                    <th class="first" width="150px">BIAS</th>
                    <th>STATUS</th>
                    <th>DEFINITION AND IMPACT</th>
                    <th class="last">CORRECTIVE ACTION</th>
                </tr>
                <tr>
                    <td><h4>1. Confirmation Bias:</h4></td>
                    <td class="img"><img src="/images/reports/red.png" alt=""></td>
                    <td>May select (cherry pick) data that fits a preconceived point whilst rejecting alternatives. May distort information to confirm with own views.</td>
                    <td class="last">Suspend initial judgment. Remain objective and open to different data.  </td>
                </tr>
                <tr>
                    <td><h4>2. Optimism Bias: </h4></td>
                    <td class="img"><img src="/images/reports/ok.png" alt=""></td>
                    <td>Is overly optimistic, over estimating the potential gains whilst underestimating risks. The higher the perceived potential gains the stronger the bias.</td>
                    <td class="last">Take time to conduct thorough due diligence based on facts and data. </td>
                </tr>
                <tr>
                    <td><h4>3. Loss Aversion: </h4></td>
                    <td class="img"><img src="/images/reports/ok.png" alt=""></td>
                    <td>Fear of making a loss. May fail to take corrective action, holding onto negative positions for too long and failing to ‘cut their losses’ and sell out.</td>
                    <td class="last">Be prepared to exit from poor performing assets & stocks. Remain rational.  </td>
                </tr>
                <tr>
                    <td><h4>4. Success Bias: </h4></td>
                    <td class="img"><img src="/images/reports/caution.png" alt=""></td>
                    <td>Assumes past success predicts future success. May see future as an extension of the past, only relying on historical data & ignoring other factors.</td>
                    <td class="last">Remain open to exploring investments that lack historical data or success. </td>
                </tr>
                <tr>
                    <td><h4>5. Self-Serving Bias: </h4></td>
                    <td class="img"><img src="/images/reports/ok.png" alt=""></td>
                    <td>Believes those things that are in their best interests to believe. May believe falling stocks will rebound or successful stocks will continue to rise.</td>
                    <td class="last">Remain objective & base all decisions on available data. Look at pros & cons.   </td>
                </tr>
                <tr>
                    <td><h4>6. Analysis Bias:</h4></td>
                    <td class="img"><img src="/images/reports/red.png" alt=""></td>
                    <td>Collects & processes excessive amounts of data.  May over analyze the data leading to ‘analysis paralysis’, procrastination and delayed decisions.</td>
                    <td class="last">Collect & analyse only enough data to allow you to make timely decisions. </td>
                </tr>
                <tr>
                    <td><h4>7. Over Confidence: </h4></td>
                    <td class="img"><img src="/images/reports/red.png" alt=""></td>
                    <td>Over estimates one’s own investment abilities leading to an under-estimation of risks. Successes are attributed to self whilst losses to other factors. </td>
                    <td class="last">Listen to the advice of others whilst owning your successes & your failures.</td>
                </tr>
                <tr>
                    <td><h4>8. Herding Bias: </h4></td>
                    <td class="img"><img src="/images/reports/ok.png" alt=""></td>
                    <td>Follows others on mass (the ‘herd’) irrespective of contrary advice or data. May make emotional or irrational decisions when markets are volatile.</td>
                    <td class="last">Remain objective. Sell when others are buying & vise versa to run counter.  </td>
                </tr>
                <tr>
                    <td><h4>9. Bureaucratic Bias: </h4></td>
                    <td class="img"><img src="/images/reports/red.png" alt=""></td>
                    <td>Places an over emphasis on rules, regulations, order or structure, in an attempt to maintain control. May lead to a lack of investment agility. </td>
                    <td class="last">Remain open to changing investment strategies and remain open and flexible.  </td>
                </tr>
                <tr>
                    <td><h4>10. Anecdotal Bias: </h4></td>
                    <td class="img"><img src="/images/reports/ok.png" alt=""></td>
                    <td>Believes stories, anecdotes and gossip over facts & evidence. May believe family, friends or stock tips from strangers, e.g. cabbies, hair dressers etc.</td>
                    <td class="last">Listen to informed experts & avoid reacting to general opinions. </td>
                </tr>
                <tr>
                    <td><h4>11. Recency Bias: </h4></td>
                    <td class="img"><img src="/images/reports/caution.png" alt=""></td>
                    <td>Makes decisions based on recent successes rather than historical trends. May be caught up in the euphoria of bull markets/panic of falling markets.</td>
                    <td class="last">Take a longer-term rational approach based on the facts and evidence. </td>
                </tr>
                <tr>
                    <td><h4>12. Predisposition Bias:</h4></td>
                    <td class="img"><img src="/images/reports/ok.png" alt=""></td>
                    <td>Forms an emotional attachment (relationship) to investments classes, stocks, markets or industries, irrespective of data. May lead to biased portfolio construction and/or reluctance to sell if required.</td>
                    <td class="last">Avoid forming personal attachments to your investments. Use data not sentiment to guide you.  </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table class="internal biasl">
    <tr>
        <td>K</td>
        <td><img src="/images/reports/red.png" alt=""> Red Alert! ! - You have a <u>high probability</u> of being susceptible to this form of bias. </td>
    </tr>
    <tr>
        <td>E</td>
        <td><img src="/images/reports/caution.png" alt=""> Caution! -  You may be susceptible to this bias if you are not mindful to avoid it.</td>
    </tr>
    <tr>
        <td>Y</td>
        <td><img src="/images/reports/ok.png" alt=""> OK - You are unlikely to be susceptible to this particular bias based on your profile. </td>
    </tr>
</table>

<!-- Page 8 -->

<table class="internal" style="margin-bottom: -40px">
    <tr>
        <td>
            <h4>4. The Trusted Adviser – Trust Enablers – 1122 Profile:</h4>
            <p>Trust Enablers impact the level of trust between you and your adviser and lie at the heart of the trusted Client – Adviser relationship. Whilst all of these are important, the following graph identifies those that are most important for you for forging and maintaining a successful long-term relationship with your adviser.</p>
        </td>
    </tr>
    <tr>
        <td> <!-- TODO Second column display image based client selection in PART D
                   Very Important = high.png
                   Important = medium.png
                   Somewhat important and unimportant = low.png -->
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
                        @if($data["part4"][1] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][1] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][1] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the successful track record of the adviser, including depth, breadth and years of experience, and results attained.  </td>
                    <td class="last">Provide extensive information on your overall track record  </td>
                </tr>
                <tr>
                    <td><h4>2. Industry/Asset Track Record:  </h4></td>
                    <td class="img">
                        @if($data["part4"][2] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][2] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][2] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the specific track record of a particular industry, asset class or sub class. Trust is likely to be based on results attained.  </td>
                    <td class="last">Provide extensive performance data by industry type/asset class. </td>
                </tr>
                <tr>
                    <td><h4>3. Client Centricity: </h4></td>
                    <td class="img">
                        @if($data["part4"][3] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][3] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][3] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the degree to which the adviser is proactive and responsive, placing their client’s needs above their own needs. </td>
                    <td class="last">Always remain focused on the client’s needs. Remain modest and understated.  </td>
                </tr>
                <tr>
                    <td><h4>4. Communication and listening skills: </h4></td>
                    <td class="img">
                        @if($data["part4"][4] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][4] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][4] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on two-way communication. Has client empathy, actively listens, and acknowledges both words and feelings. </td>
                    <td class="last">Seek to understand and then to be understood. Listen with real empathy. </td>
                </tr>
                <tr>
                    <td><h4>5. Character and Integrity:  </h4></td>
                    <td class="img">
                        @if($data["part4"][5] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][5] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][5] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on character of the adviser, including honesty, integrity, reliability, authenticity, transparency and dedication.</td>
                    <td class="last">Always operate with integrity and transparency in all actions taken.  </td>
                </tr>
                <tr>
                    <td><h4>6. Analytical and Rational:</h4></td>
                    <td class="img">
                        @if($data["part4"][6] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][6] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][6] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the degree to which the adviser analyses all available information and takes a rational approach. </td>
                    <td class="last">Conduct thorough due diligence on all potential investments based data.</td>
                </tr>
                <tr>
                    <td><h4>7. Regulatory Compliance:  </h4></td>
                    <td class="img">
                        @if($data["part4"][7] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][7] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][7] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on Advisers knowledge of the regulatory requirements, ensuring that an investor has minimal exposure. </td>
                    <td class="last">Take time to explain to the client all legislative requirements. </td>
                </tr>
                <tr>
                    <td><h4>8. Creativity and innovation:  </h4></td>
                    <td class="img">
                        @if($data["part4"][8] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][8] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][8] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the Adviser’s ability to seek out and identify creative and new investment opportunities that exist in new ventures. </td>
                    <td class="last">Take time to seek unusual, unique or different investment. </td>
                </tr>
                <tr>
                    <td><h4>9. Emotional control:  </h4></td>
                    <td class="img">
                        @if($data["part4"][9] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][9] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][9] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on maintaining emotional control, both in terms of general interaction but also in the face of market volatility. </td>
                    <td class="last">Remain calm, logical and rational when explaining your recommendations. </td>
                </tr>
                <tr>
                    <td><h4>10. Focus on Results: </h4></td>
                    <td class="img">
                        @if($data["part4"][10] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][10] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][10] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the extent to which the adviser meets their commitments and focuses on results irrespective of intention or activity.</td>
                    <td class="last">Maintain a focus on meeting commitments and achieving key results. </td>
                </tr>
                <tr>
                    <td><h4>11. Alignment on Values </h4></td>
                    <td class="img">
                        @if($data["part4"][11] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][11] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][11] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on the degree to which the adviser and investor share common values, and philosophy, such as family, freedom etc.</td>
                    <td class="last">Share your core values and philosophy to build a strong client connection.</td>
                </tr>
                <tr>
                    <td><h4>12. Numerical / Technical ability </h4></td>
                    <td class="img">
                        @if($data["part4"][12] == "3")
                            <img src="/images/reports/high.png" alt="">
                        @elseif($data["part4"][12] == "2")
                            <img src="/images/reports/medium.png" alt="">
                        @elseif($data["part4"][12] == "1")
                            <img src="/images/reports/low.png" alt="">
                        @endif
                    </td>
                    <td>Trust is based on financial, numerical, technical or mathematical ability. Trust is increased through demonstrating your investment capabilities as a subject matter expert.</td>
                    <td class="last">Conduct a thorough financial analysis on all recommendations made.</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table class="internal trustl">
    <tr>
        <td>K</td>
        <td><img src="/images/reports/high.png" width="32px" alt=""> Red Alert! ! - You have a <u>high probability</u> of being susceptible to this form of bias. </td>
    </tr>
    <tr>
        <td>E</td>
        <td><img src="/images/reports/medium.png" width="32px"  alt=""> Caution! -  You may be susceptible to this bias if you are not mindful to avoid it.</td>
    </tr>
    <tr>
        <td>Y</td>
        <td><img src="/images/reports/low.png" width="32px"  alt=""> OK - You are unlikely to be susceptible to this particular bias based on your profile. </td>
    </tr>
</table>


<!-- Page 9 -->

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
    <tr><td><h3>Investor DNA: Decision-Making Model – 1122 Profile:</h3></td></tr>
    <tr><td><img src="/images/reports/p9.jpg" width="100%" alt=""></td></tr>
</table>

<!-- Page 10 -->

<table class="internal">
    <tr>
        <td>
            <h4>6. Your Appetite for Investment Risk – 1122 Profile:</h4>
        </td>
    </tr>
    <tr>
        <td> <!-- TODO display one of the following images based client answer to PART C-->
            @if($data["part3"] == "5")
                <img src="/images/reports/highp.png" width="100%" alt="">
            @elseif($data["part3"] == "4")
                <img src="/images/reports/moderate_to_high.png" width="100%" alt="">
            @elseif($data["part3"] == "3")
                <img src="/images/reports/moderate.png" width="100%" alt="">
            @elseif($data["part3"] == "2")
                <img src="/images/reports/low_to_moderate.png" width="100%" alt="">
            @elseif($data["part3"] == "1")
                <img src="/images/reports/lowp.png" width="100%" alt="">
            @endif
        </td>
    </tr>
    <tr>
        <td>
            <h4>Your default risk position: Low to Moderate Risk</h4>

            <p>As you value rational analysis and safekeeping, your investment decisions on the whole tend to be more conservative and less speculative. Your conservative nature serves to limit the amount of investment risk you are prepared to accept, with a prime focus on safekeeping and consolidation.  Your analytical approach means you conduct rigorous due diligence on all potential new investments, carefully calculating the level of risk involved. Your safekeeping approach ensures that all legal and financial act compliance requirements are met. Indeed it is unlikely that you will proceed unless there is supportive data and all compliance requirements are met.</p>

            <p>Investments that have a solid track record provide you with a high level of comfort and low financial risk. You are rarely tempted to invest on a whim or with investments that promise high returns that sound ‘too good to be true’. Investments that are most likely to appeal include blue chip shares, real estate, cash or cash equivalents with guaranteed returns. If you are mathematically inclined, you may venture into day trading activities using one of many online trading platforms that are now available.  At heart you are a pragmatist, not easily persuaded by flashy marketing materials. You rely on your finely tuned analytical skills to fully assess the risks involved from all angles.</p>

            <p>In summary, your appetite for risk is low to moderate. This means that you will favor asset classes that produce stable, reliable, predictable, and if possible, guaranteed returns over time. You prefer to spread your investments across a number of diversified asset classes, thereby reducing your financial exposure. The level of appropriate risk depends upon three factors; your innate appetite for risk, your financial objectives and the amount of time you have to reach your financial objectives, i.e. your ‘investment window’. Talk to your trusted Adviser about asset classes most suitable for you given your risk profile, investment goals and your ‘investment window of opportunity’, the time you have available to reach your financial goals.</p>

        </td>
    </tr>

</table>

<!-- Page 11 -->




<!-- Page 12 -->




<!-- Page 13 -->




<!-- Page 14 -->




<!-- Page 15 -->





<!-- Page 16 -->
