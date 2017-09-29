<?php




$file=file('survey_result.txt');
//print_r($file);

$data=explode(" ",$file[0]);

list($VeryGood, $Good, $GoodBad, $Bad, $VeryBad)=$data;


?>


<h3 align="center">투표 결과 보기</h3>
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
<tr>
<td colspan=2>

<?php 
echo "<br><br> vote : ";
echo($VeryGood+$Good+$GoodBad+$Bad+$VeryBad);
echo "<br><br>매우찬성 : $VeryGood ";
echo "<br>찬&emsp;&emsp;성 : $Good" ;
echo "<br>중&emsp;&emsp;립 : $GoodBad" ;
echo "<br>반&emsp;&emsp;대 : $Bad" ;
echo "<br>매우반대 : $VeryBad" ;

?>

</td>
</tr>

</table>

