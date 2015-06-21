@extends('layout.main')

@section('content')
	<div class="index_background">
    	
    </div>
    <div class="homepage_box">
    	<div class="homepage_box_left">
            <div class="login_box">
            	<div class="logo_area_home">
                	<img src="/public/image/logo.png">
                </div>
                <div class="login_form_area">
                	<div class="login_process">
                        <form action="{{URL::route('login_process')}}" method="POST">
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password" />
                            {{ Form::token() }}
                            <button type="submit">Login</button>
                        </form>
                        <div class="account no-account">
                            <span>I don't have account</span>
                        </div>
                    </div>
                    <div class="register_process">
                    	<form action="{{URL::route('create_process')}}" method="POST">
                            <input name="username" type="text" placeholder="Username" />
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password" />
                            {{ Form::token() }}
                            <button type="submit">Open account</button>
                        </form>
                        <div class="account yes-account">
                            <span>I have account</span>
                        </div>
                    </div>
                    <script>
						$('.no-account span').click(function(){
							$('.login_process').slideUp(function(){
								$('.register_process').slideDown();
							});
						});
						$('.yes-account span').click(function(){
							$('.register_process').slideUp(function(){
								$('.login_process').slideDown();
							});
						});
					</script>
                </div>
            </div>
        </div>
    </div>
@stop