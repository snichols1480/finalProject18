<?php

include ('config.php');
include ('functions.php');
/**
Below is the function to check if user is loggedin or not.
**/
//isLoggedin();

/**
Below is the function to check if user is loggedin or not.
**/
//isRegistered();
$term = get('search-term');

$characters = searchCharacters($term, $database);

 ?>





<HTML>
<HEAD>
<TITLE>Anime Admirers</TITLE>
<META NAME="keywords" CONTENT="Attack on Titan, Bakugan, Monsuno, Sword Art Online, Digimon, Medabots, Anime">
<META NAME="description" CONTENT="Various Anime, Attack on Titan, Bakugan, Bleach, Cardcaptors, Code Geass, Death Note, Digimon, Heroman, Monsuno, Flint the Time Detective, Gundam, Medabots, Speed Racer, Sword Art Online, plus over 1000 screen shots!">
<meta http-equiv="imagetoolbar" content="no">

<SCRIPT LANGUAGE=JAVASCRIPT TYPE="TEXT/JAVASCRIPT">
   dayName = new Array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
   monName = new Array ("January", "February", "March", "April", "May", "June", "July", "August",
                        "September", "October", "November", "December")
   now = new Date
</SCRIPT>
</HEAD>
<STYLE>
H1 {TEXT-ALIGN:CENTER;FONT-SIZE:12PT;FONT-WEIGHT:BOLD}
h2 span{text-align:center;font-size:30pt;font-weight:bold;color:"brown"; 
filter:progid:DXImageTransform.Microsoft.Shadow(color="#c3d2c1",Direction=135,Strength=6); 
width: 100%;display: block; 
} 
p {font-size:12pt; text-align: center}
b {font-size:14pt;color:brown;font-weight:bold}
body {scrollbar-face-color:#7b2e00;scrollbar-arrow-color:#c3d2c1;
   scrollbar-track-color:#c3d2c1;scrollbar-darkshadow-color:#000000;
   scrollbar-highlight-color:#ffffff;scrollbar-3dlight-color:#ffffff;
   scrollbar-shadow-color:#cc9966}
</style>
<BODY bgcolor="beige" TEXT="000000" text-align=center>
<table align="center">
<tr><td colspan=1 width=700 text-align="center">
<h2><span>Welcome to AnimeAdmirers</span><h2>
<SCRIPT LANGUAGE=JAVASCRIPT TYPE="TEXT/JAVASCRIPT">
   document.write("<H1>Today is " + dayName[now.getDay()] + ", " +
            monName[now.getMonth()] + " " + now.getDate() + ".<\/H1>")
</SCRIPT>
<p><h1><a href="guest.php">Guestbook </a></h1><br />

<p><h1><a href="viewGuest.php"> View Guestbook </a></h1><br />

<p><h1><a href="viewCharacters.php"> Search Characters </a></h1><br />
 _________________________________________________________________________</p>
<p>Welcome!
  To enter, just click <a href="http://www.animeadmirers.com/mainpageaa2.html">HERE</a>,
  I think you will like this site for many reasons. The #1 reason is that THERE ARE NO ADS to slow you down!</p>
  <p>This site carries information on  a lot of the most popular anime such as: Akame ga Kill, Attack on Titan, Beyblade (All Seasons), Bleach, Blue Exorcist, Cardcaptors, Danball Senki (Little Battlers), Death Note, Digimon (All Seasons), Dual! Parallel Trouble Adventure, Flint the Time Detective, Fullmetal Alchemist, Gundam (All), InuYasha, Medabots, Monsuno, Naruto, Parasyte the Maxim, Pilot Candidate, Rurouni Kenshin, Shinzo, Speed Racer X, Ronin Warriors, Sword Art Online, Tokyo Mew Mew, Trinity Blood, Witch Hunter Robin, Wolf's Rain, Zoids, etc. However, Sections are added all the time so come on in and check it out!!<br><br> 
There are tons of pictures....isn't that what most people want?<br><br><b>
All Material Copyright &#169; 2001-2018 Anime Admirers. All Rights Reserved.</b></P>
<P><U>Disclaimer</U><P>Please be advised that I am in no way associated with the owners and operators
of any of the anime contained within my site.  Those people are Kodansha, Clamp, Nelvana, Saban 
Entertainment, Toei, etc. I am just a huge fan.  No copyright infringement is ever intended. Therefore, 
email me if there is a problem, and I will rectify it immediately. Thank you.</p>


<!--
<IMG SRC=http://visit.webhosting.yahoo.com/counter.gif ALT="Counter">
-->
</td></tr>
<table>
</BODY>
</HTML>
<script type="text/javascript">(function (d, w) {var x = d.getElementsByTagName('SCRIPT')[0];var f = function () {var s = d.createElement('SCRIPT');s.type = 'text/javascript';s.async = true;s.src = "//np.lexity.com/embed/YW/08c98da9406108512d7f9e401c4ddb15?id=efcd1d44bbb2";x.parentNode.insertBefore(s, x);};w.attachEvent ? w.attachEvent('onload',f) :w.addEventListener('load',f,false);}(document, window));</script>