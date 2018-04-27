$message = 
"<html>
<head>
<style>
/* Star hover using lang hack in its own style wrapper, otherwise Gmail will strip it out */
* [lang~='x-star-wrapper']:hover *[lang~='x-star-number']{
color: #119da2 !important;
border-color: #119da2 !important;
}

* [lang~='x-star-wrapper']:hover *[lang~='x-full-star'],
* [lang~='x-star-wrapper']:hover ~ *[lang~='x-star-wrapper'] *[lang~='x-full-star'] {
display : block !important;
width : auto !important;
overflow : visible !important;
float : none !important;
margin-top: -1px !important;
}

* [lang~='x-star-wrapper']:hover *[lang~='x-empty-star'],
* [lang~='x-star-wrapper']:hover ~ *[lang~='x-star-wrapper'] *[lang~='x-empty-star'] {
display : block !important;
width : 0 !important;
overflow : hidden !important;
float : left !important;
height: 0 !important;
}
</style>


<style>
/* Normal email CSS */
@-ms-viewport {
width: device-width;
}
body {
margin: 0;
padding: 0;
min-width: 100%;
}
table {
border-collapse: collapse;
border-spacing: 0;
}
td {
vertical-align: top;
}
img {
border: 0;
-ms-interpolation-mode: bicubic;
max-width: 100% !important;
height: auto;
}
a {
text-decoration: none;
color: #119da2;
}
a:hover {
text-decoration: underline;
}

*[class=main-wrapper],
*[class=main-content]{
min-width: 0 !important;
width: 600px !important;
margin: 0 auto !important;
}
*[class=rating] {
unicode-bidi: bidi-override;
direction: rtl;
}
*[class=rating] > *[class=star] {
display: inline-block;
position: relative;
text-decoration: none;
}

@media (max-width: 621px) {
* {
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
-o-box-sizing: border-box;
}
table {
min-width: 0 !important;
width: 100% !important;
}
*[class=body-copy] {
padding: 0 10px !important;
}
*[class=main-wrapper],
*[class=main-content]{
min-width: 0 !important;
width: 320px !important;
margin: 0 auto !important;
}
*[class=ms-sixhundred-table] {
width: 100% !important;
display: block !important;
float: left !important;
clear: both !important;
}
*[class=content-padding] {
padding-left: 10px !important;
padding-right: 10px !important;
}
*[class=bottom-padding]{
margin-bottom: 15px !important;
font-size: 0 !important;
line-height: 0 !important;
}
*[class=top-padding] {
display: none !important;
}
*[class=hide-mobile] {
display: none !important;
}


/* Prevent hover effects so double click issue doesn't happen on mobile devices */
* [lang~='x-star-wrapper']:hover *[lang~='x-star-number']{
color: #AEAEAE !important;
border-color: #FFFFFF !important;
}
* [lang~='x-star-wrapper']{
pointer-events: none !important;
}
* [lang~='x-star-divbox']{
pointer-events: auto !important;
}
*[class=rating] *[class='star-wrapper'] a div:nth-child(2),
*[class=rating] *[class='star-wrapper']:hover a div:nth-child(2),
*[class=rating] *[class='star-wrapper'] ~ *[class='star-wrapper'] a div:nth-child(2){
display : none !important;
width : 0 !important;
height: 0 !important;
overflow : hidden !important;
float : left !important;
}
*[class=rating] *[class='star-wrapper'] a div:nth-child(1),
*[class=rating] *[class='star-wrapper']:hover a div:nth-child(1),
*[class=rating] *[class='star-wrapper'] ~ *[class='star-wrapper'] a div:nth-child(1){
display : block !important;
width : auto !important;
overflow : visible !important;
float : none !important;
}
}
</style>
</head>
<body style='margin-top: 0;margin-bottom: 0;margin-left: 0;margin-right: 0;padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;min-width: 100%;background-color: #f5f5f5'>
<table class='main-wrapper' style='border-collapse: collapse;border-spacing: 0;display: table;table-layout: fixed; margin: 0 auto; -webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;text-rendering: optimizeLegibility;background-color: #f5f5f5; width: 100%;'>
<tbody>
<tr>
<td style='padding: 0;vertical-align: top'>
<div class='bottom-padding' style='margin-bottom: 0px; line-height: 30px; font-size: 30px;''>&nbsp;</div>
</td>
</tr>
<tr>
<td style='padding: 0;vertical-align: top; width: 100%;'>
<center>
<!--[if gte mso 11]>
<center>
<table><tr><td class='ms-sixhundred-table' width='600'>
<![endif]-->

<table class='main-content' style='width: 100%; max-width: 600px; border-collapse: separate;border-spacing: 0;margin-left: auto;margin-right: auto; border: 1px solid #EAEAEA; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; background-color: #ffffff; overflow: hidden;' width='600'>
<tbody>
<tr>
<td style='padding: 0;vertical-align: top;''>
<table class='main-content' style='border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 100%; max-width: 600px;'>
<tbody>
<tr>
<td style='padding: 0;vertical-align: top;text-align: left'>
<table class='contents' style='border-collapse: collapse;border-spacing: 0;width: 100%;'>
<tbody>
<tr>
<td class='content-padding' style='padding: 0;vertical-align: top'>
<div style='margin-bottom: 0px; line-height: 30px; font-size: 30px;''>&nbsp;</div>
<div class='body-copy' style='margin: 0;'>

