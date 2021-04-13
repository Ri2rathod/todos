<?php

namespace App\Controllers;
use App\Models\Todos;
class Home extends BaseController
{
	public function index()
	{
		if((session('user'))!= null )
		{
			// return view('index');
			// session_start();
			$todo=new Todos();
			$data['todos']= $todo->where('user-email',session('user'))->findAll();

			return view('index',$data);
		}
		else{
			return redirect()->to('/');
		}
	}
}
