


@extends('layouts.dealer')

@section('content')


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Manage Product</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product</li>
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
              <h3 class="mb-0">Manage Product</h3>
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
                    @include('qrcodes.table')
                    </div>
          </div>
        </div>
      </div>
    </div>

    
@endsection

