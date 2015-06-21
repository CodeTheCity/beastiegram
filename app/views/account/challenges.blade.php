@extends('layout.main')

@section('content')
	@include('layout.nav')
    	<div class="page_area">
        	@include('layout.profile')
            <div class="right_profile_area">
            	@if(Auth::user()->permission == 1)
                <a href="{{URL::route('my_challenges_add')}}" class="add_new_challenge">
                	Add new challenge
                </a>
                @endif
                <div class="challenge_list">
                	@if(Auth::user()->permission == 1)
                        <div class="challenge_list_header">
                            In-active challenges
                        </div>
                        <div class="challenge_list_body">
                            @foreach($challengeInactive as $challengeInactiveItem)
                                <a href="{{URL::route('my_challenge_item')}}/{{$challengeInactiveItem->id}}" style="background-image:url('/public/add_challenge/{{$challengeInactiveItem->image_1}}')"><div class="challenge_box_title">{{$challengeInactiveItem->name}}</div></a>
                            @endforeach
                        </div>
                    @endif
                    <div class="challenge_list_header">
                    	Active challenges
                    </div>
                    <div class="challenge_list_body">
                    	@foreach($challengeActiveOn as $challengeInactiveItem)
                                <a href="{{URL::route('my_challenge_item')}}/{{$challengeInactiveItem->id}}" style="background-image:url('/public/add_challenge/{{$challengeInactiveItem->image_1}}')"><div class="challenge_box_title">{{$challengeInactiveItem->name}}</div></a>
                        @endforeach
                    </div>
                    <div class="challenge_list_header">
                    	Old challenges
                    </div>
                    <div class="challenge_list_body">
                    	@foreach($challengeActive as $challengeInactiveItem)
                                <a href="{{URL::route('my_challenge_item')}}/{{$challengeInactiveItem->id}}" style="background-image:url('/public/add_challenge/{{$challengeInactiveItem->image_1}}')"><div class="challenge_box_title">{{$challengeInactiveItem->name}}</div></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @include('layout.footer')
@stop