<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "survey_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$VeryBad = $array[0];
$Bad = $array[1];
$BadGood = $array[2];
$Good = $array[3];
$VeryGood = $array[4];


if ($vote == 100) {
  $VeryBad = $VeryBad + 1;
}
if ($vote == 75) {
  $Bad = $Bad + 1;
}
if ($vote == 50) {
  $Bad/Good = $Bad/Good + 1;
}
if ($vote == 25) {
  $Good = $Good + 1;
}
if ($vote == 0) {
  $VeryGood = $VeryGood + 1;
}
//insert votes to txt file
$insertvote = $VeryBad."||".$Bad."||".$BadGood."||".$Good."||".$VeryGood;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h3 align="center">설문 응답 결과</h3>
<table align="center" style="border:1px solid gray;background-color:#eff5f5;" cellpadding=10>

<tr>
<td align="center"><b>Yes:</b></td>
<td >
<img src="survey.gif"
width='<?php echo(100*round($VeryBad/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>'
height='40'>
<?php echo(100*round($VeryBad/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>%
</td>
</tr>

<tr>
<td align="center"><b>Yes:</b></td>
<td >
<img src="survey.gif"
width='<?php echo(100*round($Bad/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>'
height='40'>
<?php echo(100*round($Bad/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>%
</td>
</tr>

<tr>
<td align="center"><b>No:</b></td>
<td>
<img src="survey.gif"
width='<?php echo(100*round($Bad/Good/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>'
height='40'>
<?php echo(100*round($Bad/Good/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5); ?>%
</td>
</tr>

<tr>
<td align="center"><b>Yes:</b></td>
<td >
<img src="survey.gif"
width='<?php echo(100*round($Good/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>'
height='40'>
<?php echo(100*round($Good/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>%
</td>
</tr>

<tr>
<td align="center"><b>Yes:</b></td>
<td >
<img src="survey.gif"
width='<?php echo(100*round($VeryGood/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>'
height='40'>
<?php echo(100*round($VeryGood/($VeryBad+$Bad+$BadGood+$Good+$VeryGood),5)); ?>%
</td>
</tr>

<?php
if ($yes > $no) {
echo
"
<tr>
<td align='center'colspan=2><iframe width='400' height='450' src='../mouse/mouse_game.html' scrolling='no' frameborder='0' allowfullscreen></iframe>
</td>
</tr>
<tr>
<td colspan=2><iframe width='476' height='268' src='https://www.youtube.com/embed/t8XZ-_EgWB8' frameborder='0' allowfullscreen></iframe>

</td>
</tr>
<tr>
<td colspan=2><iframe width='476' height='268' src='https://www.youtube.com/embed/AOd5GuaNXGU' frameborder='0' allowfullscreen></iframe>
</td>
</tr>

";
}
else
{
	echo
"<tr>
<td colspan=2><b>yse</b>가 <b>no</b>보다 %수치가 높지 않습니다. <br>
쥐의 자존심입니다.^^;<br>
설문조사에 응해주셔서 감사합니다.
</td>
</tr> ";
}
?>

</table>

