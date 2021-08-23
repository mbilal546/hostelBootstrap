<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bill.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
<title>Navigation Bar Task</title>
<style>
    body{
        font-family: 'Baloo Bhai 2', cursive;
        background-image: url(Bil.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }
    ul{
        padding: 0px;
        margin: 0;
        list-style-type: none;
        background-color: rgb(52, 63, 63);
        overflow: hidden;
        border-radius: 28px;
    }
    li{
        float: left;
    }
    li a{
        display: inline-block;
        color: white;
        text-align: center;
        text-decoration: none;
        padding: 15px;
        font-size: 20px;
    }
    li a:hover{
        background-color: white;
        border-radius: 25px;
        color: black;
    }
   li a.active{
        background-color: white ;
        color: black;
        border-radius: 25px;
    }
    </style>
</head>

<body>
	<ul>
	<li> <a href="#" class="active"> Home</a></li>
	<li> <a href="ABOUT US.html" target="_blank"> About</a></li>
	<li> <a href="CONTACT US.html" target="_blank"> Contact Us</a></li>
	<li> <a href="FAQ's.html" target="_blank">FAQ's</a></li>
	<li> <a href="./login.php" target="_blank">Registration / Apply</a></li>
	</ul>
</body>
</html>