<?php

namespace App\Controllers;

use App\Models\Users;
// use App\Models\UserTodoList ;
use App\Controllers\BaseController;
use App\Models\Todos;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Session\Session;

class LoginController extends BaseController
{
	public $data;
	private $login='';
	public function __construct()
	{
		$this->login = new Users();
	}
	public function index()
	{
		// echo"Hello Login Page";
		$session = session();
		$session->setFlashdata('msg','');
		return view('login');
	}
	public function login()
	{
		// $data-null;
		$data=array('user-email'=>$this->request->getVar('email'),'user-password'=> md5($this->request->getVar('password')));
		$this->login->where($data);
		$row=$this->login->countAllResults();
		$session=session();
		if($row==1)
		{
			$session->setFlashdata('user',$this->request->getVar('email'));

			// $this->load->database();
			$todos=new Todos();

			$data['todos']= $todos->where('user-email',$this->request->getVar('email'))->findAll();

			// $this->load->model('user_todo_list');

			// $data =$this->user_todo_list->select();
			// dd($data);
			return view('index',$data);
		}
		else
		{
			$session->setFlashdata('msg','is-invalid');
			return view('login');
		}
	}
}
