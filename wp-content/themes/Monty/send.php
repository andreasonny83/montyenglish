<?php
require_once( 'recaptchalib.php' );
$privatekey       = RECAPTCHA_PRIVATEKEY;
$captcha_response = false;
isset( $_POST['form_name'] )    ? $name    = $_POST['form_name']    : $name    = '';
isset( $_POST['form_email'] )   ? $email   = $_POST['form_email']   : $email   = '';
isset( $_POST['form_message'] ) ? $message = $_POST['form_message'] : $message = '';

# was there a reCAPTCHA response?
if ( isset ( $_POST["recaptcha_response_field"] ) ) {
	$resp = recaptcha_check_answer ( $privatekey,
		$_SERVER["REMOTE_ADDR"],
		$_POST["recaptcha_challenge_field"],
		$_POST["recaptcha_response_field"]);

	if ( $resp->is_valid ) {
		$captcha_response = true;
	}
}

$to = 'montyenglish0558@gmail.com';
// $second = 'andreasonny83@gmail.com';
$subject = 'MontyEnglish Website contact form';
$headers = 'From: MontyEnglish <info@montyenglish.co.uk>' . "\r\n" ;
$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$body = '
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic);
body {margin: 0; padding: 0; min-width: 100%; } table {border-collapse: collapse; border-spacing: 0; } td {padding: 0; vertical-align: top; } .spacer, .border {font-size: 1px; line-height: 1px; } img {border: 0; -ms-interpolation-mode: bicubic; } .image {font-size: 0; Margin-bottom: 27px; } .image img {display: block; } .logo img {display: block; } strong {font-weight: bold; } h1, h2, h3, p, ol, ul, li {Margin-top: 0; } ol, ul, li {padding-left: 0; } .btn a {mso-hide: all; } blockquote {Margin-top: 0; Margin-right: 0; Margin-bottom: 0; padding-right: 0; } .column-top {font-size: 20px; line-height: 20px; } .column-bottom {font-size: 3px; line-height: 3px; } .column {text-align: left; } .contents {width: 100%; } .padded {padding-left: 20px; padding-right: 20px; } .wrapper {background-color: #fefefe; width: 100%; min-width: 620px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; } table.wrapper {table-layout: fixed; } .one-col, .two-col, .three-col {Margin-left: auto; Margin-right: auto; width: 600px; } .one-col p, .one-col ol, .one-col ul {Margin-bottom: 27px; } .two-col p, .two-col ol, .two-col ul {Margin-bottom: 24px; } .two-col .image {Margin-bottom: 24px; } .two-col .column-bottom {font-size: -4px; line-height: -4px; } .two-col .column {width: 300px; } .three-col p, .three-col ol, .three-col ul {Margin-bottom: 21px; } .three-col .image {Margin-bottom: 21px; } .three-col .column-bottom {font-size: -1px; line-height: -1px; } .three-col .column {width: 200px; } @media only screen and (max-width: 620px) {[class*=wrapper] {min-width: 320px !important; width: 100%!important; } [class*=wrapper] .one-col, [class*=wrapper] .two-col, [class*=wrapper] .three-col {width: 320px !important; } [class*=wrapper] .column {display: block; width: 320px !important; } [class*=wrapper] .padded {padding-left: 20px !important; padding-right: 20px !important; } [class*=wrapper] .full {display: none; } [class*=wrapper] .block {display: block !important; } [class*=wrapper] .hide {display: none !important; } [class*=wrapper] .image {margin-bottom: 27px !important; } [class*=wrapper] .image img {height: auto !important; width: 100% !important; } } .wrapper h1 {font-weight: 400; } .wrapper h2 {font-weight: 700; } .wrapper h3 {font-style: italic; font-weight: 700; } .wrapper p, .wrapper ol, .wrapper ul {font-weight: 400; letter-spacing: -0.01em; } .wrapper blockquote {font-style: italic; } .two-col h2 {letter-spacing: -0.028em; } .divider {font-size: 4px; line-height: 4px; } .contents .divider, .footer .divider table {Margin-bottom: 27px; } .divider .bull {background-color: #cccccc; border-radius: 2px; display: inline-block; font-size: 1px; height: 4px; line-height: 1px; overflow: hidden; width: 4px; } .email-top, .email-bottom {font-size: 54px; line-height: 54px; } .column {color: #353638; } .btn {Margin-bottom: 27px; } .wrapper .btn a {border: 1px solid #888888; border-radius: 5px; color: #888888; display: inline-block; font-size: 15px; line-height: 24px; padding: 12px 24px; text-align: center; text-decoration: none !important; transition: border-color 0.2s, color 0.2s; } .wrapper .btn a:hover {border-color: #353638 !important; color: #353638 !important; } .wrapper h1, .wrapper h2, .wrapper h3, .wrapper p, .wrapper ol, .wrapper ul, .wrapper .btn a, .wrapper .header td, .wrapper .header .logo, .wrapper .footer div {font-family: Georgia, serif; } @media screen and (min-width: 0) {.wrapper h1, .wrapper h2, .wrapper h3, .wrapper p, .wrapper ol, .wrapper ul, .wrapper .btn a, .wrapper .header td, .wrapper .header .logo, .wrapper .footer div {font-family: Merriweather, Georgia, serif !important; } } .wrapper a {color: #289fd8; text-decoration: underline; } .wrapper a:hover {text-decoration: none !important; } .wrapper h1 {font-size: 32px; line-height: 42px; Margin-bottom: 24px; } .wrapper h2 {font-size: 22px; line-height: 30px; Margin-bottom: 16px; } .wrapper h3 {font-size: 18px; line-height: 26px; Margin-bottom: 12px; } .wrapper h1 a, .wrapper h2 a, .wrapper h3 a {color: #353638; text-decoration: none; } .wrapper p, .wrapper ol, .wrapper ul {-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; } .wrapper li {Margin-bottom: 14px; } .wrapper ol {Margin-left: 24px; } .wrapper ol li {padding-left: 4px; } .wrapper ul {margin-left: 18px; } .wrapper ul li {padding-left: 9px; } .wrapper blockquote {border-left: 4px solid #808080; color: #808080; Margin-left: 0; padding-left: 17px; } .one-col .column table:nth-last-child(2) td h1:last-child, .one-col .column table:nth-last-child(2) td h2:last-child, .one-col .column table:nth-last-child(2) td h3:last-child, .one-col .column table:nth-last-child(2) td p:last-child, .one-col .column table:nth-last-child(2) td ol:last-child, .one-col .column table:nth-last-child(2) td ul:last-child {Margin-bottom: 27px; } .one-col p, .one-col ol, .one-col ul {font-size: 17px; line-height: 27px; } .two-col .column table:nth-last-child(2) td h1:last-child, .two-col .column table:nth-last-child(2) td h2:last-child, .two-col .column table:nth-last-child(2) td h3:last-child, .two-col .column table:nth-last-child(2) td p:last-child, .two-col .column table:nth-last-child(2) td ol:last-child, .two-col .column table:nth-last-child(2) td ul:last-child {Margin-bottom: 24px; } .two-col .column-bottom {font-size: 6px; line-height: 6px; } .two-col h1 {font-size: 28px; line-height: 36px; Margin-bottom: 20px; } .two-col h2 {font-size: 22px; line-height: 30px; Margin-bottom: 14px; } .two-col h3 {font-size: 16px; line-height: 24px; Margin-bottom: 10px; } .two-col p, .two-col ol, .two-col ul {font-size: 15px; line-height: 24px; } .two-col ol {Margin-left: 21px; } .two-col ol li {padding-left: 3px; } .two-col ul {Margin-left: 18px; } .two-col ul li {padding-left: 6px; } .two-col li {Margin-bottom: 12px; } .two-col .divider {Margin-bottom: 24px; } .two-col blockquote {border-left-width: 3px; padding-left: 15px; } .two-col .btn {Margin-bottom: 24px; } .two-col .btn a {font-size: 13px; line-height: 21px; padding: 10px 18px; } .three-col .column table:nth-last-child(2) td h1:last-child, .three-col .column table:nth-last-child(2) td h2:last-child, .three-col .column table:nth-last-child(2) td h3:last-child, .three-col .column table:nth-last-child(2) td p:last-child, .three-col .column table:nth-last-child(2) td ol:last-child, .three-col .column table:nth-last-child(2) td ul:last-child {Margin-bottom: 21px; } .three-col .column-bottom {font-size: 9px; line-height: 9px; } .three-col h1 {font-size: 24px; line-height: 32px; Margin-bottom: 16px; } .three-col h2 {font-size: 16px; line-height: 24px; Margin-bottom: 12px; } .three-col h3 {font-size: 14px; line-height: 22px; Margin-bottom: 8px; } .three-col p, .three-col ol, .three-col ul {font-size: 13px; line-height: 21px; } .three-col ul {Margin-left: 16px; } .three-col ul li {padding-left: 6px; } .three-col ol {Margin-left: 18px; } .three-col ol li {padding-left: 4px; } .three-col li {Margin-bottom: 10px; } .three-col .divider {Margin-bottom: 21px; } .three-col blockquote {border-left-width: 2px; padding-left: 13px; } .three-col .btn {Margin-bottom: 21px; } .three-col .btn a {font-size: 11px; line-height: 19px; padding: 8px 14px; } .header, .footer {Margin-left: auto; Margin-right: auto; width: 560px; } .header td {color: #aaaaaa; font-size: 24px; } .header .logo {padding-bottom: 27px; font-weight: bold; font-size: 32px; line-height: 42px; color: #202020; } .header .logo a {text-decoration: none; color: #202020; } .footer div {color: #bbbbbb; font-size: 11px; line-height: 17px; Margin-bottom: 17px; } .footer div a {color: #bbbbbb; font-weight: 700; text-decoration: none; } .footer div a:hover {text-decoration: underline !important; } .footer .divider {Margin-bottom: 10px; } .footer .divider table {Margin-left: auto; Margin-right: auto; } .footer .divider td.spacer {width: 8px; } @media only screen and (max-width: 620px) {[class*=wrapper] .one-col .column:last-child table:nth-last-child(2) td h1:last-child, [class*=wrapper] .two-col .column:last-child table:nth-last-child(2) td h1:last-child, [class*=wrapper] .three-col .column:last-child table:nth-last-child(2) td h1:last-child, [class*=wrapper] .one-col .column:last-child table:nth-last-child(2) td h2:last-child, [class*=wrapper] .two-col .column:last-child table:nth-last-child(2) td h2:last-child, [class*=wrapper] .three-col .column:last-child table:nth-last-child(2) td h2:last-child, [class*=wrapper] .one-col .column:last-child table:nth-last-child(2) td h3:last-child, [class*=wrapper] .two-col .column:last-child table:nth-last-child(2) td h3:last-child, [class*=wrapper] .three-col .column:last-child table:nth-last-child(2) td h3:last-child, [class*=wrapper] .one-col .column:last-child table:nth-last-child(2) td p:last-child, [class*=wrapper] .two-col .column:last-child table:nth-last-child(2) td p:last-child, [class*=wrapper] .three-col .column:last-child table:nth-last-child(2) td p:last-child, [class*=wrapper] .one-col .column:last-child table:nth-last-child(2) td ol:last-child, [class*=wrapper] .two-col .column:last-child table:nth-last-child(2) td ol:last-child, [class*=wrapper] .three-col .column:last-child table:nth-last-child(2) td ol:last-child, [class*=wrapper] .one-col .column:last-child table:nth-last-child(2) td ul:last-child, [class*=wrapper] .two-col .column:last-child table:nth-last-child(2) td ul:last-child, [class*=wrapper] .three-col .column:last-child table:nth-last-child(2) td ul:last-child {Margin-bottom: 27px !important; } [class*=wrapper] .email-top, [class*=wrapper] .email-bottom {font-size: 28px !important; line-height: 28px !important; } [class*=wrapper] .header, [class*=wrapper] .footer {width: 280px !important; } [class*=wrapper] .logo img {max-width: 280px!important; height: auto!important; } [class*=wrapper] blockquote {border-left-width: 4px !important; margin-left: 0 !important; padding-left: 14px !important; } [class*=wrapper] h1 {font-size: 32px !important; line-height: 42px !important; margin-bottom: 24px !important; } [class*=wrapper] h2 {font-size: 22px !important; line-height: 30px !important; margin-bottom: 16px !important; } [class*=wrapper] h3 {font-size: 18px !important; line-height: 26px !important; margin-bottom: 12px !important; } [class*=wrapper] .one-col p, [class*=wrapper] .two-col p, [class*=wrapper] .three-col p, [class*=wrapper] .one-col ol, [class*=wrapper] .two-col ol, [class*=wrapper] .three-col ol, [class*=wrapper] .one-col ul, [class*=wrapper] .two-col ul, [class*=wrapper] .three-col ul {font-size: 17px !important; line-height: 27px !important; margin-bottom: 27px !important; } [class*=wrapper] ol {margin-left: 24px !important; } [class*=wrapper] ol li {padding-left: 4px !important; } [class*=wrapper] ul {margin-left: 19px !important; } [class*=wrapper] ul li {padding-left: 9px !important; } [class*=wrapper] li {margin-bottom: 14px !important; } [class*=wrapper] .divider {margin-bottom: 27px !important; } [class*=wrapper] .btn {margin-bottom: 27px !important; } [class*=wrapper] .btn a {display: block !important; font-size: 15px !important; line-height: 24px !important; padding: 12px 24px !important; } [class*=wrapper] .column-bottom {font-size: 3px !important; line-height: 3px !important; } [class*=wrapper] .first .column-bottom, [class*=wrapper] .second .column-top, [class*=wrapper] .three-col .second .column-bottom, [class*=wrapper] .third .column-top {display: none; } [class*=wrapper] .show {display: block!important; font-size: 1px; line-height: 1px; } [class*=wrapper] .hide {display: none!important; } } </style> <!--[if mso]>
<style>
.spacer, .column-top, .column-bottom {mso-line-height-rule: exactly; }
</style> <![endif]-->
<body class="emb-font-stack-default" bgcolor="#fefefe">
<table class="wrapper" style="border-collapse: collapse;border-spacing: 0;background-color: #fefefe;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;table-layout: fixed">
<tbody><tr>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top">
<center>
<div class="email-top" style="font-size: 54px;line-height: 54px">&nbsp;</div>
<table class="header" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 560px">
<tbody><tr>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top;color: #aaaaaa;font-size: 24px;font-family: Georgia, serif" align="left">
</td>
</tr>
</tbody></table>
</center>
</td>
</tr>
</tbody></table>

<table class="wrapper" style="border-collapse: collapse;border-spacing: 0;background-color: #fefefe;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;table-layout: fixed">
<tbody><tr>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top">
<center>
<table class="one-col" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px">
<tbody><tr>
<td class="column" style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top;text-align: left;color: #353638">
<div><div class="column-top" style="font-size: 20px;line-height: 20px">&nbsp;</div></div>
<table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%">
<tbody><tr>
<td class="padded" style="padding-top: 0;padding-bottom: 0;padding-left: 20px;padding-right: 20px;vertical-align: top">

<h1 style="Margin-top: 0;font-weight: 400;font-family: Georgia, serif;font-size: 32px;line-height: 42px;Margin-bottom: 24px">Hey Jon,<br>You\'ve got mail!</h1><p style="Margin-top: 0;font-weight: 400;letter-spacing: -0.01em;font-family: Georgia, serif;-webkit-font-smoothing: antialiased;text-rendering: optimizeLegibility;Margin-bottom: 27px;font-size: 17px;line-height: 27px">From: ' . $name . '<br>
Mail: ' . $email . '</p>

</td>
</tr>
</tbody></table>

<table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%">
<tbody><tr>
<td class="padded" style="padding-top: 0;padding-bottom: 0;padding-left: 20px;padding-right: 20px;vertical-align: top">

<center class="divider" style="font-size: 4px;line-height: 4px;Margin-bottom: 27px">
<span class="bull" style="background-color: #cccccc;border-radius: 2px;display: inline-block;font-size: 1px;height: 4px;line-height: 1px;overflow: hidden;width: 4px"><img style="border-left-width: 0;border-top-width: 0;border-bottom-width: 0;border-right-width: 0;-ms-interpolation-mode: bicubic" src="http://i2.createsend1.com/static/eb/master/04-broadsheet/images/bull.gif" alt="" width="4" height="4"></span>
</center>

</td>
</tr>
</tbody></table>

<table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%">
<tbody><tr>
<td class="padded" style="padding-top: 0;padding-bottom: 0;padding-left: 20px;padding-right: 20px;vertical-align: top">

<p style="Margin-top: 0;font-weight: 400;letter-spacing: -0.01em;font-family: Georgia, serif;-webkit-font-smoothing: antialiased;text-rendering: optimizeLegibility;Margin-bottom: 27px;font-size: 17px;line-height: 27px"> ' . $message . '</p>

</td>
</tr>
</tbody></table>

<div class="column-bottom" style="font-size: 3px;line-height: 3px">&nbsp;</div>
</td>
</tr>
</tbody></table>
</center>
</td>
</tr>
</tbody></table>

<table class="wrapper" style="border-collapse: collapse;border-spacing: 0;background-color: #fefefe;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;table-layout: fixed">
<tbody><tr>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top">
<center>
<table class="footer" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 560px">
<tbody><tr>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top" align="center">
<div class="column-top" style="font-size: 11px;line-height: 17px;color: #bbbbbb;Margin-bottom: 17px;font-family: Georgia, serif">&nbsp;</div>
<center class="divider" style="font-size: 4px;line-height: 4px;Margin-bottom: 10px">
<table style="border-collapse: collapse;border-spacing: 0;Margin-bottom: 27px;Margin-left: auto;Margin-right: auto">
<tbody><tr>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top"><span class="bull" style="background-color: #cccccc;border-radius: 2px;display: inline-block;font-size: 1px;height: 4px;line-height: 1px;overflow: hidden;width: 4px"><img style="border-left-width: 0;border-top-width: 0;border-bottom-width: 0;border-right-width: 0;-ms-interpolation-mode: bicubic" src="http://i2.createsend1.com/static/eb/master/04-broadsheet/images/bull.gif" alt="" width="4" height="4"></span></td>
<td class="spacer" style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top;font-size: 1px;line-height: 1px;width: 8px">&nbsp;</td>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top"><span class="bull" style="background-color: #cccccc;border-radius: 2px;display: inline-block;font-size: 1px;height: 4px;line-height: 1px;overflow: hidden;width: 4px"><img style="border-left-width: 0;border-top-width: 0;border-bottom-width: 0;border-right-width: 0;-ms-interpolation-mode: bicubic" src="http://i2.createsend1.com/static/eb/master/04-broadsheet/images/bull.gif" alt="" width="4" height="4"></span></td>
<td class="spacer" style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top;font-size: 1px;line-height: 1px;width: 8px">&nbsp;</td>
<td style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0;vertical-align: top"><span class="bull" style="background-color: #cccccc;border-radius: 2px;display: inline-block;font-size: 1px;height: 4px;line-height: 1px;overflow: hidden;width: 4px"><img style="border-left-width: 0;border-top-width: 0;border-bottom-width: 0;border-right-width: 0;-ms-interpolation-mode: bicubic" src="http://i2.createsend1.com/static/eb/master/04-broadsheet/images/bull.gif" alt="" width="4" height="4"></span></td>
</tr>
</tbody></table>
</center>
<div style="color: #bbbbbb;font-size: 11px;line-height: 17px;Margin-bottom: 17px;font-family: Georgia, serif">This email has been automatic sent to you from the MontyEnglish.co.uk</div>
<div style="color: #bbbbbb;font-size: 11px;line-height: 17px;Margin-bottom: 17px;font-family: Georgia, serif">Developed by SonnyWebDesign<br>
andreasonny83@gmail.com</div>

</td>
</tr>
</tbody></table>
<div class="email-bottom" style="font-size: 54px;line-height: 54px">&nbsp;</div>
</center>
</td>
</tr>
</tbody></table>
<img style="border-left-width: 0 !important;border-top-width: 0 !important;border-bottom-width: 0 !important;border-right-width: 0 !important;-ms-interpolation-mode: bicubic;height: 1px !important;width: 1px !important;margin-top: 0 !important;margin-bottom: 0 !important;margin-left: 0 !important;margin-right: 0 !important;padding-top: 0 !important;padding-bottom: 0 !important;padding-left: 0 !important;padding-right: 0 !important" src="http://createsend1.com/t/t-o-jrnkjd-l/o.gif" width="1" height="1" border="0" alt="">
</body>
';

if ( $name && $email && $message ) {
	if ( $captcha_response ) {
		if ( mail( $to, $subject, $body, $headers ) ) {
			// mail( $second, $subject, $body, $headers );
			echo '
				<div class="contact_message ok">
					Your message has been sent!
				</div>';
		} else {
			echo '
				<div class="contact_message no">
					Something went wrong, go back and try again!
				</div>';
		}
	}
	else {
		echo '
			<div class="contact_message no">
				Sorry but you put a wrong Captcha!<br/>Please, go back and try again.
			</div>';
	}
}
?>