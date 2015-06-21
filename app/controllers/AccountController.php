<?php
use Carbon\Carbon;
class AccountController extends \BaseController {
	
	//Sign in function start
	public function postSignIn(){
		$validator = Validator::make(Input::all(),
			array(
				'email' 		=> 'required|email',
				'password' 	=> 'required',
			)
		);
		if($validator->fails()){
			return Redirect::to('/')
				->with('global', 'Oops! Something went wrong')
				->withInput();	
		}else{
			if($auth = Auth::attempt(array(
				'email' => Input::get('email'),
				'password' => Input::get('password'),
			))){
				return Redirect::route('my_beastiegram');
			}else{
				return Redirect::to('/')
					->with('global', 'Oops! Something went wrong. Email/Password was wrong');
			}
		}
		return Redirect::route('home')
			->with('global', 'Oops! Something went wrong with login process please try again');
	}
	//Sign in function end
	
	//Sign out function start
	public function getSignOut(){
		Auth::logout();
		return Redirect::route('home');
	}
	//Sign out function end
	
	//Create new account function start
	public function postCreate(){
		$validator = Validator::make(Input::all(),
			array(
				'username'			=> 'required|unique:users',
				'email' 				=> 'required|max:50|email|unique:users',
				'password' 			=> 'required|min:6',
			)
		);
		if($validator->fails()){
			return Redirect::route('home')
				->with('global', 'Oops! Something went wrong')
				->withInput();
		}else{
			$email 		= Input::get('email');
			$password 	= Input::get('password');
			$username 	= Input::get('username');
			//Activation code
			$code		= str_random(60);
			$user = User::create(array(
				'username'	=> $username,
				'email' 	=> $email,
				'password' 	=> Hash::make($password),
				'code' 		=> $code,
				'active' 	=> 0,
				'team_id'	=> 1
			));
			if($user){
				return Redirect::route('home')
					->with('global', 'Thanks and welcome to Beastiegram. Please login to your profile');
			}
		}
	}
	public function getActivate($code){
		$user = User::where('code', '=', $code)->where('active', '=', 0);
		if($user->count()){
			$user = $user->first();
			//Update user to active state
			$user->active 	= 1;
			$user->code 		='';
			
			if($user->save()){
				return Redirect::route('home')
					->with('global', 'Your account is now active. Welcome to Beastiegram');
			}
		}
			return Redirect::route('home')
				->with('global', 'Oops! Something went wrong please try again');
	}
	
