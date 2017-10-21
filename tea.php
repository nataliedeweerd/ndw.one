<?php
	$title = "NdW - Milton Bayer's Tea Generator";
	$meta = "Milton Bayer's rebuilt Tea Generator";
	include('inc/header.php');
?>

<section class="colour individual_portfolio">
    <h1>Milton Bayer's Tea Generator</h1>
    
    <div class="grid">
        <div class="grid__item grid__item--1-2">
            <p><img src="img/full/tea_gen--before.jpg" /></p>
        </div>
        
        <div class="grid__item grid__item--1-2">
            <p>The “Tea Generator” is one of Milton Bayer’s most popular links. It’s a microsite which allows users to input the names of their friends/colleagues and the spinner randomises whose turn it is to make everyone a round of tea.</p>
            <p>The site was previously built in Flash, and as such was not compatible with mobile devices. I was tasked with rebuilding it in HTML5 Canvas, to make it usable on mobile, and also extended it to include two new variations - a “Beer Generator”, a “Generic Generator”, and a seasonal “Christmas Generator”. Both the Generic and Christmas generators allow users to input any task they like before spinning to see who has to do it. </p>
            <p>Cookies are used to save a user’s list, so they can continue to come back and use the site daily without having to re-input player’s names.</p>

        </div>
        
    </div>
</section>

<?php
    include('inc/footer.php');
?>