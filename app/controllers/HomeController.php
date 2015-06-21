<?php
use Carbon\Carbon;
class HomeController extends BaseController {
	public function home() {
		return View::make('index')
			->with('title', 'Beastiegram | Explore your city in challenge');
	}
}
