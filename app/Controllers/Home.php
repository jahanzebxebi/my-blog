<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Home extends BaseController
{
	public function index()
	{
		$postModel = new PostsModel();
		$data['posts'] = $postModel->findAll();
		echo view('home', $data);
	}
}
