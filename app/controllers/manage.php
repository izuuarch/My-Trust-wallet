<?php
Class Manage extends Controller{
function index($u = ""){
  if($u == ""){
    header('Location: ' . BASEURL . '/admin');
  }else{
    $adm = $this->model("adminmodel");
    $data['manage'] = $adm->manage($u);
    $data['fetchwallet'] = $adm->getwallet();
    $this->view("admin/manage",$data);
  }
}
public function update(){
  $adm = $this->model("adminmodel");
   $adm->updateuser();
}
public function addfunds(){
  $adm = $this->model("adminmodel");
  $adm->addfunds();
}
}