<?php 
include_once("PHP/connection.php");
include_once("PHP/reuse_functions.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CrozierV Login Area</title>
<link rel="stylesheet" href="css/login_css.css" type="text/css">
<link rel="stylesheet" href="css/clientRegistration.css" type="text/css">
<link rel="stylesheet" href="css/candidateRegistration.css" type="text/css">
</head>

<body>
<div id="container">
  <div id="header">
    <div id="logo"></div>
    <div id="topBar">
      <form id="tfnewsearch" method="get" action="#">
        <input type="submit" value="search" class="tfbutton">
        <input type="text" class="tftextinput" name="q" placeholder="  Search..." maxlength="120">
      </form>
      <ul>
        <li> <a href='index.php'><span>Home</span></a></li>
        <li class='active'> <a href='login.php'><span>Register</span></a></li>
      </ul>
    </div>
    <div id="imageHolder"></div>
  </div>
  <div id="imageArea"><img src="images/quote1.png" width="300" height="100" alt=""/></div>
  <div id="contentArea">
    <div id="ie-test-loginArea">
      <ul id="boxLinks-loginArea" class="group-loginArea">
           <li><a href="#box1">Join Us</a></li>
           <li><a href="#box2">Client Registration</a></li>
           <li><a href="#box3">Candidate Registration</a></li>
           <li><a href="#box4">Login</a></li>
      </ul>
      <div id="box-loginArea">
        <div id="box1" class="box1-loginArea"><h1>Why Us?</h1><br>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<div id="contentImages"> 
     <div id="contentImage1"><img src="images/picture2.jpg" width="290" height="200" alt=""/>
        </div>
     <div id="contentImage2"><img src="images/picture1.png" width="290" height="200" alt=""/> 
        </div>
        <div id="contentImage3"><img src="images/picture3.jpg" width="290" height="200" alt=""/> 
        </div>
    </div>
    <br><br>
<h4>We are able to exceed our clients’ expectations through:</h4>
    <p>As a result of our exceptionally high-quality service, we hold preferred supplier status throughout the UK with various local authorities, private and not-for-profit organisations. Our unrivalled understanding of the social care sector, developed over 25 years and supported by sophisticated IT systems, enables us to source the best health and social care staff.</p> <div id="expectations"> 
     <div id="expectationsList1">
     <ul class="list">
     <h4>Quality</h4>
<li>Quality candidates, guaranteed</li>
<li>A tailored approach</li>
<li>Robust recruitment process</li>
<li>Unique matching system</li>
<li>Outstanding placement support</li>
       </ul>
        </div>
     <div id="expectationsList2"><ul class="list">
     <h4>Value</h4>
<li>Quality candidates, guaranteed</li>
<li>A tailored approach</li>
<li>Robust recruitment process</li>
<li>Unique matching system</li>
<li>Outstanding placement support</li>
       </ul> 
        </div>
        <div id="expectationsList3"><ul class="list">
        <h4>Policy</h4>
<li>Quality candidates, guaranteed</li>
<li>A tailored approach</li>
<li>Robust recruitment process</li>
<li>Unique matching system</li>
<li>Outstanding placement support</li>
       </ul>
        </div>
    </div> 
    <p>Should you wish to discuss our Services further, our team is always available to respond to your call or email. Please see the <a href="#">Contact</a> area of this site for details.</p>
    <!--[if IE]><b>.</b><![endif]--></div>
        <div id="box2" class="box1-loginArea"> <form name="clientReg" method="post" action="InsertClient.php "class="register">
       
            <h1>Client Registration Form</h1>
            <fieldset class="row1">
                <p>
                    <label>Company Name
                    </label>
                    <input type="text" id="cmpyName" name="cmpyName"class="long"/>
                </p>
                                <p>
                    <label>First Name *
                    </label>
                    <input type="text" id="fname" name="fname" class="long"/>
                </p>
                                <p>
                    <label>Surname *
                    </label>
                    <input type="text" id="lname" name="lname"class="long"/>
                </p>
                <p>
                    <label>Address *
                    </label>
                    <input type="text" id="address" name="address" class="long"maxlength="20"/>
                </p>
                <p>
                    <label>Postcode *
                    </label>
                    <input type="text" id="postcode" name="postcode"/>
                </p>
               <p>
                    <label>Email *
                    </label>
                    <input type="text" id="email" name="email" maxlength="10"/>
                </p>
               <p>
                    <label>Contact Number*
                    </label>
                    <input type="text" id="cntNumber" name="cntNumber"maxlength="10"/>
                </p>
              <p>
                    <label>Description of Service*
                    </label>
                <textarea type="text" id="serviceDes" name="serviceDes"maxlength="300" class="long"></textarea>
                </p>
                <p>
                    <label class="optional">Website
                    </label>
                    <input class="long" type="text" id="website" name="website" value="http://"/>

                </p>
            </fieldset>
            <fieldset class="row4">
              <h4>Helpful Information</h4>
                    <p>Here comes some explaining text what it means to join. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
            </fieldset>
            <div><button class="button">Register &raquo;</button></div> 
        </form> <!--[if IE]><b>.</b><![endif]--></div>
        <div id="box3" class="box1-loginArea"> <form action="" class="register">
            <h1>Candidate Registration Form</h1>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                              <p>
                    <label>Ttile *
                    </label>
                    <select>
                        <option>
                        </option>
                        <option value="1">Mr</option>
                    </select>
                </p>
                <p>
                    <label>First Name *
                    </label>
                    <input type="text" class="long"/>
                </p>
              <p>
                    <label>Last Name *
                    </label>
                    <input type="text" class="long"/>
                </p>
              <p>
                    <label>Address *
                    </label>
                    <input type="text" class="long"/>
                </p>
              <p>
                    <label>City *
                    </label>
                                        <select>
                        <option>
                        </option>
                        <option value="1">London</option>
                    </select>
                </p>
              <p>
                    <label>PostCode *
                    </label>
                    <input type="text" />
                </p>
                <p>
                    <label>Mobile No. *
                    </label>
                    <input type="text" maxlength="10"/>
                 </p>
               <p>
                    <label class="optional">Home No.
                    </label>
                    <input type="text" maxlength="10"/>
                 </p>
                  <p>
                    <label>Email *
                    </label>
                    <input type="text" class="long"/>
                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender *</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Male</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Female</label>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                    <select class="date">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select>
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input class="year" type="text" size="4" maxlength="4"/>e.g 1976
                </p>
                <p>
                    <label>Nationality *
                    </label>
                    <select>
                        <option value="0">
                        </option>
                        <option value="1">British
                        </option>
                    </select>
                </p>
              <p>
                   <label >Language(s)
                    </label>
                    <input type="text"/>e.g. English, Swahili)

                </p>
              <p>
                   <label >NI Number *
                    </label>
                    <input type="text" maxlength="10"/> e.g. JG121316A
                </p>
              <p>
                   <label >Upload a file *
                    </label>
                    <input type="file" class="long"/>
                </p>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Conditions
                </legend>
              <p>Here comes some explaining text, sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
            </fieldset>
            <div><button class="button">Register &raquo;</button></div>
        </form><!--[if IE]><b>.</b><![endif]--></div>
        <div id="box4" class="box1-loginArea"><form action="" class="register" method="post" name="loginForm" id="loginForm">
            <?php
                
            if(isset($_POST['loginBtn'])){
                $email = $_POST['loginEmail'];
                $password = $_POST['loginPassword'];
                $fetch = userObjectByEmail($email);
                 
                
                
                 if (isValidEmail($email) == false){
                 showErrorMsg("Email is not valid, please try again.");
                 } else if (md5($password) != $fetch->Password){
                 showErrorMsg("Password is incorrect");
                 } else {
                     $_SESSION['UserID'] = $fetch->UserID;
                     
                     if ($fetch->AccountType == admin){
                         echo "<script type=\"text/javascript\">window.location='admin.php'</script>";     
                     } else {
                         echo "<script type=\"text/javascript\">window.location='profile.php'</script>";
                     }  
                 }
            }
            ?>
            <h1>Existing Users</h1>
            <fieldset class="row1">
                <legend>Login Details
                </legend>
                <p>
                    <label>Email *
                    </label>
                    <input type="text" placeholder="Email" class="long" name="loginEmail" id="loginEmail">
                </p>
                <p>
                    <label>Password*
                    </label>
                    <input type="password" placeholder="Password" name="loginPassword" id="loginPassword">
              </p>
            </fieldset>
      <p for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</p>
                  <div><input type="submit" class="button" value="Login" name="loginBtn" id="loginBtn" />
                      <!--<button class="button" >Login &raquo;</button>--></div>
      
    <p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>    
    </form><!--[if IE]><b>.</b><![endif]--></div>
      </div>
    </div>
  </div>
  <div id="footer">Website created and developed by Lydia Macharia for CrozierV Ltd 2014</div>
</div>
</body>
</html>