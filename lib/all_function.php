<?
require_once('onepage.class.php');
$config = new Config();
$onepage = new OnePage();
$online = count($onepage->getStatsOnline());
$allPlayers = count($onepage->getStatsAll());
$record = $onepage->getRecord();
if(isset($_POST['buy'])){
	$groupid = $_POST['group'];
	//$name_group = 'vip_1' 
	//vip - название привилегии [Важно! название группы должно совпадать с название группы в PEX]
	//1 - на 30 дней
	//2 -  навсегда
	switch($groupid){
		case 1:
			$sum = 50;
			$name_group = 'vip_1';
		break;
		case 2:
			$sum = 200;
			$name_group = 'creative_1';
		break;
		case 3:
			$sum = 150;
			$name_group = 'svip_1';
		break;
		case 4:
			$sum = 300;
			$name_group = 'moder_1';
		break;
		case 5:
			$sum = 400;
			$name_group = 'admin_1';
		break;
		case 6:
			$sum = 150;
			$name_group = 'vip_2';
		break;
		case 7:
			$sum = 350;
			$name_group = 'creative_2';
		break;
		case 8:
			$sum = 300;
			$name_group = 'svip_2';
		break;
		case 9:
			$sum = 570;
			$name_group = 'moder_2';
		break;
		case 10:
			$sum = 700;
			$name_group = 'admin_2';
		break;
		default:
			$error = 1;
		break;
	}
	$account = $_POST['username'].'_'.$name_group;
	if($error != 1)header("Location: $config->adress_unitpay?sum=$sum&account=$account&desc=Покупка+привилегий");
	else return false;
}
?>