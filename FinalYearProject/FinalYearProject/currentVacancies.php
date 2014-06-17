<!doctype html>
<html>
<head>
    <meta charset="utf-8">
        <title>Current Vacancies</title>
        <link rel="stylesheet" href="css/currentVacancyCss.css" type="text/css">
        <link rel="stylesheet" href="css/topBarStyle.css" type="text/css">
        <link rel="stylesheet" href="css/page_layout.css" type="text/css">
        <link rel="stylesheet" href="css/dataTable.css" type="text/css">
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
				<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Logged in as <strong>admin</strong></a>
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
        <li><a href="#box5">Vacancy Details</a></li>
        <li><a href="#box6">Help</a></li>
      </ul>
      <div id="box-topTabs">
        <div id="box5" class="box1-topTabs">Vacancy Details<!--[if IE]><b>.</b><![endif]--></div>
        <div id="box6" class="box1-topTabs">Help<!--[if IE]><b>.</b><![endif]--></div>
      </div>
    </div>
  </div>
  
  <div id="contentArea">
    <div id="ie-test">
      <ul id="boxLinks-bottomTabs" class="group3">
           <li><a href="#box7">Current Vacancies</a></li>
      </ul>
      <div id="box-bottomTabs">
        <div id="box7" class="box1-bottomTabs"><div class="tableHeading">Current Vacancies</div>                    
            <div id="searchArea">
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
      </div>
    </div>
  </div>
  <div id="footer">Footer</div>
</div>
</body>
</html>