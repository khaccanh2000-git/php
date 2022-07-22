<?php 

class CartController extends Connect
{
	private $productModel;
	function __construct()
	{
		$this->call_models('ProductModel');
		$this->productModel=new ProductModel();
	}
	function index(){
			// $data=[];
			// $this->call_views('layout/cart/cart',$data);

			if(isset($_SESSION['cart'])){
				$data['cart']=$_SESSION['cart'];
			}
			// echo "<prev>";
			// print_r($_SESSION['cart']);
			// echo "</prev>";
			$this->call_views('layout/cart/cart',$data);
		}
	function store($id){
		$product = $this->productModel->findByID($id);
		$product['count']=2;
		$_SESSION['cart'][$id]=$product;
		header("location:".URL.'cart/index');

	}	
	function delete($id){
		unset($_SESSION['cart'][$id]);
		header("location:".URL.'cart/index');
	}
}
 ?>