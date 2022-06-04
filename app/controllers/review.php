<?php
Class Review extends Controller{
function index($u = ""){
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
    $data['fetchsent'] = $userwall->getsend($u);
    $data['fetchreceive'] = $userwall->getreceive($u);
    $data['fetchuser'] = $userwall->fetchuser();
    $this->view("wallets/review",$data); 
}
}