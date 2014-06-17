<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Job Allocation</title>
<link rel="stylesheet" href="css/admin_css.css" type="text/css">
<link rel="stylesheet" href="css/page_layout.css" type="text/css">
<link rel="stylesheet" href="css/topBarStyle.css" type="text/css">
<link rel="stylesheet" href="css/dataTable.css" type="text/css">
    <link rel="stylesheet" href="css/personalDetails.css" type="text/css"> 

</head>

<body>
<div id="container">
  <div id="header">
    <div id="logo"></div>
<!--start nav -->
  <div id="topBar">
<div id="top-bar">
 <ul id="nav" class="fl">
	
				<li class="v-sep"><a href="#" class="round button dark ic-left-arrow image-left">Go to website</a></li>
				<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Logged in as <strong>Manager</strong></a>
					<ul>
						<li><a href="#">My Profile</a></li>
						<li><a href="#">User Settings</a></li>
						<li><a href="#">User Search</a></li>
						<li><a href="#">Vacancy Search</a></li>
                        <li><a href="#">System Back-up</a></li>
                        <li><a href="#">System-Restore</a></li>
					</ul> 
				</li>
				<li><a href="#" class="round button dark menu-logoff image-left">Log out</a></li>
				
			</ul> 
    </div>
    </div>
      <!-- end nav -->
  <div id="imageHolder">Area for Calender</div>
  </div>
  <div id="imageArea">
    <div id="ie-test">
      <ul id="boxLinks-topTabs" class="group2">
        <li><a href="#box15">Vacancy Details</a></li>
        <li><a href="#box16">Company Details</a></li>
        <li><a href="#box17">Applicants</a></li>
      </ul>
      <div id="box-topTabs">
        <div id="box15" class="box1-topTabs"> <div class="tableHeading">Vacancy Details</div>
            <div id="profileArea">
     <table id="personalInfo">
                     <tr>
              <th>Vacancy ID:</th>
                <td>data</td>
       </tr>
            <tr>
              <th>Vacancy Title:</th>
                <td>data</td>
       </tr>
       <tr>
         <th>Description:</th>
                <td colspan="3">data</td>
           </tr>
         <tr>
             <th>Service:</th>
             <td>data</td>
             <th >Type:</th>
             <td>data</td>
         </tr>
         <tr>
             <th>Location:</th>
             <td colspan="3">data</td>
         </tr>
         <tr>
             <th>Start Date:</th>
             <td>data</td>
             <th>Hours:</th>
             <td>data</td>
         </tr>
         <tr>
             <th>Salary:</th>
             <td>data</td>
             <th>Positions:</th>
             <td>data</td>
         </tr>
       </table>
                         <div class="tableHeading">Employee Allocated</div>

                <table id="personalInfo">
                                    <tr>
                                        <th>Employee 1:</th>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <th> Employee 2:</th>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <th>Employee 3:</th>
                                        <td>data</td>
                                    </tr>
                                    </table>
    </div><!--[if IE]><b>.</b><![endif]--></div>
          <div id="box16" class="box1-topTabs"> <div class="tableHeading">Company Details</div>
                          <div id="profileArea">
     <table id="personalInfo">
         <tr>
              <td rowspan="6" class="picture">Picture</td>
              <th>Client Name:</th>
                <td>data</td>
       </tr>
            <tr>
              <th>Description:</th>
                <td colspan="3">data</td>
       </tr>
       <tr>
         <th>Address:</th>
                <td colspan="3">data</td>
           </tr>
         <tr>
             <th>Postcode:</th>
             <td>data</td>
         </tr>
                  <tr>
             <th>Sector:</th>
             <td>data</td>
         </tr>
         <tr>
             <th>Email:</th>
             <td colspan="3">data</td>
         </tr>
         <tr>
             <th>Tel 1:</th>
             <td>data</td>
         </tr>
         <tr>
             <th>Tel 2:</th>
             <td>data</td>
         </tr>
                  <tr>
             <th>Tel 3:</th>
             <td>data</td>
         </tr>
       </table>
    </div><!--[if IE]><b>.</b><![endif]--></div>
        <div id="box17" class="box1-topTabs">Applicants
             <div class="datagrid">
          <table id="dataTable">
      <thead>
              <tr>
        <th>header</th>
        <th>header</th>
        <th>header</th>
        <th>header</th>
        <th>header</th>
      </tr>
          </thead>
            <tr>
        <td>data</td>
        <td>data</td>
        <td>data</td>
        <td>data</td>
        <td>data</td>
      </tr>
            <tr>
        <td>data</td>
        <td>data</td>
        <td>data</td>
        <td>data</td>
        <td>data</td>
      </tr>
          </table>
       </div><!--[if IE]><b>.</b><![endif]--></div>
      </div>
    </div>
  </div>
  <div id="buttonArea">
    <ul>
      <li><a href="#">Edit</a></li>
      <li><a href="#">Add</a></li>
      <li><a href="#">Save</a></li>
      <li><a href="#">Cancel</a></li>
    </ul>
  </div>
  <div id="contentArea">
    <div id="ie-test">
      <ul id="boxLinks-bottomTabs" class="group3">
           <li><a href="#box18">Unpublished Vacancies</a></li>
           <li><a href="#box19">Published Vacancies</a></li>
           <li><a href="#box20">Help</a></li>
      </ul>
      <div id="box-bottomTabs">
        <div id="box18" class="box1-bottomTabs"> Unpublished Vacancies            <div id="searchArea">
  <form name="currentVacanciesForm">
      <select name="locationMenu">
        <option value="#" selected>All locations</option>
        <option value="#">North London</option>
        <option value="#">South London</option>
        <option value="#">East London</option>
        <option value="#">West London</option>
      </select>
      <select name="sectorMenu">
        <option value="#" selected>All sectors</option>
        <option value="#">Care and Support</option>
        <option value="#">General Nurse</option>
        <option value="#">Mental Health Nursen</option>
        <option value="#">Midwives</option>
        <option value="#">Social Care</option>
      </select>
   <input type="button" name="Submit" value="Go" 
