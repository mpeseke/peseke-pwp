<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->

 		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- BootStrap, CSS, FontAwesome, and jQuery Slim-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<title>Marlon Oliver Peseke</title>

 	</head>
	<body>
		<a id="page-top" href="#"></a>

		<!-- Navbar -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark text-light py-3">
			<a class="navbar-brand">Marlon Oliver Peseke</a>

			<button class="navbar-toggler navbar-toggler-right text-light" type="button" data-toggle="collapse" data-target="#navbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav ml-auto text-light">
					<li class="nav-item">
						<a class="nav-link" href="index.php#about"><i class="far fa-fw fa-user-circle"></i>About Me</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#project"> <i class="fas fa-laptop fa-fw"></i> Projects</a>
					</li>
					<li class="nav-item dropdown hidden-md-down">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
							<i class="far fa-fw fa-hand-point-right"></i>Contact Me
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="index.php#contact">Send me a Message</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="https://github.com/mpeseke">Check out my GitHub</a>
							<a class="dropdown-item" href="https://www.linkedin.com/in/mpeseke/">Connect With Me on LinkedIn</a>
							<a class="dropdown-item" href="https://twitter.com/MPeseke">Follow me on Twitter</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<!-- Jumbotron Header -->
		<div class="container-fluid d-flex flex-column m-0 bg-dark text-light">


			<div class="container air parallax">
				<h1 id="jumbo" class="display-4 text-center">Dreamer. Creator. Developer.</h1>
			</div>

		</div>

		<blockquote class="blockquote text-center m-0 bg-dark text-light p-5">
			<p class="font-italic pt-2">"Imagining something may be the first step in making it happen..."</p>
			<footer class="blockquote-footer">Fred Rogers</footer>
		</blockquote>


		<!-- About Me Header -->
		<div id="about" class="row bg-dark text-light">

				<div class="container water parallax bg-dark text-light">
					<h1 class="display-4 text-center">About Me</h1>
				</div>

		</div>
		<!-- About Me -->
		<article class="container p-3 pb-3 bg-dark text-light">

			<div class="row mt-3">
				<div class="col-md-8">
					<p class="mx-2">
						As a teacher, I believe in the importance of continued learning. This is the defining trait of a good computer programmer! A good programmer never stops learning because the technology is ever moving.
						My goal as a programmer is to always be on top of my game, always learning, and always hungry for more.
					</p>
					<p class="mx-2">
						I have been fortunate enough to gain this skill set through the support of my friends and <a href="content/family-photo.jpg" data-toggle="modal" data-target="#familyphoto">family</a>, most specifically, my wife Caitlin. Caitlin and I have three children. I am so grateful for the opportunity to be a part of an industry that is never
						boring, and am excited to be a contributor to the Albuquerque development community, and beyond.
					</p>
					<p class="mx-2">
						"I am fluent in over six million forms of communication." I wish!<br/>
						I come equipped and ready to code in these languages and frameworks.
					</p>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="text-center" colspan="5">Languages and Frameworks</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">Languages</th>
									<td>HTML <i class="fab fa-html5"></i></td>
									<td>CSS <i class="fab fa-css3-alt"></i></td>
									<td>JavaScript <i class="fab fa-js-square"></i></td>
									<td>PHP <i class="fab fa-php"></i></td>
								</tr>
								<tr>
									<th scope="row">Frameworks</th>
									<td colspan="2.5">Angular <i class="fab fa-angular"></i></td>
									<td colspan="2.5">Bootstrap</td>
								</tr>
								<tr>
									<th scope="row">Tools and Databases</th>
									<td colspan="2">GitHub <i class="fab fa-github"></i></td>
									<td>PhpStorm</td>
									<td>mySQL</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-4 text-center order-first order-sm-first order-md-last order-lg-last my-5">
						<img class="img-thumbnail" src="content/headshot.jpg" alt="image of Marlon Peseke">
				</div>
			</div>

			<!-- Family Photo Modal -->
			<div class="modal fade" id="familyphoto" tabindex="-1" role="dialog" aria-labelledby="familyphoto" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="familyphoto">Aren't we cute?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img class="img-responsive" src="content/family-photo.jpg" alt="pesekefamily">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

		</article>
		<!-- Project Header-->
		<div id="project" class="row bg-dark text-light">
			<div class="container fire parallax">
				<h1 class="display-4 text-center">Projects</h1></div>
		</div>
			<!-- Projects -->
		<article class="container bg-dark text-light">

			<div class="row mt-3">
				<div class="col-md-8 offset-md-2 text-center">
					<p class="display-6">Click the images for more!</p>
				</div>
			</div>
