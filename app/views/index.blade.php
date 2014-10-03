@extends('layouts.main')

@section('content')
		<div id="header">
			
			<div class="container">
			
				<div class="row-fluid">
						
					<div id="logo">						
						
						<img src="assets/img/logo.png" class="hide1" alt="Logo">
												
					</div><!-- /logo -->
						
					<div id="menu">
						
						<div class="navbar pull-right">
				    		
				    		<div class="navbar-inner">
				          		
				          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				            		<span class="icon-bar"></span>
				            		<span class="icon-bar"></span>
				            		<span class="icon-bar"></span>
				          		</a><!-- /nav-collapse -->
				          		
				          		<div class="nav-collapse collapse">
				            		
									<ul class="nav">
										<li class="active"><a href="index.html">Home</a></li>
				              			<li><a href="about.html">About</a></li>
				              			<li><a href="services.html">Services</a></li>
										<li><a href="projects.html">Projects</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="blog.html">Blog</a></li>
				              			<li><a href="faq.html">FAQ</a></li>
										<li><a href="contact.html">Contact</a></li>
				            		</ul><!-- /nav -->

				          		</div><!-- /nav-collapse -->
				        	
				        	</div><!-- /navbar-inner -->

				      	</div><!-- /navbar -->
						
					</div><!-- /span9 -->
						
				</div><!-- /row-fluid -->
							
			</div><!-- /container -->
			
		</div><!-- /header -->	

		<div id="hero">
		    
		    <div class="container">

		      	<div class="row-fluid animated fadeInUp">
		        	<div class="span12">
		          		<div id="home-carousel" class="carousel slide">
		            		<div class="carousel-inner">
			              		<!--slide-->
			              		<!--slide-->
					            <div class="active item">
					               	<div class="row-fluid">
					               		<div class="span1"></div>
					               		<div class="span6 animated  rotateInDownLeft">
					                   		<img src="assets/img/slider/image1.png" alt=""/>
					               		</div>
						               	<div class="span4 animated rotateInUpRight block">
						                   	<h3>Fully Responsive Theme</h3>
						                   	<p>
						                   		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
												sed do eiusmod tempor incididunt ut labore et dolore magna 
												aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
												ullamco laboris nisi ut aliquip ex ea commodo consequat.
						                    </p>
						                    <a class="btn btn-danger" href="index.html">Read more</a>
						                </div>
						                <div class="span1"></div>
					               	</div>
					            </div>
					            <div class="item">
				                	<div class="row-fluid">
					               		<div class="span1"></div>
					               		<div class="span4 span4 animated rotateInDownLeft block">
					                  		<h3>10 Page Templates</h3>
					                  	  	<p>
					                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
												sed do eiusmod tempor incididunt ut labore et dolore magna 
												aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
												ullamco laboris nisi ut aliquip ex ea commodo consequat.
					                    	</p>
					                    	 <a class="btn btn-danger" href="services.html">Read more</a>
					                  	</div>
					                  	<div class="span6 animated rotateInUpRight">
					                   		<img src="assets/img/slider/image2.png" alt=""/>
					               		</div>					                  	
					                  	
				                	</div>
			              		</div>
		             		
		             		</div>

		             		 <a class="carousel-control left" href="#home-carousel" data-slide="prev">&lsaquo;</a>
		            		 <a class="carousel-control right" href="#home-carousel" data-slide="next">&rsaquo;</a>

		             	</div>
		            </div><!--/carousel-inner-->
		            
		        </div><!--/home-carousel-->

		    </div><!--/container-->
		
		</div><!-- /hero -->	

		<div id="body">

			<div class="container">

				<div class="row-fluid margin-top-20 margin-bottom-20">
					<div class="span12">
						<div class="heading">
							<h2>Creativo - Twitter Bootstrap theme for business and creative professionals.</h2>
							<p>
								<i>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
					    		eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					    		Ut enim ad minim veniam, quis nostrud exercitation ullamco.eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					    		Ut enim ad minim veniam, quis nostrud exercitation ullamco.eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					    		Ut enim ad minim veniam, quis nostrud exercitation ullamco.
					    		</i>
							</p>	
							<p align="right">
								<a class="btn btn-danger shake" href="index.html">Buy today!</a>
							</p>	
						</div>	
					</div>	
				</div>				

				<div class="row-fluid margin-bottom-5">
					
					<div class="span12 center">
						<img src="assets/img/lineshadow.png">
					</div>	
				
				</div>	

				<div class="row-fluid margin-top-30 margin-bottom-30" id="home-services">

			    	<div class="span4">
			    		<div class="service  clearfix">
			    			<div class="circle red">
			    				<i class="icon-resize-small"></i>
			    			</div>
			    			<div class="desc">
			    				<h3>Fully Responsive</h3>
			    				<p>
			    					Lorem ipsum dolor sit amet,
			    					consectetur adipisicing elit.
			    				</p>
			    			</div>
			    		</div>	
			    	</div>

			    	<div class="span4">
			    		<div class="service clearfix">
			    			<div class="circle brown">
			    				<i class="icon-cogs"></i>
			    			</div>
			    			<div class="desc">
			    				<h3>HTML5+CSS3</h3>
			    				<p>
			    					Lorem ipsum dolor sit amet, 
			    					consectetur adipisicing elit.
			    				</p>
			    			</div>
			    		</div>	
			    	</div>

			    	<div class="span4">
			    		<div class="service clearfix">
			    			<div class="circle green">
			    				<i class="icon-plane"></i>
			    			</div>
			    			<div class="desc">
			    				<h3>Launch Ready</h3>
			    				<p>
			    					Lorem ipsum dolor sit amet, 
			    					consectetur adipisicing elit.
			    				</p>
			    			</div>
			    		</div>	
			    	</div>			    
			    
			    </div>

			    <h3>
					Latest Projects
				</h3>

				<div class="row-fluid margin-bottom-30">

			    	<div class="span3 zoomer">
			    		<div class="work">
			    			<a 	class="fancybox-button" 
					    		rel="fancybox-button" 
					    		title="Project #1" 
								href="assets/img/work/work1.jpg">
								<div class="overlay-zoom">	
									<img src="assets/img/work/work1.jpg" class="" alt="project 1">
									<div class="zoom-icon"></div>					
								</div>													
							</a>
							<a href="project.html" class="details">
								<div><b>Project #1.</b></div>
								Sit amet, consectetur adipisicing.
					    	</a>
			    		</div>	    	
			    	</div>
			    	<div class="margin-top-5 visible-phone"></div>
			    	<div class="span3 zoomer">
			    		<div class="work">
			    			<a 	class="fancybox-button" 
					    		rel="fancybox-button" 
					    		title="Project #2" 
								href="assets/img/work/work2.jpg">
								<div class="overlay-zoom">	
									<img src="assets/img/work/work2.jpg" class="" alt="project 2">
									<div class="zoom-icon"></div>					
								</div>													
							</a>
							<a href="project.html" class="details">
								<div><b>Project #2.</b></div>
								Sit amet, consectetur adipisicing.
					    	</a>
			    		</div>	    	
			    	</div>
			    	<div class="margin-top-5 visible-phone"></div>
			    	<div class="span3 zoomer">
			    		<div class="work">
			    			<a 	class="fancybox-button" 
					    		rel="fancybox-button" 
					    		title="Project #3" 
								href="assets/img/work/work3.jpg">
								<div class="overlay-zoom">	
									<img src="assets/img/work/work3.jpg" class="" alt="project 3">
									<div class="zoom-icon"></div>					
								</div>													
							</a>
							<a href="project.html" class="details">
								<div><b>Project #3.</b></div>
								Sit amet, consectetur adipisicin.
					    	</a>
			    		</div>	    	
			    	</div>
			    	<div class="margin-top-5 visible-phone"></div>
			    	<div class="span3 zoomer">
			    		<div class="work">
			    			<a 	class="fancybox-button" 
					    		rel="fancybox-button" 
					    		title="Project #4" 
								href="assets/img/work/work4.jpg">
								<div class="overlay-zoom">	
									<img src="assets/img/work/work4.jpg" class="" alt="project 4">
									<div class="zoom-icon"></div>					
								</div>													
							</a>
							<a href="project.html" class="details">
								<div><b>Project #4.</b></div>
								Sit amet, consectetur adipisicing.
					    	</a>
			    		</div>
			    	</div>
			    	
			    </div>

			    <div class="row-fluid">
			    	<div class="span4">
			    		<div class="">
				    		<h3>Who we are</h3>
				    		<p>
				    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
				    		eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				    		Ut enim ad minim veniam, quis nostrud exercitation ullamco.
				    		</p>	
				    		<p>
				    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
				    		eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				    		Ut enim ad minim veniam, quis nostrud exercitation ullamco.
				    		consectetur adipisicing elit, sed do.
				    		</p>
				    		<p align="right">
				    			<a class="btn btn-danger" href="about.html">Read more</a>
				    		</p>
			    		</div>	
			    	</div>
			    	<div class="span4">
			    		<div class="about">
				    		<h3>What we do</h3>
					    	<p>
					    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
					    		eiusmod tempor incididunt.
					    		<ul class="unstyled">
					    			<li><i class="icon-ok ok"></i>Lorem ipsum dolor sit amet</li>
					    			<li><i class="icon-ok ok"></i>Consectetur adipisicing elit</li>
					    			<li><i class="icon-ok ok"></i>Ut enim ad minim veniam</li>
					    			<li><i class="icon-ok ok"></i>Quis nostrud exercitation ullamco</li>
					    			<li><i class="icon-ok ok"></i>Ut labore et dolore magna aliqua</li>
					    		</ul>	
					    	</p>
					    	<p align="right">
					    		<a class="btn btn-danger" href="services.html">Read more</a>
					    	</p>	
				    	</div>
				    </div>
				    <div class="span4">
			    		<div class="about">
				    		<h3>Client Testimonals</h3>
					    	<img src="assets/img/icon_quote.png">&nbsp;&nbsp;&nbsp;<b>John Smith, Soft Inc</b>
					    	<p>
					    		Vivamus ultrices, quam pretium gravida volutpat, nulla magna aliquet metus.
					    		Quis nostrud exercitation ullamco!
					    	</p>
					    	
					    	<div class="line"></div>
					    	
					    	<img src="assets/img/icon_quote.png">&nbsp;&nbsp;&nbsp;<b>Nick Rolton, Google Inc</b>
					    	<p>
					    		Nulla facilisis tempus pulvinar.Quis nostrud exercitation ullamco.
					    		Phasellus sodales commodo porttitor.
					    	</p>
					    	
					    	<p align="right">
					    		<a class="btn btn-danger" href="about.html">Read more</a>
					    	</p>	
				    	</div>
				    </div>
				</div>

			</div>      

		</div><!-- /body -->		

		<div id="footer">
			
			<div class="container">
					
				<div class="row-fluid">	
					<div class="span12">
						<a class="top" href="javascript:;">top</a>
					</div>				
				</div>

				<div class="row-fluid">

					<div class="span3">
						<h4>About Us</h4>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
						ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					</div>	

					<div class="span3">
						<h4>Latest From Blog</h4>
						<p>	
							<div class="row-fluid">
								<div class="span4">
									<a href="blog.html">
									    <img class="media-object img-rounded" src="assets/img/blog/thumb1.jpg">
									</a>
								</div>	
								<div class="span8">
									 Cras sit amet nibh libero, in gravida nulla, in gravida nulla...
								    <br><a href="blog.html" class="">read more</a>
								</div>
							</div>
							<div class="row-fluid margin-top-10">
								<div class="span4">
									<a class="" href="blog.html">
									    <img class="media-object img-rounded" src="assets/img/blog/thumb2.jpg">
									</a>
								</div>	
								<div class="span8">
									Fusce condimentum nunc ac nisi vulputate nunc ac nisi...
								    <br><a href="blog.html" class="">read more</a>
								</div>
							</div>
						</p>	
					</div>	

					<div class="span3">
						<h4>Contact</h4>
						<p>
							<span class="grey-light">Address:</span>&nbsp;<span class="">25, Lorem Lis, California, US</span>
							<br>
							<span class="grey-light">Phone:</span>&nbsp;<span>800 123 3456</span><br>
							<span class="grey-light">Fax:</span>&nbsp;<span class="">800 123 3456</span><br>
							<span class="grey-light">Email:</span>&nbsp;<a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
							<div class="margin-top-5">
								<a href="contact.html">
									<img  src="assets/img/map.jpg" 
									alt="map" class="img-rounded tooltips"  data-original-title="View our location">
								</a>
							</div>
						</p>	
					</div>	

					<div class="span3">
						<h4>Subscribe</h4>
						<p>
						Subscribe to our newsletter and stay up to date with the latest news and deals!	
						</p>
						<form class="form-inline">
							<input type="text" class="input-medium" placeholder="Your email">
						  	&nbsp;
						  	<button type="submit" class="btn btn-inverse">Go</button>
						</form>	

						<h4>Stay Tuned</h4>
						<p>
							<a href="#" class="iconify"><i class="icon-linkedin"></i></a>
							<a href="#" class="iconify"><i class="icon-google-plus"></i></a>
							<a href="#" class="iconify"><i class="icon-twitter"></i></a>
							<a href="#" class="iconify"><i class="icon-facebook"></i></a>
							<a href="#" class="iconify"><i class="icon-pinterest"></i></a>
						</p>	
					</div>														
						
				</div> <!-- /row-fluid -->

				<div class="row-fluid visible-phone">	
					<div class="span12">
						<a class="top" href="javascript:;">top</a>
					</div>
				
				</div>

				<div class="row-fluid margin-top-20">
					
					<div class="span12">
						
						<div id="quick-menu" class="span6 pull-right">						
							<ul class="menu white pull-right">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="projects.html">Projects</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="pricing.html">Pricing</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div><!-- /quick-menu -->

						<div id="copyright" class="span6 pull-left">
							&copy; 2012 Creativo. All Rights Reserved. 
						</div><!-- /copyright -->

					</div>

				</div>

			</div>				

		</div><!-- /footer -->	
@stop