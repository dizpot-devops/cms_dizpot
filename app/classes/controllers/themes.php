<?php
class themes extends Controller {

    protected function list() {
        $viewmodel = new themeModel();
        $this->ReturnView($viewmodel->list());
    }

    protected function builder() {
        $viewmodel = new themeModel();
        $this->ReturnView($viewmodel->builder());
    }

    protected function fakebuilder() {
        $viewmodel = new themeModel();
        $this->ReturnView($viewmodel->fakebuilder());
    }




}