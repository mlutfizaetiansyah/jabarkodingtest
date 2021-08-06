<?php
class Controller{
    //membuat controler view
    public function view($view ,$data = []){
        require_once'../app/views/'. $view.'.php';
    }
    //membuat model untuk data
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}