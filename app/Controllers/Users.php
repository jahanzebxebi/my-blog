<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PostsModel;
use CodeIgniter\Controller;
// use App\Filters\Login;

class Users extends BaseController
{
	public function index()
	{
		// echo "<h1>Users Controller</h1>";
	}

	public function login(){
		if (session()->get('isLoggedIn')) {
			return redirect()->to('/users/dashboard');
		}
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			$input = [
				'email'		=> 'trim|required|valid_email|validateUser[email]',
				'password'	=> 'trim|required|min_length[8]|max_length[255]|validateUser[password]',
			];

			$errors = [
				'email' => [
					'validateUser' => 'Email does not exists!'
				],
				'password' => [
					'validateUser' => 'Password does not matches!'
				]
			];

			//validating the data comming from user email and password inputs
			if (!$this->validate($input, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$userModel = new UsersModel();

				$user = $userModel->where('email', $this->request->getPost('email'))->first();
				$this->setUserMethod($user);
				return redirect()->to('/users/dashboard');
			}
		}
		return view('users/login', $data);
	}

	protected function setUserMethod($user){
		$data = [
			'id' 			=> $user['id'],
			'firstname' 	=> $user['firstname'],
			'lastname' 		=> $user['lastname'],
			'username' 		=> $user['username'],
			'email' 		=> $user['email'],
			'password' 		=> $user['password'],
			'phone' 		=> $user['phone'],
			'address' 		=> $user['address'],
			'isLoggedIn'	=> true,
		];

		session()->set($data);
		return true;
	}

	public function register(){
		if (session()->get('isLoggedIn')) {
			return redirect()->route('Dashboard');
		}
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			$input = [
				'firstname'	=> 'trim|required|min_length[2]|max_length[20]',
				'lastname'	=> 'trim|required|min_length[2]|max_length[20]',
				'username'	=> 'trim|required|alpha_numeric|min_length[5]|is_unique[users.username]',
				'email'		=> 'trim|required|valid_email|is_unique[users.email]',
				'password'	=> 'trim|required|min_length[8]|max_length[255]',
				'confirm_password'	=> 'matches[password]',
				'phone'		=> 'trim|required|numeric|max_length[13]',
				'address'	=> 'trim|required|min_length[5]',
			];

			//$userModel = new UsersModel();

			//validating the data comming from user input form
			if (!$this->validate($input)) {
				$data['validation'] = $this->validator;
			}else{
				$userModel = new UsersModel();
				$newUser = [
					//saving the data comming from POST method
					'firstname'	=> $this->request->getPost('firstname'),
					'lastname'	=> $this->request->getPost('lastname'),
					'username'	=> $this->request->getPost('username'),
					'email'		=> $this->request->getPost('email'),
					'password'	=> $this->request->getPost('password'),
					'phone'		=> $this->request->getPost('phone'),
					'address'	=> $this->request->getPost('address'),
				];
				$userModel->save($newUser);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->route('Login');
			}
		}

		return view('users/register', $data);
	}

	public function logout(){
		session()->destroy();
		// session()->unset();
		return redirect()->to('/');
	}

	public function dashboard(){
		if (!session()->get('isLoggedIn')) {
			return redirect()->to('/users/login');
		}
		echo view('users/dashboard-header');
		echo view('users/dashboard');
		echo view('users/dashboard-footer');
	}

	public function profile(){
		if (!session()->get('isLoggedIn')) {
			return redirect()->to('/users/login');
		}
		echo view('users/dashboard-header');
		echo view('users/profile');
		echo view('users/dashboard-footer');
	}

	public function edit($id){
		if (!session()->get('isLoggedIn')) {
			return redirect()->to('/users/login');
		}
		echo view('users/dashboard-header');
		echo view('users/edit-profile');
		echo view('users/dashboard-footer');
	}

	public function update($id){
		// validation process starts here
		// validating every input comming from the user form data
		$input = $this->validate([
			'firstname'	=> 'trim|required|min_length[2]|max_length[20]',
			'lastname'	=> 'trim|required|min_length[2]|max_length[20]',
			'password'	=> 'trim|required|min_length[8]|max_length[255]',
			'confirm_password'	=> 'matches[password]',
			'phone'		=> 'trim|required|numeric|max_length[13]',
			'address'	=> 'trim|required|min_length[5]',
		]);

		// creating instance of the UserModel
		$userModel = new UsersModel();

		// checking if the input field sends a data if not then generating error message at the top of form
		// otherwise submitting the data into the database table
		if (!$input) {
			echo view('users/dashboard-header');
			echo view('users/edit-profile', [
				'validation' => $this->validator
			]);
			echo view('users/dashboard-footer');
		} else {
			$data = [
				'firstname'	=> $this->request->getPost('firstname'),
				'lastname'	=> $this->request->getPost('lastname'),
				'password'	=> $this->request->getPost('password'),
				'phone'		=> $this->request->getPost('phone'),
				'address'	=> $this->request->getPost('address'),
			];
			$userModel->update($id, $data);//updating the data against specific id
			session()->destroy();
			return redirect()->route('Login');
		}
	}
}
