<?php

 if (isset($_POST['submit'])) {
$leapyear = strip_tags(trim($_POST['leapyear']));
if(!is_numeric($leapyear)){echo 'vvedite 4islo';}
	elseif(!empty($leapyear) && strlen($leapyear) < 4 || strlen($leapyear) > 4){echo 'vvedite 4 cifri';}
		elseif($leapyear%4 == 0){echo $leapyear . ' visokosniy';}
	else{echo $leapyear . ' ne visokosniy';}
 }


?>
<form method="post" action="forma.html">
<input type="submit" value="return">
</form>
