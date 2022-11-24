<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelSite');
RequirePage::requireModel('ModelProjet');


class ControllerSite{

    public function index(){
       $site =new ModelSite;
       $projet=new ModelProjet;
       $selectProjet=$projet->select('projetId');
       $selectSite=$site->select('siteId');
       
       //print_r($selectProjet);
        Twig::render('site-index.php',['sites'=>$selectSite,'projets'=>$selectProjet,'site_list'=>"Liste de site"]);
       
    }

    public function create(){
        $projet=new ModelProjet;
       $selectProjet=$projet->select('projetId');
        Twig::render('site-create.php',['projets'=>$selectProjet]);
    }
    public function store(){
       $site =new ModelSite;
       $insert=$site->insert($_POST);
       
      // print_r($insert);

       RequirePage::redirectPage('site');
       
      
     }
     public function show($id){

        $site= new ModelSite;
        $projet=new ModelProjet;
        $selectProjet=$projet->select('projetId');
        $selectsite =$site ->selectId($id);

        twig::render('site-show.php',['site' => $selectsite,'projets'=>$selectProjet]);
     }
     public function edit($id){
        $site= new ModelSite;
        $projet=new ModelProjet;
        $selectProjet=$projet->select('projetId');
        $selectsite =$site ->selectId($id);

        twig::render('site-edit.php',['site' => $selectsite,'projets'=>$selectProjet]);
     }
     public function update(){
      $site = new ModelSite;
      $update = $site->update($_POST);
      print_r($update);
      RequirePage::redirectPage('site');
  }
  public function delete(){
      $site = new ModelSite;
      $delete = $site->delete($_POST['siteId']);
      RequirePage::redirectPage('site');

  }
}
?>