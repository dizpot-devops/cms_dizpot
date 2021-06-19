<?php
class users extends PublicController {


    protected function login() {
        $viewmodel = new userModel();
        $this->ReturnView($viewmodel->login());
    }




}