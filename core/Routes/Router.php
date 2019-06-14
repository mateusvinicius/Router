<?php
namespace Core\Routes;

class Router {
   private $rotas = [];



   public function __call($method,$args){
        $method = strtolower($method);
        [$path,$callback] = $args;

        $path= '/^' . str_replace('/', '\/', $path) . '$/';

        $this->rotas[$method][$path] = $callback;

    
   }

   public function method()
   {
       return isset($_SERVER['REQUEST_METHOD']) ? strtolower($_SERVER['REQUEST_METHOD']) : 'cli';
   }

   function run($url,$method)
    {
        $method = strtolower($method);



       
        foreach ($this->rotas[$method] as $rotas => $callback) {
           

        
            if (preg_match($rotas,$url,$params)) {
            
                array_shift($params);
                
                return call_user_func_array($callback, $params);
            }
        }
        return null;
    }


  

}