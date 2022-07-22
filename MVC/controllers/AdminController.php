<?php 
	class AdminController extends connect
	{
		function __construct(){

		}
		function index(){
			$data['main']='user/index';
			$this->call_views('admin/index',$data);
		}
		function store(){
			$data['main']='user/add';
			$this->call_views('admin/index',$data);
		}
		function edit(){
			$data['main']='user/edit';
			$this->call_views('admin/index',$data);
		}

	}
 ?>