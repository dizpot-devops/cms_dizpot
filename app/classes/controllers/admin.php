<?php
class admin extends Controller {


    protected function dashboard() {
        $viewmodel = new adminModel();
        $this->ReturnView($viewmodel->dashboard());
    }

    protected function users(){
        $viewmodel = new adminModel();
        $this->returnView($viewmodel->users());
    }

}