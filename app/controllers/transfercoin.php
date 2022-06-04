<?php
Class Transfercoin extends Controller{
public function index(){
    $userwall = $this->model('walletmodel');
    $userwall->transfer();
}
public function confirmation(){
    $getloguser = $this->model('authmodel');
    $data['loguser'] = $getloguser->fetchuser();
    $userarr = $data['loguser'];
    $otpcheck=$userarr->otpcheck;
      if(!$userarr){
        header('Location: ' . BASEURL . '/wallet/login');
      }elseif($otpcheck == "0"){
        header('Location: ' . BASEURL . '/otpcheck');
      }
      
    $this->view("wallets/confirmation"); 
}
}