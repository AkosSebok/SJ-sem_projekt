<?php
    include 'partials/header.php';
?>

<section id="intro" class="bg-light padding-large">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
				<div class="page-title text-center">
					<h2>About Local Events Hub</h2>
					<div class="breadcum-items">
						<span class="item">
							<a href="home.php">Home /</a>
						</span>
						<span class="item colored">About Us</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="company-services" class="padding-large">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-3">
                <div class="icon-box d-flex">
                    <div class="icon-box-content">
                        <h3 class="card-title text-dark">Discover Events</h3>
                        <p>
                            Find concerts, workshops, sports activities, and community gatherings in one place.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-3">
                <div class="icon-box d-flex">
                    <div class="icon-box-content">
                        <h3 class="card-title text-dark">Easy Registration</h3>
                        <p>
                            Visitors browse and register for upcoming local events through a simple interface.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-3">
                <div class="icon-box d-flex">
                    <div class="icon-box-content">
                        <h3 class="card-title text-dark">Community Support</h3>
                        <p>
                            Local organizers promote their activities and connect with more people in the city.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="padding-large no-padding-top">
	<div class="container">
		<div class="row">
			<div class="single-image col-md-12">
				<h2>Our Goal</h2>
				<p>
					Local Events Hub is a web platform focused on promoting community activities and helping visitors discover events around them.
				</p>
				<p>
					The project was created as a PHP and MySQL university project using object oriented programming principles and CRUD operations.
				</p>
				<p>
					Administrators manage events through a secure dashboard where they add, edit, and remove events dynamically from the database.
				</p>
			</div>
			<img src="../assets/images/about.jpg" title="about" />
			<p class="mt-3">
				The website uses PHP 8, MySQL, sessions for authentication, and prepared SQL statements for security. Visitors browse events by category and date while administrators manage all content through the admin panel.
			</p>
		</div>
	</div>
</section>

<?php
    include 'partials/footer.php';
?>