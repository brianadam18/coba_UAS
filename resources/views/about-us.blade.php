@extends('layouts.master')

@section('content')
<div class="container">
				<div class="our-team-info">
					<h4 class="title-box">Our teams</h4>
					<div class="our-staff">
						<div 
							class="slide-carousel owl-carousel style-nav-1 equal-container" 
							data-items="5" 
							data-loop="false" 
							data-nav="true" 
							data-dots="false"
							data-margin="30"
							data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="LUCIA">
										<figure><img src="assets/images/member-lucia.jpg" alt="LUCIA"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">LUCIA</b>
									<span class="title">Manager</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>

							<div class="team-member equal-elem">
								<div class="media">
									<a href="#" title="NANA">
										<figure><img src="assets/images/member-nana.jpg" alt="NANA"></figure>
									</a>
								</div>
								<div class="info">
									<b class="name">NANA</b>
									<span class="title">Marketer</span>
									<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
								</div>
							</div>


						</div>

					</div>

				</div>
			<!-- </div> -->
			

		</div><!--end container-->

	</main>
	<!--main area-->
@endsection