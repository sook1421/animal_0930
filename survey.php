﻿<?php
$vote = $_REQUEST['range_vote'];

//get content of textfile
$filename = "survey_result.txt";
$content = file($filename);

//put content in array
$array = explode(" ", $content[0]);


$VeryGood = $array[0];
$Good = $array[1];
$GoodBad =$array[2];
$Bad = $array[3];
$VeryBad = $array[4];

if ($vote == 0) {
  $VeryGood = $VeryGood + 1;
  
} 

else if ($vote == 25) {
  $Good = $Good + 1;

} 

else if ($vote == 50) {
  $GoodBad = $GoodBad + 1;

} 

else if ($vote == 75) {
  $Bad = $Bad + 1;

} 
else {
  $VeryBad = $VeryBad + 1;
}



//insert votes to txt file
$insertvote = $VeryGood." ".$Good." ".$GoodBad." ".$Bad." ".$VeryBad;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3 align="center">투표 참여 결과</h3>
<table align="center" style="border:1px solid #333;background-color:#eff5f5;" cellpadding=0 cellspacing=15>

<tr>
<td align="center"><b>매우찬성 :</b></td>
<td style="background-color:#ffffff;width:350px;">
<img src="img_php/surveyVG_n.png" style="vertical-align:middle;"
width='<?php echo(300*round($VeryGood/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>'
height='35'>
<?php echo(100*round($VeryGood/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>%
</td>
</tr>
<tr>
<td align="center"><b>찬&emsp;&emsp;성 :</b></td>
<td style="background-color:#ffffff;width:350px;">
<img src="img_php/surveyG_n.png" style="vertical-align:middle;"
width='<?php echo(300*round($Good/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>'
height='35'>
<?php echo(100*round($Good/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>%
</td>
</tr>

<tr>
<td align="center"><b>중&emsp;&emsp;립 :</b></td>
<td style="background-color:#ffffff;width:350px;">
<img src="img_php/surveyGB.png" style="vertical-align:middle;"
width='<?php echo(300*round($GoodBad/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>'
height='35'>
<?php echo(100*round($GoodBad/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>%
</td>
</tr>



<tr>
<td align="center"><b>반&emsp;&emsp;대 :</b></td>
<td style="background-color:#ffffff;width:350px;">
<img src="img_php/surveyB_n.png" style="vertical-align:middle;"
width='<?php echo(300*round($Bad/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>'
height='35'>
<?php echo(100*round($Bad/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>% 
</td>
</tr>

<tr>
<td align="center"><b>매우반대 :</b></td>
<td style="background-color:#ffffff;width:350px;">
<img src="img_php/surveyVB_n.png" style="vertical-align:middle;"
width='<?php echo(300*round($VeryBad/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>'
height='35'>
<?php echo(100*round($VeryBad/($VeryGood+$Good+$GoodBad+$Bad+$VeryBad),3)); ?>%
</td>
</tr>


</table>

