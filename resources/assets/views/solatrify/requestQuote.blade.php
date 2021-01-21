@extends('layouts.master')

@section('content')


<section>
        <div class="container" style="max-width: 700px;">
          <h3 class="bg-theme-colored p-15 mb-0 text-white">Reservation Form</h3>
          <div class="section-content bg-white p-30">
            <div class="row">
              <div class="col-md-12">
                <!-- Reservation Form Start-->
                <form id="reservation_form_popup" name="reservation_form" class="reservation-form" method="post" action="includes/reservation.php"><h3 class="mt-0 line-bottom mb-40">Get A Free Service<span class="text-theme-colored font-weight-600"> Now!</span></h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-30">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-30">
                        <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-0">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat" data-loading-text="Please wait...">Submit Now</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Reservation Form End-->
      
               
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer Scripts -->
      <script>
        //reload date and time picker
        THEMEMASCOT.initialize.TM_datePicker();
      </script>

      @endsection