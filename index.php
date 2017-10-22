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
                <li><span>css3</span></li>
                <li><span>scss</span></li>
                <li><span>bootstrap</span></li>
                <li><span>javascript</span></li>
                <li><span>jquery</span></li>
                <li><span>ajax</span></li>                        
                <li><span>gsap</span></li>
                <li><span>php</span></li>
                <li><span>mysql</span></li>
                <li><span>drupal7</span></li>
                <li><span>wordpress</span></li>
                <li><span>plesk</span></li>
                <li><span>git</span></li>
            </ul>
        </div>
    </div>
</section>

<section class="colour portfolio" id="portfolio">
    <h1>Portfolio</h1>
    <div class="grid grid--effect">
        <a href="tea" class="grid__item grid__item--1-3 grid__item--tea" data-portfolio="tea">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/tea_gen.jpg" alt="Image"/>
                    <div class="stack__title">Tea Generator</div>
                </div>
            </div>
        </a>
        <a href="secret_santa" class="grid__item grid__item--1-3 grid__item--santa">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/secret_santa.jpg" alt="Image"/>
                    <div class="stack__title">Secret Santa Selector</div>
                </div>
            </div>
        </a>
        <a href="milton_bayer_signin" class="grid__item grid__item--1-3 grid__item--signin">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/signin.jpg" alt="Image"/>
                    <div class="stack__title">Milton Bayer Signin System</div>
                </div>
            </div>
        </a>
        <a href="#" class="grid__item grid__item--1-3 grid__item--placeholder1">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/placeholder--1.png" alt="Image"/>
                    <div class="stack__title">Placeholder 1</div>
                </div>
            </div>
        </a>
        <a href="#" class="grid__item grid__item--1-3 grid__item--placeholder2">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/placeholder--2.png" alt="Image"/>
                    <div class="stack__title">Placeholder 2</div>
                </div>
            </div>
        </a>
        <a href="#" class="grid__item grid__item--1-3 grid__item--placeholder3">
            <div class="stack">
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__deco"></div>
                <div class="stack__figure">
                    <img class="stack__img" src="img/placeholder--3.png" alt="Image"/>
                    <div class="stack__title">Placeholder 3</div>
                </div>
            </div>
        </a>
    </div>
</section>

<section class="colour contact">
    <h1>Get in Touch</h1>
    
    <div class="form__wrapper">
        <form class="contact__form" action="" method="post">
            <input name="name" class="form__name" type="text" placeholder="Name">
            <input name="email" class="form__email" type="text" placeholder="Email">
            <textarea name="msg" class="form__msg" placeholder="Message" rows="4" cols="50"></textarea>
            <input class="form__submit" type='submit' value='Submit' />
        </form>
        <div class="form__success"><h3>Thank you for your message.</h3></div>
    </div>
    
    
    <div class="social">
        <a href="https://github.com/nataliedeweerd/" class="social__icon" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/nataliedeweerd/" class="social__icon" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://twitter.com/nataliedeweerd" class="social__icon" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
</section>

<?php
    include('inc/footer.php');
?>