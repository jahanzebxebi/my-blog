<?php

namespace App\Validation;
use App\Models\UsersModel;

/**
 * 
 */
class UserRules{
	
	public function validateUser(string $str, string $fields, array $data){
		$userModel = new UsersModel();

		$user = $userModel->where('email', $data['email'])->first();

		if (!$user) {
			return false;
		}

		return password_verify($data['password'], $user['password']);
	}
}