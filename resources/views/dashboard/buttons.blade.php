@extends('dashboard.layout.dashboard')
@section('page_heading','Buttons')
@section('section')
	<div class="col-sm-6">
		@section ('5button_panel_title','Default Buttons')
		@section ('5button_panel_body')
			<h4>Normal Buttons</h4>

			<p>
				@include('dashboard.widgets.button', array('value'=>'Primary', 'class'=>'primary'))
				@include('dashboard.widgets.button', array('class'=>'primary', 'value'=>'Primary'))
				@include('dashboard.widgets.button', array('class'=>'success', 'value'=>'Success'))
				@include('dashboard.widgets.button', array('class'=>'warning', 'value'=>'Warning'))
				@include('dashboard.widgets.button', array('class'=>'danger', 'value'=>'Danger'))
			</p>
			<br>
			<h4>Disabled Buttons</h4>
			<p>
				@include('dashboard.widgets.button', array('value'=>'Default', 'disabled'=>true))
				@include('dashboard.widgets.button', array('class'=>'primary', 'value'=>'Primary', 'disabled'=>true))
				@include('dashboard.widgets.button', array('class'=>'success', 'value'=>'Success', 'disabled'=>true))
				@include('dashboard.widgets.button', array('class'=>'warning', 'value'=>'Warning', 'disabled'=>true))
				@include('dashboard.widgets.button', array('class'=>'danger', 'value'=>'Danger', 'disabled'=>true))
			</p>
			<br>
			<h4>Button Sizes</h4>
			<p>
				@include('dashboard.widgets.button', array('class'=>'primary', 'size'=>'lg', 'value'=>'Large Button'))
				@include('dashboard.widgets.button', array('class'=>'primary', 'value'=>'Default'))
				@include('dashboard.widgets.button', array('class'=>'primary', 'size'=>'sm', 'value'=>'Small'))
				@include('dashboard.widgets.button', array('class'=>'primary', 'size'=>'xs', 'value'=>'Extra Small'))
			<br>
			<br>
		@include('dashboard.widgets.button', array('class'=>'primary', 'size'=>'lg btn-block', 'value'=>'Block level Button'))
		@endsection
		@include('dashboard.widgets.panel', array('as'=>'5button', 'header'=>true))
	</div>

	<div class="col-sm-6">
		@section ('6button_panel_title','Default Buttons')
		@section ('6button_panel_body')
			<h4>Normal Circle Buttons</h4>
	    	<button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button> 

	 	    <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i></button> 

	 	    <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i></button> 

	 	    <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button> 

	 	    <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button> 

	 	    <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i></button> 

	 	    <br>
	    	<br>

			<h4>Large Circle Buttons</h4>
        	<button type="button" class="btn btn-default btn-circle    btn-lg   "><i class="fa fa-check"></i></button> 

	 	    <button type="button" class="btn btn-primary btn-circle    btn-lg   "><i class="fa fa-list"></i></button> 

	 	    <button type="button" class="btn btn-success btn-circle    btn-lg   "><i class="fa fa-link"></i></button> 

	 	    <button type="button" class="btn btn-info btn-circle    btn-lg   "><i class="fa fa-check"></i></button> 

	 	    <button type="button" class="btn btn-warning btn-circle    btn-lg   "><i class="fa fa-times"></i></button> 

	 	    <button type="button" class="btn btn-danger btn-circle    btn-lg   "><i class="fa fa-heart"></i></button> 

		@endsection
		@include('dashboard.widgets.panel', array('as'=>'6button', 'header'=>true))

		<br />
		@section ('9button_panel_title','Outline buttons with smooth transition')
		@section ('9button_panel_body')
			<h4>Outline Buttons</h4>
			<p>
				@include('dashboard.widgets.button', array('value'=>'Default', 'class'=>'default btn-outline'))
				@include('dashboard.widgets.button', array('class'=>'primary btn-outline', 'value'=>'Primary'))
				@include('dashboard.widgets.button', array('class'=>'success btn-outline', 'value'=>'Success'))
				@include('dashboard.widgets.button', array('class'=>'warning btn-outline', 'value'=>'Warning'))
				@include('dashboard.widgets.button', array('class'=>'danger btn-outline', 'value'=>'Danger'))
			</p>
			<br>
			<h4>Outline Button Sizes</h4>
			<p>
				@include('dashboard.widgets.button', array('class'=>'primary btn-outline', 'size'=>'lg', 'value'=>'Large Button'))
				@include('dashboard.widgets.button', array('class'=>'primary btn-outline', 'value'=>'Default'))
				@include('dashboard.widgets.button', array('class'=>'primary btn-outline', 'size'=>'sm', 'value'=>'Small'))
				@include('dashboard.widgets.button', array('class'=>'primary btn-outline', 'size'=>'xs', 'value'=>'Extra Small'))
			</p>
			<br>
			<br>
		@include('dashboard.widgets.button', array('class'=>'primary btn-o', 'size'=>'lg btn-block', 'value'=>'Block level Button'))
		@endsection
		@include('dashboard.widgets.panel', array('as'=>'9button', 'header'=>true))


		
		</div>


	
@stop


