<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pixelkiosk</title>
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" type="text/css" href="files/css/style.css">
		<link rel="stylesheet" type="text/css" href="files/css/blog.css">
		<link rel="stylesheet" type="text/css" href="files/css/work.css">
		<link rel="stylesheet" type="text/css" href="files/css/services.css">
	</head>
	<body onload="mypage()"  data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
		<header>
				<div class="header">
					<div class="container">
						<div class="logo pos-ab pt-70 pb-100">
							<img src="files/img/vectors/Group 1 (1).svg">
						</div>
					</div>
					<div class="menu">
						<div class="flex">
							<div id="myNav" class="overlay">
								<img src="files/img/vectors/Close menu.svg" href="javascript:void(0)" class="closebtn pt-70 pl-50" onclick="closeNav()">
								<div class="container flex-just-btw pt-70">
									<div class="logo">
										<img src="files/img/vectors/Group 1.svg">
									</div>
									<div class="mune-icon" style="position: absolute;right: 50px;">
										<button type="button" class="btn-tlk" onclick="openNav1()">Let's Talk !</button>
									</div>
								</div>
								<div class="container flex-just-btw pt-100">
									<div class="menu-list">
										<ul>
											<li><a href="index.php" class="secondary-txt">Home</a></li>
											<li><a href="work.php"class="secondary-txt">Work</a></li>
											<li><a href="services.php"class="secondary-txt">Services</a></li>
											<li><a href="blog.php"class="secondary-txt">Knowledge</a></li>
											<li><a href="" onclick="openNav1()"class="secondary-txt">Contact</a></li>
										</ul>
									</div>
									<div class="para">
										<span class="head-info primary-txt">
											I have been working with PixelKiosk for over three years and have always found projects to be processed efficiently and to a very high standard. In addition, I have very much enjoyed getting to know my Account Manager (Atish) on a more personal level, he is a likable character with a great sense of humor!
										</span>
										<div>
											<span class="sub-para ">Matt Peskett, Firetop Limited, UK</span>
										</div>
									</div>
								</div>
							</div>
							<div class="mune-icon pt-70 pl-50">
								<img src="files/img/vectors/hamburger menu.svg" onclick="openNav()">
							</div>
						</div>
					</div>
					<div class="contact pt-70">
							<div id="myNav-1" class="overlay-1">
								<img src="files/img/vectors/Close menu.svg" href="javascript:void(0)" class="closebtn" onclick="closeNav1()">
								<div class="flex w-100">
									<div class="con-img w-50">
										<img src="files/img/home/mohd-aram-y3H3Puc9Bbw-unsplash.png" class="grp w-100">
										
										<img src="files/img/vectors/Group 1 (2).svg" class="grp1">
										<img src="files/img/vectors/Group 2.svg" class="grp2">
									</div>
									<div class="w-50 pt-100 container">
										<div class="content-info w-80">	
											<div class="con-heading">
												<h2 class="primary-head primary-txt"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="40" class="section-title aos-init aos-animate">Let’s have Chai</h2>
												<h4 class="sub-head secondary-txt" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="40" class="section-title aos-init aos-animate">Let’s work together to “Amaze!” your client.</h4>
												<h5 class="head-info primary-txt" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50" data-aos-offset="40" class="section-title aos-init aos-animate">Tell us how we can help you with your web development project and leave us your contact info, we’ll get back to you within 24 hours. Or message us on <span style="color: #B3995D;">WhatsApp.</span></h5>
											</div>
											<div class="pt-100">
												<form class="form">	
													<input type="text" class="txt" name="name" placeholder="Your Name">
													<div class="hr"></div>
													<input type="text" class="txt" name="name" placeholder="Your Email">
													<div class="hr"></div>
													<input type="text" class="txt" name="name" placeholder="Your budget">
													<div class="hr"></div>
													<textarea class="txt" rows="8" cols="50" placeholder="Describe your needs, the more we know, the  better.">	</textarea>
													<div class="send-btn">	
														<button type="button" class="btn-tlk" >send</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mune-icon">
								<button type="button" class="btn-tlk" onclick="openNav1()">Let's Talk !</button>
							</div>
					</div>
				</div>
			</header>