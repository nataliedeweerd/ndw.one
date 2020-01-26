<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Dynamic PHP Images</title>
	<meta name="description" content="Dynamic PHP Images">
	<meta name="author" content="Natalie de Weerd">

	<!-- CSS -->
	<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css?v=1.0">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
	<script src="js/site.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130686076-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130686076-1');
    </script>
</head>

<body>

<a href="/#portfolio" class="back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

<article>
	<div class="input">
		<input type="text" name="name" id="name" />
		<button>Submit</button>
	</div>

	<div class="row">
		<img id="png" />
		<img id="gif" />
	</div>
    
   
	<!--<div class="row">
		<img id="jpg" />
		<img id="png2" />
	</div>-->
    
</article>


</body>
</html>
