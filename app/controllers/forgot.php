<?php
Class Forgot extends Controller{
function index(){
    $auth = $this->model("authmodel");
    $auth->forgot();
}
}