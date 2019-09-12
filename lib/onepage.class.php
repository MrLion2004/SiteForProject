<?
require_once('config.class.php');
class OnePage{
	private $mysqli;
	private $config;
	
	public function __construct(){
		$this->config = new Config();
		$this->mysqli = new mysqli($this->config->host, $this->config->user,$this->config->password,$this->config->db);
	}
	public function query($query){
		return $this->mysqli->query($query);
	}
	public function getStatsOnline(){
		$result = $this->mysqli->query("SELECT username FROM authme WHERE isLogged='1'");	//Запрос к БД
		$i = 0;
		while($row = $result->fetch_assoc()){
			$data[$i] = $row;
			$i++;
		}
		return $data;
	}
	public function getStatsAll(){
		$result = $this->mysqli->query("SELECT * FROM authme");	//Запрос к БД
		$i = 0;
		while($row = $result->fetch_assoc()){
			$data[$i] = $row;
			$i++;
		}
		return $data;
	}
	public function getRecord(){
		$result = $this->mysqli->query("SELECT * FROM record_players");
		$data = $result->fetch_assoc();
		$resultOnline = $this->getStatsOnline();
		$onlinePlayers = count($resultOnline);
		if($data['record'] < $onlinePlayers){
		$sql = $this->mysqli->query("UPDATE record_players SET record='$onlinePlayers'");
		$result = $this->mysqli->query("SELECT * FROM record_players");
		$data = $result->fetch_assoc();
		return $data;
		}else return $data;
	}
}
?>