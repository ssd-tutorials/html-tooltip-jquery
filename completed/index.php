<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Html Tooltip with jQuery</title>
	<meta name="description" content="Html Tooltip with jQuery" />
	<meta name="keywords" content="Html Tooltip with jQuery" />
	<link href="/css/core.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<div id="wrapper">

	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet elit <a href="#" id="lacrosse-match" class="tooltip">lacrosse match</a> vitae arcu interdum ullamcorper. Nullam ultrices, nisi quis scelerisque convallis, augue neque tempor enim, et mattis justo nibh eu elit. Quisque ultrices gravida pede. Mauris <span id="random" class="tooltip">accumsan</span> vulputate tellus. Phasellus condimentum bibendum dolor. Mauris sed ipsum. Phasellus in diam. Nam sapien ligula, consectetuer id, hendrerit in, cursus sed, leo. Nam tincidunt rhoncus urna. Aliquam id massa ut nibh bibendum imperdiet. Curabitur neque mauris, porta vel, lacinia quis, placerat ultrices, orci.</p>
	
	<div id="lacrosse-match-content" class="tooltip-target" style="width:250px">
		<img src="/images/lacrosse-match.jpg" alt="Lacrosse match" width="250" height="167" style="margin-bottom:7px" />
		<h1>We won that game!</h1>
		<p>Lacrosse team has won this game.</p>
	</div>
	
	<div id="random-content" class="tooltip-target">
		<h1>Random heading</h1>
		<p>Some random content</p>
	</div>



</div>

<script src="/js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="/js/core.js" type="text/javascript"></script>
</body>
</html>



