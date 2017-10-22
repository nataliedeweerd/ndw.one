<?php
	$title = "NdW - Milton Bayer's Signin System";
	$meta = "Milton Bayer's new Signin System";
	include('inc/header.php');
?>

<a href="/#portfolio" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

<section class="colour individual_portfolio">
    <div class="vertical-center">
        <h1>Milton Bayer's Signin System</h1>
        
        <div class="grid">
            <div class="grid__item grid__item--1-2">
                <div class="owl-carousel owl-theme">
                    <div>
                        <img src="img/signin--1.jpg" />
                        <p>The homepage of the system. Separate sign in systems are available for visitors and staff.</p>
                    </div>
                    <div>
                        <img src="img/signin--2.jpg" />
                        <p>Visitors sign in by inputting their name, and who they are here to see.</p>
                    </div>
                    <div>
                        <img src="img/signin--3.jpg" />
                        <p>Staff sign in with a simple pin code.</p>
                    </div>
                </div>
                
            </div>
            
            <div class="grid__item grid__item--1-2">
                <p>This internal site is a staff-management solution which allows staff members to sign in/out of the building with a pin code. The time a staff member signs in and out is recorded, and a full fire safety list is available in emergency situations, which list all staff currently in the building.</p>
                <p>Visitors can also use this system to sign into the building; they simply input their name and who they’re here to see, and an email automatically gets sent to the staff member to let them know that there is a visitor waiting for them. Visitors are also added to the fire safety list.</p>
                <p>Within the admin area, HR is able to add staff holidays, and sick days, as well as other special days such as maternity leave.</p>
            </div>
            
        </div>
    </div>
</section>

<?php
    include('inc/footer.php');
?>