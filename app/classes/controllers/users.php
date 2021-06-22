<?php
class users extends PublicController {

    protected function create(){
        $viewmodel = new userModel();
        $this->ReturnView($viewmodel->create());
    }

    protected function login() {
        $viewmodel = new userModel();
        $this->ReturnView($viewmodel->login());
    }

    protected function tempPass(){
        $viewmodel = new userModel();
        $this->ReturnView($viewmodel->tempPass());
}

}