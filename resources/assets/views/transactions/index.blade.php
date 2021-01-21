@extends('layouts.dealer')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Transactions</h1>
       
    </section>
		<!-- Right Sidebar Backdrop -->
		<div class="right-sidebar-backdrop"></div>
		<!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container pt-25">
				<!-- Row -->
				<div class="row">

                    @include('transactions.table')
            </div>
					</div>
					
				</div>	
				
			
			</div>

			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>{{date('Y')}} &copy; Solatrify.</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->
@endsection

