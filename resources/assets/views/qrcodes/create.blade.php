


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
              <h6 class="h2 text-white d-inline-block mb-0">Create Product</h6>
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
					<div class="col-md-8">
							
								
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
								

	{!! Form::open(['class'=>'form-horizontal', 'route' => 'qrcodes.store', 'method' => 'post', 'files' => true]) !!}
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<!-- {!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control']) !!} -->




		

														<div class="form-group">
															<label class="control-label mb-10" for="Product Name">Product Name</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
                                                                <input type="text" id="name" name="name" class="form-control" placeholder="{{ trans('Product Name') }}">
                                                               
															</div>
                                                        </div>



														<div class="form-group">
															<label class="control-label mb-10" for="Slug">Slug</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
																<input type="text" id="slug" name="slug" class="form-control" placeholder="Slug">
                                                               
															</div>
                                                        </div>

														
														<div class="form-group">
														<label class="control-label mb-10" for="category_id"><i class="fa fa-fw {{ trans('Product Category') }}" aria-hidden="true"></i>Category</label>
                                                        <div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                        <select class="form-control" name="category_id" id="category_id">
                                                        <option value="***">Select your Category</option>

                                                        @if ($category->count())
                                                            @foreach($category as $categorys)
                                                            <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                                                            @endforeach
                                                        @endif
                     
														</select>
													</div>
													

													
														<div class="form-group">
														<label class="control-label mb-10" for="manufacture_id"><i class="fa fa-fw {{ trans('Manufacture') }}" aria-hidden="true"></i>Manufacture</label>
                                                        <div class="input-group">
																<div class="input-group-addon"><i class="icon-lock"></i></div>
                                                        <select class="form-control" name="manufacture_id" id="manufacture_id">
                                                        <option value="***">Select your Manufacture</option>

                                                        @if ($manufacture->count())
                                                            @foreach($manufacture as $manufactures)
                                                            <option value="{{ $manufactures->id }}">{{ $manufactures->name }}</option>
                                                            @endforeach
                                                        @endif
                     
														</select>
														</div>
														</div>

														
														<div class="form-group">
														<label class="control-label mb-10">Quantity</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required>
															</div>
														</div>

														<div class="form-group">
														<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="number" class="form-control" id="amount" name="amount" placeholder="1200" required>
															</div>
														</div>


                                                        <div class="form-group">
														<label class="control-label mb-10">Old Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="number" class="form-control" id="oldAmount" name="oldAmount" placeholder="1200">
															</div>
														</div>
													
													

                                                        
                                                        <div class="form-group">
                                                        <label class="control-label mb-10">Product Description</label>
                                                            <div class="card-body">
                                                             
                                                                <textarea id="froala-editor" row="3" name="p_description"></textarea>
                                                                </div>
                                                            
                                                            </div>
                                                            </div>


                                                            <script>
                                                            new FroalaEditor('textarea#froala-editor')
                                                            </script>
                                                        <script>
                                                            // Replace the <textarea id="body"> with a Froala
                                                            // instance, using default configuration.
                                                            $('#p_description, #excerpt').froalaEditor({
                                                            toolbarButtons: ['undo', 'redo', 'html', '-', 'fontSize', 'paragraphFormat', 'align', 'quote', '|', 'formatOL', 'formatUL', '|', 'bold', 'italic', 'underline', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable'],
                                                            heightMin: 300,
                                                            imageMove: true,
                                                            imageUploadParam: 'file',
                                                            imageUploadMethod: 'post',
                                                            // Set the image upload URL.
                                                            imageUploadURL: '/uploads/Products',
                                                            imageUploadParams: {
                                                                froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
                                                                _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
                                                            }
                                                            });
                                                        </script>


												

												
														<div class="form-group">
														<label class="control-label mb-10">SKU</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-cut"></i></div>
																<input type="text" class="form-control" id="sku" name="sku" placeholder="SKU">
															</div>
													   </div>


                                                       <div class="form-group">
                                                    <div class="col-sm-9">
                                                        <div class="custom-file">
                                                            <input type="file" name="image" accept="image/*" onchange="loadFile(event)" class="custom-file-input">
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




<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', false) !!}
        {!! Form::checkbox('status', '1', '1') !!} Active
    </label>
</div>


                                                       
														
													




                                                        <button type="submit" class="btn btn-success mr-10">Publish</button>
                                                        <input type="button" name="clear" id="clear" class="btn btn-danger" value="Cancel">
														
													
                    

					
					
				



                                        {!! Form::close() !!}
               @endsection