<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilterLogged implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->has('loggedCustomer')){
            return redirect()->to('dashboard')->with('error','You need to logout to access this area.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}