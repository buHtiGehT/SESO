<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700'
	rel='stylesheet' type='text/css'>
<style>
/*This fixes white space around header */
html, body {
	margin: 0;
	padding: 0;
}
/*Main header changes, changes font opacity, and position of main elements*/
#nav {
	margin: 0;
	padding: 0;
	font-family: 'Lato-light', sans-serif;
	font-weight: 400px;
	text-align: center;
	opacity: .9;
	background-image: url(images/2110-11144452186_e0f37bbbae_h.jpg);
	padding-top: 0px;
	padding-bottom: 0px;
}

/*creates blocks*/
#nav li {
	display: inline-block;
	/*I don't know what this does but without it our page breaks.*/
}

#nav ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: 17191A;
}
/*Changes some more text formatting*/
#nav li a {
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}
/*Hovering state */
#nav li a:hover {
	background-color: grey;
}

/*GeT_RighT image*/
#MainImage {
	width: 100%;
	height: 720px;
	position: relative;
	background-image: url(images/2110-11144452186_e0f37bbbae_h.jpg);
	background-position: center;
	background-size: cover;
}

#LogoText {
	font-family: 'Lato-Light', sans-serif;
	font-size: 200px;
	color: white;
	text-align: center;
}

#SubMainText {
	color: white;
	font-family: 'Lato-Light', sans-serif;
	font-size: 20px;
	text-align: center;
}

#ImageOne {
	width: 200px;
	height: auto;
	overflow: hidden
}

#FourImages {
	text-align: center;
}

#FourImages li {
	display: inline-block;
}

.myTinyImages {
	width: 300px;
	height: auto;
	margin: 0;
	padding: 0;
}

.dotless {
	list-style: none;
}
</style>
</head>


<body>

</body>
</html>