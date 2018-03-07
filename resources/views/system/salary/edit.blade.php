@extends('layouts.app')
@include('includes.admin-navbar')

@section('content')

	<div id="applgreen">
	    <div class="container">
			<div class="row">
				<h3></h3>
			</div>
	    </div>
	</div>
	<br>

	<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>EDIT EMPLOYEE SALARY</h4>
	 			<div class="hline"></div>
	 			<br>
		 			
		 			<form role="form" method="POST" action="{{ route('salary.update', ['id' => $employee_salary->salary_id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row clearfix">
                        	<div class="row col-lg-12">
	                        	<div class="col-lg-6">
									<br><label>Employee:</label>
									<input type="name" class="form-control" autofocus 
									value="{{$employee_salary->firstname}} {{$employee_salary->lastname}}" disabled>

									@if ($errors->has('name'))
	                                    <span class="help-info">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>
							<div class="row col-lg-12">
								<div class="col-lg-6">
									<br><label>Salary(Monthly):</label>
									<input type="number" class="form-control" name="employee_salary" id="employee_salary" autofocus value="{{$employee_salary->employee_salary}}">

									@if ($errors->has('employee_salary'))
	                                    <span class="help-info">
	                                        <strong>{{ $errors->first('employee_salary') }}</strong>
	                                    </span>
	                                @endif
								</div>
							</div>
						</div>

						<br>
					  	<button type="submit" class="btn btn-theme">Update</button>
					  	<a href="{{ route('salary.index') }}" class="btn btn-theme">Back</a>

				</form>

			</div>
	 	</div>
	 </div>

@stop