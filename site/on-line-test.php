<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Diffrent form fo all files</title>
</head>
<body>
<p>Give me answer!:</p>

<form method="post" action="">
<p>2+2<br>
    <input type="checkbox" name="name[]" value="4">4
    <input type="checkbox" name="name[]" value="32">32<br>
    <input type="checkbox" name="name[]" value="7">7
    <input type="checkbox" name="name[]" value="1">1</br>
</p>
<p>2+3<br>
    <input type="checkbox" name="name[]" value="5">5
    <input type="checkbox" name="name[]" value="8">8<br>
    <input type="checkbox" name="name[]" value="14">14
    <input type="checkbox" name="name[]" value="1">1</br>
</p>
<p>11+1<br>
    <input type="checkbox" name="name[]" value="12">12
    <input type="checkbox" name="name[]" value="3">3<br>
    <input type="checkbox" name="name[]" value="3">3
    <input type="checkbox" name="name[]" value="77">77<br>
</p>
<p>4+5<br>
    <input type="checkbox" name="name[]" value="9">9
    <input type="checkbox" name="name[]" value="7">7<br>
    <input type="checkbox" name="name[]" value="18">18
    <input type="checkbox" name="name[]" value="1">1<br>
</p>
<p>1+1<br>
    <input type="checkbox" name="name[]" value="2">2
    <input type="checkbox" name="name[]" value="8">8<br>
    <input type="checkbox" name="name[]" value="3">3
    <input type="checkbox" name="name[]" value="9">9<br>
    <input type="submit" name="submit" value="send">
</p>	
</form>
</body>
</html>


<?php
if (isset($_POST['submit']) && !empty($_POST['name']) ){
$test = array(
0 => array(
'question' => '2+2',
'answer' => 4),
1 => array(
'question' => '2+3',
'answer' => 5),
2 => array(
'question' => '11+1',
'answer' => 12),
3 => array(
'question' => '4+5',
'answer' => 9),
4 => array(
'question' => '1+1',
'answer' => 2),
);
$result = "";

for ($i = 0; $i < count($test); $i++){
foreach ($test[$i] as $value){
foreach($_POST['name'] as $answer){
if($a = $answer == $test[$i]['answer']){
$result++;
echo "$value<br />";
}
}
}
}
$pr = (($result/2)*100)/5;
echo "right answers is " .ceil($pr) . "%";
}
?>