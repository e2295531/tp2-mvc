<?php
class RequirePage{
 static public function requireModel($page){
 return require_once 'model/'.$page.'.php';
 }

 static  public function redirectPage($page){
    return header("https://e2295531.webdev.cmaisonneuve.qc.ca/tp2-mvc/$page");
 }
}
?>