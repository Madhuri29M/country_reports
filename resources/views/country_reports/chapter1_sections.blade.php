<li class="section" id="cpt1_sec">Sections:
	<ul style="list-style-type:square;">
		<li>#1:
			<ul style="list-style-type:disc;">
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">ID</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="ID" name="cpt1_sec1_id" value="{{old('cpt1_sec1_id')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_sec1_id') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Title</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="Title" name="cpt1_sec1_title" value="{{old('cpt1_sec1_title')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_sec1_title') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Data</label>
					    <div class="col-md-11">
					      	<textarea class="form-control" placeholder="Data" name="cpt1_sec1_data">{{old('cpt1_sec1_data')}}</textarea>
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_sec1_data') }}
		                    </p>
					    </div>
					</div>
				</li>
			</ul>
		</li>
		<li>#2:
			<ul style="list-style-type:disc;">
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">ID</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="ID" name="cpt1_sec2_id" value="{{old('cpt1_sec2_id')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_sec2_id') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Title</label>
					    <div class="col-md-11">
					      	<input type="text" class="form-control" placeholder="Title" name="cpt1_sec2_title" value="{{old('cpt1_sec2_title')}}">
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_sec2_title') }}
		                    </p>
					    </div>
					</div>
				</li>
				<li>
			  		<div class="form-group row">
					    <label class="col-md-1 col-form-label">Data</label>
					    <div class="col-md-11">
					      	<textarea class="form-control" placeholder="Data" name="cpt1_sec2_data">{{old('cpt1_sec2_data')}}</textarea>
					      	<p class="error">
		                      	{{ @$errors->first('cpt1_sec2_data') }}
		                    </p>
					    </div>
					</div>
				</li>
			</ul>
		</li>
	</ul>
</li>