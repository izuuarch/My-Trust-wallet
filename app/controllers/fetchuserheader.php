<?php
Class Fetchuserheader extends Controller{
function index(){
    $userwall = $this->model('walletmodel');
    $data['fetchuser'] = $userwall->fetchuser();
$this->view("wallets/partials/header",$data);
}
}