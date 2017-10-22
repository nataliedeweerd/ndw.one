<?php
	$title = "NdW - Milton Bayer's Secret Santa Selector";
	$meta = "Milton Bayer's new Secret Santa Selector";
	include('inc/header.php');
?>

<a href="/#portfolio" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

<section class="colour individual_portfolio">
    <div class="vertical-center">
        <h1>Secret Santa Selector</h1>
        
        <div class="grid">
            <div class="grid__item grid__item--1-2">
                <div class="owl-carousel owl-theme">
                    <div>
                        <img src="img/secret_santa--1.jpg" />
                        <p>The landing page of the microsite.</p>
                    </div>
                    <div>
                        <img src="img/secret_santa--2.jpg" />
                        <p>This form allows users to customise the email which is sent to all participants.</p>
                    </div>
                    <div>
                        <img src="img/secret_santa--3.jpg" />
                        <p>A list of all participants of the Secret Santa can be added here.</p>
                    </div>
                </div>
                
                <a href="http://www.miltonbayer.com/secretsanta" class="view-site" target="_blank">View Site</a>
            </div>
            
            <div class="grid__item grid__item--1-2">
                <p>This microsite takes the faff out of organising a Secret Santa, and does all the randomising for you - it even emails the person to let them know who they need to buy for!</p>
                <p>Built in PHP, it takes a list of users and adds them to an array. This array is then randomised, duplicated, and then the duplicated array is shifted by one. The two array’s are then used to join Secret Santa’s together.  Everyone is emailed individual emails to let them know who they need to buy for.</p>
                <p>If needed a “master” email is also generated, with a complete list of Secret Santa’s - just in case someone’s a scrooge and forgets to buy something.</p>
            </div>
            
        </div>
    </div>
</section>

<?php
    include('inc/footer.php');
?>