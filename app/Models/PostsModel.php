<?php

namespace App\Models;

use CodeIgniter\Model;

class PostsModel extends Model {
	protected $table = 'posts';
	protected $primaryKey = 'post_id';
	protected $foreignKey = 'user_id';
    protected $allowedFields = ['user_id', 'title', 'body', 'image', 'updated_at', 'deleted_at'];
}