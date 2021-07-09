<?php

namespace App\Controllers;

use App\Models\PostsModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;

class Posts extends BaseController
{
	public function index()
	{
		//
	}

	public function show(){
		if (!session()->get('isLoggedIn')) {
			return redirect()->to('/users/login');
		}
		$postModel = new PostsModel();
		$userId = session()->id;
		$data['posts'] = $postModel->where('user_id', $userId)->find();
		echo view('users/dashboard-header');
		echo view('posts/show', $data);
		echo view('users/dashboard-footer');
	}
	public function create(){
		if (!session()->get('isLoggedIn')) {
			return redirect()->to('/users/login');
		}
		if (!session()->get('isLoggedIn')) {
			return redirect()->to('/users/login');
		}
		echo view('users/dashboard-header');
		echo view('posts/create');
		echo view('users/dashboard-footer');
	}

	public function store(){
		if (!session()->get('isLoggedIn')) {
			return redirect()->to('/users/login');
		}
		$postModel = new PostsModel();

		$file = $this->request->getFile('image');
		$imageName = '';
		// $newName = $file->getRandomName();
		//$imageName = $file->getRandomName();
		if ($file->isValid() && ! $file->hasMoved()) {
			$imageName = $file->getRandomName();
			$file->move('uploads/', $imageName);
		}

		$data = [
			'user_id' => session()->get('id'),
			'title' => $this->request->getPost('title'),
			'body' => $this->request->getPost('body'),
			'image' => $imageName,
		];

		$postModel->save($data);
		$session = session();
		$session->setFlashdata('success', 'Post Added Successfully');
		return redirect()->to('/posts/show');
	}
}