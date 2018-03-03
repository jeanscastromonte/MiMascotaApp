<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<!--================================================================================
Item Name: Materialize - Material Design Admin Template
Version: 4.0
Author: PIXINVENT
Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================ -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Demo Reunión</title>
    <!-- Favicons-->
    <link rel="icon" href="assets/material-design/images/sider-gerdau/ico.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="assets/material-design/images/sider-gerdau/ico.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.html">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="assets/material-design/css/themes/collapsible-menu/materialize.css" type="text/css" rel="stylesheet">
    <!-- <link href="assets/material-design/css/themes/collapsible-menu/materialize.min.css" type="text/css" rel="stylesheet"> -->
    <link href="assets/material-design/css/themes/collapsible-menu/style.css" type="text/css" rel="stylesheet">
    <link href="assets/material-design/css/themes/collapsible-menu/materialize.clockpicker.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="assets/material-design/css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="assets/material-design/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="assets/material-design/vendors/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="assets/material-design/vendors/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">
    <link href="assets/material-design/vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
    <!--dropify-->
    <link href="assets/material-design/vendors/dropify/css/dropify.min.css" type="text/css" rel="stylesheet">

    <!-- My css -->
    <link href="assets/mimascota-style/mr-appweb.min.css" type="text/css" rel="stylesheet">
