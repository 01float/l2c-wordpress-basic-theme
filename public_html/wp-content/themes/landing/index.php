<?php /* Template Name: Landing Page Tutorial Theme */ ?>
<?php

	get_header();

?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<div>
				<a class="navbar-brand" href="#">Lorem Ipsum</a>
				<a class="navbar-brand" href="#">Lorem Ipsum</a>
				<a class="navbar-brand" href="#">Lorem Ipsum</a>
			</div>
		</nav>
		<main role="main">
			<div class="jumbotron">
				<div class="container pt-5 pb-5 position-relative">
				    <div class="row d-flex justify-content-between pt-lg-5 align-items-center">
				      <div class="col-xl-5 col-lg-6 col-md-7 text-center text-lg-left mb-5 mb-lg-0">
				      	<div class="row justify-content-center mb-3">
				      		<div class="col-md-8">
				      			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin, turpis a imperdiet cursus, enim nulla fringilla orci, vel mattis est lectus at nunc. 
				      		</div>
				      	</div>
				        <div class="row justify-content-center">
				          <div class="col-md-8">
				            <form class="position-relative d-block">
				              <div class="form-group">
				                <input name="course-name" id="course-name-1" type="text" class="form-control form-control-lg" placeholder="Name">
				              </div>
				              <div class="form-group">
				                <input name="course-email" id="course-email-1" type="email" class="form-control form-control-lg" placeholder="Email">
				              </div>
				              <div class="form-group text-center">
				                <button class="btn btn-lg btn-success btn-block mb-2" type="submit">Submit</button>
				                <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin.</small>
				              </div>
				            </form>
				          </div>
				        </div>
				      </div>
				      <div class="col">
				        <h1 class="display-3 font-weight-bold text-white" data-aos="fade-up">Lorem ipsum dolor sit amet.</h1>
				        <div class="my-4" data-aos="fade-up">
				          <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed sem sagittis cursus.</p>
				        </div>
				      </div>
					</div>
				</div>			
			</div>
			<div class="container">
				<div class="row justify-content-center">
	          		<div class="col-8">
	          			<div class=" d-flex flex-row mb-5 align-items-start">
				            <img src="https://via.placeholder.com/150" class="rounded-circle">
							<div class="pl-5">
								<h2>Nagłówek #1</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et erat ac felis ultrices accumsan. Donec sit amet urna congue tellus ultricies ultricies eget eu risus.
								</p>
							</div>
						</div>
	      			</div>
				</div>
				<div class="row justify-content-center">
	          		<div class="col-8">
	          			<div class=" d-flex flex-row mb-5 align-items-start">
				            <img src="https://via.placeholder.com/150" class="rounded-circle">
							<div class="pl-5">
								<h2>Nagłówek #1</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et erat ac felis ultrices accumsan. Donec sit amet urna congue tellus ultricies ultricies eget eu risus.
								</p>
							</div>
						</div>
	      			</div>
				</div>
				<div class="row justify-content-center">
	          		<div class="col-8">
	          			<div class=" d-flex flex-row mb-5 align-items-start">
				            <img src="https://via.placeholder.com/150" class="rounded-circle">
							<div class="pl-5">
								<h2>Nagłówek #1</h2>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et erat ac felis ultrices accumsan. Donec sit amet urna congue tellus ultricies ultricies eget eu risus.
								</p>
							</div>
						</div>
	      			</div>
				</div>
				<div class="row justify-content-center">
	          		<div class="col-8">
	          		<?php 
						if ( have_posts() ) : 
						    while ( have_posts() ) : the_post(); 
								the_title( '<h1>', '</h1>' ); 
						        the_content();
						    endwhile; 
						endif; 
					?>
						
	          		</div>
          		</div>	
			</div>
			<?php

	get_footer();

?>