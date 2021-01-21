
@extends('layouts.dealer')

<!-- CSS -->
<link rel='stylesheet' href="{{url('/new_intro/css/global.css') }}">
<link rel='stylesheet' href="{{url('/new_intro/theme/css/structure.css') }}">
<link rel='stylesheet' href="{{url('/new_intro/theme/css/betheme.css') }}">


<style>
		h2 {
			font-weight: 300;
			letter-spacing: 2px
		}
		h3 {
			font-family: Lora, serif;
			font-style: italic;
			letter-spacing: 1px
		}
		h5 {
			font-weight: 400
		}
		#builder {
			background-color: rgba(255,255,255,0.65)
		}
		#features {
			background-color: rgba(255,255,255,0.6)
		}
		#blog {
			background-color: rgba(255,255,255,0.65)
		}
		#help {
			background-color: rgba(255,255,255,0.65)
		}
		#Wrapper, #Content {
			background-color: transparent
		}
		.tax-portfolio-types
		#Filters {
			display: none
		}
		.tax-portfolio-types
		#Content {
			padding-top: 0px !important
		}.header-plain #Top_bar:(.is-sticky){background:rgba(8, 18, 27, 0.8)}
		#Top_bar .menu > li > a span:not(.description) {
			letter-spacing: 1px
		}
		.section-border-bottom {
			border-bottom: 1px solid rgba(0,0,0,.15)
		}
		.or {
			color: #9ea1a1;
			margin: 030px
		}
		.info-icon {
			border: 1px solid #707070;
			border-radius: 50%;
			display: inline-block;
			height: 32px;
			line-height: 30px;
			margin-right: 10px;
			position: relative;
			width: 32px
		}
		.play-icon {
			border: 3px solid #fff;
			border-radius: 50%;
			display: inline-block;
			height: 50px;
			line-height: 50px;
			text-align: center;
			margin: 0 30px;
			position: relative;
			top: 0px;
			width: 50px
		}
		a.see_all {
			display: block;
			text-align: center;
			margin-top: 60px;
			color: #000
		}
		a.see_all
		.label {
			font-family: Lora, serif;
			font-style: italic;
			letter-spacing: 1px;
			font-size: 24px;
			line-height: 24px
		}
		a.see_all
		.icon {
			border: 1px solid #707070;
			border-radius: 50%;
			display: block;
			height: 32px;
			width: 32px;
			line-height: 32px;
			font-size: 20px;
			margin: 0auto 20px
		}
		a:hover.see_all {
			text-decoration: none
		}
		.dark
		a.see_all {
			color: #fff
		}
		.dark a.see_all
		.icon {
			border: 1pxsolid #fff
		}
		.button-stroke a.button:not(.action_button){border-radius:0px;border-width:3px}.button-stroke a.button_large:not(.action_button)
		.button_label {
			font-size: 19px;
			font-weight: 700;
			letter-spacing: 2px
		}
		.highlight-right .column
		.column {
			background: none !important
		}
		.testimonial_desc {
			text-align: right
		}
		.testimonial_desc
		h4 {
			text-align: right;
			margin-bottom: 5px;
			font-weight: 700
		}
		.testimonial_desc
		p {
			color: #adadad;
			font-size: 13px;
			font-style: italic
		}
		.content_slider.carousel
		a.button {
			border: 0
		}
		.content_slider.carousel a:hover.button {
			background-color: transparent !important
		}
		.icon_box
		.image_wrapper {
			padding: 013%
		}
		.icon_box
		.image_wrapper {
			text-align: center;
			padding: 0 20px;
			padding-top: 5px
		}
		.icon_box .image_wrapper
		img {
			opacity: 0.8;
			position: relative;
			top: 0
		}
		.icon_box .desc_wrapper
		h4 {
			opacity: 0.3;
			font-size: 115%
		}
		.icon_box:hover .image_wrapper
		img {
			opacity: 1;
			top: -5px
		}
		.icon_box:hover .desc_wrapper
		h4 {
			opacity: 1
		}
		.icon_box .image_wrapper img, .icon_box .desc_wrapper
		h4 {
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out
		}
		.column.one.column_portfolio
		.portfolio_wrapper {
			background: #edeeee;
			padding-top: 40px
		}
		.portfolio_group .portfolio-item
		.desc {
			background: none
		}
		.portfolio_group .portfolio-item .desc
		.title_wrapper {
			padding-right: 0
		}
		.portfolio_group .portfolio-item .desc .title_wrapper
		h5 {
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 2px
		}
		.portfolio_group .portfolio-item .desc .title_wrapper .button-love {
			display: none
		}
		.portfolio_group .portfolio-item
		.image_frame {
			border: 1pxsolid #dee0e2
		}
		.portfolio_group .portfolio-item .image_frame
		.mask {
			display: none
		}
		.image_frame .image_wrapper .image_links.hover-title a:before {
			content: "Preview";
			display: block
		}
		.portfolio_group.grid .portfolio-item {
			margin: 0 1% 20px;
			width: 18%
		}
		#Filters {
			margin: 0
		}
		#Filters .filters_wrapper
		ul {
			text-align: center;
			border-bottom: 1px solid rgba(0,0,0,.25);
			padding: 05%
		}
		#Filters .filters_wrapper ul
		li {
			float: none;
			width: auto;
			display: inline-block;
			margin: 0
		}
		#Filters .filters_wrapper ul li
		a {
			background: none;
			border: 0;
			font-size: 17px;
			font-family: Lato;
			color: #000;
			letter-spacing: 1px;
			padding: 20px 25px;
			position: relative
		}
		#Filters .filters_wrapper ul li a:after {
			content: "";
			display: none;
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 4px;
			background: #0095eb
		}
		#Filters .filters_wrapper ul li a:hover, #Filters .filters_wrapper ul li.current-cat
		a {
			background: none;
			color: #0095eb
		}
		#Filters .filters_wrapper ul li.current-cat a:after {
			display: block
		}
		.splash_feature {
		}
		.splash_feature {
			background: rgba(255,255,255,.4);
			color: #8d8d8d;
			display: block;
			overflow: hidden;
			padding: 20px
		}
		.splash_feature
		.photo {
			float: left;
			line-height: 0;
			width: 46%
		}
		.splash_feature
		.desc {
			float: left;
			margin-left: 4%;
			width: 50%
		}
		.splash_feature .desc
		.t {
			display: table
		}
		.splash_feature .desc .t
		.c {
			display: table-cell;
			vertical-align: middle
		}
		.splash_feature .desc
		h5 {
			letter-spacing: 2px
		}
		.splash_feature .desc
		p {
			margin: 0
		}
		#help
		.list_item {
			text-align: center
		}
		#help .list_item
		.list_left {
			height: 115px;
			line-height: 115px;
			width: 100%;
			margin-bottom: 30px !important
		}
		#help .list_item .list_left
		img {
			max-height: 115px !important;
			max-width: 160px !important
		}
		#help .list_item
		.list_right {
			margin: 010% !important
		}
		#help .list_item .list_right
		h4 {
			font-size: 20px
		}
		#plugins_list .list_item
		.list_left {
			height: 100px;
			line-height: 100px;
			width: 100px
		}
		#plugins_list .list_item
		.list_right {
			margin-left: 110px;
			padding: 24px0 0
		}
		#plugins_list .list_item .list_right
		h4 {
			font-size: 20px
		}
		#plugins_list .list_item .list_right
		.desc {
			font-size: 15px;
			color: #8d8d8d
		}
		#Footer .footer_copy
		.one {
			margin-bottom: 10px
		}
		#Footer .footer_copy
		.container {
			width: 100%
		}
		#Footer .footer_copy
		a#back_to_top {
			background: none !important;
			border: 0 none;
			color: #fff !important;
			font-size: 30px
		}
		#Footer .footer_copy a#back_to_top
		i {
			color: #898fa2
		}
		#Footer .footer_copy a:hover#back_to_top
		i {
			color: #fff !important
		}
		@media only screen and (min-width: 1240px) {
			.splash_feature .desc
			.t {
				height: 194px
			}
		}
		@media only screen and (min-width: 960px) and (max-width: 1239px) {
			#Filters .filters_wrapper ul li
			a {
				font-size: 15px;
				padding: 20px21px
			}
			.portfolio_group.grid .portfolio-item {
				margin: 0 1% 20px;
				width: 23%
			}
			a.see_all {
				margin-top: 30px
			}
			a.see_all
			.icon {
				margin-bottom: 10px
			}
			a.see_all
			.label {
				font-size: 15px;
				line-height: 15px
			}
		}
		@media only screen and (min-width: 768px) and (max-width: 959px) {
			#Filters .filters_wrapper
			ul {
				padding: 05%
			}
			#Filters .filters_wrapper ul li
			a {
				font-size: 15px;
				padding: 20px16px
			}
			.portfolio_group.grid .portfolio-item {
				margin: 0 1% 20px;
				width: 31.3%
			}
			a.see_all {
				margin-top: 25px
			}
			a.see_all
			.icon {
				margin-bottom: 10px
			}
			a.see_all
			.label {
				font-size: 15px;
				line-height: 15px
			}
		}
		@media only screen and (min-width: 768px) and (max-width: 1239px) {
			#help {
				background-image: none !important
			}
			#help .one-fourth {
				width: 31.333% !important
			}
			#help .three-fourth {
				width: 98% !important
			}
		}
		@media only screen and (max-width: 767px) {
			#Filters .filters_wrapper
			ul {
				padding: 05%
			}
			#Filters .filters_wrapper ul li
			a {
				font-size: 14px;
				padding: 15px
			}
			.header-plain #Top_bar
			.top_bar_right {
				display: none
			}
			.portfolio_group.grid .portfolio-item {
				margin: 0 0% 20px;
				width: 100%
			}
			#layouts .section_wrapper .portfolio_wrapper
			.portfolio_group {
				width: 340px !important;
				margin: 0auto !important
			}
			#building
			.one.column {
				margin-bottom: 0
			}
			#woocommerce {
				background-image: none !important
			}
			.or {
				display: block;
				margin: 15px30px 0
			}
			.play-icon {
				display: block;
				margin: 20pxauto
			}
			.content_slider
			.caroufredsel_wrapper {
				margin-bottom: 20px !important
			}
			.content_slider .slider_pagination a, .tp-bullets.simplebullets.round
			.bullet {
				margin-bottom: 10px
			}
			.content_slider
			.slider_pagination {
				margin: 0 5%;
				width: 90%
			}
			.list_item
			.list_right {
				margin-right: 0% !important
			}
			.header-plain #Top_bar a.button.action_button
			.button_label {
				padding: 030px
			}
			a.see_all {
				margin-top: 25px
			}
			a.see_all
			.icon {
				margin-bottom: 10px
			}
			a.see_all
			.label {
				font-size: 15px;
				line-height: 15px
			}
			#customization
			.column_image {
				margin-bottom: 0 !important
			}
			#builder
			.column_image {
				margin-bottom: 0 !important
			}
			#blog
			h2 {
				text-align: center
			}
		}
		@media only screen and (max-width: 479px) {
			#layouts .section_wrapper .portfolio_wrapper
			.portfolio_group {
				width: 260px !important
			}
			.splash_feature
			.photo {
				float: none;
				width: 100%;
				margin-bottom: 20px
			}
			.splash_feature
			.desc {
				float: none;
				width: 100%;
				margin: 0
			}
			.splash_feature .desc
			.t {
				display: block
			}
		}
		
		
		
		.header-plain #Top_bar .menu > li > a span:not(.description) {
			line-height: 80px;
			padding: 0 16px;
		}
		
		@media only screen and (min-width: 1360px) {
			.header-plain #Top_bar .menu > li > a span:not(.description) {
				padding: 0 20px;
			}
		}
		
		
		/* move port and blog boxes on hover */
		.move-boxes .column_attr a img {
			opacity: 0.8;
			position: relative;
			top: 0;
		}
		
		.move-boxes .column_attr a img:hover {
			opacity: 0.8;
			position: relative;
			top: -5px;
		}
		
		.move-boxes .column_attr a, .move-boxes .column_attr a img {
			transition: all 0.3s ease-in-out 0s;
		}


		/* spacing */
		.column.one.column_portfolio  {margin:0 !important;width:100% !important}
		
		/* typography */
		h2 {
			font-size: 40px;
			line-height: 40px;
		}
		
		hr.no_line {background:none !important}



		
	</style>
	
	

