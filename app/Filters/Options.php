<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

Class Options implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = NULL)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
        
        // debug output
        // $method = $_SERVER['REQUEST_METHOD'];
        // error_log(print_r('method: '. $method, TRUE));
        
        // 略過 OPTIONS
        if ($method == "OPTIONS") {
            die();
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
      // Do something here
    }
}