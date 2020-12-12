@extends('layouts.app')
@section('css')
	<style type="text/css">
		form .error {
		  	color: #ff0000;
		}
		div.main
		{
			margin-top: 30px;
		    padding-top: 15px;
		}
		li.section
		{
			height: 300px;
			overflow-y: scroll;
			overflow-x: hidden
		}
	</style>
@endsection
@section('content')
	<h2><center>Country Reports</center></h2>
	<div class="container main">
		@if ($errors->any())
	    <div class="alert alert-danger">
	      <b>Whoops! There were some error with your inputs.</b>
	      <ul>
	        @foreach ($errors->all() as $error)
	          <li>{{ $error }}</li>
	        @endforeach
	      </ul>
	    </div>
	    @endif
		<form method="POST" action="{{route('country_reports.store')}}" id="country_reports_form">
			@csrf
			<ul style="list-style-type:square;">
			  	<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">ID</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="ID" name="country_id" value="{{old('country_id')}}">
					      	<p class="error">
		                      	{{ @$errors->first('country_id') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Country</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="Country" name="country_name" value="{{old('country_name')}}">
					      	<p class="error">
		                      	{{ @$errors->first('country_name') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Language</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="Language" name="country_language" value="{{old('country_language')}}">
					      	<p class="error">
		                      	{{ @$errors->first('country_language') }}
		                    </p>
					    </div>
					</div>
				</li>
			  	@include('country_reports.chapters')
			  	<div class="float-right">
					<button id="submit" type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
				</div>
			</ul>

		</form>
	</div>
@endsection

@section('js')
<script type="text/javascript">
	
	$(document).ready(function(){
		//success / error messages
		@if(Session::has('success'))
	        toastr.success("{{ Session::get('success') }}");
	    @elseif(Session::has('error'))
	        toastr.error("{{ Session::get('error') }}");
	    @endif

	    // scroll 2 sections simultaneously
	    $('#cpt1_sec').on('scroll', function () {
		    $('#cpt2_sec').scrollTop($(this).scrollTop());
		});
		$('#cpt2_sec').on('scroll', function () {
		    $('#cpt1_sec').scrollTop($(this).scrollTop());
		});

		$(window).scroll(function(event){
		    $('#cpt1_sec').scrollTop($(this).scrollTop());
		    $('#cpt2_sec').scrollTop($(this).scrollTop());
		});

		//form validations
		$("#country_reports_form").validate({
		    // validation rules
		    rules: {
		        country_id: "required",
		        country_name: "required",
		        country_language: "required",
		        cpt1_id: "required",
		        cpt1_title: "required",
		        cpt1_data: "required",
		        cpt1_sec1_id: "required",
		        cpt1_sec1_title: "required",
		        cpt1_sec1_data: "required",
		        cpt1_sec2_id: "required",
		        cpt1_sec2_title: "required",
		        cpt1_sec2_data: "required",
		        cpt2_id: "required",
		        cpt2_title: "required",
		        cpt2_data: "required",
		        cpt2_sec1_id: "required",
		        cpt2_sec1_title: "required",
		        cpt2_sec1_data: "required",
		        cpt2_sec2_id: "required",
		        cpt2_sec2_title: "required",
		        cpt2_sec2_data: "required",
		        cpt2_sec3_id: "required",
		        cpt2_sec3_title: "required",
		        cpt2_sec3_data: "required"
		    },
		    // validation error messages
		    messages: {
		        country_id: "Please enter country id.",
		        country_name: "Please enter country name.",
		        country_language: "Please enter country language.",
		        cpt1_id: "Please enter chapter id.",
		        cpt1_title: "Please enter chapter title.",
		        cpt1_data: "Please enter chapter data.",
		        cpt1_sec1_id: "Please enter section id.",
		        cpt1_sec1_title: "Please enter section title.",
		        cpt1_sec1_data: "Please enter section data.",
		        cpt1_sec2_id: "Please enter section id.",
		        cpt1_sec2_title: "Please enter section title.",
		        cpt1_sec2_data: "Please enter section data.",
		        cpt2_id: "Please enter chapter id.",
		        cpt2_title: "Please enter chapter title.",
		        cpt2_data: "Please enter chapter data.",
		        cpt2_sec1_id: "Please enter section id.",
		        cpt2_sec1_title: "Please enter section title.",
		        cpt2_sec1_data: "Please enter section data.",
		        cpt2_sec2_id: "Please enter section id.",
		        cpt2_sec2_title: "Please enter section title.",
		        cpt2_sec2_data: "Please enter section data.",
		        cpt2_sec3_id: "Please enter section id.",
		        cpt2_sec3_title: "Please enter section title.",
		        cpt2_sec3_data: "Please enter section data."
		    }
		});
	});
</script>
@endsection
