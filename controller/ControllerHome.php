<?php

class ControllerHome{

    public function index(){
      //return 'Welcome';
      $data=['name' => 'petter', 'Welcome'=>'Welcome'];
      twig::render("home-index.php",$data);

     // $view = new View('home-index');
      // $view->output('text_welcome', 'Welcome');
      // $view->output('text_name', 'Peter');
    }

    public function error(){
      twig::render("home-error.php");
    }
}