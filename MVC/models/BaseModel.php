
<?php 	
	class BaseModel extends Database
	{
		function __construct()
		{
			$this->connect=$this->connect();
		}
		public function excute($sql){
			return mysqli_query($this->connect,$sql);

		}
		public function all($table,$select=['*'],$orderBy=[]){
			
			$selectList=implode(',', $select);
			$orderByList=implode(',', $orderBy);
			
			if($orderByList){
				$sql="SELECT ${selectList} from ${table} order by ${orderByList}";

			}else
			{
				$sql="SELECT ${selectList} from ${table}";
			}
			
			$query=$this->excute($sql);
			$data=[];
			while ($row=mysqli_fetch_assoc($query)) {
				array_push($data,$row);
			}
			return $data;
		}
	public function _query($sql){
		return mysqli_query($this->connect,$sql);
	}
	public function find($table,$id){
		$sql="SELECT * FROM ${table} where id=${id}";
		$query=$this->_query($sql);
		return mysqli_fetch_assoc($query);
	}



	public function create($table, $data=[]){
		$keyList=implode(',', array_keys($data));

		$valueList=array_map(function($v){
			return"'".$v."'";
		},array_values($data));

		$values=implode(',', $valueList);
		// die($values);

		$sql="INSERT INTO ${table}(${keyList}) value(${values})";
		
		$query=$this->excute($sql);
	}

	public function delete($table, $id){
		$sql="DELETE FROM $table where id=${id}";
		$this->excute($sql);
	}

	public function updatenew($table, $id, $data){
		$list=[];
		foreach ($data as $key => $val) {
			array_push($list,"${key} ='".$val."'" );
		}
		$valueList=implode(",", $list);
		// die($valueList);
		$sql="UPDATE ${table} set ${valueList} where id=${id}";
		$this->excute($sql);

	}

}

?>