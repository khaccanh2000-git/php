<?php 
	class ProductController extends connect
	{
		private $productModel;
		function __construct(){
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel();
		}
		function index(){
			$data['product']=$this->productModel->getAll(['*'],[]);
			$data['main']='product/index';
			$this->call_views('admin/index',$data);
		}
		function store(){
			if(isset($_POST['addProduct'])){
				$img=$_FILES['anh']['name'];
				if($img != NULL)
				{
					$tmp_name=$_FILES['anh']['tmp_name'];
					move_uploaded_file($tmp_name, './public/layout/img/product/'.$img);
					$product=[
						'tensp'=>$_POST['tensp'],
						'img'=>$img,
						'gia'=>$_POST['gia'],
						'soluong'=>$_POST['soluong'],
						'xuatxu'=>$_POST['xuatxu']
					];
					$this->productModel->store($product);
					$data['product']=$this->productModel->getALL();
					$data['main']='product/index';
					$this->call_views('admin/index',$data);
				}
			}


			$data['main']='product/add';
			$this->call_views('admin/index',$data);
		}
		function edit($id){
			if (isset($_POST['editProduct'])){
    			$img=$_FILES['anh']['name'];
			        if($img!=NULL){
				        $product = [
		 					'img'=>$img
		 				];
		 			$this->productModel->update($id,$product);
		 			$data['product']=$this->productModel->getAll();
		 			$data['main']='product/index';
		 			$this->call_views('admin/index',$data);
 					}
			            $product=[
						'tensp'=>$_POST['tensp'],
						'gia'=>$_POST['gia'],
						'soluong'=>$_POST['soluong'],
						'xuatxu'=>$_POST['xuatxu']
					];
			            $this->productModel->update($id,$product);
						$data['product']=$this->productModel->getAll();
						$data['main']='product/index';
						$this->call_views('admin/index',$data);
			        }
			        $data['product']=$this->productModel->findById($id);
					$data['main']='product/edit';
					$this->call_views('admin/index',$data);
		}

		function delete($id){
			$this->productModel->destroy($id);
			$data['product']=$this->productModel->getAll();
			$data['main']='product/index';
			$this->call_views('admin/index',$data);
		}


	}
 ?>