<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Login implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null){
        // Do something here
		$session = session();
		if($session->has('firstname') && $session->has('pk_id')){
			
		}else{
			return redirect('/users/login');
		}
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
        // Do something here
    }
}