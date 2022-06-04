<?php
Class Signup extends Controller{
function index(){
    $auth = $this->model("authmodel");
    $auth->signup();
}
}