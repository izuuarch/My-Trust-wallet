<?php
Class Reset extends Controller{
function index(){
    $auth = $this->model("authmodel");
    $auth->reset();
}
}