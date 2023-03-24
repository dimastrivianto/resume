@extends('master')

@section('contents')
<!-- intro section
   ================================================== -->
   <section id="intro">

   	<div class="intro-overlay"></div>

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'm Dimas Trivianto.</h1>

	   			<p class="intro-position">
	   				<span>Back-end Developer</span>
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

	   		</div>

   		</div>
   	</div> <!-- /intro-content -->

   	<ul class="intro-social">
	   <li><a href="https://www.facebook.com/dimas.trivianto"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="https://github.com/dimastrivianto"><i class="fa fa-github"></i></a></li>
			      <li><a href="https://twitter.com/dimastrivianto"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="https://www.linkedin.com/in/dimas-trivianto-b215751ab/"><i class="fa fa-linkedin"></i></a></li>
			      <li><a href="https://www.instagram.com/dimastrivianto90/"><i class="fa fa-instagram"></i></a></li>
      </ul> <!-- /intro-social -->

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="{{ asset('images/dimas-trivianto.jpg')}}" alt="Profile Picture">

   				<p class="lead">A detail-oriented and highly-motivated person who is always eager to learn. Skilled in PHP using Laravel framework and Javascript, cPanel, MySQL, Pusher, Git, Proficient in Problem Solving, and Committed to Delivering High-Quality Code.</p>

          {{-- <div class="row"> --}}
              <div class="col-six">
                <ul class="info-list">
           				<li>
           					<strong>Fullname:</strong>
           					<span>Dimas Trivianto</span>
           				</li>
           				<li>
           					<strong>Birth Date:</strong>
           					<span>May 09, 1990</span>
           				</li>
           				<li>
           					<strong>Job:</strong>
           					<span>Backend Developer</span>
           				</li>
           			</ul>
              </div>
              <div class="col-six">
                <ul class="info-list">
                  <li>
           					<strong>Website:</strong>
           					<span>www.dimastrivianto.site</span>
           				</li>
           				<li>
           					<strong>Email:</strong>
           					<span>dimastrivianto@gmail.com</span>
           				</li>
           			</ul>
              </div>
          {{-- </div> --}}
        </div>

   		</div>
   	</div> <!-- /section-intro -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="service">
      {{-- <div class="container" data-aos="fade-up"> --}}

        <div class="section-title">
          <h2>Some of my skills.</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">

          <ul class="cards">
            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-laravel">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bx bxl-laravel"></i>
                  </div>
                  <h4><a href="">Laravel</a></h4>
                  <p>Laravel is a web application framework with expressive, elegant syntax.</p>
                </div>
              </div>
            </li>

            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-js">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bx bxl-javascript"></i>
                  </div>
                  <h4><a href="">Javascript</a></h4>
                  <p>JavaScript is a high-level, dynamic, and interpreted programming language that is commonly used to create interactive web pages and web applications.</p>
                </div>
              </div>
            </li>

            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-sql">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bx bxl-sql"></i>
                  </div>
                  <h4><a href="">SQL</a></h4>
                  <p>Structured Query Language (SQL) is a standardized programming language that is used to manage relational databases and perform various operations on the data in them.</p>
                </div>
              </div>
            </li>
            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-html">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bx bxl-html"></i>
                  </div>
                  <h4><a href="">HTML</a></h4>
                  <p>HTML is the standard markup language for documents designed to be displayed in a web browser.</p>
                </div>
              </div>
            </li>
            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-css">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bx bxl-css"></i>
                  </div>
                  <h4><a href="">CSS</a></h4>
                  <p>CSS is rules to arrange some components in a web so that it will be more structured and efficient.</p>
                </div>
              </div>
            </li>
            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-python">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    {{-- <i class="bx bxl-python"></i> --}}
                    <img src="" class="python-icon">
                  </div>
                  <h4><a href="">Python</a></h4>
                  <p>Python is a programming language that lets you work quickly and integrate systems more effectively.</p>
                </div>
              </div>
            </li>
            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-git">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bx bxl-git"></i>
                  </div>
                  <h4><a href="">GIT</a></h4>
                  <p>Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.</p>
                </div>
              </div>
            </li>
            <li class="cards_item">
              <div class="card">
                <div class="icon-boxes iconbox-cpanel">
                  <div class="icon">
                    <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                    </svg>
                    <i class="bx bxl-cpanel"></i>
                  </div>
                  <h4><a href="">cPanel</a></h4>
                  <p>cPanel provides the most reliable and intuitive server and site management platform.</p>
                </div>
              </div>
            </li>

          </ul>

        </div>


      {{-- </div> --}}
    </section><!-- End Services Section -->

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
   			<a href="#no" title="Download CV" class="button button-primary" onclick="downloadCv();">Download CV</a>
   		</div>
   	</div>

   </section> <!-- /process-->


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>

   			{{-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> --}}

   		</div>
   	</div> <!-- /section-intro-->

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Front-End Developer</h3>
	   					<p>2020 - 2021</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>PT Yokesen Teknologi Indonesia</h4>
	   					<p>
                As a frontend developer, I am responsible for developed responsive websites using HTML, CSS, and JavaScript and Ajax.
                Managed codebase using Git version control and collaborated with the team. I have been conducting peer code reviews to ensure the best solutions for developing the website interface.
                I connect the frontend with the backend through ajax or laravel's controller.
              </p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Back-end Developer</h3>
	   					<p>2021 - 2023</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>PT Yokesen Teknologi Indonesia</h4>
	   					<p>
                As a backend developer, I create APIs to handle and process the data. I also connect to third party APIs, like marketplace Tokopedia API, Shopee APIs, Blibli APIs, TikTok Shop Api, Mailgun API, and more.
                use third-party packages such as Guzzle to send HTTP requests, Twillio to send messages to users, use pusher to create realtime experience for the users and more.
                I design database structure. Deploy projects into live server and maintain the server. I also collaborate with others programmer using git, create UAT (User Acceptance Testing) scenario, optimize backend performance and create APIs documentations.
                I use Laravel and SQL as main technologies to develop the backend side of a website, but I'm also open to using other languages, frameworks, or types of databases since I enjoy trying new things.
              </p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->

   		</div> <!-- /col-twelve -->

   	</div> <!-- /resume-timeline -->

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Technical certification</h3>
	   					<p>2020</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Purwadhika Digital Technology School</h4>
	   					<p>At Purwadhika Digital Technology School, i learned how to be a full-stack JavaScript programmer using React.js and Node.Js as the main technologies. for the database, I learned both SQL and NoSQL. I also learned React Native to develop mobile apps.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Bachelor Degree</h3>
	   					<p>2013 - 2015</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Darma Persada University</h4>
	   					<p>At Darma Persada University, I learned how to read and write Chinese Characters and also how to speak and listen in Mandarin</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->

   		</div> <!-- /col-twelve -->

   	</div> <!-- /resume-timeline -->

	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1>Check Out Some of My Works.</h1>

   			{{-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> --}}

   		</div>
   	</div> <!-- /section-intro-->

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('images/gudangin.png')}}" alt="Liberty">
	                  <a href="#modal-01" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">Gudangin</h3>
		     					    	 <span class="folio-types">
		     					       	  Website Development
		     					       </span>
		     					   </div>
	                     </div>
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('images/fitbarkada.png')}}" alt="Shutterbug">
	               	<a href="#modal-02" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Fitbarkada</h3>
		     					    	<span class="folio-types">
		     					       	  Web Development
		     					      </span>
		     					   </div>
	                     </div>
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('images/ngabuburit.png')}}"alt="Clouds">
	                  <a href="#modal-03" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Ngabuburit 2023</h3>
		     					    	<span class="folio-types">
		     					       	  Web Development
		     					      </span>
		     					   </div>
	                     </div>
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('images/fib.png')}}" alt="Beetle">
	                  <a href="#modal-04" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">FIB Partners</h3>
		     					    	<span class="folio-types">
		     					       	  Web Development
		     					      </span>
		     					   </div>
	                     </div>
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="{{ asset('images/pojok-trading.png')}}" alt="Lighthouse">
	                  <a href="#modal-05" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Pojok Trading</h3>
		     					    	<span class="folio-types">
		     					       	  Web Development
		     					      </span>
		     					   </div>
	                     </div>
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            {{-- <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/salad.jpg" alt="Salad">
	                  <a href="#modal-06" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Salad</h3>
		     					    	<span class="folio-types">
		     					       	  Branding
		     					      </span>
		     					   </div>
	                     </div>
	                  </a>
	               </div>
	        		</div> <!-- /folio-item --> --}}

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-liberty.jpg" alt="" />
				     	</div>

					   <div class="description-box">
					      <h4>Gudangin</h4>
					      <p>Gudangin is a cloud warehouse that can help you manage orders and stocks easily. you can manage multiple stores in multiple marketplace in just one Platform</p>

					      <div class="categories">Web Development</div>
					   </div>

			         <div class="link-box">
			            <a href="http://dashboard.gudangin.id" target="_blank">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-shutterbug.jpg" alt="" />
				     	</div>

					   <div class="description-box">
					      <h4>Fitbarkada</h4>
					      <p>A community-based website that can be used to promote events or products. It's designed with a mobile-first approach.</p>

					      <div class="categories">Web Development</div>
					   </div>

			         <div class="link-box">
			            <a href="https://fitbarkada.yokesen.com" target="_blank">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-clouds.jpg" alt="" />
				     	</div>

					   <div class="description-box">
					      <h4>Ngabuburit 2023</h4>
					      <p>A community-based website that's built for 2023 Ramadan season. it has features such as Mading (where users can post and like comment), auctions (where users can compete to win products), schedule (list of schedule) and more.</p>

					      <div class="categories">Web Development</div>
					   </div>

			         <div class="link-box">
			            <a href="https://ngabuburit2023.id/">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-beetle.jpg" alt="" />
				     	</div>

					   <div class="description-box">
					      <h4>FIB Partners</h4>
					      <p>A website that is built for forex trading.</p>

					      <div class="categories">Web Development</div>
					   </div>

			         <div class="link-box">
			            <a href="https://fibpartners.com/">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   </div> <!-- /modal-04 -->

				   <div id="modal-05" class="popup-modal slider mfp-hide">

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-lighthouse.jpg" alt="" />
				     	</div>

					   <div class="description-box">
					      <h4>Pojok Trading</h4>
					      <p>A community-based website for forex trader, where they can buy trading signal</p>

					      <div class="categories">Web Development</div>
					   </div>

			         <div class="link-box">
			            <a href="#noLink">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   </div> <!-- /modal-05 -->

				   <div id="modal-06" class="popup-modal slider mfp-hide">

				     	<div class="media">
				     		<img src="images/portfolio/modals/m-salad.jpg" alt="" />
				     	</div>

					   <div class="description-box">
					      <h4>Salad</h4>
					      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

					      <div class="categories">Branding</div>
					   </div>

			         <div class="link-box">
			            <a href="http://www.behance.net">Details</a>
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>

				   </div> <!-- /modal-06 -->


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper -->

   		</div>  <!-- /twelve -->

   	</div> <!-- /portfolio-content -->

	</section> <!-- /portfolio -->



	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Services</h5>
   			<h1>What Can I Do For You?</h1>

   			{{-- <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> --}}

   		</div>
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	{{-- <div class="service">

	      		<span class="icon"><i class="icon-earth"></i></span>

	            <div class="service-content">

	            	 <h3>Webdesign</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>

	         	</div>

				</div> <!-- /service --> --}}

				<div class="service">

					<span class="icon"><i class="icon-window"></i></span>

	            <div class="service-content">

	            	<h3>Web Development</h3>

		          <p class="desc">
                If you're looking for a simple landing page or a complex website platform, i've got you covered. I take the time to understand your business goals and target audience to ensure that your website is designed to meet your unique needs.
	         		</p>

	            </div>

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="fa fa-database"></i></span>

	            <div class="service-content">

	            	<h3>Database Structure</h3>

		            <p class="desc">
                  My database structure services include everything from schema design to query optimization. I ensure that your database is designed to scale and handle large amounts of data, while also being easy to use and maintain.
	        			</p>

	            </div>

			   </div> <!-- /service -->


			   <div class="service">

			   	<span class="icon"><i class="icon-api"></i></span>

	            <div class="service-content">

	            	 <h3>Connect Third-Party API</h3>

		            <p class="desc">
                  I can help you seamlessly integrate APIs into your software. Whether you need to connect to payment gateways, social media platforms, or other services, I can help.
	        			</p>

	            </div>

			   </div> <!-- /service -->

         {{-- <div class="service">

 					<span class="icon"><i class="icon-toggles"></i></span>

 	            <div class="service-content">

 	            	<h3>UI/UX Design</h3>

 		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
 	         		</p>

 	            </div>

 				</div> <!-- /service -->

 			   <div class="service">

 			   	<span class="icon"><i class="icon-image"></i></span>

 	            <div class="service-content">

 	            	<h3>Graphics Design</h3>

 		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
 	        			</p>

 	            </div>

 			   </div> <!-- /service --> --}}

	      </div> <!-- /services-list -->

   	</div> <!-- /services-content -->

	</section> <!-- /services -->


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-2 block-s-1-2 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>
            <span class="stat-title">More Than</span>
						<h3 class="stat-count">
						   7
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div> <!-- /stat -->

					{{-- <div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							900
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div> <!-- /stat --> --}}

					{{-- <div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							200
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat --> --}}

					{{-- <div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							120
						</h3>

						<h5 class="stat-title">
							Crazy Ideas
						</h5>

					</div> <!-- /stat --> --}}

					{{-- <div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat --> --}}

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>
            <span class="stat-title">More Than</span>
						<h3 class="stat-count">
							21900
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->


   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">Please note that this website is still under development. If you have any questions, comments or feature requests, I would love to hear from you! Don't hesitate to fill out the contact form, and I will be in touch as soon as possible.</p>

   		</div>
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForms" id="contactForms" method="post" action="">
              {{-- @csrf --}}
      			<fieldset>
                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
				   <div class="form-field">
	      			   <input name="contactPhone" type="text" id="contactPhone" placeholder="Phone" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">
            </div>
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->

   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            Jalan Dua Sembilan no:63-64<br>
            Duren Sawit, Jakarta Timur<br>
            13440
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>
				dimastriviano@gmail.com
			</p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>
				Phone: (+62) 87887977838
			</p>

   		</div>

   	</div> <!-- /contact-info -->

	</section> <!-- /contact -->
    @endsection

	@section('jsPage')
    <script>
      function downloadCv() {

        let fileUrl = "{{ asset('images/Dimas-Trivianto-cv.pdf')}}";
        let link = document.createElement('a');
        link.href = fileUrl;
        link.download = 'Dimas-Trivianto-cv.pdf';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);

        let newTabUrl = "{{ asset('images/Dimas-Trivianto-cv.pdf')}}";
        let newTab = window.open(newTabUrl, '_blank');

      }
    </script>
    <script>
      $('#contactForms').validate({
        // e.preventDefault();
        submitHandler: function(form) {
          var sLoader = $('#submit-loader');
          console.log('jalan');
          $.ajax({

    		      type: "POST",
    			  headers: $('meta[name="csrf-token"]').attr('content'),
    		      url: '{{route("postForm")}}',
    		      data: $(form).serialize(),
    		      beforeSend: function() {

    		      	sLoader.fadeIn();

    		      },
    		      success: function(msg) {
                  console.log(msg);
    	            // Message was sent
    	            if (msg == 'OK') {
    	            	sLoader.fadeOut();
    	               $('#message-warning').hide();
    	               $('#contactForm').fadeOut();
    	               $('#message-success').fadeIn();
    	            }
    	            // There was an error
    	            else {
    	            	sLoader.fadeOut();
    	               $('#message-warning').html(msg);
    		            $('#message-warning').fadeIn();
    	            }

    		      },
    		      error: function() {

    		      	sLoader.fadeOut();
    		      	$('#message-warning').html("Something went wrong. Please try again.");
    		         $('#message-warning').fadeIn();

    		      }

    	      });
          }
      })
    </script>
	@endsection
