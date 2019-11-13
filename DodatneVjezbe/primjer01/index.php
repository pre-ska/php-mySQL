<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-2"/>
<title>Vijesti</title>

<style type="text/css">

/* standard elements */
* 
{
	margin: 0;
	padding: 0;
}

a 
{
	color: #36C;
}

a:hover 
{
	color: #06F;
}

body 
{
	color: #444;
	font: normal 62.5% "Lucida Sans Unicode",sans-serif;
	margin: 0;
}

input 
{
	color: #555;
	font: normal 1.1em "Lucida Sans Unicode",sans-serif;
}

p,cite,code,ul 
{
	font-size: 1.2em;
	padding-bottom: 1.2em;
}

h1 
{
	font-size: 1.4em;
	margin-bottom: 4px;
}

code 
{
	border: 1px solid #F0F0F0;
	border-left: 6px solid #39F;
	color: #555;
	display: block;
	font: normal 1.1em "Lucida Sans Unicode",serif;
	margin-bottom: 12px;
	padding: 8px 10px;
	white-space: pre;
}

cite 
{
	color: #666;
	display: block;
	font: normal 1.3em "Lucida Sans Unicode",serif;
	padding-left: 28px;
}

h1,h2,h3 
{
	color: #367EA6;
	padding-top: 6px;
}

/* misc */
.clearer {
	clear: both;
}

/* structure */
.container 
{
	background-color: #E5E5E5;
	margin: 0 auto;
	padding-bottom: 6px;
	width: 767px;
}

.header 
{
	background-color: rgb(54,126,166);		
}

/* title */
.title h1 
{
	color: #FFF;
	font: normal 3em Verdana,sans-serif;
	height: 150px;
	line-height: 150px;
	margin-bottom: 8px;
	text-align: center;
}

/* navigation */
.navigation 
{
	margin-bottom: 4px;
}

.navigation a 
{
	background-color: #4A91C3;
	color: #FFF;
	float: left;
	font: bold 1.2em "Trebuchet MS",sans-serif;
	padding: 8px 0;
	width: 19%;
	border-right: 1px solid #FFF;
	text-align: center;
	text-decoration: none;
}

.navigation a:hover 
{
	background-color: #000;
	color: #FFF;
}

/* main */
.main 
{
	clear: both;
	padding: 8px 18px;
}

/* content */
.content 
{
	float: right;
	width: 730px;
}

.content .item 
{
	padding: 6px 12px;
	border: 1px solid #EEE;
	background: #FFF;
	margin-bottom: 8px;
}

.content .descr 
{
	color: #333;
	margin-bottom: 6px;
}

.content li 
{
	margin-left: 18px;
}


/* footer */
.footer 
{
	background: #FFF;
	border: 1px solid #EEE;
	color: #666;
	font-size: 1.1em;
	margin: 0 auto;
	text-align: center;
	padding: 6px;
	width: 720px;
}

.footer a 
{
	color: #36C;
	text-decoration: none;
}

.footer a:hover 
{
	color: #06F;
	text-decoration: underline;
}

</style>

</head>

<body>

<div class="container">
	
	<div class="main">

		<div class="header">
		
			<div class="title">
				<h1>Vijesti grupe PHP-01/11</h1>
			</div>

		</div>
		
		<div>
			<a href="index.php">Home</a> |
			<a href="index.php?what=predmeti">Predmeti</a> |
			<a href="index.php?what=raspored">Raspored</a> |
			<a href="index.php?what=dvorane">Dvorane</a> |
			<a href="index.php?what=galerija">Galerija</a>
		</div>
		
		<div class="content">
		
			<?php
			
				$file = "inc/".$_GET["what"].".php";
				
				/* slucaj: 1
				// dinamicko ukljucivanje datoteke
				if(is_file($file))
				{
					include($file);
				}
				else
				{
					include("inc/default.php");
				}
				*/				
			
				// malo manje dinamicko ukljucivanje datoteke
				switch($_GET["what"])
				{
					case 'galerija':
						include("inc/galerija.php");
					break;
				
					case 'dvorane':
						include("inc/dvorane.php");
					break;
				
					case 'predmeti';
						include("inc/predmeti.php");
					break;
					
					case 'raspored':
						include("inc/raspored.php");
					break;
					
					default:
						include("inc/default.php");
				}
			
			?>

		</div>
	
		<div class="clearer"><span></span></div>

	</div>

	<div class="footer">&copy; 2011 PHP-01/11
	</div>

</div>

</body>

</html>