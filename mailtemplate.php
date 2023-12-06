<?php 


function uploadresume($arr2){
    $temp2 ='<html>
<head>
<title>message</title>
</head>
<body>
	<div>
	<p>Hello Admin,</p>
	<p class="lp">You got a mail from Website for <b>"Course Enquiry."</b></p>
	<p>Please find the detail below:</p>
		<table style="font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;">';
 foreach($arr2 as $k => $v){
     if($k=='submit2' || $k == 'url') continue;
  $temp2 .= '<tr>
    <td style="border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;">'.$k.'</td>
    <td style="border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;">'.$v.'</td>
  </tr>';
}
 $temp2 .= ' </table>
	</div><br>
	<b>Thank You Regards <br />Multitech Institute</b>
</body>
</html>';
    return $temp2;
}
