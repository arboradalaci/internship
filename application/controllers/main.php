<?php

class Main_Controller extends Base_Controller {

	public $restful = true;

public function get_index() {
		return View::make('main.index')
			->with('title', 'Introductory Task - Internship in SE');
	}

}
?>