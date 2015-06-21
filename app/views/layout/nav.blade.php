<nav>
	<div class="nav_inside">
        <div class="logo_area">
        	<a href="{{URL::route('my_beastiegram')}}"><img src="/public/image/logo.png"></a>
        </div>
        <div class="button_area">
        	<a href="{{URL::route('my_challenges')}}">Challenges</a>
            <!--<a href="">Settings</a>-->
            <a href="{{URL::route('sign_out_process')}}">Sign out</a>
        </div>
    </div>
</nav>
<div class="mobile_menu_button">
	MENU
</div>
<div class="mobile_menu">
	<a href="{{URL::route('my_challenges')}}">Challenges</a>
    <a href="{{URL::route('sign_out_process')}}">Sign out</a>
</div>
<script>
	$('.mobile_menu_button').click(function(){
		$('.mobile_menu').slideToggle();
	})
</script>