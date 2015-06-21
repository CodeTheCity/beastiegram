<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-2" />
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{ HTML::style('public/css/style.css') }}
        {{ HTML::style('public/js/jquery.notebook.css') }}
        {{ HTML::style('public/css/lightbox.css') }}
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        {{ HTML::script('public/js/jquery-ui.js') }}
         {{ HTML::script('public/js/jquery.countdown.js') }}
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    </head>

    <body>
    	
        @if(Session::has('global'))
        	<div class="alert_wrong">
            <p>{{ Session::get('global') }}</p>
            </div>
            <script>
				$('.alert_wrong').slideDown().delay(5000).slideUp('slow');
			</script>
        @endif
    	@yield('content')
    </body>
</html>