</head>
<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color cyan gradient-shadow">
                <div class="nav-wrapper">
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                                <i class="material-icons">settings_overscan</i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                                <i class="material-icons">
                                    notifications_none
                                    <small class="notification-badge">5</small>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                                <span class="avatar-status avatar-online">
                                    <img src="assets/material-design/images/avatar/avatar-7.png" alt="avatar">
                                    <i></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                        <li>
                            <h6>
                                NOTIFICATIONS
                                <span class="new badge">5</span>
                            </h6>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!
                            </a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle red small">stars</span> Completed the task
                            </a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated
                            </a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started
                            </a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report
                            </a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown -->
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">face</i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">settings</i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">live_help</i> Help
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">lock_outline</i> Lock
                            </a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">keyboard_tab</i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">
                <div class="brand-sidebar">
                    <h1 class="logo-wrapper">
                        <a href="/" class="brand-logo">
                        	<!-- <i class="material-icons">pets</i> -->
                            <!-- <img src="assets/mimascota/images/logo-mimascota.png" class="responsive-img" alt="Logo" style="height: 40px;"> -->
                            <span class="logo-text hide-on-med-and-down">
                            	<img src="assets/mimascota/images/logo-mimascota.png" class="responsive-img" alt="Logo" style="height: 40px;">
                            </span>
                        </a>
                        <a href="javascript:void(0);" class="navbar-toggler">
                            <i class="material-icons">radio_button_checked</i>
                        </a>
                    </h1>
                </div>
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li>
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span class="nav-text">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="material-icons">today</i>
                            <span class="nav-text">Calendario</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="material-icons">person</i>
                            <span class="nav-text">Cliente</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="material-icons">pets</i>
                            <span class="nav-text">Mascota</span>
                        </a>
                    </li>
                    <li class="no-padding">
                      <ul class="collapsible" data-collapsible="accordion">
                        <li class="bold">
                          <a class="collapsible-header waves-effect waves-cyan">
                            <i class="material-icons">store</i>
                            <span class="nav-text">Servicios</span>
                          </a>
                          <div class="collapsible-body" style="padding-left: 20px;">
                            <ul>
                              <li>
                                <a href="">
                                  <i class="material-icons">keyboard_arrow_right</i>
                                  <span>Spa</span>
                                </a>
                              </li>
                              <li>
                                <a href="">
                                  <i class="material-icons">keyboard_arrow_right</i>
                                  <span>Hospedaje</span>
                                </a>
                              </li>
                              <li>
                                <a href="">
                                  <i class="material-icons">keyboard_arrow_right</i>
                                  <span>Traslado</span>
                                </a>
                              </li>
                              <li>
                                <a href="">
                                  <i class="material-icons">keyboard_arrow_right</i>
                                  <span>Cotización</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li> 
                    <li class="no-padding">
                    	<ul class="collapsible" data-collapsible="accordion">
                    		<li class="bold">
                    			<a class="collapsible-header waves-effect waves-cyan">
                    				<i class="material-icons">settings</i>
                    				<span class="nav-text">Mantenimiento</span>
                    			</a>
                    			<div class="collapsible-body" style="padding-left: 20px;">
                    				<ul>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Sucursal</span>
                    						</a>
                    					</li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Cargo de personal</span>
                    						</a>
                    					</li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Productos</span>
                    						</a>
                    					</li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Enfermedades</span>
                    						</a>
                    					</li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Spa</span>
                    						</a>
                    					</li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Servicios de spa</span>
                    						</a>
                    					</li>
                    					<li class="li-hover"><div class="divider"></div></li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Promociones</span>
                    						</a>
                    					</li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Servicio</span>
                    						</a>
                    					</li>
										<li class="li-hover"><div class="divider"></div></li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Especie</span>
                    						</a>
                    					</li>
                    					<li>
                    						<a href="">
                    							<i class="material-icons">keyboard_arrow_right</i>
                    							<span>Raza</span>
                    						</a>
                    					</li>
                    				</ul>
                    			</div>
                    		</li>
                    	</ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="material-icons">insert_chart</i>
                            <span class="nav-text">Reporte</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="material-icons">keyboard_return</i>
                            <span class="nav-text">Cerrar sesión</span>
                        </a>
                    </li>                  
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only orange gradient-shadow">
                    <i class="material-icons">menu</i>
                </a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START CONTENT -->
            <section id="content">
               
			<!-- CONTENIDO -->

            </section>
            <!-- END CONTENT -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 border-bottom-1 mt-5">
                                <ul class="tabs">
                                    <li class="tab col s4">
                                        <a href="#activity" class="active">
                                            <span class="material-icons">graphic_eq</span>
                                        </a>
                                    </li>
                                    <li class="tab col s4">
                                        <a href="#chatapp">
                                            <span class="material-icons">face</span>
                                        </a>
                                    </li>
                                    <li class="tab col s4">
                                        <a href="#settings">
                                            <span class="material-icons">settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="chatapp" class="col s12">
                                <div class="collection border-none">
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-1.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Elizabeth Elliott </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                                        <span class="line-height-0">Mary Adams </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Caleb Richards </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-4.png" alt="" class="circle cyan">
                                        <span class="line-height-0">June Lane </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-5.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Edward Fletcher </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-6.png" alt="" class="circle deep-orange accent-2">
                                        <span class="line-height-0">Crystal Bates </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-7.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Nathan Watts </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-8.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Willard Wood </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Ronnie Ellis </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-1.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Gwendolyn Wood </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-2.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Daniel Russell </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Sarah Graves </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-4.png" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Andrew Hoffman </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="assets/material-design/images/avatar/avatar-5.png" alt="" class="circle cyan">
                                        <span class="line-height-0">Camila Lynch </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                                    </a>
                                </div>
                            </div>
                            <div id="activity" class="col s12">
                                <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                                <div class="activity">
                                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#" class="deep-purple-text medium-small">just now</a>
                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                            <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="green-text medium-small">5 Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="amber-text medium-small">1 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list row">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                            <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="brown-text medium-small">1 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list row">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="grey-text medium-small">1 Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </aside>
            <!-- END RIGHT SIDEBAR NAV-->
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="assets/material-design/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="assets/material-design/js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="assets/material-design/vendors/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="assets/material-design/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartjs -->
    <script type="text/javascript" src="assets/material-design/vendors/chartjs/chart.min.js"></script>
    <!-- dropify -->
    <script type="text/javascript" src="assets/material-design/vendors/dropify/js/dropify.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="assets/material-design/js/plugins.js"></script>
    <!-- custom-script.js - Add your own theme custom JS -->
    <script type="text/javascript" src="assets/material-design/js/custom-script.js"></script>
    <script type="text/javascript" src="assets/material-design/js/scripts/dashboard-ecommerce.js"></script>
    <script type="text/javascript" src="assets/material-design/js/scripts/materialize.clockpicker.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="assets/material-design/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="assets/material-design/js/scripts/data-tables.js"></script>

    <!-- My scripts -->
    <script type="text/javascript" src="~/Scripts/helper.js"></script>
</body>
</html>