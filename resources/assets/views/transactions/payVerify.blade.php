@extends('layouts.dealer')

@section('content')



<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">User Pay Verification</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Pay Verification</li>
                </ol>
              </nav>
            </div>
           
          </div>
        </div>
      </div>
    </div>
    <br>


       
<div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
    
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Manage Pay Verification</h3>
              <!-- <p class="text-sm mb-0">
                This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
              </p> -->
            </div>
            <div class="table-responsive py-4">

            @if(Session::has('d_message'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('d_message') }}</p>
                    <div class="clearfix"></div>
                    </div>
                            @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
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

                  <th>#</th>
				  <th>Name</th>
                  <th>Status</th>
                  <th>Proof</th>
				   <th>Date</th>
                   <th>Action</th>
                 
                  </tr>
                </thead>
               
                <tbody>

                @foreach($transactions as $transaction)
                  <tr>

                  <td>{!! $transaction->id !!}</td>

                  <td>{!! $transaction->user['full_name'] !!}</td>

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
                
                  <td>  <a href="/payVerify/upload/{{$transaction->file}}"><img src="/payVerify/upload/{{$transaction->file}}" alt="big-1" height="80" width="80"></a></td>
                  <td>{!! $transaction->created_at !!}</td>

                  <td>
                  <form action="/payVerification/accept-verification" method="post">
        {{ csrf_field() }}
        <input id="status" name="status" type="hidden" value="Completed">
        <input id="id" name="id" type="hidden" value="{{$transaction->id}}">
        <button class="btn btn-primary" type="submit">Complete</button>
        </form>
        <br>
        
        <form action="/payVerification/decline-verification" method="post">
        {{ csrf_field() }}
        <input id="status" name="status" type="hidden" value="Declined">
        <input id="id" name="id" type="hidden" value="{{$transaction->id}}">
        <button class="btn btn-danger" type="submit">Decline</button>
        </form>
      

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

    
@endsection

