<?php

class Controller_Revert extends Controller {
    
    public function action_index() {
        $id = $this->request->param('id');
        $url = "http://google.ca";
        if($id == 'aaa') {
            //header( 'Location: ' . $url )
            $this->request->redirect($url);
        }
        
        
        
    }

    
}
