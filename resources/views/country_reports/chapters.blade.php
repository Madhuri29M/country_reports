<li>Chapters: 
	<ul style="list-style-type:disc;">
		<li>#1:
			<ul style="list-style-type:circle;">
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">ID</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="ID" name="cpt1_id" value="{{old('cpt1_id')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_id') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Title</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="Title" name="cpt1_title" value="{{old('cpt1_title')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_title') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Data</label>
					    <div class="col-md-11">
					      	<textarea class="form-control" placeholder="Data" name="cpt1_data">{{old('cpt1_data')}}</textarea>
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_data') }}
		                    </p>
					    </div>
					</div>
				</li>
				@include('country_reports.chapter1_sections')
			</ul>
		</li>
		<li>#2:
			<ul style="list-style-type:circle;">
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">ID</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="ID" name="cpt2_id" value="{{old('cpt2_id')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt2_id') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Title</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="Title" name="cpt2_title" value="{{old('cpt2_title')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt2_title') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Data</label>
					    <div class="col-md-11">
					      	<textarea class="form-control" placeholder="Data" name="cpt2_data">{{old('cpt2_data')}}</textarea>
					      	<p class="error">
		                      	{{ @$errors->first('cpt2_data') }}
		                    </p>
					    </div>
					</div>
				</li>
				@include('country_reports.chapter2_sections')
			</ul>
		</li>
	</ul>
</li>