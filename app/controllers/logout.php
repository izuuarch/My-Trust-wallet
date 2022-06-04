<?php
Class Logout extends Controller{
function index(){
    $auth = $this->model("authmodel");
    $auth->logout();
}
}