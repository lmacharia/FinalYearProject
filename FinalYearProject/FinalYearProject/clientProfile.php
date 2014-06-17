<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Client Profile</title>
        <link rel="stylesheet" href="css/profile_css.css" type="text/css">
        <link rel="stylesheet" href="css/topBarStyle.css" type="text/css">
        <link rel="stylesheet" href="css/page_layout.css" type="text/css">
        <link rel="stylesheet" href="css/personalDetails.css" type="text/css">
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
                            <li class="v-sep"><a href="#" class="round button dark menu-user image-left">Logged in as <strong>User</strong></a>
                                <ul>
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="#">Vacancy Search</a></li>
                                    <li><a href="#">Timesheet</a></li>
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
                    <ul id="boxLinks-topTabs" class="group">
                        <li><a href="#box1">Personal Details</a></li>
                    </ul>
                    <div id="box-topTabs">
                        <div id="box1" class="box1-topTabs">
                            <div id="profileArea">
                                <table id="personalInfo">
                                    <tr>
                                        <td colspan="5" class="tableHeading">Personal Information</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="picture">Picture</td>
                                        <th>Client Name:</th>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <th>Service Description:</th>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <th >Address:</th>
                                        <td colspan="3">data</td>
                                    </tr>
                                    <tr>
                                        <th>City:</th>
                                        </tr>
                                    <tr>
                                        <th>Postcode:</th>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td colspan="3">data</td>
                                    </tr>
                                    <tr>
                                        <th>Home No.:</th>
                                        <td>data</td>
                                        </tr>
                                    <tr>
                                        <th>Mobile No.:</th>
                                        <td>data</td>
                                    </tr>
                                                                        <tr>
                                        <th>Other No.:</th>
                                        <td>data</td>
                                    </tr>
                                    
                                </table>
                            </div><!--[if IE]><b>.</b><![endif]-->
                        </div>
                    </div>
                    <div id="contentArea">
    <div id="ie-test">
      <ul id="boxLinks-bottomTabs" class="group">
           <li><a href="#box4">Recent Updates</a></li>
           <li><a href="#box5">My Current Shifts</a></li>
           <li><a href="#box6">My Previous Shifts</a></li>
       </ul>
      <div id="box-bottomTabs">
        <div id="box4" class="box1-bottomTabs"> Recent Updates
          <!--[if IE]><b>.</b><![endif]-->
        </div>
        <div id="box5" class="box1-bottomTabs"> My Current Shifts
                    <div id='search-box'>
  <form action='/search' id='search-form' method='get' target='_top'>
    <input id='search-text' name='q' placeholder='Search...' type='text'/>
    <button id='search-button' type='submit'><span>Search</span></button>
  </form>
</div>
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
             <tr class="alt">
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
             </tr>
            </tbody>
          </table>
       </div>
          <!--[if IE]><b>.</b><![endif]-->
        </div>
        <div id="box6" class="box1-bottomTabs"> My Previous Shifts
                    <div id='search-box'>
  <form action='/search' id='search-form' method='get' target='_top'>
    <input id='search-text' name='q' placeholder='Search...' type='text'/>
    <button id='search-button' type='submit'><span>Search</span></button>
  </form>
</div>
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
             <tr class="alt">
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
             </tr>
            </tbody>
          </table>
       </div>
          <!--[if IE]><b>.</b><![endif]-->
        </div>
      </div>
    </div>
  </div>
  <div id="footer">Footer</div>
</div>
</body>
</html>