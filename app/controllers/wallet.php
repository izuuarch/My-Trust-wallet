<?php
Class Wallet extends Controller{
function index(){
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
      $data['fetchwallet'] = $userwall->fetchwallet();
      $data['fetchtotal'] = $userwall->gettotal();
      $data['fetchuser'] = $userwall->fetchuser();
  $this->view("wallets/home",$data); 
}
function login(){
  $this->view("wallets/login"); 
}
function signup(){
  // if(!$_SESSION['fullid']){

  // }
  $this->view("wallets/signup"); 
}
// function otpcheck(){
//   $getloguser = $this->model('authmodel');
//   $data['loguser'] = $getloguser->fetchuser();
//   $this->view("wallets/activate",$data);

//   // $gt = $this->model('walletmodel');
//   // $data['wall'] = $gt->checkmain();
// $this->view("wallets/otpcheck",$data); 
// }
public function otpnumber(){

    $userwall = $this->model('walletmodel');
    $userwall->checkotp();
}
public function resendotp(){
  $auth = $this->model('authmodel');
  $auth->resendotp();
}
public function forgot(){
  $this->view("wallets/forgot"); 
}
public function reset(){
  if(isset($_GET['token'])){
    $get = $_GET['token'];
    $data['token'] = $get;
    $this->view("wallets/reset",$data);
  }
}
public function fetchuserheader(){
  $userwall = $this->model('walletmodel');
  $data['fetchuser'] = $userwall->fetchuser();

$this->view("wallets/partials/header",$data); 
}
public function settings(){
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
    $data['fetchuser'] = $userwall->fetchuser();
  $this->view("wallets/settings",$data); 
}
public function update(){
  $adm = $this->model("walletmodel");
  $adm->update();
}
public function changepass(){
  $adm = $this->model("walletmodel");
  $adm->changepass();
}
public function govtid(){
  $adm = $this->model("walletmodel");
  $adm->govtproof();
}
public function send(){
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
      $data['fetchwallet'] = $userwall->getwallet();
      $data['fetchuser'] = $userwall->fetchuser();
      $this->view("wallets/send",$data); 
}
public function gensent(){
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
    $data['gensentreceipt'] = $userwall->getsent();
    $data['fetchuser'] = $userwall->fetchuser();
    $this->view("wallets/genreceipt",$data); 
}
public function genreceived(){
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
    $data['genrecreceipt'] = $userwall->getreceived();
    $data['fetchuser'] = $userwall->fetchuser();
    $this->view("wallets/genreceipt",$data); 
}
// public function coin(){
//   if(isset($_GET['coin'])){
//     $wallid = $_GET['coin'];
//     $userwall = $this->model('walletmodel');
//     $data['fetchcoin'] = $userwall->getcoin('walletid', $wallid);
//     $this->view("wallets/coin",$data); 
//     }
// }
// public function sendcoin(){
//   $userwall = $this->model("walletmodel");
//   $userwall->sendcoin();
// }
public function support(){
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
    $data['fetchuser'] = $userwall->fetchuser();
    $this->view("wallets/support",$data); 
}
public function sendmsg(){
  $adm = $this->model("walletmodel");
  $adm->sendmsg();
}
}