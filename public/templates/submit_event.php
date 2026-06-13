<?php
    include 'partials/header.php';
?>

<section id="intro" class="bg-light padding-large">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="page-title text-center">
                    <h2>Submit Event</h2>
                    <div class="breadcum-items">
                        <span class="item"><a href="home.php">Home /</a></span>
                        <span class="item colored">Submit Event</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-information padding-large">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-3"> 
                <h2>Submit a New Event</h2> 
                <div class="contact-detail d-flex flex-wrap mt-4"> 
                    <div class="detail mr-6 mb-4"> 
                        <p> Want to promote your event? Fill out the form and our team will review your submission before publishing it on Local Events Hub. </p> 
                        <ul class="list-unstyled list-icon"> 
                            <li> 
                                <p class="fw-bold"> Event name, date, location, and category are required. </p> 
                            </li> 
                            <li> 
                                <p class="fw-bold"> Provide a clear description so visitors know what to expect. </p> 
                            </li> 
                            <li> 
                                <p class="fw-bold"> Only public community events are accepted. </p> 
                            </li> 
                        </ul> 
                    </div> 
                </div> 
            </div> 
            <div class="col-md-6"> 
                <div class="contact-information"> 
                    <h2>Event Information</h2> 
                    <form action="../models/create.php" method="post" class="form-group contact-form mt-4"> 
                        <input type="hidden" name="redirect" value="../templates/home.php">
                        <input type="hidden" name="source" value="submit_event">
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <input type="text" name="title" placeholder="Event Name" class="form-control mb-3" required> 
                            </div> 
                        </div> 
                        <div class="row"> 
                            <div class="col-md-6"> 
                                <input type="date" name="date" class="form-control mb-3" required> 
                            </div> 
                            <div class="col-md-6"> 
                                <input type="text" name="location" placeholder="Location" class="form-control mb-3" required> 
                            </div> 
                        </div> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <select name="category" class="form-control mb-3" required> 
                                    <option value="">Select Category</option> 
                                    <option value="Music">Music</option> 
                                    <option value="Sports">Sports</option> 
                                    <option value="Workshop">Workshop</option> 
                                    <option value="Technology">Technology</option> 
                                    <option value="Community">Community</option> 
                                </select> 
                            </div>
                        </div> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <textarea class="form-control mb-3" name="description" placeholder="Event Description" style="height: 150px;" required></textarea> 
                            </div> 
                        </div> 
                        <div class="row"> 
                            <div class="col-md-6"> 
                                <input type="text" name="username" placeholder="Organizer Name" class="form-control mb-3" required> 
                            </div> 
                            <div class="col-md-6"> 
                                <input type="email" name="email" placeholder="Organizer Email" class="form-control mb-3" required> 
                            </div> 
                        </div> 
                        <label> 
                            <input type="checkbox" required> 
                            <span class="label-body"> I confirm that the information provided is accurate. </span> 
                        </label> 
                        <div class="d-grid"> 
                            <button type="submit" name="submit" class="button btn-bg-dark w-100 my-3"> Submit Event </button> 
                        </div> 
                    </form> 
                </div> 
            </div>
		</div>
	</div>
</section>
<section class="google-map">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</section>

<?php
include 'partials/footer.php';
?>
