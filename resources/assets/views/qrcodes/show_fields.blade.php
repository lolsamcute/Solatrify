	<!-- Main Content -->
    <div class="page-wrapper">
			<div class="container">
			
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
							<div class="col-xs-6">

<!-- Product Name Field -->
<div class="form-group">
		<h3>
			
			{!! $qrcode->name !!} 
<br/>
			@if(isset($qrcode->company_name))
				<small>By {!! $qrcode->company_name !!} </small>
			@endif
		</h3>
	</div>

	  <!-- Amount Field -->
<div class="form-group">
		<h4>Amount: ₦{!! $qrcode->amount !!}</h4>
	</div>


	@if(!Auth::guest() && ($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3))
<hr/>

	<!-- User Id Field -->
<div class="form-group">
	{!! Form::label('user_id', 'User:') !!}
	<p>{!! $qrcode->user['email'] !!}</p>
</div>




<!-- Status Field -->
<div class="form-group">
	{!! Form::label('status', 'Status:') !!}
	<p>
		@if($qrcode->status == 1)
		Active
		@else
		Inactive
		@endif
	</p>
</div>

<!-- Created At Field -->
<div class="form-group">
	{!! Form::label('created_at', 'Created At:') !!}
	<p>{!! $qrcode->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
	{!! Form::label('updated_at', 'Updated At:') !!}
	<p>{!! $qrcode->updated_at !!}</p>
</div>

@endif

</div>

</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					
				</div>
				
				
				
			</div>
			<!-- /Main Content -->



