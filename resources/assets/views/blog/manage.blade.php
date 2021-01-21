


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
              <h6 class="h2 text-white d-inline-block mb-0">Create Blog</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

              @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('success_message') }}</p>
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
								



        <form action="/blog/manage" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">


                                                <div class="form-group">
                                                <label class="control-label mb-10" for="Title">Upload Blog</label>
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
															<label class="control-label mb-10" for="Title">Title</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="icon-user"></i></div>
                                                                <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Title">
                                                                @if ($errors->has('post_title'))
                  <span class="help-block">
                      <strong>{{ $errors->first('post_title') }}</strong>
                  </span>
                  @endif
															</div>
                                                        </div>



                                                        <div class="form-group">
                                                        <label class="control-label mb-10">Description</label>
                                                            <div class="card-body">
                                                             
                                                                <textarea id="froala-editor" row="3" name="post_body"></textarea>
                                                                </div>
                                                            
                                                            </div>
                                                            </div>


                                                            <script>
                                                            new FroalaEditor('textarea#froala-editor')
                                                            </script>
                                                        <script>
                                                            // Replace the <textarea id="body"> with a Froala
                                                            // instance, using default configuration.
                                                            $('#post_body, #excerpt').froalaEditor({
                                                            toolbarButtons: ['undo', 'redo', 'html', '-', 'fontSize', 'paragraphFormat', 'align', 'quote', '|', 'formatOL', 'formatUL', '|', 'bold', 'italic', 'underline', '|', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable'],
                                                            heightMin: 300,
                                                            imageMove: true,
                                                            imageUploadParam: 'file',
                                                            imageUploadMethod: 'post',
                                                            // Set the image upload URL.
                                                            imageUploadURL: '/uploads/blog',
                                                            imageUploadParams: {
                                                                froala: 'true', // This allows us to distinguish between Froala or a regular file upload.
                                                                _token: "{{ csrf_token() }}" // This passes the laravel token with the ajax request.
                                                            }
                                                            });
                                                        </script>




                                                        <div class="form-group">
															<label class="control-label mb-10" for="Tags">Tags</label>
															<div class="input-group">
                                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                                                <input type="text" class="form-control" name="tag" id="tag" placeholder="Tags">
                                                      
                  @if ($errors->has('tag'))
                                                               
                                                              
                  <span class="help-block">
                      <strong>{{ $errors->first('tag') }}</strong>
                  </span>
                  @endif
															</div>
                                                        </div>


                                                       
														
													




                                                        <button type="submit" class="btn btn-success mr-10">Publish</button>
                                                        <input type="button" name="clear" id="clear" class="btn btn-danger" value="Cancel">
														
													
                    

					
					
				



                                        {!! Form::close() !!}
                                        </div>
											</div>
										</div>
					</div>
                        







                    <br><br><br><br><br><br>




<div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
    
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Manage Blog</h3>
             
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
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif



             @if(Session::has('success_message1'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('success_message1') }}</p>
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
                   <th>Title</th>
                     <th>Status</th>
                      <th>Created</th>
                       <th class="text-nowrap">Action</th>
                  </tr>
                </thead>
               
                <tbody>

                @foreach ($posts as $key => $blog)
											  <tr>

                                              <td>{{$blog->id}}</td>

                                              <td><a href="../uploads/Blog/{{$blog->file}}"><img src="../uploads/Blog/{{$blog->file}}" style="width:150px"></a> </td>
                                                
                                                <td>{{$blog->post_title}}</td>
                                                <td> <span class="txt-dark weight-500" style="text-align:right">{{$blog->post_body}}</span></td>
                                               
                                                <td>{{$blog->status}}</td>
                                                <td>
                                                {{ Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}
                                                </td>

                                                <td class="text-nowrap">
                                                    
                                                <button class="btn btn-success"><a href="{{ url ('view', array($blog->id))}}" class="mr-25" data-toggle="tooltip">View</a></button>
                                                  
                                                <button class="btn btn-info"> <a href="{{ url ('edit', array($blog->id))}}" class="mr-25" data-toggle="tooltip">Edit</a></button>

                                                <button class="btn btn-danger"><a href="{{ url ('delete-manage', array($blog->id))}}" class="mr-25" data-toggle="tooltip">Delete</a></button>

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
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
