<?php
Class Login extends Controller{
function index(){
    $auth = $this->model("authmodel");
    $auth->login();
}
}