@section('content')

<div class="header bg-primary pb-6">
  <div class="container-fluid">
	<div class="header-body">
	  <div class="row align-items-center py-4">
		<div class="col-lg-6 col-7">
		  <h6 class="h2 text-white d-inline-block mb-0">Products</h6>
		  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
			<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
			  <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
			  <li class="breadcrumb-item active" aria-current="page">product</li>
			</ol>
		  </nav>
		</div>
	   
	  </div>
	</div>
  </div>
</div>


<div class="section full-width section-border-bottom" id="layouts2" >
<div class="section_wrapper clearfix">
<div class="items_group clearfix">

<div class="column one column_portfolio " style="margin-bottom:0">
<div class="portfolio_wrapper isotope_wrapper ">

@foreach($qrcodes->chunk(6) as $qrcode)
			

<ul class="portfolio_group lm_wrapper isotope grid">

@foreach($qrcode as $qrcodes)
<li class="portfolio-item isotope-item category-blog category-business category-entertainment category-creative category-one-page category-other category-portfolio category-shop has-thumbnail">

<div class="portfolio-item-fw-bg" >
<div class="portfolio-item-fw-wrapper">
<div class="image_frame scale-with-grid">
<div class="image_wrapper">
<a href='{{ url('/productsView', [$qrcodes->slug]) }}'>
<div class="mask"></div>
<img width="340" height="315" src="../uploads/Products/{{$qrcodes->image}}" class="scale-with-grid wp-post-image"/></a>
<div class="image_links">
<a href='{{ url('/productsView', [$qrcodes->slug]) }}'>{!! $qrcodes->name !!}</a>
</div>


</div>
	</div>
	
	<form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $qrcodes->id }}">
                    <input type="hidden" name="name" value="{{ $qrcodes->name }}">
                    <input type="hidden" name="amount" value="{{ $qrcodes->amount }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>

                <!-- <form action="{{ url('/wishlist') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $qrcodes->id }}">
                    <input type="hidden" name="name" value="{{ $qrcodes->name }}">
                    <input type="hidden" name="amount" value="{{ $qrcodes->amount }}">
                    <input type="submit" class="btn btn-primary btn-sm" value="Add to Wishlist">
                </form> -->
	

</div>
</div>
</li>
@endforeach

</ul>
@endforeach


</div>
</div>
</div>





</div>
</div>




					@endsection				
