@extends('layouts.dealer')

@section('template_title')
    {{ Auth::user()->name }}'s' Dashboard
@endsection


@section('content')


@if(Auth::user()->role_id == 1)
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
 
			  <h1 class="display-2 text-white">Welcome {{ Auth::user()->full_name }}</h1>
            <p class="text-white mt-0 mb-5">{{trans('This is your online business portal to easily procure all wholesale renewable energy products directly from verified manufacturers anywhere, anytime.')}}</p>
            </div>
  
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Users</h5>
                      <span class="h2 font-weight-bold mb-0">{{$usersCount}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  <button class="btn btn-success"><a href="/users">
                    <span class="text-nowrap">View</span>
                    </a></button>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Products</h5>
                      <span class="h2 font-weight-bold mb-0">{{$qrcodesCount}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  <button class="btn btn-success"><a href="#">
                    <span class="text-nowrap">View</span>
                    </a></button>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Categories</h5>
                      <span class="h2 font-weight-bold mb-0">{{$categoryCount}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  <button class="btn btn-success"><a href="/category/index">
                    <span class="text-nowrap">View</span>
                    </a></button>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Transactions</h5>
                      <span class="h2 font-weight-bold mb-0">{{$transactionCount}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  <button class="btn btn-success"><a href="#">
                    <span class="text-nowrap">View</span>
                    </a></button>
                  </p>
                </div>
              </div>
			</div>
			

          </div>
        </div>
      </div>
    </div>
	<!-- Page content -->


	@else(Auth::user()->role_id == 4)




	    <!-- Header -->
		<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
 
			  <h1 class="display-2 text-white">Welcome {{ Auth::user()->full_name }}</h1>
            <p class="text-white mt-0 mb-5">{{trans('This is your online business portal to easily procure all wholesale renewable energy products directly from verified manufacturers anywhere, anytime.')}}</p>
            </div>
  
          </div>
    
        </div>
      </div>
    </div>
	<!-- Page content -->



	@endif
	



	     <br><br>
			<div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
    
          <div class="card">
            <!-- Card header --> 
            <div class="card-header">
              <h3 class="mb-0">Transaction History</h3>
              <!-- <p class="text-sm mb-0">
                This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
              </p> -->
            </div>
            <div class="table-responsive py-4">

            @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('success_message') }}</p>
                    <div class="clearfix"></div>
                    </div>
            @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-dangerrr">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
								                  @endif

            
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>

				  <th>Product</th>
				  <th>Buyer</th>
				  <th>Method</th>
				  <th>Amount</th>
				   <th>Status</th>
                    <th>Date</th> 
                    <th>Action</th>
                  </tr>
                </thead>
               
                <tbody>

				@foreach($transactions as $transaction)
                  <tr>
                    <td><a href="{!! route('transactions.show', [$transaction->id]) !!}">
																	{!! $transaction->qrcode['name'] !!}<small>|  {{ $transaction->created_at->format('D d, M, Y h:i')}} </small>
																</a></td>
					<td>{!! $transaction->user['full_name'] !!}</td>
					
					<td><span class="label label-primary"><span>{!! $transaction->payment_method !!}</span></span></td>

					<td>
						<span class="txt-dark weight-500">₦{!! $transaction->amount !!}</span>
					</td>

                    <td>
                    @if($transaction->status == 'initiated')
														<span class="badge badge-dot mr-4">
															<i class="bg-info"></i>
															<span class="status">{{$transaction->status}}</span>
															</span>
															@else($transaction->status == 'Completed')
															<span class="badge badge-dot mr-4">
															<i class="bg-success"></i>
															<span class="status">{{$transaction->status}}</span>
														</span>
														@endif
					</td>
					
                    <td>{{$transaction->created_at}}</td>
                    <td>
					<button class="btn btn-success"><a href="{!! route('transactions.show', [$transaction->id]) !!}">Show</a></button>

                    </td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

   
  </div>





    @endsection