onClick="window.open(currentVacanciesForm.locationMenu.options[currentVacanciesForm.locationMenu.selectedIndex].value);
return false;">
     </form></div>
            <div class="datagrid">
          <table id="dataTable">
            <thead>
              <tr>
                <th>header</th>
                <th>header</th>
                <th>header</th>
                <th>header</th>
              </tr>
            </thead>
            <tfoot>
             <tr>
               <td colspan="4">
                 <div id="paging">
                    <ul>
                      <li><a href="#"><span>Previous</span></a></li>
                      <li><a href="#" class="active"><span>1</span></a></li>
                      <li><a href="#"><span>2</span></a></li>
                      <li><a href="#"><span>3</span></a></li>
                      <li><a href="#"><span>4</span></a></li>
                      <li><a href="#"><span>5</span></a></li>
                      <li><a href="#"><span>Next</span></a></li>
                    </ul>
                 </div>
               </td>
             </tr>
            </tfoot>
            <tbody>
             <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
             </tr>
             <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
             </tr>
            </tbody>
          </table>
       </div><!--[if IE]><b>.</b><![endif]--></div>
        <div id="box19" class="box1-bottomTabs"> Published Vacancies            <div id="searchArea">
  <form name="currentVacanciesForm">
      <select name="locationMenu">
        <option value="#" selected>All locations</option>
        <option value="#">North London</option>
        <option value="#">South London</option>
        <option value="#">East London</option>
        <option value="#">West London</option>
      </select>
      <select name="sectorMenu">
        <option value="#" selected>All sectors</option>
        <option value="#">Care and Support</option>
        <option value="#">General Nurse</option>
        <option value="#">Mental Health Nursen</option>
        <option value="#">Midwives</option>
        <option value="#">Social Care</option>
      </select>
   <input type="button" name="Submit" value="Go" 
onClick="window.open(currentVacanciesForm.locationMenu.options[currentVacanciesForm.locationMenu.selectedIndex].value);
return false;">
     </form></div>
            <div class="datagrid">
          <table id="dataTable">
            <thead>
              <tr>
                <th>header</th>
                <th>header</th>
                <th>header</th>
                <th>header</th>
              </tr>
            </thead>
            <tfoot>
             <tr>
               <td colspan="4">
                 <div id="paging">
                    <ul>
                      <li><a href="#"><span>Previous</span></a></li>
                      <li><a href="#" class="active"><span>1</span></a></li>
                      <li><a href="#"><span>2</span></a></li>
                      <li><a href="#"><span>3</span></a></li>
                      <li><a href="#"><span>4</span></a></li>
                      <li><a href="#"><span>5</span></a></li>
                      <li><a href="#"><span>Next</span></a></li>
                    </ul>
                 </div>
               </td>
             </tr>
            </tfoot>
            <tbody>
             <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
             </tr>
             <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
             </tr>
             <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
             </tr>
            </tbody>
          </table>
       </div><!--[if IE]><b>.</b><![endif]--></div>
        <div id="box20" class="box1-bottomTabs"> Help<!--[if IE]><b>.</b><![endif]--></div>
      </div>
    </div>
  </div>
  <div id="footer">Footer</div>
</div>
</body>
</html>