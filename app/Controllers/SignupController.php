<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use App\Models\Todos;
use Exception;

class SignupController extends BaseController
{
	
	public function index()
	{
		return view('signup');
	}
	public function signup()
	{
		$data=array('user-email'=>$this->request->getVar('useremail'),'user-name'=>$this->request->getVar('username'),'user-password'=>MD5($this->request->getVar('password')));
		// dd ($data);
		$contactModel = new Users();
		$session=session();
		$email=array('user-email'=>$this->request->getVar('useremail'));

		
		try
		{
			$session=session();
			$contactModel->where($email);
			$row=$contactModel->countAllResults();
			if($row>=1)
			{
				$session->setFlashdata('msg-1','Already Having You Have Registered');
				return view('login');
			}
			else
			{
				$contactModel->insert($data);
				$session->setFlashdata('user',$this->request->getVar('useremail'));
				// $todos=new Todos();
				// $data['todos']= $todos->where('user-email',$this->request->getVar('email'))->findAll();
			
				// return view('index',$data);
				return redirect()->to('/Home');	
			}
		}
		catch(Exception $e)
		{
			dd($e);
		}

		
	}
}
