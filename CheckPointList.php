<?php
// Initialize the session
session_start();
 
?>
<!Doctype html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Checkpoint List</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style3.css">
         <link rel="stylesheet" href="CheckPointList.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <!-- Font Awesome JS -->

        <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        
        

    </head>

    <body>

    <!-- Bootstrap NavBar -->
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-custom">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="C:/Users/hp/Desktop/Homeguards_img.jpeg" width="54" height="54" style="border-radius: 50%; box-shadow: 4px 4px 5px grey;" class="d-inline-block align-top" alt="">
            <span class="sm title-web" >&nbsp;&nbsp;<b>RAJASTHAN HOME GUARDS TRAINING CENTER, BHILWARA</b></span>
        </a>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active home">
                    <a class="nav-link" href="#top"><i class="fa fa-home" style="font-size: 19px;" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav><!-- NavBar END -->

    <!----------------- Body ------------>
    <!-- Bootstrap row for Sidebar container -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-sm-block">
            <!-- d-* hiddens the Sidebar in smaller devices. Its items can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group">
                <a href="#top" data-toggle="sidebar-colapse" class="bg-custom list-group-item list-group-item-action d-flex align-items-center">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                        <span id="collapse-text" class="menu-collapsed"></span>
                    </div>
                </a>
                <!-- Separator with title MAIN MENU -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN &nbsp; MENU</small>
                </li>
                <!-- /END Separator -->
                <!-- Menu with submenu -->
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/usercheck3.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Attendance Record</span>
                    </div>
                </a>
                <a href="volunteers.php" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/Vol_list.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Volunteers List</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/checkpoint2.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Checkpoints</span>
                    </div>
                </a>

                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/Trash.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Trash</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/Profile.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">My Profile</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/directory.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Contact Directory</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/bug.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Bug Report</span>
                    </div>
                </a>
                <a href="#" class="bg-custom list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="mr-0"></span>
                        <img src="C:/Users/hp/Desktop/Logout.png" class="sidebar-img">
                        <span class="menu-collapsed ml-3">Logout</span>
                    </div>
                </a>
            </ul><!-- List Group END-->
        </div><!-- sidebar-container END -->

        <!-- table for Attendance record-->
        <div class="col p-4 d-none d-sm-block">
            <div class="header row checklist">
                <span class="col-6 checklist-1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Checkpoints</b></span>
                <span  class="col-6 checklist-2">
                <button class="button" ><b>Add New Checkpoint</b>  </button>
                </span>        
            </div>

            <div class="container edit">
                <table class="table table-striped table-hover" style="margin-top: 4%;">
                      <thead class="thead-dark">
                        <tr>
                            <th scope="col">SNo.</th>
                            <th scope="col">CHECKPOINT NAME</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">VOLUNTEER'S COUNT</th>
                            <th scope="col">NO. OF ASSIGNED </th>
                            <th scope="col">DATE</th>
                            <th scope="col">SANCTION ID</th>
                            <th scope="col">TIME DURATION</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                        <tr>
                            <td>2</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                        <tr>
                            <td>3</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                        <tr>
                            <td>4</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                        <tr>
                            <td>5</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                       
                        </tr>
                        <tr>
                            <td>6</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                        <tr>
                            <td>7</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                         
                        </tr>
                        <tr>
                            <td>8</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                        <tr>
                            <td>9</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                        <tr>
                            <td>10</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                         <tr>
                            <td>11</td>
                            <th scope="row">Court</th>
                            <td>abc</td>
                            <td>50</td>
                            <td>70</td>
                            <td>08/01/2020</td>
                            <td>27</td>
                            <td></td>
                          
                        </tr>
                       
                      </tbody>
                </table>    
            </div>
        </div> 
    </div><!-- body-row END -->

               <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script defer="" src="CheckPointList.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
        <script>
                // Hide submenus
$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
$('#collapse-icon').addClass('fa fa-times'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('fa fa-times fa fa-bars');
}
        </script>
    </body>
</html> 