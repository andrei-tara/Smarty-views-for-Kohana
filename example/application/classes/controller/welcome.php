<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index() {

		I18n::lang('en_US');
			
		$view =new Smarty_View( 'profile',
		array(
		                            'name' => 'Johny Cash',
		                            'status' => '<script>alert("Bad status!");</script>',
		                            'email' => 'mail@example.com'
		                            )
		                            );


		                            $this->response->body($view);
	}

}

// End Welcome
