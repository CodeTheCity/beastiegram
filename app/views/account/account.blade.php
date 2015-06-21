@extends('layout.main')

@section('content')
	@include('layout.nav')
    	<div class="page_area">
        	@include('layout.profile')
            <div class="right_profile_area">
                <div class="awards_area">
                    <div class="awards_area_header">
                        My awards
                    </div>
                </div>
                <div class="friends_area">
                    <div class="friends_area_header">
                        My friends
                    </div>
                </div>
            </div>
        </div>
    @include('layout.footer')
@stop
