<?php 
class ProductModel extends BaseModel{
	const TABLE="sanpham";
	public function getALL($select=['*'],$orderBy=[])
	{
		$product=$this->all(self::TABLE,$select,$orderBy);
		return $product;
	}
	public function findById($id){
		return $this->find(self::TABLE, $id);
	}
	public function store($data=[]){
		$this->create(self::TABLE,$data);
	}
	public function update($id,$data){
		$this->updatenew(self::TABLE,$id,$data);
	}

	public function destroy($id){
		$this->delete(self::TABLE,$id);
	}

}   
?>