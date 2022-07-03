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





$username = $t1;
$maintext = $t1.'기업이 입사 제안이 왔했습니다. ';
	class Slack {
    
		private $postData;
		
		public function __construct(){
		}
		
		public function setPostData($postData){
			$this->postData = $postData;
		}
		
		public function sendSlack($postData) {
			
			$this->postData = $postData;
			
			if( isset($this->postData) == false || empty($this->postData) == true) {
				// 데이터가 없으면 값을 보내지 않는다.
				return false;
			}
			
			try {
								
				
				$ch = curl_init('https://hooks.slack.com/services/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');  
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'POST');
				curl_setopt($ch, CURLOPT_POSTFIELDS,     'payload='.json_encode($this->postData));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				
				$result = curl_exec($ch);
				curl_close($ch);
				
			} catch(Exception $e) {
				$s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
				//로깅처리
			}
			
			return true;
		}
		
	
	
	}
	$slack = new Slack(); 
	$postData = array( 'channel' => '#jira_site_slackapitest', 'username' => $username, 'text' =>  $maintext."
	". date("Y-m-d H:i:s") ); 
	
	$slack->sendSlack($postData);



	echo "<script>
	alert('입사 제안해 주셔서 감사드립니다. 최대한 빨리 연락 드리겠습니다.');
	
	parent.location.replace('/Myjob/');
	</script> ";








}




?>	