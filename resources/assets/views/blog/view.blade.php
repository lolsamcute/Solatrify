@extends('layouts.dealer')

@section('content')

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">View Blog</h6>
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
			<div class="container">
			
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default card-view">
							<div class="col-xs-6">

                            <section class="content-header">
       
      
       <h1 class="pull-right">
          <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="/blog/manage">Go Back</a>
       </h1>
   </section>


            <!-- Name Field -->
            <div class="form-group">
                {!! Form::label('file', 'Image:') !!}
                <p><a href="../uploads/Blog/{{$posts->file}}"><img src="../uploads/Blog/{{$posts->file}}" style="width:150px"></a> </p>
            </div>



            <!-- Role Id Field -->
            <div class="form-group">
                {!! Form::label('post_title', 'Title:') !!}
                <p>{{$posts->post_title}}</p>
            </div>

            <!-- Email Field -->
            <div class="form-group">
                {!! Form::label('post_body', 'Description:') !!}
                <p>{!!$posts->post_body!!}</p>
            </div>

             <!-- Created At Field -->
             <div class="form-group">
                {!! Form::label('tag', 'Tags:') !!}
                <p>{{$posts->tag}}</p>
            </div>


            <!-- Created At Field -->
            <div class="form-group">
                {!! Form::label('created_at', 'Joined:') !!}
                <p> {{ Carbon\Carbon::parse($posts->created_at)->format('d-m-Y') }}</p>
            </div>




               </div>
            </div>
        </div>
    </div>
    </div>
    </div>

   
@endsection
