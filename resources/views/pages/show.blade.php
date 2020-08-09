<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HR MANAGEMENT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/common.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
	
</head>
<body>	 
<h1 class="page-header text-center"> HR MANAGEMENT </h1>

<!-- ADD FORM -->

				<form method="post" action="{{route('save')}}"> 
					@method('GET')

					<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2">
				    			<label> Enter The Number of Request: </label>
				    			</div>
				    		<div class="col-md-10">
				    			<input type="text" name="no">
				    		</div>
				    	</div>
			    	</div>

					<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2">
				    			<label> Choose The Date : </label>
				    			</div>
				    		<div class="col-md-10">
				    			<input type="date" name="date">
				    		</div>
				    	</div>
			    	</div>

			    	<div class="form-group">
						<div class="row">
				    		<div class="col-md-2">
				    			<label> Item : </label>
				    		</div>
				    		<div class="col-md-10">
				    			<select name="item">
				    				<option selected> Solar </option>
				    				<option> Petrol </option>
				    			</select>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2">
				    			<label> Quantity : </label>
				    			</div>
				    		<div class="col-md-10">
				    			<input type="radio" name="quantity"> Litres 
				    			<input type="radio" name="quantity"> Amounts
				    		</div>

				    	</div>
			    	</div>

			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2">
				    			<label> Enter Litres or Amounts : </label>
				    			</div>
				    		<div class="col-md-10">
				    			<input type="text" name="quantity" placeholder="100.00">
				    		</div>
				    	</div>
			    	</div>

			    	<div class="form-group">
						<div class="row">
				    		<div class="col-md-2">
				    			<label> Driver : </label>
				    		</div>
				    		<div class="col-md-10">
				    			<select name="driver">
				    				<option> Mohammed Ahmed </option>
				    				<option> Aymen Derawei </option>
				    				<option> Mohammed Alkhedry </option>
				    			</select>
				    		</div>
				    	</div>
			    	</div>

                   <div class="form-group">
						<div class="row">
				    		<div class="col-md-2">
				    			<label> State : </label>
				    		</div>
				    		<div class="col-md-10">
				    			<select name="state">
				    				<option> Stopped </option>
				    				<option> Received </option>
				    				
				    			</select>
				    		</div>
				    	</div>
			    	</div>

			</div>

			<div class="modal-footer">
				
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit </button>
				
			</div>
		</div>
	</div>
</div></form> <br>

<hr>

 <!-- TABLE OF Requests -->
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h3> Previous Requests </h3>
		<table class="table table-bordered table-responsive table-striped">
			<thead>
				<th>No.</th>
				<th>Date</th>
				<th>Item</th>
				<th>Quantity</th>
				<th>Driver</th>
				<th>State</th>
			</thead>
			<tbody>

				
				@foreach($users as $member)
					<tr>
						<td>{{$member->no}}</td>
						<td>{{$member->data}}</td>
						<td>{{$member->item}}</td>
						<td>{{$member->quantity}}</td>
						<td>{{$member->driver}}</td>
						<td>
							{{$member->state}} <small>Tap To Change</small>
							<input type="checkbox" data-id="{{ $member->id }}" name="state" class="js-switch" {{ $member->state == 1 ? 'checked' : '' }}>
						</td> 
						
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div> 

<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
    let switchery = new Switchery(html,  { size: 'small' });
});</script>



</body>
</html>

 
