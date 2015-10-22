<?php
	 session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Title</title>
  <link rel="icon" href="common/images/header_ico_001.ico" type="image/x-icon">
  <!--Meta-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- For Mobile Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Description">
  <meta name="keywords" content="Keyword">
  <meta name="author" content="Arif Lutfhansah">
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="common/css/font-awesome/css/font-awesome.css">
  <!--Stylesheet-->
  <link href="common/css/base.css" rel="stylesheet" type="text/css" media="all">
  <link href="common/css/parts.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/localbase.css" rel="stylesheet" type="text/css" media="all">
  <!-- jQuery UI -->
  <link href="common/css/jquery/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="common/css/jquery/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="common/css/jquery/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- Bootstrap -->
  <link href="common/css/bootsrap/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <link href="common/css/bootsrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="common/css/bootsrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all">

  <link href="common/css/pace-theme-flash.css" rel="stylesheet" type="text/css"/>
  <link href="common/css/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="common/css/select2.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="common/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="common/css/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="common/css/mapplic.css" rel="stylesheet" type="text/css"/>
  <link href="common/css/rickshaw.min.css" rel="stylesheet" type="text/css"/>
  <link href="common/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
  <link href="common/css/MetroJs.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="common/css/pages-icons.css" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="common/css/pages.css" rel="stylesheet" type="text/css"/>

  <script type="text/javascript">
    window.onload = function()
    {
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
  </script>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-56895490-1']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</head>

<body class="fixed-header  dashboard   windows desktop pace-done sidebar-visible menu-pin">

  <!--========================================================
                            SIDEBAR
  =========================================================-->
  <nav class="page-sidebar" data-pages="sidebar">
    <!-- Slick Button -->
    <div class="sidebar-header-controls clearfix">
        <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i></button>
    </div>

    <!-- Logo -->
    <div class="sidebar-header"> 
      <img src="common/images/sidebar_logo_001.png" alt="logo" class="brand" data-src="common/images/sidebar_logo_001.png" data-src-retina="common/images/sidebar_logo_001.png">
    </div>

    <!-- Sidebar Menu -->
    <div class="sidebar-menu">
      <!-- List LV1 -->
      <ul class="menu-items">
        <li class="m-t-30 open"> 
          <a href="index.html" class="detailed"> <span class="title">Dashboard</span></a> 
          <span class="icon-thumbnail bg-success"><i class="fa fa-home"></i></span> 
        </li>
        <li class=""> 
          <a href="social.html"><span class="title">News</span></a> 
          <span class="icon-thumbnail "><i class="fa fa-newspaper-o"></i></span> 
        </li>
        <li class=""> 
          <a href="calendar.html"><span class="title">Forum</span></a> 
          <span class="icon-thumbnail"><i class="fa fa-comment"></i></span> 
        </li>
        <li class=""> 
          <a href="builder.html"> <span class="title">Event</span> </a> 
          <span class="icon-thumbnail"><i class="fa fa-calendar"></i></i></span> 
        </li>
        <li class=""> 
          <a href="javascript:;"> <span class="title">Member</span> <span class="arrow"></span></a> 
          <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
          <!-- List LV2 -->
          <ul class="sub-menu">
            <li class=""> 
              <a href="form_elements.html">Form Elements</a> 
              <span class="icon-thumbnail">fe</span> 
            </li>
            <li class=""> 
              <a href="form_layouts.html">Form Layouts</a> 
              <span class="icon-thumbnail">fl</span> 
            </li>
            <li class=""> 
              <a href="form_wizard.html">Form Wizard</a> 
              <span class="icon-thumbnail">fw</span> 
            </li>
          </ul>
        </li>
        <li class=""> 
          <a href="javascript:;"><span class="title">Gallery</span> <span class="arrow"></span></a> 
          <span class="icon-thumbnail"><i class="fa fa-camera-retro"></i></span>
          <!-- List LV2 -->
          <ul class="sub-menu">
            <li> 
              <a href="javascript:;">Level 1</a> 
              <span class="icon-thumbnail">L1</span> 
            </li>
            <li> 
              <a href="javascript:;"><span class="title">Level 2</span> <span class="arrow"></span></a> 
              <span class="icon-thumbnail">L2</span>
              <!-- List LV3 -->
              <ul class="sub-menu">
                <li> 
                  <a href="javascript:;">Sub Menu</a> 
                  <span class="icon-thumbnail">Sm</span> 
                </li>
                <li> 
                  <a href="ujavascript:;">Sub Menu</a> 
                  <span class="icon-thumbnail">Sm</span> 
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>

      <div class="clearfix"></div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Copyright &copy 2015<br>Japanese For All Community.<br>INDONESIA.</p>
    </div>
  </nav>

  <!--========================================================
                            MAIN CONTENT
  =========================================================-->
  <div class="page-container">
    <!--Navigation Bar -->
    <div class="header">
      <div class="pull-left full-height visible-sm visible-xs">
        <div class="sm-action-bar"> <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar"> <span class="icon-set menu-hambuger"></span> </a> </div>
      </div>
      <div class="pull-right full-height visible-sm visible-xs">
        <div class="sm-action-bar"> <a href="#" class="btn-link" data-toggle="quickview" data-toggle-element="#quickview"> <span class="icon-set menu-hambuger-plus"></span> </a> </div>
      </div>
      <div class=" pull-left sm-table">
        <div class="header-inner">
          <div class="brand inline"> <img src="common/images/header_logo_001.png" alt="logo" data-src="common/images/header_logo_001.png" data-src-retina="common/images/header_logo_001.png" width="160" height="22"> </div>
          <!-- Notification -->
          <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
            <li class="p-r-15 inline">
              <div class="dropdown"> <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown"> <span class="bubble"></span> </a>
                <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                  <div class="notification-panel">
                    <div class="notification-body scrollable">
                      <div class="notification-item unread clearfix">
                        <div class="heading open"> <a href="#" class="text-complete"> <i class="fa fa-map-marker"></i> <span class="bold">Carrot Design</span> <span class="fs-12 m-l-10">David Nester</span> </a>
                          <div class="pull-right">
                            <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                              <div><i class="fa fa-angle-left"></i> </div>
                            </div>
                            <span class=" time">few sec ago</span> </div>
                          <div class="more-details">
                            <div class="more-details-inner">
                              <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
                                distinguishes between <br>
                                A leader and a follower.”</h5>
                              <p class="small hint-text"> Commented on john Smiths wall. <br>
                                via pages framework. </p>
                            </div>
                          </div>
                        </div>
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read"> <a href="#" class="mark"></a> </div>
                      </div>
                      <div class="notification-item  clearfix">
                        <div class="heading"> <a href="#" class="text-danger"> <i class="fa fa-exclamation-triangle m-r-10"></i> <span class="bold">98% Server Load</span> <span class="fs-12 m-l-10">Take Action</span> </a> <span class="pull-right time">2 mins ago</span> </div>
                        <div class="option"> <a href="#" class="mark"></a> </div>
                      </div>
                      <div class="notification-item  clearfix">
                        <div class="heading"> <a href="#" class="text-warning-dark"> <i class="fa fa-exclamation-triangle m-r-10"></i> <span class="bold">Warning Notification</span> <span class="fs-12 m-l-10">Buy Now</span> </a> <span class="pull-right time">yesterday</span> </div>
                        <div class="option"> <a href="#" class="mark"></a> </div>
                      </div>
                      <div class="notification-item unread clearfix">
                        <div class="heading">
                          <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10"> <img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg"> </div>
                          <a href="#" class="text-complete"> <span class="bold">Revox Design Labs</span> <span class="fs-12 m-l-10">Owners</span> </a> <span class="pull-right time">11:00pm</span> </div>
                        <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read"> <a href="#" class="mark"></a> </div>
                      </div>
                    </div>
                    <div class="notification-footer text-center"> <a href="#" class="">Read all notifications</a> <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#"> <i class="fa fa-dot-circle-o"></i> </a> </div>
                  </div>
                </div>
              </div></li>
            <li class="p-r-15 inline"> <a href="http://www.facebook.com/japan.for.all" class="icon-set clip "></a> </li>
            <li class="p-r-15 inline"> <a href="#" class="icon-set grid-box"></a> </li>
          </ul>

          <!-- Search -->
          <a href="#" class="search-link" data-toggle="search"><i class="fa fa-search"></i>Type anywhere to <span class="bold">search</span></a> </div>
      </div>

      <!-- Panel -->
      <div class=" pull-right">
        <div class="header-inner"> <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a> </div>
      </div>

    	<?php 
        if(isset($_SESSION['username'])){  
      ?>
      <div class=" pull-right">
        <div class="visible-lg visible-md m-t-10">
          <div class="pull-left p-r-10 p-t-10 fs-16 font-heading"> 
            <span class="semi-bold">Arif</span> 
            <span class="text-master">Lutfhansah</span> 
          </div>
          <div class="dropdown pull-right">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
              <span class="thumbnail-wrapper d32 circular inline m-t-5"> <img src="common/images/header_img_001.jpg" alt="" data-src="common/images/header_img_001.jpg" data-src-retina="common/images/header_img_001.jpg" width="32" height="32"> </span> 
            </button>
            <!-- Logout -->
            <ul class="dropdown-menu profile-dropdown" role="menu">
              <li><a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
              <li><a href="#"><i class="fa fa-thumbs-o-up"></i> Feedback</a> </li>
              <li><a href="#"><i class="fa fa-question"></i> Help</a> </li>
              <li class="bg-master-lighter"> <a href="includes/logout.php" class="clearfix"> <span class="pull-left">Logout</span> <span class="pull-right"><i class="fa fa-power-off"></i></span> </a> </li>
            </ul>
          </div>
        </div>
      </div>
      <?php
      }
      else
      {
        include('includes/login.php');
      }
      ?>
    </div>

    <div class="page-content-wrapper">
      <div class="content sm-gutter">
        <div class="container-fluid padding-25 sm-padding-10">
          <div class="row">
            <div class="col-xlg-10">
              <!-- Row 1 -->
              <div class="row">
                <div class="col-md-6 col-xlg-7">
                  <div class="row">
                    <div class="col-md-12 m-b-10">

                      <div class="ar-3-2 widget-1-wrapper">
                        <div class="widget-1 panel no-border bg-complete no-margin widget-loader-circle-lg">
                          <div class="panel-heading top-right ">
                            <div class="panel-controls">
                              <ul>
                                <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh-lg-master"></i></a> </li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right "> <span class="label font-montserrat fs-11">MUSIC</span> <br>
                              <h2 class="text-white">MEA Kembali Wakili Scene Visual Kei Indonesia Di Jepang</h2>
                              <p class="text-white hint-text">20 Agustus 2015</p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 m-b-10">
                      <div class="ar-2-1">
                        <div class="widget-6 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                          <div class="panel-heading">
                            <div class="panel-controls">
                              <ul>
                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">ANIME</span> <br>
                              <h3 class="text-white margin-small">FiveForite, Idol Group Fresh dari Bandung</h3>
                              <p class="text-white hint-text hidden-md">20 Agustus 2015</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 m-b-10">
                      <div class="ar-2-1">
                        <div class="widget-7 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                          <div class="panel-heading">
                            <div class="panel-controls">
                              <ul>
                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">ANIME</span> <br>
                              <h3 class="text-white margin-small">Battle of Surabaya Raih Penghargaan Oscar</h3>
                              <p class="text-white hint-text hidden-md">27 Agustus 2015</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-xlg-6">
                  <div class="row">

                    <div class="col-sm-6 m-b-10">
                      <div class="ar-1-1">
                        <div class="widget-2 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                          <div class="panel-heading">
                            <div class="panel-controls">
                              <ul>
                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">ANIME</span> <br>
                              <h3 class="text-white margin-small">PV Terbaru ‘Diabolik Lovers More, Blood’</h3>
                              <p class="text-white hint-text hidden-md">20 Agustus 2015</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 m-b-10">
                      <div class="ar-1-1">
                        <div class="widget-3 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                          <div class="panel-heading">
                            <div class="panel-controls">
                              <ul>
                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">LIVE ACTION</span> <br>
                              <h3 class="text-white margin-small">Tanggal Tayang Attack on Titan Diundur!</h3>
                              <p class="text-white hint-text hidden-md">19 Agustus 2015</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-sm-6 m-b-10">
                      <div class="ar-1-1">
                        <div class="widget-4 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                          <div class="panel-heading">
                            <div class="panel-controls">
                              <ul>
                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">Culture</span> <br>
                              <h3 class="text-white margin-small">Seniman ini ciptakan lukisan dari cat air</h3>
                              <p class="text-white hint-text hidden-md">17 Agustus 2015</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6 m-b-10">
                      <div class="ar-1-1">
                        <div class="widget-5 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                          <div class="panel-heading">
                            <div class="panel-controls">
                              <ul>
                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">JKT48</span> <br>
                              <h3 class="text-white margin-small">Sayonara Graduation, Rena Matsui</h3>
                              <p class="text-white hint-text hidden-md">9 Agustus 2015</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  
              </div>

              <!-- Row 2 -->
              <div class="row">
                <div class="news">
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="td-pb-span4 wpb_column column_container">
                        <div class="wpb_wrapper"> 
                          <script>var block_td_uid_7_55f8df759de3a = new td_block();
                            block_td_uid_7_55f8df759de3a.id = "td_uid_7_55f8df759de3a";
                            block_td_uid_7_55f8df759de3a.atts = '{"category_id":"4","limit":"3","custom_title":"Entertainment","td_filter_default_txt":"All","ajax_pagination":"next_prev","header_text_color":"#ffffff","header_color":"#dd3333","class":"td_uid_7_55f8df759de3a_inline"}';
                            block_td_uid_7_55f8df759de3a.td_column_number = "1";
                            block_td_uid_7_55f8df759de3a.block_type = "td_block_7";
                            block_td_uid_7_55f8df759de3a.post_count = "3";
                            block_td_uid_7_55f8df759de3a.found_posts = "4939";
                            block_td_uid_7_55f8df759de3a.max_num_pages = "1647";
                            block_td_uid_7_55f8df759de3a.header_color = "#dd3333";
                            block_td_uid_7_55f8df759de3a.ajax_pagination_infinite_stop = "";
                            td_blocks.push(block_td_uid_7_55f8df759de3a);
                          </script>
                          <div class="td_block_wrap td_block_7 td_uid_7_55f8df759de3a_inline td-pb-border-top">
                            <h4 class="block-title"><span style="background-color:#dd3333; color:#ffffff !important">Entertainment</span></h4>
                            <div id=td_uid_7_55f8df759de3a class="td_block_inner">
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/trailer-film-enishi-the-bride-of-izumo-yang-dibintangi-nozomi-sasaki-telah-rilis/" rel="bookmark" title="Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki telah rilis!"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Trailer-film-Enishi-The-Bride-of-Izumo-yang-dibintangi-Nozomi-Sasaki-telah-rilis2-100x75.jpg" alt="" title="Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki telah rilis!"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/trailer-film-enishi-the-bride-of-izumo-yang-dibintangi-nozomi-sasaki-telah-rilis/" rel="bookmark" title="Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki telah rilis!">Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T20:00:30+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Film-live-action-Chimamire-Sukeban-Chainsaw-akan-dibintangi-oleh-Rio-Uchida-100x75.jpg" alt="" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida">Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:00:01+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/poster-trailer-kanna-hashimoto-dalam-film-sailorfuku-to-kikanju-sotsugyo/" rel="bookmark" title="Poster &amp; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211; Sotsugyo-&#8216;"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Kanna-Hashimoto-Sailorfuku-to-Kikanjuu1-100x75.jpg" alt="" title="Poster &#038; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211; Sotsugyo-&#8216;"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/poster-trailer-kanna-hashimoto-dalam-film-sailorfuku-to-kikanju-sotsugyo/" rel="bookmark" title="Poster &amp; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211; Sotsugyo-&#8216;">Poster &amp; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211;...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T18:00:03+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Film-live-action-Chimamire-Sukeban-Chainsaw-akan-dibintangi-oleh-Rio-Uchida-100x75.jpg" alt="" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida">Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:00:01+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                            </div>
                            <div class="td-next-prev-wrap"><a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_7_55f8df759de3a" data-td_block_id="td_uid_7_55f8df759de3a"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_7_55f8df759de3a" data-td_block_id="td_uid_7_55f8df759de3a"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="td-pb-span4 wpb_column column_container">
                        <div class="wpb_wrapper"> 
                          <script>var block_td_uid_8_55f8df759f6a6 = new td_block();
                            block_td_uid_8_55f8df759f6a6.id = "td_uid_8_55f8df759f6a6";
                            block_td_uid_8_55f8df759f6a6.atts = '{"category_id":"8","limit":"3","custom_title":"Otaku Arena","td_filter_default_txt":"All","ajax_pagination":"next_prev","header_text_color":"#ffffff","header_color":"#1e73be","class":"td_uid_8_55f8df759f6a6_inline"}';
                            block_td_uid_8_55f8df759f6a6.td_column_number = "1";
                            block_td_uid_8_55f8df759f6a6.block_type = "td_block_7";
                            block_td_uid_8_55f8df759f6a6.post_count = "3";
                            block_td_uid_8_55f8df759f6a6.found_posts = "3164";
                            block_td_uid_8_55f8df759f6a6.max_num_pages = "1055";
                            block_td_uid_8_55f8df759f6a6.header_color = "#1e73be";
                            block_td_uid_8_55f8df759f6a6.ajax_pagination_infinite_stop = "";
                            td_blocks.push(block_td_uid_8_55f8df759f6a6);
                            </script>
                          <div class="td_block_wrap td_block_7 td_uid_8_55f8df759f6a6_inline td-pb-border-top">
                            <h4 class="block-title"><span style="background-color:#1e73be; color:#ffffff !important">Otaku Arena</span></h4>
                            <div id=td_uid_8_55f8df759f6a6 class="td_block_inner">
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Dragon-Ball-One-Piece-thisisgamethailand.com_-100x75.jpg" alt="" title="Goku vs. Doflamingo &#038; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?">Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:30:43+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:1"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:1"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/presiden-baru-nintendo-telah-diumumkan/" rel="bookmark" title="Presiden Baru Nintendo Telah Diumumkan"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Presiden-Baru-Nintendo-Tatsumi-Kimishima-100x75.jpg" alt="" title="Presiden Baru Nintendo Telah Diumumkan"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/presiden-baru-nintendo-telah-diumumkan/" rel="bookmark" title="Presiden Baru Nintendo Telah Diumumkan">Presiden Baru Nintendo Telah Diumumkan</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T18:30:12+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/royalti-pencipta-lagu-cruel-angels-thesis-anime-pendek-neon-genesis-impacts/" rel="bookmark" title="Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &amp; Anime Pendek &#8216;Neon Genesis IMPACTS&#8217;"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Neko-Oikawa-evangelion-featured-100x75.jpeg" alt="" title="Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &#038; Anime Pendek &#8216;Neon Genesis IMPACTS&#8217;"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/royalti-pencipta-lagu-cruel-angels-thesis-anime-pendek-neon-genesis-impacts/" rel="bookmark" title="Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &amp; Anime Pendek &#8216;Neon Genesis IMPACTS&#8217;">Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &amp; Anime Pendek &#8216;Neon Genesis...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T16:00:11+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Dragon-Ball-One-Piece-thisisgamethailand.com_-100x75.jpg" alt="" title="Goku vs. Doflamingo &#038; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?">Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:30:43+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:1"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:1"/>
                                </div>
                              </div>
                            </div>
                            <div class="td-next-prev-wrap"><a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_8_55f8df759f6a6" data-td_block_id="td_uid_8_55f8df759f6a6"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_8_55f8df759f6a6" data-td_block_id="td_uid_8_55f8df759f6a6"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="td-pb-span4 wpb_column column_container">
                        <div class="wpb_wrapper"> 
                          <script>var block_td_uid_9_55f8df75a0f20 = new td_block();
                            block_td_uid_9_55f8df75a0f20.id = "td_uid_9_55f8df75a0f20";
                            block_td_uid_9_55f8df75a0f20.atts = '{"category_id":"6","limit":"3","custom_title":"Lifestyle","td_filter_default_txt":"All","ajax_pagination":"next_prev","header_text_color":"#ffffff","header_color":"#81d742","class":"td_uid_9_55f8df75a0f20_inline"}';
                            block_td_uid_9_55f8df75a0f20.td_column_number = "1";
                            block_td_uid_9_55f8df75a0f20.block_type = "td_block_7";
                            block_td_uid_9_55f8df75a0f20.post_count = "3";
                            block_td_uid_9_55f8df75a0f20.found_posts = "3356";
                            block_td_uid_9_55f8df75a0f20.max_num_pages = "1119";
                            block_td_uid_9_55f8df75a0f20.header_color = "#81d742";
                            block_td_uid_9_55f8df75a0f20.ajax_pagination_infinite_stop = "";
                            td_blocks.push(block_td_uid_9_55f8df75a0f20);
                            </script>
                          <div class="td_block_wrap td_block_7 td_uid_9_55f8df75a0f20_inline td-pb-border-top">
                            <h4 class="block-title"><span style="background-color:#81d742; color:#ffffff !important">Lifestyle</span></h4>
                            <div id=td_uid_9_55f8df75a0f20 class="td_block_inner">
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kolaborasi-shingeki-no-kyojin-yang-terbaru-adalah-dengan-toilet/" rel="bookmark" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Shingeki-no-Kyojin-Toilet-100x75.jpg" alt="" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolaborasi-shingeki-no-kyojin-yang-terbaru-adalah-dengan-toilet/" rel="bookmark" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet">Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T20:30:08+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Kolam-Renang-Bukan-Ini-Air-Banjir-di-Jepang-featured-copy-100x75.jpg" alt="" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!">Kolam Renang? Bukan, Ini Air Banjir di Jepang!</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T12:30:53+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:15"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:15"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kereta-sushi-mengapung-di-sungai-kota-kuliner-osaka/" rel="bookmark" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Rolling-Sushi-100x75.jpg" alt="" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kereta-sushi-mengapung-di-sungai-kota-kuliner-osaka/" rel="bookmark" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka">&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T12:00:02+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Kolam-Renang-Bukan-Ini-Air-Banjir-di-Jepang-featured-copy-100x75.jpg" alt="" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!">Kolam Renang? Bukan, Ini Air Banjir di Jepang!</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T12:30:53+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:15"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:15"/>
                                </div>
                              </div>
                            </div>
                            <div class="td-next-prev-wrap"><a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_9_55f8df75a0f20" data-td_block_id="td_uid_9_55f8df75a0f20"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_9_55f8df75a0f20" data-td_block_id="td_uid_9_55f8df75a0f20"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>

              <!-- Row 3 -->
              <div class="row">
                <div class="news">
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="td-pb-span4 wpb_column column_container">
                        <div class="wpb_wrapper"> 
                          <script>var block_td_uid_7_55f8df759de3a = new td_block();
                            block_td_uid_7_55f8df759de3a.id = "td_uid_7_55f8df759de3a";
                            block_td_uid_7_55f8df759de3a.atts = '{"category_id":"4","limit":"3","custom_title":"Entertainment","td_filter_default_txt":"All","ajax_pagination":"next_prev","header_text_color":"#ffffff","header_color":"#dd3333","class":"td_uid_7_55f8df759de3a_inline"}';
                            block_td_uid_7_55f8df759de3a.td_column_number = "1";
                            block_td_uid_7_55f8df759de3a.block_type = "td_block_7";
                            block_td_uid_7_55f8df759de3a.post_count = "3";
                            block_td_uid_7_55f8df759de3a.found_posts = "4939";
                            block_td_uid_7_55f8df759de3a.max_num_pages = "1647";
                            block_td_uid_7_55f8df759de3a.header_color = "#dd3333";
                            block_td_uid_7_55f8df759de3a.ajax_pagination_infinite_stop = "";
                            td_blocks.push(block_td_uid_7_55f8df759de3a);
                          </script>
                          <div class="td_block_wrap td_block_7 td_uid_7_55f8df759de3a_inline td-pb-border-top">
                            <h4 class="block-title"><span style="background-color:#dd3333; color:#ffffff !important">Entertainment</span></h4>
                            <div id=td_uid_7_55f8df759de3a class="td_block_inner">
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/trailer-film-enishi-the-bride-of-izumo-yang-dibintangi-nozomi-sasaki-telah-rilis/" rel="bookmark" title="Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki telah rilis!"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Trailer-film-Enishi-The-Bride-of-Izumo-yang-dibintangi-Nozomi-Sasaki-telah-rilis2-100x75.jpg" alt="" title="Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki telah rilis!"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/trailer-film-enishi-the-bride-of-izumo-yang-dibintangi-nozomi-sasaki-telah-rilis/" rel="bookmark" title="Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki telah rilis!">Trailer film Enishi: The Bride of Izumo yang dibintangi Nozomi Sasaki...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T20:00:30+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Film-live-action-Chimamire-Sukeban-Chainsaw-akan-dibintangi-oleh-Rio-Uchida-100x75.jpg" alt="" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida">Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:00:01+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/poster-trailer-kanna-hashimoto-dalam-film-sailorfuku-to-kikanju-sotsugyo/" rel="bookmark" title="Poster &amp; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211; Sotsugyo-&#8216;"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Kanna-Hashimoto-Sailorfuku-to-Kikanjuu1-100x75.jpg" alt="" title="Poster &#038; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211; Sotsugyo-&#8216;"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/poster-trailer-kanna-hashimoto-dalam-film-sailorfuku-to-kikanju-sotsugyo/" rel="bookmark" title="Poster &amp; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211; Sotsugyo-&#8216;">Poster &amp; Trailer Kanna Hashimoto dalam Film &#8216;Sailorfuku to Kikanju &#8211;...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T18:00:03+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Film-live-action-Chimamire-Sukeban-Chainsaw-akan-dibintangi-oleh-Rio-Uchida-100x75.jpg" alt="" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/film-live-action-chimamire-sukeban-chainsaw-akan-dibintangi-oleh-rio-uchida/" rel="bookmark" title="Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida">Film live-action Chimamire Sukeban Chainsaw akan dibintangi oleh Rio Uchida</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:00:01+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                            </div>
                            <div class="td-next-prev-wrap"><a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_7_55f8df759de3a" data-td_block_id="td_uid_7_55f8df759de3a"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_7_55f8df759de3a" data-td_block_id="td_uid_7_55f8df759de3a"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="td-pb-span4 wpb_column column_container">
                        <div class="wpb_wrapper"> 
                          <script>var block_td_uid_8_55f8df759f6a6 = new td_block();
                            block_td_uid_8_55f8df759f6a6.id = "td_uid_8_55f8df759f6a6";
                            block_td_uid_8_55f8df759f6a6.atts = '{"category_id":"8","limit":"3","custom_title":"Otaku Arena","td_filter_default_txt":"All","ajax_pagination":"next_prev","header_text_color":"#ffffff","header_color":"#1e73be","class":"td_uid_8_55f8df759f6a6_inline"}';
                            block_td_uid_8_55f8df759f6a6.td_column_number = "1";
                            block_td_uid_8_55f8df759f6a6.block_type = "td_block_7";
                            block_td_uid_8_55f8df759f6a6.post_count = "3";
                            block_td_uid_8_55f8df759f6a6.found_posts = "3164";
                            block_td_uid_8_55f8df759f6a6.max_num_pages = "1055";
                            block_td_uid_8_55f8df759f6a6.header_color = "#1e73be";
                            block_td_uid_8_55f8df759f6a6.ajax_pagination_infinite_stop = "";
                            td_blocks.push(block_td_uid_8_55f8df759f6a6);
                            </script>
                          <div class="td_block_wrap td_block_7 td_uid_8_55f8df759f6a6_inline td-pb-border-top">
                            <h4 class="block-title"><span style="background-color:#1e73be; color:#ffffff !important">Otaku Arena</span></h4>
                            <div id=td_uid_8_55f8df759f6a6 class="td_block_inner">
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Dragon-Ball-One-Piece-thisisgamethailand.com_-100x75.jpg" alt="" title="Goku vs. Doflamingo &#038; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?">Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:30:43+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:1"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:1"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/presiden-baru-nintendo-telah-diumumkan/" rel="bookmark" title="Presiden Baru Nintendo Telah Diumumkan"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Presiden-Baru-Nintendo-Tatsumi-Kimishima-100x75.jpg" alt="" title="Presiden Baru Nintendo Telah Diumumkan"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/presiden-baru-nintendo-telah-diumumkan/" rel="bookmark" title="Presiden Baru Nintendo Telah Diumumkan">Presiden Baru Nintendo Telah Diumumkan</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T18:30:12+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/royalti-pencipta-lagu-cruel-angels-thesis-anime-pendek-neon-genesis-impacts/" rel="bookmark" title="Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &amp; Anime Pendek &#8216;Neon Genesis IMPACTS&#8217;"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Neko-Oikawa-evangelion-featured-100x75.jpeg" alt="" title="Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &#038; Anime Pendek &#8216;Neon Genesis IMPACTS&#8217;"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/royalti-pencipta-lagu-cruel-angels-thesis-anime-pendek-neon-genesis-impacts/" rel="bookmark" title="Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &amp; Anime Pendek &#8216;Neon Genesis IMPACTS&#8217;">Royalti Pencipta Lagu &#8216;Cruel Angel&#8217;s Thesis&#8217; &amp; Anime Pendek &#8216;Neon Genesis...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T16:00:11+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Dragon-Ball-One-Piece-thisisgamethailand.com_-100x75.jpg" alt="" title="Goku vs. Doflamingo &#038; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/goku-vs-doflamingo-luffy-vs-frieza-siapa-sajakah-yang-akan-menang/" rel="bookmark" title="Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan Menang?">Goku vs. Doflamingo &amp; Luffy vs. Frieza: Siapa Sajakah yang akan...</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T19:30:43+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:1"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:1"/>
                                </div>
                              </div>
                            </div>
                            <div class="td-next-prev-wrap"><a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_8_55f8df759f6a6" data-td_block_id="td_uid_8_55f8df759f6a6"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_8_55f8df759f6a6" data-td_block_id="td_uid_8_55f8df759f6a6"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="td-pb-span4 wpb_column column_container">
                        <div class="wpb_wrapper"> 
                          <script>var block_td_uid_9_55f8df75a0f20 = new td_block();
                            block_td_uid_9_55f8df75a0f20.id = "td_uid_9_55f8df75a0f20";
                            block_td_uid_9_55f8df75a0f20.atts = '{"category_id":"6","limit":"3","custom_title":"Lifestyle","td_filter_default_txt":"All","ajax_pagination":"next_prev","header_text_color":"#ffffff","header_color":"#81d742","class":"td_uid_9_55f8df75a0f20_inline"}';
                            block_td_uid_9_55f8df75a0f20.td_column_number = "1";
                            block_td_uid_9_55f8df75a0f20.block_type = "td_block_7";
                            block_td_uid_9_55f8df75a0f20.post_count = "3";
                            block_td_uid_9_55f8df75a0f20.found_posts = "3356";
                            block_td_uid_9_55f8df75a0f20.max_num_pages = "1119";
                            block_td_uid_9_55f8df75a0f20.header_color = "#81d742";
                            block_td_uid_9_55f8df75a0f20.ajax_pagination_infinite_stop = "";
                            td_blocks.push(block_td_uid_9_55f8df75a0f20);
                            </script>
                          <div class="td_block_wrap td_block_7 td_uid_9_55f8df75a0f20_inline td-pb-border-top">
                            <h4 class="block-title"><span style="background-color:#81d742; color:#ffffff !important">Lifestyle</span></h4>
                            <div id=td_uid_9_55f8df75a0f20 class="td_block_inner">
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kolaborasi-shingeki-no-kyojin-yang-terbaru-adalah-dengan-toilet/" rel="bookmark" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Shingeki-no-Kyojin-Toilet-100x75.jpg" alt="" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolaborasi-shingeki-no-kyojin-yang-terbaru-adalah-dengan-toilet/" rel="bookmark" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet">Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T20:30:08+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Kolam-Renang-Bukan-Ini-Air-Banjir-di-Jepang-featured-copy-100x75.jpg" alt="" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!">Kolam Renang? Bukan, Ini Air Banjir di Jepang!</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T12:30:53+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:15"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:15"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kereta-sushi-mengapung-di-sungai-kota-kuliner-osaka/" rel="bookmark" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Rolling-Sushi-100x75.jpg" alt="" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kereta-sushi-mengapung-di-sungai-kota-kuliner-osaka/" rel="bookmark" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka">&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T12:00:02+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:0"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-block-span12">
                                <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                                  <div class="td-module-thumb"><a href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"><img width="100" height="75" itemprop="image" class="entry-thumb" src="http://japanesestation.com/wp-content/uploads/2015/09/Kolam-Renang-Bukan-Ini-Air-Banjir-di-Jepang-featured-copy-100x75.jpg" alt="" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!"/></a></div>
                                  <div class="item-details">
                                    <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolam-renang-bukan-ini-air-banjir-di-jepang/" rel="bookmark" title="Kolam Renang? Bukan, Ini Air Banjir di Jepang!">Kolam Renang? Bukan, Ini Air Banjir di Jepang!</a></h3>
                                    <div class="meta-info">
                                      <div class="td-post-date">
                                        <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T12:30:53+00:00">Sep 15, 2015</time>
                                        <meta itemprop="interactionCount" content="UserComments:15"/>
                                      </div>
                                    </div>
                                  </div>
                                  <meta itemprop="interactionCount" content="UserComments:15"/>
                                </div>
                              </div>
                            </div>
                            <div class="td-next-prev-wrap"><a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_9_55f8df75a0f20" data-td_block_id="td_uid_9_55f8df75a0f20"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_9_55f8df75a0f20" data-td_block_id="td_uid_9_55f8df75a0f20"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>

              <!-- Row 4 -->
              <div class="row">
                <div class="title_event">
                  <h2 id="title_h2">Event</h2>
                </div> 

                <div class="event_main">
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="widget-6 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="panel-heading">
                          <div class="panel-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">ANIME</span> <br>
                            <h3 class="text-white margin-small">FiveForite, Idol Group Fresh dari Bandung</h3>
                            <p class="text-white hint-text hidden-md">20 Agustus 2015</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="widget-6 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="panel-heading">
                          <div class="panel-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">ANIME</span> <br>
                            <h3 class="text-white margin-small">FiveForite, Idol Group Fresh dari Bandung</h3>
                            <p class="text-white hint-text hidden-md">20 Agustus 2015</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="ar-2-1">
                      <div class="widget-6 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="panel-heading">
                          <div class="panel-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="pull-bottom bottom-left bottom-right padding-25"> <span class="label font-montserrat fs-11">ANIME</span> <br>
                            <h3 class="text-white margin-small">FiveForite, Idol Group Fresh dari Bandung</h3>
                            <p class="text-white hint-text hidden-md">20 Agustus 2015</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>

              <!-- Row 5 -->
              <div class="row clearfix">
                <div class="member_main pull-left">
                  <div class="wpb_wrapper"> 
                    <script>
                      var block_td_uid_14_55f8df75ae29e = new td_block();
                      block_td_uid_14_55f8df75ae29e.id = "td_uid_14_55f8df75ae29e";
                      block_td_uid_14_55f8df75ae29e.atts = '{"category_id":"5637","limit":"5","custom_title":"Place in Japan","td_filter_default_txt":"All","header_text_color":"#444444","header_color":"#ffff23","border_top":"no_border_top","ajax_pagination":"next_prev","class":"td_uid_14_55f8df75ae29e_inline"}';
                      block_td_uid_14_55f8df75ae29e.td_column_number = "2";
                      block_td_uid_14_55f8df75ae29e.block_type = "td_block_1";
                      block_td_uid_14_55f8df75ae29e.post_count = "5";
                      block_td_uid_14_55f8df75ae29e.found_posts = "626";
                      block_td_uid_14_55f8df75ae29e.max_num_pages = "126";
                      block_td_uid_14_55f8df75ae29e.header_color = "#ffff23";
                      block_td_uid_14_55f8df75ae29e.ajax_pagination_infinite_stop = "";
                      td_blocks.push(block_td_uid_14_55f8df75ae29e);
                    </script>   
                    <div class="td_block_wrap td_block_1 td_uid_14_55f8df75ae29e_inline">
                      <h4 class="title-member"><span style="background-color:#DD3333; color:#fff !important">Member</span></h4>
                      <div id=td_uid_14_55f8df75ae29e class="td_block_inner">
                        <div class="td-block-row">
                          <div class="td-block-span6">
                            <div class="td_module_wrap td_module_4" itemscope itemtype="http://schema.org/Article">
                              <div class="td-module-image">
                                <div class="td-module-thumb"><a href="http://japanesestation.com/kolaborasi-shingeki-no-kyojin-yang-terbaru-adalah-dengan-toilet/" rel="bookmark" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet"><img width="300" height="194" itemprop="image" class="entry-thumb" src="images/contents_member_001.jpg" alt="" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet"/></a></div>
                              </div>
                              <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolaborasi-shingeki-no-kyojin-yang-terbaru-adalah-dengan-toilet/" rel="bookmark" title="Kolaborasi &#8216;Shingeki no Kyojin&#8217; yang Terbaru Adalah Dengan Toilet">Arif Lutfhansah</a></h3>
                              <div class="meta-info">
                                <div class="td-post-date">
                                  <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T20:30:08+00:00">Chief Executive Officer</time>
                                  <meta itemprop="interactionCount" content="UserComments:0"/>
                                </div>
                              </div>
                              <div class="td-excerpt"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                              <meta itemprop="interactionCount" content="UserComments:0"/>
                            </div>
                          </div>
                          <div class="td-block-span6">
                            <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                              <div class="td-module-thumb"><a href="http://japanesestation.com/kereta-sushi-mengapung-di-sungai-kota-kuliner-osaka/" rel="bookmark" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka"><img width="100" height="75" itemprop="image" class="entry-thumb" src="images/contents_member_002.jpg" alt="" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka"/></a></div>
                              <div class="item-details">
                                <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kereta-sushi-mengapung-di-sungai-kota-kuliner-osaka/" rel="bookmark" title="&#8216;Kereta Sushi&#8217; Mengapung di Sungai Kota Kuliner, Osaka">Adven Tonny</a></h3>
                                <div class="meta-info">
                                  <div class="td-post-date">
                                    <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-15T12:00:02+00:00">Chief Operating Officer</time>
                                    <meta itemprop="interactionCount" content="UserComments:0"/>
                                  </div>
                                </div>
                                <div class="td-excerpt"> Lorem ipsum dolor sit amet, consectetur adipiscing<a href="#"> more...</a></div>
                              </div>
                              <meta itemprop="interactionCount" content="UserComments:0"/>
                            </div>
                            <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                              <div class="td-module-thumb"><a href="http://japanesestation.com/kolaborasi-eva-rest-area-di-shizuoka-menampilkan-eva-01-terbesar-di-dunia/" rel="bookmark" title="Kolaborasi &#8216;EVA&#8217; &amp; Rest Area di Shizuoka Menampilkan EVA-01 Terbesar di Dunia!"><img width="100" height="75" itemprop="image" class="entry-thumb" src="images/contents_member_003.jpg" alt="" title="Kolaborasi &#8216;EVA&#8217; &#038; Rest Area di Shizuoka Menampilkan EVA-01 Terbesar di Dunia!"/></a></div>
                              <div class="item-details">
                                <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/kolaborasi-eva-rest-area-di-shizuoka-menampilkan-eva-01-terbesar-di-dunia/" rel="bookmark" title="Kolaborasi &#8216;EVA&#8217; &amp; Rest Area di Shizuoka Menampilkan EVA-01 Terbesar di Dunia!">Bobby Pratama</a></h3>
                                <div class="meta-info">
                                  <div class="td-post-date">
                                    <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-09T18:00:10+00:00">Chief Financial Officer</time>
                                    <meta itemprop="interactionCount" content="UserComments:0"/>
                                  </div>
                                </div>
                                <div class="td-excerpt"> Lorem ipsum dolor sit amet, consectetur adipiscing<a href="#"> more...</a></div>
                              </div>
                              <meta itemprop="interactionCount" content="UserComments:0"/>
                            </div>
                            <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                              <div class="td-module-thumb"><a href="http://japanesestation.com/cafe-bertema-peanuts-di-tokyo-ini-cocok-bagi-kalian-fans-snoopy-dkk/" rel="bookmark" title="Cafe Bertema &#8216;Peanuts&#8217; di Tokyo Ini Cocok Bagi Kalian Fans Snoopy, dkk"><img width="100" height="75" itemprop="image" class="entry-thumb" src="images/contents_member_004.jpg" alt="" title="Cafe Bertema &#8216;Peanuts&#8217; di Tokyo Ini Cocok Bagi Kalian Fans Snoopy, dkk"/></a></div>
                              <div class="item-details">
                                <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/cafe-bertema-peanuts-di-tokyo-ini-cocok-bagi-kalian-fans-snoopy-dkk/" rel="bookmark" title="Cafe Bertema &#8216;Peanuts&#8217; di Tokyo Ini Cocok Bagi Kalian Fans Snoopy, dkk">Ardian Saputra</a></h3>
                                <div class="meta-info">
                                  <div class="td-post-date">
                                    <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-09T12:00:59+00:00">Chief Marketing Officer</time>
                                    <meta itemprop="interactionCount" content="UserComments:0"/>
                                  </div>
                                </div>
                                <div class="td-excerpt"> Lorem ipsum dolor sit amet, consectetur adipiscing<a href="#"> more...</a></div>
                              </div>
                              <meta itemprop="interactionCount" content="UserComments:0"/>
                            </div>
                            <div class="td_module_wrap td_module_6" itemscope itemtype="http://schema.org/Article">
                              <div class="td-module-thumb"><a href="http://japanesestation.com/mau-ikut-tur-menjelajahi-lokasi-lokasi-setting-anime-free-di-dunia-nyata/" rel="bookmark" title="Mau Ikut Tur Menjelajahi Lokasi-Lokasi Setting Anime &#8216;Free!&#8217; di Dunia Nyata?"><img width="100" height="75" itemprop="image" class="entry-thumb" src="images/contents_member_005.jpg" alt="" title="Mau Ikut Tur Menjelajahi Lokasi-Lokasi Setting Anime &#8216;Free!&#8217; di Dunia Nyata?"/></a></div>
                              <div class="item-details">
                                <h3 itemprop="name" class="entry-title td-module-title"><a itemprop="url" href="http://japanesestation.com/mau-ikut-tur-menjelajahi-lokasi-lokasi-setting-anime-free-di-dunia-nyata/" rel="bookmark" title="Mau Ikut Tur Menjelajahi Lokasi-Lokasi Setting Anime &#8216;Free!&#8217; di Dunia Nyata?">Iqbal Siagian</a></h3>
                                <div class="meta-info">
                                  <div class="td-post-date">
                                    <time itemprop="dateCreated" class="entry-date updated td-module-date" datetime="2015-09-08T18:30:30+00:00">Chief Technology Officer</time>
                                    <meta itemprop="interactionCount" content="UserComments:4"/>
                                  </div>
                                </div>
                                <div class="td-excerpt"> Lorem ipsum dolor sit amet, consectetur adipiscing<a href="#"> more...</a></div>
                              </div>
                              <meta itemprop="interactionCount" content="UserComments:4"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="td-next-prev-wrap"><a href="#" class="td_ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_14_55f8df75ae29e" data-td_block_id="td_uid_14_55f8df75ae29e"><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class="td-ajax-next-page" id="next-page-td_uid_14_55f8df75ae29e" data-td_block_id="td_uid_14_55f8df75ae29e"><i class="td-icon-font td-icon-menu-right"></i></a></div>
                    </div>
                    <script>var block_td_uid_15_55f8df75b1564 = new td_block();
                block_td_uid_15_55f8df75b1564.id = "td_uid_15_55f8df75b1564";
                block_td_uid_15_55f8df75b1564.atts = '{"category_id":"1815","limit":"3","custom_title":"Local News","custom_url":"http:\/\/japanesestation.com\/category\/local\/","header_text_color":"#ffffff","header_color":"#8224e3","td_filter_default_txt":"All","ajax_pagination":"next_prev","class":"td_uid_15_55f8df75b1564_inline"}';
                block_td_uid_15_55f8df75b1564.td_column_number = "2";
                block_td_uid_15_55f8df75b1564.block_type = "td_block_16";
                block_td_uid_15_55f8df75b1564.post_count = "3";
                block_td_uid_15_55f8df75b1564.found_posts = "121";
                block_td_uid_15_55f8df75b1564.max_num_pages = "41";
                block_td_uid_15_55f8df75b1564.header_color = "#8224e3";
                block_td_uid_15_55f8df75b1564.ajax_pagination_infinite_stop = "";
                td_blocks.push(block_td_uid_15_55f8df75b1564);
                </script>
                  </div>
                </div> 

                <div class="gallery_main pull-right">
                  <h2>Gallery</h2>
                  <input type="radio" id="select-all" name="button">
                    <label for="select-all" class="label-all">
                      All
                    </label>
                  <input type="radio" id="select-animals" name="button">
                    <label for="select-animals" class="label-animals">
                      Gathering Monas
                    </label>
                  <input type="radio" id="select-lightning" name="button">
                    <label for="select-lightning" class="label-lightning">
                      Ennichisai 2015
                    </label>
                  <input type="radio" id="select-desert" name="button">
                    <label for="select-desert" class="label-desert">
                      Jak Japan Matsuri 2015
                    </label>

                  <ul class="gallery">
                    <li class="animals-item">
                      <img src="http://farm8.staticflickr.com/7254/7740405218_deedfa35cb_t.jpg" />
                    </li>
                    <li class="desert-item">
                      <img src="http://farm5.staticflickr.com/4086/4964465857_0bdbe1a84c_t.jpg" />
                    </li>
                    <li class="lightning-item">
                      <img src="http://farm6.staticflickr.com/5114/5858971312_0fec4bdaa0_t.jpg" />
                    </li>
                    <li class="desert-item">
                      <img src="http://farm8.staticflickr.com/7338/12111748274_e3319bfbd5_t.jpg" />
                    </li>
                    <li class="animals-item">
                      <img src="http://farm7.staticflickr.com/6206/6105317674_80f67a9a5e_t.jpg" />
                    </li>
                    <li class="desert-item">
                      <img src="http://farm7.staticflickr.com/6143/5951696095_c6dd89f5da_t.jpg" />
                    </li>
                    <li class="lightning-item">
                      <img src="http://farm4.staticflickr.com/3130/2840585154_232b19bfbd_t.jpg" />
                    </li>
                    <li class="animals-item">
                      <img src="http://farm9.staticflickr.com/8239/8548052436_a36e792c85_t.jpg" />
                    </li>
                    <li class="lightning-item">
                      <img src="http://farm1.staticflickr.com/129/390350345_a0a04a139d_t.jpg" />
                    </li>
                    <li class="lightning-item">
                      <img src="http://farm1.staticflickr.com/129/390350345_a0a04a139d_t.jpg" />
                    </li>
                    <li class="desert-item">
                      <img src="http://farm7.staticflickr.com/6143/5951696095_c6dd89f5da_t.jpg" />
                    </li>
                    <li class="lightning-item">
                      <img src="http://farm4.staticflickr.com/3130/2840585154_232b19bfbd_t.jpg" />
                    </li>
                    <li class="animals-item">
                      <img src="http://farm9.staticflickr.com/8239/8548052436_a36e792c85_t.jpg" />
                    </li>
                    <li class="lightning-item">
                      <img src="http://farm1.staticflickr.com/129/390350345_a0a04a139d_t.jpg" />
                    </li>
                    <li class="lightning-item">
                      <img src="http://farm1.staticflickr.com/129/390350345_a0a04a139d_t.jpg" />
                    </li>
                  </ul> 
                </div>
              </div>

            </div>

            <div class="visible-xlg col-xlg-3">
              <!-- Slider -->
              <div class="slider">
                  <section class="slider-container">
                      <ul id="slider" class="slider-wrapper">
                          <li class="slide-current">
                              <img src="images/banner1.png" alt="Slider Imagen1">
                          </li>
                          <li>
                              <img src="images/banner2.png" alt="Slider Imagen2">
                          </li>
                          <li>
                              <img src="images/banner3.png" alt="Slider Imagen3">
                          </li>
                      </ul>
                      
                      <ul id="slider-controls" class="slider-controls">
                      </ul>
                  </section>
              </div>

              <!-- Twitter -->
              <div class="twitter">
                  <center>
                  <h3>Twitter</h3>
                  <a class="twitter-timeline" href="https://twitter.com/JapaneseForALL" data-widget-id="598366794445815808" width="300">Tweet oleh @JapaneseForALL</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  </center>
              </div>
            </div>
          </div>

          <div class="row" style='display:none'>
            <div class="col-md-4 m-b-10">
              <div class="widget-14 panel no-border  no-margin widget-loader-circle">
                <div class="container-xs-height full-height">
                  <div class="row-xs-height">
                    <div class="col-xs-height">
                      <div class="panel-heading">
                        <div class="panel-title">Server load </div>
                        <div class="panel-controls">
                          <ul>
                            <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row-xs-height">
                    <div class="col-xs-height">
                      <div class="p-l-20 p-r-20">
                        <p>Server: www.revox.io</p>
                        <div class="row">
                          <div class="col-lg-3 col-md-12">
                            <h4 class="bold no-margin">5.2GB</h4>
                            <p class="small no-margin">Total usage</p>
                          </div>
                          <div class="col-lg-3 col-md-6">
                            <h5 class=" no-margin p-t-5">227.34KB</h5>
                            <p class="small no-margin">Currently</p>
                          </div>
                          <div class="col-lg-3 col-md-6">
                            <h5 class=" no-margin p-t-5">117.65MB</h5>
                            <p class="small no-margin">Average</p>
                          </div>
                          <div class="col-lg-3 visible-xlg">
                            <div class="widget-14-chart-legend bg-transparent text-black no-padding pull-right"></div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row-xs-height">
                    <div class="col-xs-height relative bg-master-lightest">
                      <div class="widget-14-chart_y_axis"></div>
                      <div class="widget-14-chart rickshaw-chart top-left top-right bottom-left bottom-right"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      
      <!--========================================================
                              FOOTER
      =========================================================-->
      <div class="container-fluid container-fixed-lg footer">
        <div class="copyright sm-text-center">
          <p class="small no-margin pull-left sm-pull-reset">  <span class="hint-text">Copyright © 2015 </span> <span>Japanese For All </span><span class="hint-text">| All rights reserved. </span> </p>
          <p class="small no-margin pull-right sm-pull-reset"> 
            <span class="social">
              <a href="https://www.facebook.com/groups/jforum" id="facebook" class="m-l-10 m-r-10"><i class="fa fa-facebook"></i> Facebook</a>
              <a href="https://twitter.com/JapaneseForALL" id="twitter" class="m-l-10 m-r-10"><i class="fa fa-twitter"></i> Twitter</a>
              <a href="http://www.pikore.com/japanese_for_all" id="instagram" class="m-l-10 m-r-10"><i class="fa fa-instagram"></i> Instagram</a>
              <a href="https://plus.google.com/u/0/111661805493703743169/posts" id="gplus" class="m-l-10 m-r-10"><i class="fa fa-google-plus"></i> Google+</a>
              <a href="https://www.youtube.com/channel/UCgZjyV1QrdP2Cjhbjc6L5Kw" id="youtube" class="m-l-10 m-r-10"><i class="fa fa-youtube"></i> Youtube</a>
            </span> 
          </p>
          <div class="clearfix"></div>
        </div>
      </div>

    </div>
  </div>

  <div id="quickview" class="quickview-wrapper" data-pages="quickview">
    <ul class="nav nav-tabs">
      <li class=""> <a href="#quickview-notes" data-toggle="tab">Notes</a> </li>
      <li> <a href="#quickview-alerts" data-toggle="tab">Alerts</a> </li>
      <li class="active"> <a href="#quickview-chat" data-toggle="tab">Chat</a> </li>
    </ul>
    <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="fa fa-times"></i></a>
    <div class="tab-content">
      <div class="tab-pane fade  in no-padding" id="quickview-notes">
        <div class="view-port clearfix quickview-notes" id="note-views">
          <div class="view list" id="quick-note-list">
            <div class="toolbar clearfix">
              <ul class="pull-right ">
                <li> <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a> </li>
                <li> <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a> </li>
              </ul>
              <button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
            </div>
            <ul>
              <li data-noteid="1">
                <div class="left">
                  <div class="checkbox check-warning no-margin">
                    <input id="qncheckbox1" type="checkbox" value="1">
                    <label for="qncheckbox1"></label>
                  </div>
                  <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="right pull-right"> <span class="date">12/12/14</span> <a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a> </div>
              </li>
              <li data-noteid="2">
                <div class="left">
                  <div class="checkbox check-warning no-margin">
                    <input id="qncheckbox2" type="checkbox" value="1">
                    <label for="qncheckbox2"></label>
                  </div>
                  <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="right pull-right"> <span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a> </div>
              </li>
              <li data-noteid="2">
                <div class="left">
                  <div class="checkbox check-warning no-margin">
                    <input id="qncheckbox3" type="checkbox" value="1">
                    <label for="qncheckbox3"></label>
                  </div>
                  <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="right pull-right"> <span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a> </div>
              </li>
              <li data-noteid="3">
                <div class="left">
                  <div class="checkbox check-warning no-margin">
                    <input id="qncheckbox4" type="checkbox" value="1">
                    <label for="qncheckbox4"></label>
                  </div>
                  <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="right pull-right"> <span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a> </div>
              </li>
              <li data-noteid="4">
                <div class="left">
                  <div class="checkbox check-warning no-margin">
                    <input id="qncheckbox5" type="checkbox" value="1">
                    <label for="qncheckbox5"></label>
                  </div>
                  <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
                <div class="right pull-right"> <span class="date">12/12/14</span> <a href="#"><i class="fa fa-chevron-right"></i></a> </div>
              </li>
            </ul>
          </div>
          <div class="view note" id="quick-note">
            <div>
              <ul class="toolbar">
                <li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a> </li>
                <li><a href="#" data-action="Bold"><i class="fa fa-bold"></i></a> </li>
                <li><a href="#" data-action="Italic"><i class="fa fa-italic"></i></a> </li>
                <li><a href="#" class=""><i class="fa fa-link"></i></a> </li>
              </ul>
              <div class="body">
                <div>
                  <div class="top"> <span>21st april 2014 2:13am</span> </div>
                  <div class="content">
                    <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade no-padding" id="quickview-alerts">
        <div class="view-port clearfix" id="alerts">
          <div class="view bg-white">
            <div class="navbar navbar-default navbar-sm">
              <div class="navbar-inner"> <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax"> </a>
                <div class="view-heading"> Notications </div>
                <a href="#" class="inline action p-r-10 pull-right link text-master"> </a> </div>
            </div>
            <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
              <div class="list-view-group-container">
                <div class="list-view-group-header text-uppercase"> Calendar </div>
                <ul>
                  <li class="alert-list"> <a href="javascript:;" class="" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <p class="col-xs-height col-middle"> <span class="text-warning fs-10"><i class="fa fa-circle"></i></span> </p>
                    <p class="p-l-10 col-xs-height col-middle col-xs-9 overflow-ellipsis fs-12"> <span class="text-master">David Nester Birthday</span> </p>
                    <p class="p-r-10 col-xs-height col-middle fs-12 text-right"> <span class="text-warning">Today <br>
                      </span> <span class="text-master">All Day</span> </p>
                    </a> </li>
                  <li class="alert-list"> <a href="#" class="" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <p class="col-xs-height col-middle"> <span class="text-warning fs-10"><i class="fa fa-circle"></i></span> </p>
                    <p class="p-l-10 col-xs-height col-middle col-xs-9 overflow-ellipsis fs-12"> <span class="text-master">Meeting at 2:30</span> </p>
                    <p class="p-r-10 col-xs-height col-middle fs-12 text-right"> <span class="text-warning">Today</span> </p>
                    </a> </li>
                </ul>
              </div>
              <div class="list-view-group-container">
                <div class="list-view-group-header text-uppercase"> Social </div>
                <ul>
                  <li class="alert-list"> <a href="javascript:;" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <p class="col-xs-height col-middle"> <span class="text-complete fs-10"><i class="fa fa-circle"></i></span> </p>
                    <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12"> <span class="text-master link">Jame Smith commented on your status<br>
                      </span> <span class="text-master">“Perfection Simplified - Company Revox"</span> </p>
                    </a> </li>
                  <li class="alert-list"> <a href="javascript:;" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <p class="col-xs-height col-middle"> <span class="text-complete fs-10"><i class="fa fa-circle"></i></span> </p>
                    <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12"> <span class="text-master link">Jame Smith commented on your status<br>
                      </span> <span class="text-master">“Perfection Simplified - Company Revox"</span> </p>
                    </a> </li>
                </ul>
              </div>
              <div class="list-view-group-container">
                <div class="list-view-group-header text-uppercase"> Sever Status </div>
                <ul>
                  <li class="alert-list"> <a href="#" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <p class="col-xs-height col-middle"> <span class="text-danger fs-10"><i class="fa fa-circle"></i></span> </p>
                    <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12"> <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br>
                      </span> <span class="text-master">Server Load Exceeted. Take action</span> </p>
                    </a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade in active no-padding" id="quickview-chat">
        <div class="view-port clearfix" id="chat">
          <!-- Chat -->
              <div class="chat">
                  <center>
                  <div class="chat_content">
                      <div class="fb-page" data-href="https://www.facebook.com/JAPAN.FOR.ALL" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/JAPAN.FOR.ALL">Japanesse For All</a></blockquote></div></div>
                      <script id="sid0010000043064215696">(function() {function async_load(){s.id="cid0010000043064215696";s.src='http://st.chatango.com/js/gz/emb.js';s.style.cssText="width:300px;height:300px;";s.async=true;s.text='{"handle":"japanesseforall","styles":{"b":100,"v":0,"w":0,"surl":0}}';var ss = document.getElementsByTagName('script');for (var i=0, l=ss.length; i < l; i++){if (ss[i].id=='sid0010000043064215696'){ss[i].id +='_';ss[i].parentNode.insertBefore(s, ss[i]);break;}}}var s=document.createElement('script');if (s.async==undefined){if (window.addEventListener) {addEventListener('load',async_load,false);}else if (window.attachEvent) {attachEvent('onload',async_load);}}else {async_load();}})();
                      </script>
                  </div>
                  </center>
              </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="quickview-wrapper builder hidden-sm hidden-xs" id="builder">
    <div class="p-l-30 p-t-40 p-r-30 "> <a class="builder-close quickview-toggle pg-close" data-toggle="quickview" data-toggle-element="#builder" href="#"></a> <a class="builder-toggle" data-toggle="quickview" data-toggle-element="#builder"><i class="pg pg-theme"></i></a>
      <div class="scrollable full-height">
        <div class="p-l-10 p-r-50">
          <h5 class="semi-bold"> Color Options </h5>
          <p class=" hint-text no-margin"> Color makes it different </p>
          <p class="small hint-text m-b-20"> Customize and Preview your dashboard. </p>
          <a href="#" class="btn-toggle-theme b-a b-grey active theme-selector m-b-30" data-action="default"> <img alt="Theme default" src="assets/img/demo/theme_default.png" class="image-responsive-height">
          <div class="p-l-15 p-r-20 p-b-10 p-t-10">
            <p class="no-margin"> <span class="block font-montserrat text-uppercase fs-12 bold">Default</span> <span class="fs-11">pages default color palette</span> </p>
          </div>
          </a> <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="corporate"> <img alt="Theme corporate" src="assets/img/demo/theme_corporate.png" class="image-responsive-height">
          <div class="p-l-15 p-r-20 p-b-10 p-t-10">
            <p class="no-margin"> <span class="block font-montserrat text-uppercase fs-12 bold">Corporate</span> <span class="fs-11">give your an a profesional look</span> </p>
          </div>
          </a> <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="retro"> <img alt="Theme retro" src="assets/img/demo/theme_retro.png" class="image-responsive-height">
          <div class="p-l-15 p-r-20 p-b-10 p-t-10">
            <p class="no-margin"> <span class="block font-montserrat text-uppercase fs-12 bold">Retro</span> <span class="fs-11">calm color palette</span> </p>
          </div>
          </a> <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="unlax"> <img alt="Theme unlax" src="assets/img/demo/theme_unlax.png" class="image-responsive-height">
          <div class="p-l-15 p-r-20 p-b-10 p-t-10">
            <p class="no-margin"> <span class="block font-montserrat text-uppercase fs-12 bold">Unlax</span> <span class="fs-11">calm color palette</span> </p>
          </div>
          </a> <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="vibes"> <img alt="Thmeme vibes" src="assets/img/demo/theme_vibes.png" class="image-responsive-height">
          <div class="p-l-15 p-r-20 p-b-10 p-t-10">
            <p class="no-margin"> <span class="block font-montserrat text-uppercase fs-12 bold">Vibes</span> <span class="fs-11">calm color palette</span> </p>
          </div>
          </a> <a href="#" class="btn-toggle-theme b-a b-grey theme-selector m-b-30" data-action="abstract"> <img alt="Theme abstract" src="assets/img/demo/theme_abstract.png" class="image-responsive-height">
          <div class="p-l-15 p-r-20 p-b-10 p-t-10">
            <p class="no-margin"> <span class="block font-montserrat text-uppercase fs-12 bold">Abstract</span> <span class="fs-11">calm color palette</span> </p>
          </div>
          </a> </div>
      </div>
    </div>
  </div>-->
  <div class="overlay hide" data-pages="search">
    <div class="overlay-content has-results m-t-20">
      <div class="container-fluid"> <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22"> <a href="#" class="close-icon-light overlay-close text-black fs-16"> <i class="pg-close"></i> </a> </div>
      <div class="container-fluid">
        <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
        <br>
        <div class="inline-block">
          <div class="checkbox right">
            <input id="checkboxn" type="checkbox" value="1" checked="checked">
            <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
          </div>
        </div>
        <div class="inline-block m-l-10">
          <p class="fs-13">Press enter to search</p>
        </div>
      </div>
      <div class="container-fluid"> <span> <strong>suggestions :</strong> </span> <span id="overlay-suggestions"></span> <br>
        <div class="search-results m-t-40">
          <p class="bold">Pages Search Results</p>
          <div class="row">
            <div class="col-md-6">
              <div class="">
                <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                  <div> <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt=""> </div>
                </div>
                <div class="p-l-10 inline p-t-5">
                  <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                  <p class="hint-text">via john smith</p>
                </div>
              </div>
              <div class="">
                <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                  <div>T</div>
                </div>
                <div class="p-l-10 inline p-t-5">
                  <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                  <p class="hint-text">via pages</p>
                </div>
              </div>
              <div class="">
                <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                  <div><i class="fa fa-headphones large-text "></i> </div>
                </div>
                <div class="p-l-10 inline p-t-5">
                  <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                  <p class="hint-text">via pagesmix</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="">
                <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                  <div><i class="fa fa-facebook large-text "></i> </div>
                </div>
                <div class="p-l-10 inline p-t-5">
                  <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                  <p class="hint-text">via facebook</p>
                </div>
              </div>
              <div class="">
                <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                  <div><i class="fa fa-twitter large-text "></i> </div>
                </div>
                <div class="p-l-10 inline p-t-5">
                  <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                  <p class="hint-text">via twitter</p>
                </div>
              </div>
              <div class="">
                <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                  <div><i class="fa fa-google-plus large-text "></i> </div>
                </div>
                <div class="p-l-10 inline p-t-5">
                  <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                  <p class="hint-text">via google plus</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery JS --> 
  <script type="text/javascript" src="common/js/jquery/jquery-1.11.3.min.js"></script> 
  <!-- Bootstrap JS --> 
  <script type="text/javascript" src="common/js/bootstrap/bootstrap.min.js"></script> 
  <!-- Javascript --> 
  <script type="text/javascript" src="common/js/bootstrap/bootstrap.min.js"></script> 
  <script type="text/javascript" src="common/js/javascript.js"></script>

  <script src="common/js/pace.min.js" type="text/javascript"></script>
  <script src="common/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="common/js/modernizr.custom.js" type="text/javascript"></script>
  <script src="common/js/jquery-ui.min.js" type="text/javascript"></script>
  <script src="common/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="common/js/jquery-easy.js" type="text/javascript"></script>
  <script src="common/js/jquery.unveil.min.js" type="text/javascript"></script>
  <script src="common/js/jquery.bez.min.js"></script>
  <script src="common/js/jquery.ioslist.min.js" type="text/javascript"></script>
  <script src="common/js/jquery.actual.min.js"></script>
  <script src="common/js/jquery.scrollbar.min.js"></script>
  <script type="text/javascript" src="common/js/select2.min.js"></script>
  <script type="text/javascript" src="common/js/classie.js"></script>
  <script src="common/js/switchery.min.js" type="text/javascript"></script>
  <script src="common/js/d3.v3.js" type="text/javascript"></script>
  <script src="common/js/nv.d3.min.js" type="text/javascript"></script>
  <script src="common/js/utils.js" type="text/javascript"></script>
  <script src="common/js/tooltip.js" type="text/javascript"></script>
  <script src="common/js/interactiveLayer.js" type="text/javascript"></script>
  <script src="common/js/axis.js" type="text/javascript"></script>
  <script src="common/js/line.js" type="text/javascript"></script>
  <script src="common/js/lineWithFocusChart.js" type="text/javascript"></script>
  <script src="common/js/hammer.js"></script>
  <script src="common/js/jquery.mousewheel.js"></script>
  <script src="common/js/mapplic.js"></script>
  <script src="common/js/rickshaw.min.js"></script>
  <script src="common/js/MetroJs.min.js" type="text/javascript"></script>
  <script src="common/js/jquery.sparkline.min.js" type="text/javascript"></script>
  <script src="common/js/skycons.js" type="text/javascript"></script>
  <script src="common/js/bootstrap-datepicker.js" type="text/javascript"></script>
   
   
  <script src="common/js/pages.min.js"></script>
   
   
  <script src="common/js/dashboard.js" type="text/javascript"></script>
  <script src="common/js/scripts.js" type="text/javascript"></script>
  <script src="common/js/theme_switcher.js" type="text/javascript"></script>

  <script src="js/javascript.js" type="text/javascript"></script>

</body>
</html>