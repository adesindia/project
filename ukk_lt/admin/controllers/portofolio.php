<?php 

class portofolio extends Controller{
    public function index(){

        $data['profile']= $this->model('PortofolioModel');
        $this->view('portofolio/index',$data);
    }
} 