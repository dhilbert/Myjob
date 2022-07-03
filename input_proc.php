<?php

include_once('lib/dbcon.php');



$t1 = isset($_GET['t1']) ? $_GET['t1'] : null;
$t2 = isset($_GET['t2']) ? $_GET['t2'] : null;
$t3 = isset($_GET['t3']) ? $_GET['t3'] : null;
$t4 = isset($_GET['t4']) ? $_GET['t4'] : null;
$t5 = isset($_GET['t5']) ? $_GET['t5'] : null;
$t6 = isset($_GET['t6']) ? $_GET['t6'] : null;

if($t1==Null) {
	echo "<script>
	alert('회사명을 입력해 주세요');
	history.back();
	</script> ";
}

elseif($t2==Null) {
	echo "<script>
	alert('연락받으실 분의 성함을 입력해주세요');
	history.back();
	</script> ";
}
elseif($t3==Null) {
	echo "<script>
	alert('연락처를 입력해주세요');
	history.back();
	</script> ";
}
elseif($t4==Null) {
	echo "<script>
	alert('이력서를 전달할 이메일을 입력해 주세요.');
	history.back();
	</script> ";
}else{
$now_time =  date("Y-m-d H:i:s");


$sql	 = "
insert myjob set 
t1 = '".$t1."',
t2 = '".$t2."',
t3 = '".$t3."',
t4 = '".$t4."',
t5 = '".$t5."',
t6 = '".$t6."',
regtime = '".$now_time ."'



;";
$res	=  mysqli_query($real_sock,$sql) or die(mysqli_error($real_sock));











}




?>	