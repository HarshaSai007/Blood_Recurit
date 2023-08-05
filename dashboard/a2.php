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
                                        <h3 class="m-0">PALAKOL TOTAL BLOOD UNITS</h3>
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
                                                    <h3><span class="counter">110</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A-</p>
                                                    <h3><span class="counter">75</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B+</p>
                                                    <h3><span class="counter">140</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>
                                         

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B-</p>
                                                    <h3><span class="counter">48</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn yellow_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB+</p>
                                                    <h3><span class="counter">78</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                               
                                            </div>

                                          

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB-</p>
                                                    <h3><span class="counter">32</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O+</p>
                                                    <h3><span class="counter">160</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>


                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O-</p>
                                                    <h3><span class="counter">40</span> </h3>
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
                                        <a href="https://www.google.com/maps/dir//Palakol+Voluntary+Blood+Bank,+Saturday+Market+Road,+Palakollu,+Andhra+Pradesh/@16.5138743,81.6918386,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a37dbec9537d7a5:0xbb02d3dab6c84859!2m2!1d81.7268582!2d16.5138772
" target="_blank"><h3 class="m-0"> Palakol Voluntary Blood Bank </h3></a>
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
                                                    <h3><span class="counter">50</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A-</p>
                                                    <h3><span class="counter">35</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B+</p>
                                                    <h3><span class="counter">60</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>
                                         

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B-</p>
                                                    <h3><span class="counter">18</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn yellow_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB+</p>
                                                    <h3><span class="counter">33</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                               
                                            </div>

                                          

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB-</p>
                                                    <h3><span class="counter">10</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O+</p>
                                                    <h3><span class="counter">70</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>


                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O-</p>
                                                    <h3><span class="counter">15</span> </h3>
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
                                        <a href="https://www.google.com/maps/dir//Apadbandhu+voluntary+blood+center,+Bypass+Road,+Brodipet,+Palakollu,+Andhra+Pradesh/@16.5246219,81.6990946,13z/data=!3m1!5s0x3a4a754b1d5717bf:0xda7cc24ec951f9fa!4m8!4m7!1m0!1m5!1m1!1s0x3a37db6ab3b2fdcd:0x3bfd34651a910a3b!2m2!1d81.7341152!2d16.5246281
" target="_blank"><h3 class="m-0">Apadbandhu Voluntary Blood Center</h3></a>
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
                                                    <h3><span class="counter">60</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>A-</p>
                                                    <h3><span class="counter">40</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B+</p>
                                                    <h3><span class="counter">80</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn">Units</a>
                                                
                                            </div>
                                         

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>B-</p>
                                                    <h3><span class="counter">30</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn yellow_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB+</p>
                                                    <h3><span class="counter">45</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                               
                                            </div>

                                          

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>AB-</p>
                                                    <h3><span class="counter">22</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>

                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O+</p>
                                                    <h3><span class="counter">90</span> </h3>
                                                </div>
                                                <a href="#" class="notification_btn green_btn">Units</a>
                                                
                                            </div>


                                            <div class="single_quick_activity">
                                                <div class="count_content">
                                                    <p>O-</p>
                                                    <h3><span class="counter">25</span> </h3>
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