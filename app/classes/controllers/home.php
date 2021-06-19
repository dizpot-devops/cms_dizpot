<?php
class home extends Controller {
	protected function Index(){
        $viewmodel = new homeModel();
        $this->ReturnView($viewmodel->index());
	}


}