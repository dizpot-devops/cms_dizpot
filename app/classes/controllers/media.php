<?php
class media extends Controller {


    public function upload() {
        $viewmodel = new mediaModel();
        $viewmodel->upload();
    }

    public function list(){
        $viewmodel = new mediaModel();
        $this->ReturnView($viewmodel->list());
    }

}