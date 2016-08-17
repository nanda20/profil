<?php $this->load->view('header'); ?>
	<body>
    <header class="top-header">
        <div class="container">
            <div class="row header-row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <a href="<?php echo base_url();?>"><img src="<?php echo base_url("assets/img/logo.png");?>" alt="" class="logo"></a>
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#sec1">Home</a></li>
                                    <li><a href="#sec2">about me</a></li>
                                    <li><a href="#sec3">services</a></li>
                                    <li><a href="#sec4">my work</a></li>
                                    <li><a href="#sec5">contact me</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	
    <section class="banner text-center" id="sec1">
        <div class="container">
            <div class="row">
			<br>
                <h3>Affordable Websites for Start-ups & Small Businesses.</h3>
				<p>It's time to get serious about how your business looks online. We can help!</p>
                <img src="<?php echo base_url("assets/img/pin.png");?>" alt="">
                <br>

                <button class="know-more">MORE</button>
            </div>
        </div>
    </section>
    <!-- end of banner section -->

    <!-- about section -->
    <section class="about text-center" id="sec2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 about-heading">
                    <h2>
						ABOUT ME
					</h2>
                    <img src="<?php echo base_url("assets/img/daag.png");?>" alt="">

                    <p>Tanpa Nama specifically exists to provide web design and graphic design solutions for passionate and purpose driven small service-based business owners and entrepreneurs who are looking for assistance at becoming more effective, more well-known and more successful at what they do.</p>
                </div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4">
                    <div class="about-inside">
                        <i class="fa fa-lightbulb-o"></i>
                        <h3>Title goes here</h3>
                        <p>onsectetur adipisicaing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                    </div>
                </div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4">
                    <div class="about-inside">
                        <i class="fa fa-pencil"></i>
                        <h3>Title goes here</h3>
                        <p>onsectetur adipisicaing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                    </div>
                </div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4">
                    <div class="about-inside">
                        <i class="fa fa-cog"></i>
                        <h3>Title goes here</h3>
                        <p>onsectetur adipisicaing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                    </div>
                </div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4">
                    <div class="about-inside">
                        <i class="fa fa-laptop"></i>
                        <h3>Title goes here</h3>
                        <p>onsectetur adipisicaing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service text-left" id="sec3">
        <div class="container">
            <div class="row">
                <div class="service-overlay"></div>
                <div class="col-md-12">
                    <h2>SERVICES</h2>
                    <img src="<?php echo base_url("assets/img/daag.png");?>" alt="">
                </div>
                <div class="col-md-12 services">
                    <div class="col-md-2 single-service col-xs-6 col-sm-3">
                        <i class="fa fa-code"></i>
                        <h3>Website Development</h3>
                        <p>Development Services website according to your needs , to follow the latest trend and of course, using the latest technology , we will create the best website for you.</p>
                    </div>

                    <div class="col-md-2 col-md-push-1 single-service col-xs-6 col-sm-3">
                        <i class="fa fa-desktop"></i>
                        <h3>Application Development</h3>
                        <p>Building and designing Web-based applications , Desktop and Mobile with analytical methods and approaches we will provide tremendous work for you.</p>
                    </div>
                </div>

                <div class="col-md-12  services bottom-services">

                    <div class="col-md-5 single-service col-sm-3 col-xs-6">
                        <i class="fa fa-commenting-o"></i>
                        <h3>IT Consultant</h3>
                        <p>Confused in the development and use of IT in your business or do you need a solution and finish your IT problems . do not worry we set up in 1000 solution would be for you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio text-center" id="sec4">
        <div class="row portfolio-row">
            <div class="portfolio-heading">
                <h2>MY WORK</h2>
                <img src="<?php echo base_url("assets/img/daag.png");?>" alt="">
                <p>We love what we do, so do our clients</p>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="<?php echo base_url("assets/img/portfolio.jpg");?>" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Optik Nusantara</h4>
                        <p>Toko Online Penjual Kacamata Terlengkap Dikota Malang.</p>
						<a href="" class="btn-visit">Visit</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="<?php echo base_url("assets/img/portfolio2.jpg");?>" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Lain Lain</h4>
                        <p>Ini Lain Lain.</p>
						<a href="" class="btn-visit">Visit</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="<?php echo base_url("assets/img/portfolio3.jpg");?>" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Komunitas Mobil Malang</h4>
                        <p>Forum Komunitas Mobil Malang.</p>
						<a href="" class="btn-visit">Visit</a>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 single-portfolio col-sm-6">
                <figure class="portfolio-item">
                    <img class="img-responsive" src="<?php echo base_url("assets/img/portfolio4.jpg");?>" alt="">
                    <figcaption class="portfolio-details">
                        <h4>Tertak Angsa</h4>
                        <p>Toko Online Penjual Angsa Dan Sejenisnya.</p>
						<a href="" class="btn-visit">Visit</a>
                    </figcaption>
                </figure>
            </div>
        </div>
		<br>
		<a href="" class="btn-morework"> More </a>
    </section>
    <!-- end of portfolio section -->

    <section class="contact text-center" id="sec5">
        <div class="container">
            <div class="row">
                <article class="contact-heading">
                    <h2>CONTACT ME</h2>
                    <img src="<?php echo base_url("assets/img/daag.png");?>" alt="">
                    <h3> Address</h3>
					<p>Street.....<br>Malang - Jawa Timur</p>
					
                    <h3>Social</h3>
					<p><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a> 
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </p>
                </article>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="form">
                        <div class="sbtn col-md-12 text-center">
							<?php echo form_open('kirim'); ?>
								<input class="name form-input" type="text" placeholder="NAME">
								<input class="email form-input" type="email" placeholder="EMAIL">
								<input class="message form-input" type="text" placeholder="MASSAGE">
								<input class="submit-btn" type="submit">
							<?php echo form_close(); ?>
                        </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php $this->load->view('footer'); ?>
