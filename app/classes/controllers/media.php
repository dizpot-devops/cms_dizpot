<?php
class media extends Controller {


    public function upload() {
        $viewmodel = new mediaModel();
        $viewmodel->upload();
    }



}