<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todos;

class TodosCrud extends BaseController
{
	public function index()
	{
		// $this->load->view('index');

		$todomodel=new Todos();

		$task=$this->request->getVar('input_list');
		$due_date=$this->request->getVar('due_data');
		$user_email=$this->request->getVar('user-email');

		$todo_task=array('todos-task'=>$task,'todos-due-date'=>$due_date,'user-email'=> $user_email);
		// dd($todo_task);

		$todomodel->insert($todo_task);

		session()->setFlashdata('user',$user_email);

		// $data['todos']= $todomodel->where('user-email',$user_email)->findAll();

		// return view('index',$data);
		// $this->load->helper('url');
		return redirect()->to('/home');
	}
}
