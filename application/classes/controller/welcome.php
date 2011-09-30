<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
            $view = View::factory('landing');
            
            if(isset($_POST['url'])) {
                $url = $_POST['url'];
                $link = URL::site('revert/bbb');
                
                if($url == 'http://www.google.ca') {
                    $short = 'aaa';
                    $link = URL::site('revert/' . $short);
                }
                
                $view->url = $link;
            }
            
            
            
            $view->name = 'Carl';
            
            $this->response->body($view);
	}

} // End Welcome
