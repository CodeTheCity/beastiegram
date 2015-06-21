<?php

/* Authenticated group*/
Route::group(array('before' => 'auth'), function(){
	Route::get('/sign-out', array(
		'as' => 'sign_out_process',
		'uses' => 'AccountController@getSignOut',
	));
	Route::get('/my-beastiegram', array(
		'as' => 'my_beastiegram',
		'uses' => 'AccountController@account',
	));
	Route::get('/my-beastiegram/challenges', array(
		'as' => 'my_challenges',
		'uses' => 'AccountController@myChallenges',
	));
	Route::get('/my-beastiegram/challenge/{id?}', array(
		'as' => 'my_challenge_item',
		'uses' => 'AccountController@myChallengeItem',
	));
	
	Route::group(array('before' => 'admin'), function(){
		Route::get('/my-beastiegram/challenges/add', array(
			'as' => 'my_challenges_add',
			'uses' => 'AccountController@myChallengesAdd',
		));
		Route::get('/my-beastiegram/challenge/start/{id?}', array(
			'as' => 'my_challenge_item_start',
			'uses' => 'AccountController@myChallengeItemStart',
		));
	});
	/*CSRF protection group*/
	Route::group(array('before' => 'crsf'), function(){
		Route::post('/my-beastiegram/challenges/add-form', array(
			'as' => 'my_challenges_add_post',
			'uses' => 'AccountController@myChallengesAddPost',
		));
		Route::post('/submit-image/form/{id?}', array(
			'as' => 'submit_image_challenge',
			'uses' => 'AccountController@submitImageChallenge',
		));
	});
});

/* Unauthenticated group*/
 
Route::group(array('before' => 'guest'), function(){
	/*CSRF protection group*/
	Route::get('/', array(
		'as' => 'home',
		'uses' => 'HomeController@home',
	));
	Route::group(array('before' => 'crsf'), function(){
		Route::post('/login-process', array(
			'as' => 'login_process',
			'uses' => 'AccountController@postSignIn'
		));
		Route::post('/create-process', array(
			'as' => 'create_process',
			'uses' => 'AccountController@postCreate'
		));
	});
	
});