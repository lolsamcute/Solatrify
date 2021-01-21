

@extends('layouts.master')

@section('content')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="/bg_solution.jpeg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Design Support</h2>
              <!-- <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Page Title</li>
              </ol> -->
            </div>
          </div>
        </div>
      </div>
    </section>  
     
    @if(Session::has('find_an_installer_message'))
                    <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">{{ Session::get('find_an_installer_message') }}</p>
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
    
    <section>
      <div class="container pt-20 pb-20">
          
          
          
  <!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item active">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Design Support</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Wholesale</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Solar Financing</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Find an Installer</a>
  </li>
  
  <!--<li class="nav-item">-->
  <!--  <a class="nav-link" id="maintenance-tab" data-toggle="tab" href="#maintenance" role="tab" aria-controls="maintenance" aria-selected="false">Market Intelligence</a>-->
  <!--</li>-->
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
   <p>At Solatrify we have the capability to provide our customers with design support where necessary from residential to commercial project and also carry out energy audit. 
</p>
<p>Our hardworking engineers can assist with getting your project off the ground. Here's how:
</p>
<ul class="list theme-colored">
<li>We will put you in touch with one of our experienced PV engineers to discuss your project requirements. All discussions are confidential.</li>
<li>Once agreed, for a nominal fee a system design, schematic and layout will be produced based on the information provided by you.</li>
<li>The system will be designed utilizing the best suited products from our high quality solar product portfolio.</li>
<li>Should you proceed with purchasing the system components through Solatrify, we will be offering you an attractive discount.</li>
</ul>

<p>As well as providing the desired system schematic, we are also able to collate documentation to support the products utilised within the design so that you are able to pass this onto your customer and reassure them of the quality of the system.
    <br><br>
    For further information relating to Solatrify's design services please 
    <input type="button" class="btn btn-gray btn-theme-colored btn-circled btn-lg border-2px text-white" onclick="location.href='/contact';" value="contact" /> our sales team.
</p>
  
  </div>
  
  
  
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
      <p>Solatrify is the foremost wholesale solution platform in sub-Saharan Africa where we enable local solar distributors, retailers, installers, cooperatives and project developers focused on commercial, residential, off-grid clean energy project or just retailing to end-users with access to procure all the best quality solar products listed on our platform at the best wholesale price from our product partners and manufacturers that leverage on our innovative distribution chain to sell their products & solutions fatter.<br><br>
  We offer a full selection of varieties of trusted and top quality solar PV modules, inverters, racking, balance of systems, and energy storage from they need in one platform.<br><br>
 
   All of our selected or featured equipment is pre-qualified based on performance history and long-term reliability.
<input type="button" class="btn btn-gray btn-theme-colored btn-circled btn-lg border-2px text-white" onclick="location.href='/dailydeals';" value="Click here to view all products" /> and start procuring your solar equipment at the wholesale price from leading solar brands in Nigeria without barriers.</p>
      
  </div>
  
  
  
  
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"> 
  
  NO CONTENT
</div>





  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
       <h4 class="heading-title">Find a qualified, reputable installer in your area</h4>
       
     
                    <p>As a leading solar distributor focused entirely on the distribution of only the best quality residential and commercial solar PV products we often receive a lot of enquiries from people who are looking for a trust worthy solar installer.</p>
<p>Our customers include some of the most experienced solar installers in Nigeria who utilize only the best products, we know this, because we only supply the best solar products.</p>
<p>We are more than happy to pass on your details to an installer in your area, think of them as "Professional Technicians” that can assist you with your solar project.</p>
<p>By completing the online form below with your details we will contact one of our customers in your area who may be able to assist or CALL <a href="telto:09057999054">09057999054</a> or send “installer request” to email to <a href="mailto:hello@solatrify.com">hello@solatrify.com</a>
</p>


                  <h4 class="text-theme-colored text-uppercase m-0">Let's get an Installer for you.</h4>
                  <div class="line-bottom mb-30"></div>
                
                  <form class="mt-30" method="post" action="/solutions/find_an_installer">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">


                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="first_name" class="form-control" type="text" required placeholder="First Name" aria-required="true">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="last_name" class="form-control" type="text" required placeholder="Last Name" aria-required="true">
                        </div>
                      </div>


                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="company" class="form-control required" type="text" placeholder="Company (If applicable)" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="contactNumber" class="form-control required" type="text" placeholder="Contact Number" aria-required="true">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="address" class="form-control required" type="text" placeholder="Address Time" aria-required="true">
                        </div>
                      </div>
                    </div>
                      <input type="checkbox" name="areaInstallerNeeded" value="areaInstallerNeeded"> I would need an installer in my area. Please contact me!!
                    <div class="form-group mb-0 mt-20">
                      
                      <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Submit</button>
                    </div>
                  </form>
                  <!-- Appointment Form Validation-->
       
       
  </div>
  
  <div class="tab-pane" id="maintenance" role="tabpanel" aria-labelledby="maintenance-tab">...</div>
</div>

       
       
      



      </div>
    </section>
    
    
    

    
  </div>
  <!-- end main-content -->

<script>

$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

@endsection