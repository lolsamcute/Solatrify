


@extends('layouts.dealer')

<link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.5/js/froala_editor.pkgd.min.js"></script>
@section('content')


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Edit Product</h6>
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


	<!-- Main Content -->
	<div class="page-wrapper">
			
					
					<!-- Row -->
					<div class="row">
					<div class="col-md-6">
							
								
											<div class="col-sm-12 col-xs-12">
												<div class="form-wrap">

    <div  class="panel-wrapper collapse in">
									<div  class="panel-body"> 


        </div></div>

              @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('message') }}</p>
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
								
                   {!! Form::model($qrcode, ['route' => ['qrcodes.update', $qrcode->id], 'method' => 'patch']) !!}

                        @include('qrcodes.fields')

                   {!! Form::close() !!}
                   </div>
											</div>
										</div>
					</div>
				
      
@endsection


