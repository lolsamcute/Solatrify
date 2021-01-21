@extends('layouts.dealer')

@section('content')


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Product Category</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Category</li>
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
					<div class="col-md-12">
							
								
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
								
													<form class="form-horizontal" enctype="multipart/form-data" action="/category/index" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">



									

                                                    <div class="form-group">
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
                                                    </div></div>


														<div class="form-group">
															<label for="name" class="col-sm-3 control-label">{{ trans('Category Name') }}*</label>
															<div class="col-sm-9">
																<div class="input-group">
																	<div class="input-group-addon"><i class="icon-user"></i></div>
																	<input type="text" class="form-control"
																	name="name" id="name" placeholder="{{ trans('Category Name') }}">
																</div>
															</div>
														</div>


					

														<div class="form-group mb-0">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-info ">Publish</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									
							
						
					</div>
					<!-- /Row -->
					
				
				 





    <div  class="panel-wrapper collapse in">
									<div  class="panel-body">

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
</div></div>


                            
   
<br><br><br><br><br><br>




<div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
    
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Product Category</h3>
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
				  <th>Image</th>
				  <th>Name</th>
				   <th>Date</th>
                    <th>Update</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
               
                <tbody>

                @if(!empty($category))
                                         @forelse($category as $categories)
                  <tr>

                  <td>{{$categories->id}}</td>
                  <td><img src="../category/upload/{!!$categories->file !!}" style="width:100px"></td>
					
                  <td class="text-success"><h5>{{$categories->name}}</h5></td>

                    <td>{{$categories->created_at}}</td>
                    <td>{{$categories->updated_at}}</td>

                    <td>
                  
						<span class="badge badge-dot mr-4">
							<i class="bg-success"></i>
						<span class="status">Published</span>
						</span>
															
														
                    </td>
                    


                    <td>

                         <button><a href="{{ url('delete-category') }}/{{$categories->id}}">Delete</a></button> </td>


                    
                  </tr>
                  @empty
                                    <li>No Items</li>
                                @endforelse
                                    @endif


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection



