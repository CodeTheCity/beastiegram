@extends('layout.main')

@section('content')
	@include('layout.nav')
    	<div class="page_area">
        	@include('layout.profile')
            <div class="right_profile_area">
            	<div class="challenge_list_header" style="margin-top:0;">
                    {{$challengeDetails->name}}
                </div>
                <div class="challenge_list_body">
                    <div class="challenge_list_body_desc">
                    	<p>Challenge description</p>
                    	{{$challengeDetails->description}}
                    </div>
                    <div class="challenge_list_body_images">
                    	<p>Images for challenge</p>
                    	<div class="challenge_list_body_image" style="background-image:url('/public/add_challenge/{{$challengeDetails->image_1}}')">
                        	<div class="cover_description">
                            	<div class="cover_description_inside">{{$challengeDetails->description_1}}</div>
                            </div>
                        </div>
                        <div class="cover_description_mobile">
                        	{{$challengeDetails->description_1}}
                        </div>
                        @if($challengeDetails->end_at > $date)
                        	<div class="mobile_form">
                            	@if(count($challenge_image_one))
                                	<div class="alert_update">You already uploaded image</div>
                                @else
                                    <form action="{{URL::route('submit_image_challenge')}}/{{$challengeDetails->id}}" method="POST" id="challenge_photo_one_form" enctype="multipart/form-data">
                                        <input type="file" accept="image/*" name="photo_one_submit" style="display:none" id="challenge_photo_one_input" onChange="submitOne()">
                                        <input type="text" value="1" name="image_challenge" style="display:none">
                                    </form>
                                    <div class="button_submit_image" id="challenge_photo_one_button">
                                        Submit image
                                    </div>
                                    <script>
                                        $('#challenge_photo_one_button').click(function(){
                                            $('#challenge_photo_one_input').click();
                                        });
                                        function submitOne(){
                                            $('#challenge_photo_one_form').submit();
                                        }
                                    </script>
                                @endif
                            </div>
                        @else
                        <div class="to_late">
                        	Sorry to late
                        </div>
                        @endif
                        
                        
                        <div class="challenge_list_body_image" style="background-image:url('/public/add_challenge/{{$challengeDetails->image_2}}')">
                        	<div class="cover_description">
                            	<div class="cover_description_inside">{{$challengeDetails->description_2}}</div>
                            </div>
                        </div>
                        <div class="cover_description_mobile">
                        	{{$challengeDetails->description_2}}
                        </div>
                        @if($challengeDetails->end_at > $date)
                        	<div class="mobile_form">
                            	@if(count($challenge_image_two))
                                	<div class="alert_update">You already uploaded image</div>
                                @else
                                    <form action="{{URL::route('submit_image_challenge')}}/{{$challengeDetails->id}}" method="POST" id="challenge_photo_two_form" enctype="multipart/form-data">
                                        <input type="file" accept="image/*" name="photo_one_submit" style="display:none" id="challenge_photo_two_input" onChange="submitTwo()">
                                        <input type="text" value="2" name="image_challenge" style="display:none">
                                    </form>
                                    <div class="button_submit_image" id="challenge_photo_two_button">
                                        Submit image
                                    </div>
                                    <script>
                                        $('#challenge_photo_two_button').click(function(){
                                            $('#challenge_photo_two_input').click();
                                        });
                                        function submitTwo(){
                                            $('#challenge_photo_two_form').submit();
                                        }
                                    </script>
                                @endif
                            </div>
                        @else
                        <div class="to_late">
                        	Sorry to late
                        </div>
                        @endif
                        
                        
                        
                        <div class="challenge_list_body_image" style="background-image:url('/public/add_challenge/{{$challengeDetails->image_3}}')">
                        	<div class="cover_description">
                            	<div class="cover_description_inside">{{$challengeDetails->description_2}}</div>
                            </div>
                        </div>
                        <div class="cover_description_mobile">
                        	{{$challengeDetails->description_3}}
                        </div>
                        @if($challengeDetails->end_at > $date)
                        	<div class="mobile_form">
                            	@if(count($challenge_image_three))
                                	<div class="alert_update">You already uploaded image</div>
                                @else
                                    <form action="{{URL::route('submit_image_challenge')}}/{{$challengeDetails->id}}" method="POST" id="challenge_photo_three_form" enctype="multipart/form-data">
                                        <input type="file" accept="image/*" name="photo_one_submit" style="display:none" id="challenge_photo_three_input" onChange="submitThree()">
                                        <input type="text" value="3" name="image_challenge" style="display:none">
                                    </form>
                                    <div class="button_submit_image" id="challenge_photo_three_button">
                                        Submit image
                                    </div>
									<script>
                                        $('#challenge_photo_three_button').click(function(){
                                            $('#challenge_photo_three_input').click();
                                        });
                                        function submitThree(){
                                            $('#challenge_photo_three_form').submit();
                                        }
                                    </script>
                                @endif
                            </div>
                        @else
                        <div class="to_late">
                        	Sorry to late
                        </div>
                        @endif
                        
                        
                        
                        <div class="challenge_list_body_image" style="background-image:url('/public/add_challenge/{{$challengeDetails->image_4}}')">
                        	<div class="cover_description">
                            	<div class="cover_description_inside">{{$challengeDetails->description_4}}</div>
                            </div>
                        </div>
                        <div class="cover_description_mobile">
                        	{{$challengeDetails->description_4}}
                        </div>
                        @if($challengeDetails->end_at > $date)
                        	<div class="mobile_form">
                            	@if(count($challenge_image_four))
                                	<div class="alert_update">You already uploaded image</div>
                                @else
                                    <form action="{{URL::route('submit_image_challenge')}}/{{$challengeDetails->id}}" method="POST" id="challenge_photo_four_form" enctype="multipart/form-data">
                                        <input type="file" accept="image/*" name="photo_one_submit" style="display:none" id="challenge_photo_four_input" onChange="submitFour()">
                                        <input type="text" value="4" name="image_challenge" style="display:none">
                                    </form>
                                    <div class="button_submit_image" id="challenge_photo_four_button">
                                        Submit image
                                    </div>
                                    <script>
                                        $('#challenge_photo_four_button').click(function(){
                                            $('#challenge_photo_four_input').click();
                                        });
                                        function submitFour(){
                                            $('#challenge_photo_four_form').submit();
                                        }
                                    </script>
                                @endif
                            </div>
                        @else
                        <div class="to_late">
                        	Sorry to late
                        </div>
                        @endif
                        
                        
                        
                        <div class="challenge_list_body_image" style="background-image:url('/public/add_challenge/{{$challengeDetails->image_5}}')">
                        	<div class="cover_description">
                            	<div class="cover_description_inside">{{$challengeDetails->description_5}}</div>
                            </div>
                        </div>
                        <div class="cover_description_mobile">
                        	{{$challengeDetails->description_5}}
                        </div>
                        @if($challengeDetails->end_at > $date)
                        	<div class="mobile_form">
                            	@if(count($challenge_image_four))
                                	<div class="alert_update">You already uploaded image</div>
                                @else
                                    <form action="{{URL::route('submit_image_challenge')}}/{{$challengeDetails->id}}" method="POST" id="challenge_photo_five_form" enctype="multipart/form-data">
                                        <input type="file" accept="image/*" name="photo_one_submit" style="display:none" id="challenge_photo_five_input" onChange="submitFive()">
                                        <input type="text" value="5" name="image_challenge" style="display:none">
                                    </form>
                                    <div class="button_submit_image" id="challenge_photo_five_button">
                                        Submit image
                                    </div>
                                    <script>
                                        $('#challenge_photo_five_button').click(function(){
                                            $('#challenge_photo_five_input').click();
                                        });
                                        function submitFive(){
                                            $('#challenge_photo_five_form').submit();
                                        }
                                    </script>
                                @endif
                            </div>
                        @else
                        <div class="to_late">
                        	Sorry to late
                        </div>
                        @endif
                        
                        
                    </div>
          			@if($challengeDetails->active == 1)
                    <div class="button_area_start">
                    	<a href="{{URL::route('my_challenge_item_start')}}/{{$challengeDetails->id}}">
                        	Start Challenge
                        </a>
                    </div>
                    @endif
                    @if($challengeDetails->active == 2)
                    	@if($challengeDetails->end_at > $date)
                            <div class="clock_area">Challenge finish at <span id="getting-started"></span></div>
                            <script>
                                $("#getting-started")
                                   .countdown("{{$challengeDetails->end_at}}", function(event) {
                                     $(this).text(
                                       event.strftime('%H:%M:%S')
                                     );
                                });
                            </script>
                        @else
                        	<div class="finish_area">
                            	finish
                            </div>
                    	@endif
                    @endif
                </div>
            </div>
        </div>
    @include('layout.footer')
@stop