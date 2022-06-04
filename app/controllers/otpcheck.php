<?php
Class Otpcheck extends Controller{
function index(){
    $getloguser = $this->model('authmodel');
    $data['loguser'] = $getloguser->fetchuser();
    // $this->view("wallets/activate",$data);
  $this->view("wallets/otpcheck"); 
}
}