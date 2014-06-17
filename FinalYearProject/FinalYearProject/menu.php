<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CrozierV Main Menu 2</title>

<style type="text/css">
/* CSS for the layout of the page */
body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
}
#container {
    margin-right: auto;
    margin-left: auto;
    border-width: 0px;
    border-style: solid;
}
#header {
    height: 200px;
    width: 1000px;
    margin-right: auto;
    margin-left: auto;
    border-width: 0px;
    border-style: solid;
}
#logo {
    float: left;
    height: 200px;
    width: 350px;
    border: 0px solid;
    background-image: url(images/logo.gif);
    background-repeat: no-repeat;
    background-position: 5% 15px;
}
#topBar {
    float: right;
    height: 50px;
    width: 640px;
    border: 0px solid;
}
#imageHolder {
    float: right;
    height: 300px;
    width: 600px;
    margin-right: auto;
    margin-left: auto;
    border-width: 0px;
    border-style: solid;
    background-image: url(images/image7.png);
    background-repeat: no-repeat;
    background-position: 100px;
}
#welcomeMessage {
    height: 110px;
    width: 1000px;
    margin-right: auto;
    margin-left: auto;
    border-width: 0px;
    border-style: solid;
    padding-bottom: 40px;
    color: #C3D938;
    font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
    font-size: 64px;
    
}
#quoteArea {
    float: left;
    height: 100px;
    width: 300px;
    border: 0px solid;
    }
#contentArea {
    height: auto;
    width: 1000px;
    margin-right: auto;
    margin-left: auto;
    border-width: 0px;
    border-style: solid;
}
#footer {
    height: 50px;
    width: 1000px;
    margin-right: auto;
    margin-left: auto;
    border-width: 0px;
    border-style: solid;
}
</style>

<style type = "text/css">
/* CSS for the menu bar at the top left hand side */
#topBar:before {
  content: '';
  display: block;
}
#topBar:after {
  content: '';
  display: table;
  clear: both;
}
#topBar ul {
  list-style-type: none;
  position: relative;
  display: block;
  font-size: 12px;
  font-family: Verdana, Helvetica, Arial, sans-serif;
  margin: 0;
  padding: 0;
  border-bottom: 1px solid #A79787;
  float:right;
}
#topBar ul:before {
  content: '';
  display: block;
}
#topBar ul:after {
  content: '';
  display: table;
  clear: both;
}
#topBar li {
  display: block;
  float: left;
  margin: 0;
  padding: 0;
}
#topBar li a {
  float: left;
  color:      #005C99;
  text-decoration: none;
  height: 24px;
  padding: 9px 15px 0;
  font-weight: normal;
}
#topBar li:hover,
#topBar .active {
  text-decoration: none;
  border-bottom: 2px solid #A79787;
}
#topBar li:hover a {
  color: #000080;
}
#topBar .active a {
  font-weight: 700;
}
</style>

<style type="text/css">
/* CSS for user menu area */
#hintArea {
    border-top-left-radius:15px;
    border-top-right-radius: 15px;
    border: 0px solid;
    padding: 10px;
    width: 300px;
    height: 200px;
    float: left;
    margin-right: 10px;
    margin-left: 10px;
    color: #ffffff;
    background-color: #FFB739;
    font-family: "Arial", Gadget, sans-serif;
    padding-bottom: 20px;
}
#mainMenu {
    border-top-left-radius:15px;
    border-top-right-radius: 15px;
    border: 1px solid #CCCCCC;
    padding: 10px;
    width: 300px;
    height: auto;
    float: left;
    margin-right: 10px;
    color: #ffffff;
    text-decoration: none;
    list-style: none;
    background-color: #AAC4D1;
    font-family: "Arial", Gadget, sans-serif;
    padding-bottom: 20px;
}   
#usefulDocs {
    border-top-left-radius:15px;
    border-top-right-radius: 15px;
    border: 1px solid #CCCCCC;
    padding: 10px;
    width: 300px;
    height: 285px;
    float: left;
    background: #FF9966;
    color: #ffffff;
    font-family: "Arial", Gadget, sans-serif;
    padding-bottom: 20px;
}
#menuLinks{
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 180px;
    font-family: "Arial", Gadget, sans-serif;
    
}
#menuLinks li a{
    color: white;
    display: block;
    width: 150px;
    padding: 2px 4px;
    margin-bottom: 5px;
    text-decoration: none;
    font-weight: bold;
    border: 1px solid;
    border-color: #D3D1D2;
    background-color: #D3D1D2;
    text-decoration:none;
    border-top-left-radius:5px;
    border-top-right-radius: 5px;
    border-bottom-left-radius:5px;
    border-bottom-right-radius: 5px;
}
#menuLinks li a:visited{
    color: white;
}

#menuLinks li a:hover, #menuLinks li a:active{
    color: black;
    background-color: #B9D3EE;
}
#userMenu ul li {
    ist-style: none;
}

#userMenu ul li a {
    list-style: none;
    text-decoration: none;
    color: #ffffff
        
      }

</style>

<style>
    
#hintArea p {
    color: #FFFFFF;
    font-family: "Arial", Gadget, sans-serif;
}        
</style>

</head>

<body>
<div id="container">
  <div id="header">
    <div id="logo"></div>
    <div id="topBar">
      <ul>
        <li class='active'> <a href='version 6.html'><span>Home</span></a></li>
        <li> <a href='#'><span>Register</span></a></li>
        <li class='last'> <a href='#'><span>Login</span></a></li>
      </ul>
    </div>
    <div id="imageHolder"></div>
  </div>
  <div id="welcomeMessage"> Welcome!</div>
  <div id="contentArea">
    <div id="hintArea">
       <h2>Hint</h2>
       <p> This area has info about how to use the features available to the user once they have logged in</p>
    </div>
    <div id="mainMenu">
      <h2>Main Menu</h2>
      <div id="userMenu">
        <ul id="menuLinks">
           <li><a href="Profile.html">Profile</a></li>
           <li><a href="#box2">Current Vacancies</a></li>
           <li><a href="#box3">Admin Area</a></li>
           <li><a href="#box4">User Search</a></li>
           <li><a href="#box5">Register Vacancy</a></li>
           <li><a href="#box6">Job Allocation</a></li>
           <li><a href="#box7">Management Area</a></li>
        </ul>
      </div>
    </div>
    <div id="usefulDocs">
      <h2>Useful Docs</h2>
      <div id="userMenu">
        <ul id="docLinks">
           <li><a href="#doc1">Timesheet</a></li>
           <li><a href="#doc2">User Manuel</a></li>
           <li><a href="#doc3">Company Certificate</a></li>
           <li><a href="#doc4">Company Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="footer">Footer</div>
</div>
</body>
</html>