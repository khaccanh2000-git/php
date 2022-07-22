<?php 

class LayoutController extends Connect
{
	private $productModel;
	function __construct()
	{
		$this->call_models('ProductModel');
		$this->productModel=new ProductModel;
	}
	function index(){
		$data['main']='home/listProduct';
		$data['product']=$this->productModel->getAll();
		$this->call_views('layout/index',$data);
	}
	function delete(){
		
	}
}
?>