	public function account(){
		return View::make('account.account')
			->with('title', 'Beastiegram | Explore your city in challenge');
	}
	public function myChallenges(){
		$date = Carbon::now('Europe/London');
		$challengeInactive = Challenge::where('team_id', Auth::user()->team_id)->where('active', '=', '1')->get();
		$challengeActive = Challenge::where('team_id', Auth::user()->team_id)->where('active', '=', '2')->where('end_at', '<', $date)->get();
		$challengeActiveOn = Challenge::where('team_id', Auth::user()->team_id)->where('active', '=', '2')->where('end_at', '>', $date)->get();
		return View::make('account.challenges')
			->with('title', 'Beastiegram | Explore your city in challenge')
			->with('challengeInactive', $challengeInactive)
			->with('challengeActive', $challengeActive)
			->with('challengeActiveOn', $challengeActiveOn);
	}
	public function myChallengeItem($id){
		$challenge_image_one = ChallengePhoto::where('user_id', '=', Auth::user()->id)->where('challenge_id', '=', $id)->where('challenge_photo', '=', '1')->first();
		$challenge_image_two = ChallengePhoto::where('user_id', '=', Auth::user()->id)->where('challenge_id', '=', $id)->where('challenge_photo', '=', '2')->first();
		$challenge_image_three = ChallengePhoto::where('user_id', '=', Auth::user()->id)->where('challenge_id', '=', $id)->where('challenge_photo', '=', '3')->first();
		$challenge_image_four = ChallengePhoto::where('user_id', '=', Auth::user()->id)->where('challenge_id', '=', $id)->where('challenge_photo', '=', '4')->first();
		$challenge_image_five = ChallengePhoto::where('user_id', '=', Auth::user()->id)->where('challenge_id', '=', $id)->where('challenge_photo', '=', '5')->first();
		$date = Carbon::now('Europe/London');
		$challengeDetails = Challenge::where('id', '=', $id)->first();
		return View::make('account.challengeDetails')
			->with('title', 'Beastiegram | Explore your city in challenge')
			->with('challengeDetails', $challengeDetails)
			->with('date', $date)
			->with('challenge_image_one', $challenge_image_one)
			->with('challenge_image_two', $challenge_image_two)
			->with('challenge_image_three', $challenge_image_three)
			->with('challenge_image_four', $challenge_image_four)
			->with('challenge_image_five', $challenge_image_five);
	}
	public function myChallengeItemStart($id){
		$challengeDetails = Challenge::where('id', '=', $id)->first();
		$date = Carbon::now('Europe/London');
		$timer = $challengeDetails->timer;
		$stopDate = $date->addMinutes($timer);
		$challengeDetails->active = 2;
		$challengeDetails->end_at = $date;
		$challengeDetails->save();
		 return Redirect::back()
		 	->with('global', 'You have start new challenge');
	}
	public function submitImageChallenge($id){
		$photo = new ChallengePhoto;
		$photo->user_id 			= Auth::user()->id;
		$photo->team_id 			= Auth::user()->team_id;
		$photo->challenge_id 	= $id;
		$photo->challenge_photo 	= Input::get('image_challenge');
		$challenge_submit       = Input::file('photo_one_submit');
		$destinationPath 		= 'public/user_photos/';
		$filename        		= str_random(42) . $challenge_submit->getClientOriginalName();
		$uploadSuccess_one   	= $challenge_submit->move($destinationPath, $filename);
		$photo->photos 			= $filename;
		$photo->save();
		return Redirect::back()
		 	->with('global', 'Thanks you uploaded image');
	}
	public function myChallengesAdd(){
		return View::make('account.challengesAdd')
			->with('title', 'Beastiegram | Explore your city in challenge');
	}
	public function myChallengesAddPost(){
		$validator = Validator::make(Input::all(),
			array(
				'challenge_name' 			=> 'required',
				'description' 				=> 'required',
				'task_one' 					=> 'required',
				'task_one_description' 		=> 'required',
				'task_two' 					=> 'required',
				'task_two_description' 		=> 'required',
				'task_three' 				=> 'required',
				'task_three_description' 	=> 'required',
				'task_four' 					=> 'required',
				'task_four_description' 		=> 'required',
				'task_five' 					=> 'required',
				'task_five_description' 		=> 'required',
				'timer'	 					=> 'required',
				'public' 					=> 'required',
			)
		);
		if($validator->fails()){
			return Redirect::back()
				->with('global', 'Please fill in every inputes');	
		}else{
			$challenge = new Challenge;
			$challenge->user_id 			= Auth::user()->id;
			$challenge->team_id 			= Auth::user()->team_id;
			$challenge->name 			= Input::get('challenge_name');
			$challenge->description 		= Input::get('description');
			$challenge->city 			= 'Aberdeen';
			$challenge->category_id 		= '0';
			$image_one            		= Input::file('task_one');
			$image_two            		= Input::file('task_two');
			$image_three            	= Input::file('task_three');
			$image_four            		= Input::file('task_four');
			$image_five            		= Input::file('task_five');
			$destinationPath 			= 'public/add_challenge/';
			$filename_one        		= str_random(42) . $image_one->getClientOriginalName();
			$filename_two        		= str_random(42) . $image_two->getClientOriginalName();
			$filename_three        		= str_random(42) . $image_three->getClientOriginalName();
			$filename_four       		= str_random(42) . $image_four->getClientOriginalName();
			$filename_five        		= str_random(42) . $image_five->getClientOriginalName();
			$uploadSuccess_one   		= $image_one->move($destinationPath, $filename_one);
			$uploadSuccess_two   		= $image_two->move($destinationPath, $filename_two);
			$uploadSuccess_three   		= $image_three->move($destinationPath, $filename_three);
			$uploadSuccess_four   		= $image_four->move($destinationPath, $filename_four);
			$uploadSuccess_five   		= $image_five->move($destinationPath, $filename_five);
			$challenge->image_1 			= $filename_one;
			$challenge->image_2 			= $filename_two;
			$challenge->image_3 			= $filename_three;
			$challenge->image_4 			= $filename_four;
			$challenge->image_5 			= $filename_five;
			$challenge->description_1 	= Input::get('task_one_description');
			$challenge->description_2 	= Input::get('task_two_description');
			$challenge->description_3 	= Input::get('task_three_description');
			$challenge->description_4 	= Input::get('task_four_description');
			$challenge->description_5 	= Input::get('task_five_description');
			$challenge->type 			= '1';
			$challenge->timer 			= Input::get('timer');
			$challenge->open 			= Input::get('public');
			$challenge->active 			= '1';
			if($challenge->save()){
				return Redirect::route('my_beastiegram')
					->with('global', 'Thanks! You added new challenge');
			}else{
				return Redirect::back()
					->with('global', 'Oops! Something went wrong');
			}
		}
	}
	
	
	
	
	///////////////////////////////////////// Mobile version access
	public function userChecker(){
		$useremail = Input::get('useremail');
		$userpassword = Input::get('userpassword');
		if($auth = Auth::attempt(array(
			'email' => $useremail,
			'password' => $userpassword,
			'active' => 1,
		))){
			return Response::json([
				'success' => true,
				'username' => Auth::user()->username,
				'id' => Auth::user()->id
			]);
		}else{
			return Response::json(['success' => false]);
		}
	}
}
?>