@extends('layouts.master')
@section('main_content')


			<!-- HERO-4
			============================================= -->	
			<section id="hero-4" class="hero-section">


				<!-- HERO-4 TEXT -->
				<div id="hero-5-txt" class="bg-scroll division">
					<div class="container white-color">						
						<div class="row">
							<img src="{{asset('frontend/images/hero-m-class.jpg')}}" class="class_slider" alt="">
							<div class="col-md-10 col-lg-8">
								<div class="hero-txt-class text-center">
									<br>

									<!-- Title -->
									<h1 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="color:#3d3d3d; font-family: Cormorant;
									font-weight: normal;
									font-style: normal;
									font-size: 57px;
									letter-spacing: 0em;
									line-height: 1.25em;
									text-transform: none;">
									 Are you Ready to Step Into Your Own Power?
									</h1>
									<br>
									<div class="custom_btn">
										<a href="https://squareup.com/appointments/book/oklzbqivvc6lff/LQYX8QQJQ458M/start?_savt=5d48f59c-aca6-4e26-bfe5-289804740774&service_id=JRYB5SNLS4WOKXLJQQIHWCPS" target="_blank" class="custom_btn">Let's Do it!</a>
									</div>
									<br><br>
									
								</div>
							</div>	
						</div>	 <!-- End row -->
					</div>	 <!-- End container --> 
				</div>	 <!-- END HERO-4 TEXT -->



			</section>	<!-- END HERO-4 -->

			<div class="title text-center">				
				<img src="{{asset('frontend/images/services.png')}}" class="services" alt="" style="width: 40%; margin-bottom: -75px; margin-top: 50px;">
			</div>

			<!-- SERVICES-2
			============================================= -->	

			<section id="services-2" class="wide-60 services-section division">
				<div class="container class_item">
					
					@foreach ($data as $item)	
					<div class="row">					
						<div class="col-md-6">
							@if($loop->iteration % 2 == 1)
								<img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" class="class_item" alt="" style="width: 100%;">
							@else
								<h3 style="white-space:pre-wrap;"><em>{{$item->title}}
								</em></h3>
								<h4>{{$item->date_time}}</h4>

								{!! $item->description !!}
								<div class="cta-btn text-left">
									<a href="{{$item->link}}" class="btn btn-md btn-theme black-hover">I Need This</a>
								</div>	
							@endif
						</div>

						<div class="col-md-6">
							@if($loop->iteration % 2 == 1)
								<h3 style="white-space:pre-wrap;"><em>{{$item->title}}
								</em></h3>
								<h4>{{$item->date_time}}</h4>

								{!! $item->description !!}
								<div class="cta-btn text-left">
									<a href="{{$item->link}}" class="btn btn-md btn-theme black-hover">I Need This</a>
								</div>	
							@else
								<img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" class="class_item" alt="" style="width: 100%;">
							@endif
						</div>
					</div>
					<br>
					<br>
					@endforeach	

					
				</div>					
			</section>
			
			
 <br>
 <br><br>
 <br><br>
 <br><br>

 @endsection