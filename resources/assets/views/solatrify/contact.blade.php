
@extends('layouts.master')

@section('content')


  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
                <br><br>
              <h2 class="title">Contact</h2>
              {{--  <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="page-contact4.html#">Home</a></li>
                <li><a href="page-contact4.html#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol>  --}}
            </div>
          </div>
        </div>
      </div>
    </section>
    
  
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Our Office Location</h5>
                    <p>Shop 7/8 Block J, Odumosu Plaza, Corner Bus Stop, Ojo Alaba, Lagos</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="telno:+2349057999054"> <i class="pe-7s-call text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Contact Number</h5>
                    <p>+234 905 799 9054</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="mailto:hello@solatrify.com"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Email Address</h5>
                    <p>Hello@solatrify.com</p>
                  </div>
                </div>
              </div>
              
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" target="_blank" href="https://facebook.com/solatrify"> <i class="fa fa-facebook text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Facebook</h5>
                    <!--<p>Facebook</p>-->
                  </div>
                </div>
              </div>
              
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" target="_blank" href="https://linkedin.com/company/solatrify"> <i class="fa fa-linkedin text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">LinkedIn</h5>
                    <!--<p>LinkedIn</p>-->
                  </div>
                </div>
              </div>
              
              
               <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" target="_blank" href="https://instagram.com/solatrify"> <i class="fa fa-instagram text-theme-colored"></i></a>
                  <div class="media-body">
                       <h5 class="mt-0">Instagram</h5>
                  
                  </div>
                </div>
              </div>
              
              <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" target="_blank" href="https://twitter.com/solatrify"> <i class="fa fa-twitter text-theme-colored"></i></a>
                  <div class="media-body">
                       <h5 class="mt-0">Twitter</h5>
                  
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-30">Use this form to submit your request, question or query to us and we'll get back to you as soon as possible.</h3>

            @if(Session::has('contact_message'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('contact_message') }}</p>
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
            <!-- Contact Form -->
            <form action="/contact" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="name" class="form-control" type="text" placeholder="Enter Name" required>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="number" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>

            
          </div>
          
       
          
          
        </div>
      </div>
    </section>
    
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.4967524693047!2d3.1969159139308356!3d6.458569295327558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b87be91955179%3A0x264789abdd667a66!2sSOLATRIFY+NIGERIA!5e0!3m2!1sen!2sng!4v1554116501388!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      

  </div>
  <!-- end main-content -->

  @endsection