<!--		 Carousel-->
			<div class="row mb-3">

				<div class="col-md-8 offset-md-2">

					<div id="Carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<a href="#capstone-info" data-toggle="modal"><img class="d-block w-100" src="content/capstone.jpg"></a>
							</div>
							<div class="carousel-item">
								<a href="#flexbox-info" data-toggle="modal"><img class="d-block w-100" src="content/lotr.jpg"></a>
							</div>
							<div class="carousel-item">
								<a href="#poke-info" data-toggle="modal"><img class="d-block w-100" src="content/pokemon.png"></a>
							</div>
						<a class="carousel-control-prev" href="#Carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#Carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>

			<!-- Modals -->
			<div class="modal fade" id="capstone-info" tabindex="-1" role="dialog" aria-labelledby="capstone-info" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="capstoneInfoTitle">The Nerd Nook</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							The biggest, and most time intensive project I have worked on to date is the "Nerd Nook." In this project a team of myself and three other developers worked for seven weeks
							to develop a "meetup" style website geared toward getting people of similar interest groups connected. We used a stack of mySQL, PHP, and Angular, with mySQL and PHP in the backend, and Angular
							in the front. We had a blast learning a new framework and learning from one another. This project truly prepared me for development in the real world in that I was working with a stack I was not
							immediately familiar with, but I had to learn along the way, and I was able to work with a team I was totally new to, as well.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="button" class="btn btn-primary" value="GitHub" onclick="location.href ='https://github.com/mpeseke/nerd-nook';">

						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="flexbox-info" tabindex="-1" role="dialog" aria-labelledby="flexbox-info" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="jsflextitle">JavaScript Flex Gallery</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Inspired by Wes Bos' JavaScript 30 and my love for Lord of the Rings, I revamped this design for a Flex Gallery. I appreciated the sophisticated and clean way that
							vanilla JavaScript and CSS were used to design the flex boxes, and look forward to using this feature on passion projects or client websites in the future.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="button" class="btn btn-primary" value="GitHub" onclick="location.href ='https://github.com/mpeseke/lotr-image';">
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="poke-info" tabindex="-1" role="dialog" aria-labelledby="poke-info" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="poketitle">Pokémon Go! Field Dex: In Progress</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Over the lifecycle of this project, the scope changed from something that I was able to enjoy with my kids to something that has the potential to serve the Pokémon Go! community.
							I am in the process of Angular integration for this application, as well as designing my own API's or finding API's for it. Right now, "Dex" data is being added manually, and this is becoming tedious.
							That said, I am excited to have more time with the project, as I believe there is still much to learn about Angular and API integration for the Field Dex. One day, I hope to be able to roll up to a gym,
							choose the best monsters based on the compiled data, and be the best there ever was!
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="button" class="btn btn-primary" value="GitHub" onclick="location.href ='https://github.com/mpeseke/pokedex';">
						</div>
					</div>
				</div>
			</div>



		</article>
		<!-- Contact Form Header-->
		<div id="contact" class="row bg-dark text-light">

			<div class="container earth parallax">
				<h1 class="display-4 text-center mb-3">Message Me</h1>
			</div>

		</div>


		<!-- Contact Form -->
		<article class="container p-3 bg-dark text-light">

			<div class="row mt-3">
				<!-- Contact Form -->
				<div class="col-md-6 mb-3">
					<form id="email-marlon" method="post" action="./php/mailer.php">
						<!--Name-->
						<div class="form-group mb-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-fw fa-file-signature"></i>Name</span>
								</div>
								<input class="form-control" type="text" name="name" id="name" placeholder="Your Name Here">
							</div>
						</div>
						<!--Email -->
						<div class="form-group mb-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-fw fa-at"></i>Email</span>
								</div>
								<input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
							</div>
						</div>
						<!--Subject -->
						<div class="input-group mb-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-fw fa-comment-alt"></i>Subject</span>
								</div>
								<input class="form-control" type="text" name="subject" id="subject" placeholder="Message purpose?">
							</div>
						</div>
						<!-- Message -->
						<div class="input-group mb-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-fw fa-envelope"></i>Message</span>
								</div>
								<textarea class="form-control" name="message" id="message" rows="4" placeholder="Please limit message to 2000 characters."></textarea>
							</div>
						</div>

						<!--reCaptcha-->
						<div class="g-recaptcha mb-3" data-sitekey="6LcLoWsUAAAAAFP3wAlvO2ukY2JWPzHDs1GYIUQr"></div>

						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>

						<!--Buttons!-->
						<div class="buttons">
							<button class="btn btn-success" type="submit"><i class="fas fa-check-circle fa-fw"></i>Submit</button>
							<button class="btn btn-danger" type="reset"><i class="fas fa-history fa-fw"></i>Reset</button>
						</div>
					</form>


				</div>

				<!-- Links -->
				<div class="col-md-6">
					<blockquote class="blockquote text-md-right p-2">
						<p class="font-italic pt-2">"If we marry educational technology with quality, enriching content, that's a circle of win."</p>
						<footer class="blockquote-footer">LeVar Burton</footer>
					</blockquote>

				<div class="text-center">
					<a href="index.php#page-top"><i class="fas fa-arrow-circle-up fa-5x"></i></a>
				</div>


				</div>
			</div>

		</article>

		<footer class="container-fluid p-3 bg-dark text-light">
			<p>
				<a href="https://github.com/mpeseke"><i class="fab fa-cog fa-github-square fa-5x"></i></a>
				<a href="https://www.linkedin.com/in/mpeseke/"><i class="fab fa-linkedin fa-5x"></i></a>
				<a href="https://twitter.com/MPeseke"><i class="fab fa-twitter-square fa-5x"></i></a>
			</p>
		</footer>

	</body>
</html>