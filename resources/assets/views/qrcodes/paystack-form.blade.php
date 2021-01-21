
@extends('layouts.dealer')

@section('content')
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Products</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product Review</li>
                </ol>
              </nav>
            </div>
           
          </div>
        </div>
      </div>
	</div>

<br><br><br><br>
	<div class="container-fluid mt--6 ">
      <div class="row">
        <div class="col-lg-6 center">

	      <div class="card bg-gradient-primary">
            <!-- Card body -->
            <div class="card-body">
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <img src="/datatable/img/icons/cards/mastercard.png" alt="Image placeholder" />
                </div>
                <div class="col-auto">
                  <div class="d-flex align-items-center">
                    <small class="text-white font-weight-bold mr-3">Make default</small>
                    <div>
                      <label class="custom-toggle  custom-toggle-white">
                        <input type="checkbox" checked="">
                        <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4">
              
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input class="form-control" value="{!! $qrcode->name !!}" type="text" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-credit-card"></i></span>
                      </div>
                      <input class="form-control" value="Amount: ₦{!! $qrcode->amount !!}" type="text" readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                          </div>
                          <input class="form-control" value="Payment Method: Paystack" type="text" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" value="{!! $qrcode->created_at !!}" type="text" readonly>
                        </div>
                      </div>
                    </div>
				          </div>
				  
				                                                           
          <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" 
          class="form-horizontal" role="form">
           <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 ">
            <input type="hidden" name="email" value="hello@solatrify.com"> {{-- required --}}
            <input type="hidden" name="orderID" value="{{ $transaction->id }}">
            <input type="hidden" name="amount" value="{{ $qrcode->amount*100 }}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="1">
           
            <input type="hidden" name="metadata" value="{{ json_encode($array = [
                'buyer_user_id' =>  $user->id, 
            'buyer_user_email' => $user->email, 
            'qrcode_id'=> $qrcode->id,
            'transaction_id'=>$transaction->id
            ]) }}">
          
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
          

             <input type="hidden" name="_token" value="{{ csrf_token() }}">



                  <button type="submit" class="btn btn-block btn-lg btn-success">Pay with Paystack</button>
				  </form>
              </div>
            </div>

            <h2 class="text-white font-weight-bold mr-3">Or Pay by Transferring upload your confirm below</h2>

		  </div>

          </div>

                   <div class="align-items-center">
                   
                    <div>



            <!-- Username card -->
            <!-- Card body -->
            <div class="card-body">
              <div class="row justify-content-between align-items-center">
                <div class="col">
                  <img src="/datatable/img/icons/cards/visa.png" alt="Image placeholder">
                  <img src="/datatable/img/icons/cards/mastercard.png" alt="Image placeholder" />
                </div>
                <div class="col-auto">
                  <span class="badge badge-lg badge-success">Active</span>
                </div>
              </div>
              <div class="my-4">
                <span class="h6 surtitle text-light">
                Account Number
                </span>
                <div class="card-serial-number h1 text-white">
                  <div>04</div>
                  <div>275</div>
                  <div>05</div>
                  <div>659</div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <span class="h6 surtitle text-light">Account Name</span>
                  <span class="d-block h3 text-white">Solatrify Nigeria Limited</span>
                </div>
                <div class="col">
                  <span class="h6 surtitle text-light">Bank Name</span>
                  <span class="d-block h3 text-white">GT Bank</span>
                </div>
              </div>
            </div>


                                            <div class="col-lg-8 center">

                                <div class="card bg-gradient-primary">

                                        <form action="{{url('/payVerification')}}" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                          <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">

                                                                              
                                              <div class="form-group">
                                              <h2 class="text-white font-weight-bold mr-3">&nbsp;&nbsp;Upload Confirmation Slip</h2>
                                                    <div class="col-sm-9">
                                                        <div class="custom-file">
                                                            <input type="file" name="file" accept="image/*" onchange="loadFile(event)" class="custom-file-input">
                                                            <label class="custom-file-label" for="customFileLang">Select file</label>
                                                        </div>
                                                        <img id="output" style="max-width: 160px; max-height: 120px; border: none;"/>
                                                        <script>
                                                        var loadFile = function(event) {
                                                            var reader = new FileReader();
                                                            reader.onload = function(){
                                                            var output = document.getElementById('output');
                                                            output.src = reader.result;
                                                            };
                                                            reader.readAsDataURL(event.target.files[0]);
                                                        };
                                                        </script>
                                                          <br>
                                                      <button class="btn btn-success" type="submit">Submit</button>
                                                    </div>
                                                  
                                                    </div>
                                                    
                                                    </div>

                                                  

                                                    </form>
                                                    
                                                    
                                                    </div>


                                                    </div>

          </div>
		  </div>
      </div>



  




           




		  

						

			@endsection

