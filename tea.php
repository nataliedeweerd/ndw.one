<?php
	$title = "NdW - Milton Bayer's Tea Generator";
	$meta = "Milton Bayer's rebuilt Tea Generator";
	include('inc/header.php');
?>

<a href="/#portfolio" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

<section class="colour individual_portfolio">
    <div class="vertical-center">
        <h1>The Tea Generator</h1>
        
        <div class="grid">
            <div class="grid__item grid__item--1-2">
                <div class="owl-carousel owl-theme">
                    <div>
                        <img src="img/tea_gen--before.jpg" />
                        <p>The original version of the site (built in Flash).</p>
                    </div>
                    <div>
                        <img src="img/tea_gen--tea.jpg" />
                        <p>The main "Tea" version of the site. Whose turn is it to make the office a cuppa?</p>
                    </div>
                    <div>
                        <img src="img/tea_gen--beer.jpg" />
                        <p>A new variant of the site - the "Beer Generator". Whose turn it is to buy a round?</p>
                    </div>
                    <div>
                        <img src="img/tea_gen--gen.jpg" />
                        <p>A new variant of the site - the "Generic Generator". This version includes an input box where users can type in their own task.</p>
                    </div>
                    <div>
                        <img src="img/tea_gen--gen2.jpg" />
                        <p>The modified "add names" page, showing the new customisable task box.</p>
                    </div>
                </div>
                
                <a href="http://www.miltonbayer.com/tea" class="view-site" target="_blank">View Site</a>
            </div>
            
            <div class="grid__item grid__item--1-2">
                <p>The “Tea Generator” is one of Milton Bayer’s most popular links. It’s a microsite which allows users to input the names of their friends/colleagues and the spinner randomises whose turn it is to make everyone a round of tea.</p>
                <p>The site was previously built in Flash, and as such was not compatible with mobile devices. I was tasked with rebuilding it in HTML5 Canvas, to make it usable on mobile, and also extended it to include two new variations - a “Beer Generator”, a “Generic Generator”, and a seasonal “Christmas Generator”. Both the Generic and Christmas generators allow users to input any task they like before spinning to see who has to do it. </p>
                <p>Cookies are used to save a user’s list, so they can continue to come back and use the site daily without having to re-input player’s names.</p>

            </div>
            
        </div>
    </div>
</section>

<?php
    include('inc/footer.php');
?>