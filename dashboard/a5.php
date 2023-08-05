<?php
include "../conn.php";



session_start();

if (!isset($_SESSION['moblie'])) {
 
  header("Location: ../login/login.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>B | Dashboard</title>
    <link rel="icon" href="#" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />

    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">



    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="index.html"><img src="" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            

            <li class="">
                <a class="" href="../index.php" aria-expanded="false">
                    <!-- <div class="icon_menu">
                        <img src="img/menu-icon/2.svg" alt="">
                    </div> -->
                    <span>Home</span>
                </a>
              
            </li>
            
                
        </ul>
    </nav>


    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid p-0 ">
                <div class="row ">
                
                <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30 QA_section">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">VIJAYAWADA TOTAL BLOOD UNITS</h3>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A+</p>
                                                    <h3><span class="counter">161</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A-</p>
                                                    <h3><span class="counter">85</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B+</p>
                                                    <h3><span class="counter">136</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>
                                         

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B-</p>
                                                    <h3><span class="counter">66</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn yellow_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB+</p>
                                                    <h3><span class="counter">104</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                               
                                            </div>

                                          

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB-</p>
                                                    <h3><span class="counter">45</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O+</p>
                                                    <h3><span class="counter">173</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>


                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O-</p>
                                                    <h3><span class="counter">32</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn violate_btn">Units</a>
                                                
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                    
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30 QA_section">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <a href="https://www.google.com/maps/dir//Vijaya+Sri+Blood+Bank,+%2329-19-27+opp+:andhra+bank+%26HDFC+bank+ATMS,+Dornakal+Rd,+Suryaraopeta,+Andhra+Pradesh+520002/@16.5128817,80.6006294,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a35fab1403de667:0xabfb88ac4f59cfc3!2m2!1d80.635649!2d16.5128846
" target="_blank"><h3 class="m-0">Vijaya Sri Blood Bank </h3></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">


                                        
                                        <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A+</p>
                                                    <h3><span class="counter">92</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A-</p>
                                                    <h3><span class="counter">56</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B+</p>
                                                    <h3><span class="counter">88</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>
                                         

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B-</p>
                                                    <h3><span class="counter">42</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn yellow_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB+</p>
                                                    <h3><span class="counter">72</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                               
                                            </div>

                                          

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB-</p>
                                                    <h3><span class="counter">33</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O+</p>
                                                    <h3><span class="counter">96</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>


                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O-</p>
                                                    <h3><span class="counter">12</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn violate_btn">Units</a>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30 QA_section">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <a href="https://www.google.com/maps/dir//St+Ann's+Hospital+Blood+Bank,+GJ3J%2BXJV,+American+Hospital+Rd,+Punammathota,+Labbipet,+Vijayawada,+Andhra+Pradesh+520002/@16.5049884,80.5965234,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3a35f0076b791c77:0xf5a462e51e51fd2b!2m2!1d80.6315218!2d16.5050011
" target="_blank"><h3 class="m-0">Saint Ann's Hospital Blood Bank</h3></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">


                                        
                                        <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A+</p>
                                                    <h3><span class="counter">69</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A-</p>
                                                    <h3><span class="counter">29</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B+</p>
                                                    <h3><span class="counter">48</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>
                                         

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B-</p>
                                                    <h3><span class="counter">24</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn yellow_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB+</p>
                                                    <h3><span class="counter">32</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                               
                                            </div>

                                          

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB-</p>
                                                    <h3><span class="counter">12</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O+</p>
                                                    <h3><span class="counter">77</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>


                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O-</p>
                                                    <h3><span class="counter">20</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn violate_btn">Units</a>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      




                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    
    </section>


   

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
<i class="ti-angle-up"></i>
</a>
    </div>

    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>
    <script src="js/chart.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/am_chart/amcharts.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>
    <script src="vendors/chart_am/core.js"></script>
    <script src="vendors/chart_am/charts.js"></script>
    <script src="vendors/chart_am/animated.js"></script>
    <script src="vendors/chart_am/kelly.js"></script>
    <script src="vendors/chart_am/chart-custom.js"></script>

    <script src="js/custom.js"></script>
</body>

</html>