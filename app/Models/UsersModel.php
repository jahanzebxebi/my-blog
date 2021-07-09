<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model {
	protected $table = 'users';
    protected $allowedFields = ['firstname', 'lastname', 'username', 'password', 'email', 'phone', 'address', 'updated_at', 'deleted_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data){
    	$data = $this->passwordHash($data);
    	return $data;
    }

    protected function beforeUpdate(array $data){
    	$data = $this->passwordHash($data);
    	return $data;
    }

    protected function passwordHash(array $data){
    	//below if statement means that if there is a password match in the data comming from the controller
    	//then execute the below hash function and hash the password
    	//before inserting it into the database
    	if (isset($data['data']['password'])) {
    		//the bwlow line will hash the password colum from the data
    		$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    	}
    	return $data;
    }
}