<?php
	$title = "NdW";
	$meta = "The portfolio of web developer Natalie de Weerd";
	include('inc/header.php');
?>

<section class="intro">
    <div class="parallax">
        <h1 data-rellax-speed="-5">Hello,<br />welcome to <span class="rwd-linebreak">my site!</span></h1>
        <div class="parallax__sky"></div>
        <img src="svg/parallax__cloud.svg" class="parallax__cloud" data-rellax-speed="-10" />
        <img src="svg/parallax__mountain1.svg" class="parallax__mountain--1" data-rellax-speed="-10" />
        <img src="svg/parallax__mountain2.svg" class="parallax__mountain--2" data-rellax-speed="-8" />
        <img src="svg/parallax__mountain3.svg" class="parallax__mountain--3" data-rellax-speed="-6" />
        <img src="svg/parallax__shrubs.svg" class="parallax__shrubs" data-rellax-speed="-4" />
        <img src="svg/parallax__trees.svg" class="parallax__trees" data-rellax-speed="8" />
    </div>
</section>

<section class="colour about">
    <h1>About</h1>
    <div class="grid">
        <div class="grid__item grid__item--1-3">
            <img src="img/me.png" />
        </div>
        <div class="grid__item grid__item--2-3">
            <p>Hi! My name's Natalie and I'm a Web Developer in Northampton with a BSc in Computing Science! When I'm not sat behind my computer programming, I'm probably playing games or shooting my bow.</p>
            <p>Here are some of the technologies I know:</p>
            <ul class="technologies">
                <li><span>html5</span></li>
                <li><span>html for emails</span></li>
                <li><span>css3</span></li>
                <li><span>scss</span></li>
                <li><span>bootstrap</span></li>
                <li><span>javascript</span></li>
                <li><span>jquery</span></li>
                <li><span>ajax</span></li>                        
                <li><span>gsap</span></li>
                <li><span>php</span></li>
                <li><span>mysql</span></li>
                <li><span>drupal 7</span></li>
                <li><span>drupal 8</span></li>
                <li><span>magento 2</span></li>
                <li><span>cpanel</span></li>
                <li><span>plesk</span></li>
                <li><span>ssh command line</span></li>
                <li><span>git</span></li>
                <li><span>adobe photoshop</span></li>
                <li><span>adobe xd</span></li>
            </ul>
        </div>
    </div>
</section>

<section class="colour portfolio" id="portfolio">
    <h1>Portfolio</h1>
    <div class="grid grid--effect">
        <a href="competition-microsite" class="grid__item grid__item--1-3 grid__item--competition">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/competition_microsite--thumb.jpg" alt="Competition Microsite"/>
                    <div class="stack__title">Competition Microsite</div>
                </div>
            </div>
        </a>
        <a href="playground/interactive-product-viewer/index.html" class="grid__item grid__item--1-3 grid__item--product">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/interactive_product_viewer--thumb.jpg" alt="Interactive Product Viewer"/>
                    <div class="stack__title">Interactive Product Viewer</div>
                </div>
            </div>
        </a>
        <a href="tea" class="grid__item grid__item--1-3 grid__item--tea" data-portfolio="tea">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/tea_gen.jpg" alt="Tea Generator"/>
                    <div class="stack__title">Tea Generator</div>
                </div>
            </div>
        </a>        
        <a href="data-center" class="grid__item grid__item--1-3 grid__item--dowtk">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/dowtk.jpg" alt="Email Data Center"/>
                    <div class="stack__title">Email Data Center</div>
                </div>
            </div>
        </a>
        <a href="topps" class="grid__item grid__item--1-3 grid__item--topps">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/topps.jpg" alt="Topps Football"/>
                    <div class="stack__title">Topps Football</div>
                </div>
            </div>
        </a>
        <a href="playground/dynamic-php-images/" class="grid__item grid__item--1-3 grid__item--dynamic_php_images">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/dynamic_thumb.gif" alt="Dynamic PHP Images"/>
                    <div class="stack__title">Dynamic PHP Images</div>
                </div>
            </div>
        </a>
    </div>
</section>

<section class="colour blog">
    <h1>Blog</h1>
    
    <div class="grid">
        <?php include('inc/blog.php'); ?>
    </div>
</section>


<section class="colour contact">
    <h1>Get in Touch</h1>
    
    <?php 
    /*
    <div class="form__wrapper">
        <form class="contact__form" action="" method="post">
            <input name="name" class="form__name" type="text" placeholder="Name">
            <input name="email" class="form__email" type="text" placeholder="Email">
            <textarea name="msg" class="form__msg" placeholder="Message" rows="4" cols="50"></textarea>
            <input class="form__submit" type='submit' value='Submit' />
        </form>
        <div class="form__success"><h3>Thank you for your message.</h3></div>
    </div>
    */ 
    ?>
    
    
    <div class="social">
        <a href="https://github.com/nataliedeweerd/" class="social__icon" target="_blank"><i class="fab fa-github" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/nataliedeweerd/" class="social__icon" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
        <a href="https://twitter.com/nataliedeweerd" class="social__icon" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a href="https://dev.to/nataliedeweerd" class="social__icon" target="_blank"><i class="fab fa-dev" aria-hidden="true"></i></a>
    </div>
</section>

<?php
    include('inc/footer.php');
?>