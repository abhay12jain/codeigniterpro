<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FrontAuthGuard implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    { 
      
       
         if (!session()->get('pitchUserLogged'))
        {
            return redirect()
                ->to('/signin');
        }


        
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}