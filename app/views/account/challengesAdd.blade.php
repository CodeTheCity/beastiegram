@extends('layout.main')

@section('content')
	@include('layout.nav')
    	<div class="page_area">
        	@include('layout.profile')
            <div class="right_profile_area">
            	<div class="right_profile_area_header">
                	Add new challenge
                </div>
            	<form action="{{URL::route('my_challenges_add_post')}}" method="POST" enctype="multipart/form-data">
                	<table>
                    	<tr>
                        	<td class="column_one">
                            	Challenge name <span>*</span>
                        	</td>
                            <td>
                            	<input type="text" name="challenge_name" placeholder="Challenge name">
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	Challenge description <span>*</span>
                        	</td>
                            <td>
                            	<textarea name="description" placeholder="Description for challenge"></textarea>
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	Image one <span>*</span>
                        	</td>
                            <td>
                            	<input type="file" name="task_one" accept="image/*" id="photo_one">
                                <script>
									$('#photo_one').bind('change', function() {
										var control = $("#photo_one");
										if(this.files[0].size > 600000){
											alert('to big');
											control.replaceWith( control = control.clone( true ) );
										}
									});
								</script>
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                        	</td>
                            <td>
                            	<input type="text" name="task_one_description" placeholder="Description for image one">
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	Image two <span>*</span>
                        	</td>
                            <td>
                            	<input type="file" name="task_two" accept="image/*" id="photo_two">
                                <script>
									$('#photo_two').bind('change', function() {
										var control = $("#photo_two");
										if(this.files[0].size > 600000){
											alert('to big');
											control.replaceWith( control = control.clone( true ) );
										}
									});
								</script>
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                        	</td>
                            <td>
                            	<input type="text" name="task_two_description" placeholder="Description for image two">
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	Image three <span>*</span>
                        	</td>
                            <td>
                            	<input type="file" name="task_three" accept="image/*" id="photo_three">
                                <script>
									$('#photo_three').bind('change', function() {
										var control = $("#photo_three");
										if(this.files[0].size > 600000){
											alert('to big');
											control.replaceWith( control = control.clone( true ) );
										}
									});
								</script>
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                        	</td>
                            <td>
                            	<input type="text" name="task_three_description" placeholder="Description for image three">
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	Image four <span>*</span>
                        	</td>
                            <td>
                            	<input type="file" name="task_four" accept="image/*" id="photo_four">
                                <script>
									$('#photo_four').bind('change', function() {
										var control = $("#photo_four");
										if(this.files[0].size > 600000){
											alert('to big');
											control.replaceWith( control = control.clone( true ) );
										}
									});
								</script>
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                        	</td>
                            <td>
                            	<input type="text" name="task_four_description" placeholder="Description for image four">
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	Image five <span>*</span>
                        	</td>
                            <td>
                            	<input type="file" name="task_five" accept="image/*" id="image_five">
                                <script>
									$('#image_five').bind('change', function() {
										var control = $("#image_five");
										if(this.files[0].size > 600000){
											alert('to big');
											control.replaceWith( control = control.clone( true ) );
										}
									});
								</script>
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                        	</td>
                            <td>
                            	<input type="text" name="task_five_description" placeholder="Description for image five">
                            </td>
                        </tr>
                        <!--<tr>
                        	<td class="column_one">
                            	Timer<span>*</span>
                        	</td>
                            <td>
                            	<input type="radio" name="type" value="1" checked> Challenge with timer<br>
                    			<input type="radio" name="type" value="2"> Challenge without timer
                            </td>
                        </tr>-->
                        <tr class="timer_area">
                        	<td class="column_one">
                            	Set timer <span>*</span>
                        	</td>
                            <td>
                            	<input type="text" name="timer" placeholder="Timer">
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	Type of challenge <span>*</span>
                        	</td>
                            <td>
                            	<input type="radio" name="public" value="1" checked> Private challenge<br>
                    			<input type="radio" name="public" value="2"> Public challenge
                            </td>
                        </tr>
                        <tr>
                        	<td class="column_one">
                            	<button class="submit_form">Add challenge</button>
                        	</td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    @include('layout.footer')
@stop
