<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head profile="http://www.w3.org/2005/10/profile">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<title>Weston Thayer's Portfolio</title>
		
		<meta name="description" content="My projects to date" />
		<meta name="author" content="Weston Thayer" />
		
		<meta name="keywords" content="Weston Thayer, Weston, Thayer, Weston Thayer Portfolio, Product Designer, Program Manager, UX" />
		<meta name="copyrite" content="Copyrite Weston Thayer 2011" />
		
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
		
		<link rel="icon" type="image/png" href="/favicon.png" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
        <div id="header-bg">
            <div class="oval-base" id="oval-1"></div>
            <div class="oval-base" id="oval-2"></div>
            <div class="oval-base" id="oval-3"></div>
        </div>
        <div class="content">
        	<nav id="top" class="navbar navbar-birds">
	        	<div class="container">
	        		<!-- Mobile display -->
	        		<div class="navbar-header">
	        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	        				<span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
	        			</button>
	        			<a class="navbar-brand" href="/">Weston Thayer</a>
	        		</div>

	        		<div id="navbar-collapse-1" class="collapse navbar-collapse">
	        			<?php
	        				$isIndex = $_SERVER['SCRIPT_NAME'] === '/index.php';
	        			?>
	        			<ul class="nav navbar-nav birds-3">
	        				<li>
	        					<a href="<?php if (!$isIndex) echo '/'; ?>#work" class="item1">work<span></span></a>
	        				</li>
	        				<li>
	        					<a href="<?php if (!$isIndex) echo '/'; ?>#skills" class="item2">skills<span></span></a>
	        				</li>
	        				<li>
	        					<a href="<?php if (!$isIndex) echo '/'; ?>#contact" class="item3">contact<span></span></a>
	        				</li>
	        			</ul>
	        			<ul class="nav navbar-nav birds-1">
	        				<li>
	        					<a id="logo" href="/media/"><span></span></a>
	        				</li>
	        			</ul>
	        		</div>
				</div>
			</nav>