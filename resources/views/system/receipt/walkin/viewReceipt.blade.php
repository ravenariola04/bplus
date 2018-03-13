@extends('layouts.app')
<link href="{{ asset('css/printWalkinReceipt.css') }}" rel="stylesheet" media="all">
@include('includes.admin-navbar')

@section('content')

	<div id="applgreen">
	    <div class="container">
			<div class="row">
				<h3></h3>
			</div>
	    </div>
	</div><br><br><br><br>

	<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-6 col-md-offset-3">
				<div class="panel panel-default" id="divForPrinting">
				  	<div class="panel-body">
				  		<div class="pull-right"><a id="printWalkinReceiptBtn" class="btn btn-sm btn-primary">Print Receipt</a></div>
				  		<br><br>
				  		<center>**********************************</center>
				    	<center>Receipt</center>
				    	<center>**********************************</center>
				    	<br>
				    	<center><b style="color:black;">Beauty Salon Plus</b></center><br>

				    	<div class="col-lg-6 col-md-offset-3">
							<p style="display:inline-block;"><b style="color:black;">Customer:</b></p>
							<p class="pull-right"><b style="color:black;">{{ ucwords($getCustomerDetails->firstname)}} {{ ucwords($getCustomerDetails->lastname) }}</b></p><br>

							<p style="display:inline-block;"><b style="color:black;">Services Availed:</b></p>
				    		 </div>

						<div class="col-lg-6 col-md-offset-3">
					    	<table class="table table-stripped table-hover">
					    		@foreach($getAllWalkinServices as $getAllWalkinService)
						    		<thead>
						    		<th id="th-padding">
						    			<span>
						    				<p style="display:inline-block;">{{$getAllWalkinService->service_name}}</p>
						    				<p class="pull-right">&#8369;{{$getAllWalkinService->price}}</p>
						    			</span>
						    		</th>
						    		</thead>
					    		@endforeach

					    			<thead>
						    			<th id="th-padding">
						    				<span>
						    					<p style="display:inline-block;">Vat Incl.</p>
						    					<p class="pull-right">{{$vat->percentage}}%</p>
						    				</span>
						    			</th>
						    		</thead>

						    		<thead>
						    			<th id="th-padding">
						    				<span>
						    					<p style="display:inline-block;">Total Service Fee</p>
						    					<p class="pull-right">&#8369;{{$sumEmployeeWalkinServiceFee->totalServiceFee}}</p>
						    				</span>
						    			</th>
						    		</thead>

						    		<thead>
						    			<th id="th-padding">
						    				<span>
						    					<p style="display:inline-block;">Total Amount Due</p>
						    					<p class="pull-right" style="color:red;">&#8369;{{$getTotalAmountDue[0]->total + $sumEmployeeWalkinServiceFee->totalServiceFee}}</p>
						    				</span>
						    			</th>
						    		</thead>

						    		<thead>
						    			<th id="th-padding">
						    				<span>
						    					<p style="display:inline-block;">Amount Paid</p>

						    					<p class="pull-right">&#8369;{{$amount_paid}}</p>
						    				</span>
						    			</th>
						    		</thead>

						    		<thead>
						    			<th id="th-padding">
						    				<span>
						    					<p style="display:inline-block;">Change</p>

						    					<p class="pull-right">&#8369;{{$change}}</p>
						    				</span>
						    			</th>
						    		</thead>
					    		
					    	</table>

					    	<center>Date/Time: {{ date("m/d/Y h:i:sa") }}</center>
				    	</div>

				  	</div>
				</div>
			</div>
		</div>
	</div>

@stop