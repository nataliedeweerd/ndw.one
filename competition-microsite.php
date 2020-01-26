<?php
	$title = "NdW - A Competition Microsite";
	$meta = "A Competition Microsite";
	include('inc/header.php');
?>

<a href="/#portfolio" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

<section class="colour individual_portfolio">
    <div class="vertical-center">
        <h1>Competition Microsite</h1>
        
        <div class="grid">
            <div class="grid__item grid__item--1-2">
                <div class="owl-carousel owl-theme">
                    <div>
                        <img src="img/competition_microsite--1.jpg" />
                        <p>The landing page of the microsite asks users to input their codes.</p>
                    </div>
                    <div>
                        <img src="img/competition_microsite--2.jpg" />
                        <p>If a code has been used already, an error message is displayed.</p>
                    </div>
                    <div>
                        <img src="img/competition_microsite--3.jpg" />
                        <p>Finally, users are thanked and encouraged to follow the brand on social media.</p>
                    </div>
                </div>
                
                <a href="https://competition.hrgdigital.co.uk/" class="view-site" target="_blank">View Site</a>
            </div>
            
            <div class="grid__item grid__item--1-2">               
                <p>Brands often run competitions to drive brand awareness or to promote new products. As such HRG are able to offer a bespoke, robust, cost-effective solution to their client's needs through the use of their competition microsite.</p>
                <p>The system is built modularly, ensuring a client gets exactly what they need - if they don't need an age gateway, they aren't forced to use one!</p>
                <p>The base application checks the users codes through AJAX calls, and immediately informs them if one is incorrect, or already used, clearly highlighting it with a red border. Only once all codes are correct is the user taken to a form where they can input their information and fully enter the competition.</p>
                <p>All data is stored on a secure server in compliance with GDPR.</p>
            </div>
            
        </div>
    </div>
</section>

<?php
    include('inc/footer.php');
?>