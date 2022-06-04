<?php
Class admin extends Controller{
public function index(){
    $this->view("admin/home");
}
public function members(){
    $adm = $this->model("adminmodel");
    $data['fetchmembers'] = $adm->fetchmembers();
    $this->view("admin/members",$data);

}
public function settings(){
    $adm = $this->model("adminmodel");
    $data['fetchadm'] = $adm->fetchactiveadmin();
    $this->view("admin/settings",$data);
}
public function update(){
    $adm = $this->model("adminmodel");
    $adm->update();
}
public function changepass(){
    $adm = $this->model("adminmodel");
    $adm->changepass();
}
public function createwallet(){
    $adm = $this->model("adminmodel");
    $data['fetchwallet'] = $adm->getwallet();
    $this->view("admin/createwallet",$data);
}
public function walletcreation(){
    $adm = $this->model("adminmodel");
    $adm->createwallet();
}
public function fund(){

}
public function transactions(){
    
}
public function support(){
    $adm = $this->model("adminmodel");
    $data['fetchsupport'] = $adm->fetchsupport();
    $this->view("admin/support",$data);
}
public function logout(){
    $adm = $this->model("adminmodel");
    $adm->logout();
}
}