<div style='margin: 0;color: #60666d;font-size: 50px;font-family: sans-serif;line-height: 20px; text-align: left;'>
<div class='bottom-padding' style='margin-bottom: 0px; line-height: 15px; font-size: 15px;'>&nbsp;</div>
<div style='text-align: center; margin: 0; font-size: 10px;  text-transform: uppercase; letter-spacing: .5px;'>Rating (select a star amount):</div>
<div class='bottom-padding' style='margin-bottom: 0px; line-height: 7px; font-size: 7px;''>&nbsp;</div>
<div style='width: 100%; text-align: center; float: left;'>
<div class='rating' style='text-align: center; margin: 0; font-size: 50px; width: 275px; margin: 0 auto; margin-top: 10px;'>

<table style='border-collapse: collapse;border-spacing: 0;width: 275px; margin: 0 auto; font-size: 50px; direction: rtl;' dir='rtl'>
<tbody><tr>
<td style='padding: 0;vertical-align: top;'' width='55 class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=5' class='star target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;'' tabindex='1'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=5' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>5</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=4' class='star' target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;' tabindex='2'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=4' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>4</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=3' class='star target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;'' tabindex='3'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=3' class

='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>3</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=2' class='star' target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;' tabindex='4'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; w
idth:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=2' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>2</a>
</div>
</td>
<td style='padding: 0;vertical-align: top' width='55' class='star-wrapper' lang='x-star-wrapper'>
<div style='display: block; text-align: center; float: left;width: 55px;overflow: hidden;line-height: 60px;'>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=1' class='star' target='_blank' lang='x-star-divbox' style='color: #FFCC00; text-decoration: none; display: inline-block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;' tabindex='5'>
<div lang='x-empty-star' style='margin: 0;display: inline-block;'>☆</div>
<div lang='x-full-star' style='margin: 0;display: inline-block; width:0; overflow:hidden;float:left; display:none; height: 0; max-height: 0;'>★</div>
</a>
<a href='https://dev-eventor.herokuapp.com/rate.php?rating=1' class='star-number' target='_blank' lang='x-star-number' style='font-family: sans-serif;color: #AEAEAE; font-size: 14px; line-height: 14px; text-decoration: none; display: block;height: 50px;width: 55px;overflow: hidden;line-height: 60px;border-bottom: 3px solid #FFFFFF; text-align: center;'>1</a>
</div>
</td>
</tr>
</tbody></table>




</div>
</div>
<div style='margin-bottom: 0px; line-height: 30px; font-size: 30px;'>&nbsp;</div>
</div>

</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if gte mso 11]>
</td></tr></table>
</center>
<![endif]-->
</center>
</td>
</tr>
</tbody>
</table>
</body>
</html>";





$message = '
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>


    <style type="text/css">

    * { margin: 0; padding: 0; font-size: 100%; font-family: "Avenir Next", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.65; }

img { max-width: 100%; margin: 0 auto; display: block; }

body, .body-wrap { width: 100% !important; height: 100%; background: #f8f8f8; }

a { color: #71bc37; text-decoration: none; }

a:hover { text-decoration: underline; }

.text-center { text-align: center; }

.text-right { text-align: right; }

.text-left { text-align: left; }

.button { display: inline-block; color: white; background: #71bc37; border: solid #71bc37; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; }

.button:hover { text-decoration: none; }

h1, h2, h3, h4, h5, h6 { margin-bottom: 20px; line-height: 1.25; }

h1 { font-size: 32px; }

h2 { font-size: 28px; }

h3 { font-size: 24px; }

h4 { font-size: 20px; }

h5 { font-size: 16px; }

p, ul, ol { font-size: 16px; font-weight: normal; margin-bottom: 20px; }

.container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }

.container table { width: 100% !important; border-collapse: collapse; }

.container .masthead { padding: 80px 0; background: #71bc37; color: white; }

.container .masthead h1 { margin: 0 auto !important; max-width: 90%; text-transform: uppercase; }

.container .content { background: white; padding: 30px 35px; }

.container .content.footer { background: none; }

.container .content.footer p { margin-bottom: 0; color: #888; text-align: center; font-size: 14px; }

.container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }

.container .content.footer a:hover { text-decoration: underline; }


    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <h1>LOGO HERE</h1>

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Hi Stranger,</h2>

                        <p>Buffalo tenderloin chuck short ribs filet mignon cow shankle. Shankle spare ribs rump drumstick, bacon swine sausage strip steak beef pork belly leberkas. Biltong buffalo tongue t-bone bacon pastrami ribeye alcatra shoulder filet mignon leberkas strip steak capicola turkey ham. Meatball jerky ground round, salami turducken buffalo shoulder spare ribs strip steak alcatra prosciutto pastrami tenderloin drumstick. Pig biltong flank shoulder tail chuck. </p>

                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="http://fritzng.com/" class="button">Visit Our Site</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                       

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Sent by <a href="#">fmedia</a>, 1 Cranium One, Victoria Island, Lagos</p>
                        <p><a href="mailto:">hello@fmedia.com</a> | <a href="#">Unsubscribe</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>'; 
