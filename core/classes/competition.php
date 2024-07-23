<?PHP

class competition{

	var $db = NULL;
	var $compd = array();
	
	
	# Конструктор
	function __construct($db){
	
		$this->db = $db;
		$this->compd = $this->CompData();
		
	}
	
	# Данные конкурса
	function CompData(){
	
		$sql=$this->db->Query("SELECT * FROM db_competition WHERE status = '0' LIMIT 1");	
		if($sql->RowCount() > 0){
			
			return $sql->Fetch();

				
		}else return false;
	}
	
	# Обновляем очки пользователя
	function UpdatePoints($user_id, $sum){
	
		$user_id = intval($user_id);
		$sum = round($sum, 2);
		
		if($this->compd["date_add"] >= 0 AND $this->compd["date_end"] > time()){
		
			$sql=$this->db->Query("SELECT  	curator , reg_unix  FROM ss_users WHERE id = '{$user_id}'");
			$ret_d = $sql->Fetch();
			
			if($ret_d["reg_unix"] >= $this->compd["date_add"]){
			
					# Проверяем есть ли пользователь в конкурсе
				$ref_id = $ret_d["curator"];
				$sql=$this->db->Query("SELECT id FROM db_competition_users WHERE user_id = '{$ref_id}'");
				$sql2=$this->db->Query("SELECT wallet FROM ss_users WHERE id = '$ref_id'")->Fetch();
				if($sql2[wallet]){
				if($sql->RowCount() == 1){
					$sql=$this->db->Query("UPDATE db_competition_users SET points = points + '{$sum}' WHERE user_id = '{$ref_id}'");
				
				}else {
			
				$sql=$this->db->Query("INSERT INTO db_competition_users (user, user_id, points) VALUES ('{$sql2[wallet]}','{$ref_id}','$sum')");
				
				}
				}
				return true;
				
			}else return false;
			
		}else return false;
		
	}
	
}



?>