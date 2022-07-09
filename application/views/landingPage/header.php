<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="">Travelink</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="<?php echo base_url('landingPage') ?>">Home</a>
								</li>
								<li><a href="<?php echo base_url('landingPage/main')?>">Search</a></li>
								<?php if (empty($this->session->userdata('username'))){ ?>
									<li><a href="<?php echo base_url('login')?>">Login</a></li>
									<?php } else { ?>
									<li>
										<a href="#" class="fh5co-sub-ddown">Halo, <?php echo $this->session->userdata('username')?></a>
										<ul class="fh5co-sub-menu">
											<li><a href="<?php echo base_url('login/logoutPublic')?>">Logout</a></li> 
										</ul>
									</li>
									<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>