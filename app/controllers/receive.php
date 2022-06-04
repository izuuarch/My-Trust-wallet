<?php
Class Receive extends Controller{
public function index($u = ""){
    $getloguser = $this->model('authmodel');
    $data['loguser'] = $getloguser->fetchuser();
    $userarr = $data['loguser'];
    $otpcheck=$userarr->otpcheck;
      if(!$userarr){
        header('Location: ' . BASEURL . '/wallet/login');
      }elseif($otpcheck == "0"){
        header('Location: ' . BASEURL . '/otpcheck');
      }
    $userwall = $this->model('walletmodel');
    $data['fetchcoin'] = $userwall->getcoin($u);
    $data['fetchuser'] = $userwall->fetchuser();
    $this->view("wallets/receive",$data); 
}
}