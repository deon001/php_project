<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?> 


<html>
    <head>
        <link rel="stylesheet" href="about me.css">
        <title>Sample</title>
	</head>

  <body>

  <ul id="Navi">
  <li style="float: left;">Welcome, <?=$_SESSION['sess_user'];?>!</li>
  <li style="float: left;"><a class="active" href="#home">Home</a></li>
  <li style="float: left;"><a href="https://www.google.co.in/search?q=college+of+engineering+chengannur&oq=college+of+engineering+chengannur&aqs=chrome..69i57j69i61l2j0j35i39j0.10355j0j7&sourceid=chrome&ie=UTF-8">My College</a></li>
  <li style="float: left;"><a href="https://www.google.co.in/maps/place/Illimoola/@9.6314991,76.6057698,19.39z/data=!4m5!3m4!1s0x3b062d2e0c8b52ff:0xdef2abe1f602216c!8m2!3d9.631712!4d76.6053271">My location</a></li>
  <li style="float: right;"><a href="logout.php">Logout</a> </li>
</ul>
<br>
<br>
<h1 style="color: #3385ff">About Me</h1>
<img src="1.jpg" style="width:400px;height:600px;">
<br>
<h4>Deon Saji</h4>
<h4>Koipurathu</h4>
<h4>Amayannoor P.O</h4>
<h4>Kottayam</h4>
<h4>Email: deonsaji@ieee.org</h4>
<br>
<h3><u>CAREER OBJECTIVE</u></h3>
   <p>To achieve a job that would help me to showcase my technical skills and leadership abilities.</p>
<br>
<h3><u>LANGUAGES KNOWN</u></h3>
   <p>English(L,W,R,S)<br>
Malayalam(L,W,R,S)<br>
Hindi(L,W,R,S)</p>
<br>
<h3><u>EDUCATIONAL QUALIFICATIONS</u></h3>
<table>
  <tr>
    <th>Course</th>
    <th>Name of Institution</th>
    <th>Year of Passing</th>
    <th>Percentage of Marks</th>
  </tr>
  <tr>
    <td>AISSE</td>
    <td>St.Antony's Public School</td>
    <td>2013</td>
    <td>98</td>
  </tr>
  <tr>
    <td>AISSCE</td>
    <td>St.Antony's Public School</td>
    <td>2015</td>
    <td>93</td>
  </tr>
  <tr>
    <td>B.Tech</td>
    <td>College of Engineering Chengannur</td>
    <td>2019</td>
    <td></td>
  </tr>
 </table>
<h3><u>HOBBIES</u></h3>
   <p>Listening to music, playing football.</p>
<br>
<h3><u>MY PROFILES</u></h3>

<ul>
  <li><a href="https://www.facebook.com/deon.saji.8">Facebook</a></li>
  <li><a href="https://www.instagram.com/__de0n__/">Instagram</a></li>
  <li><a href="https://www.linkedin.com/in/deon-saji-03a67a128/">Linkedin</a></li>
  <li><a href="https://twitter.com/deon_001">Twitter</a></li>
</ul>

  </body>
</html> 

<?php  
}  
?>  