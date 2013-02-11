
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=100%, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png"/>
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png"/>
    <title>About Us Page</title>
    <link href="<?=base_url()?>css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/bootstrap/style.css" type="text/css" rel="stylesheet"/>
        <link href="<?=base_url()?>css/bootstrap/custom.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/bootstrap/prettyPhoto.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/bootstrap/font-icomoon.css" type="text/css" rel="stylesheet"/>
    <link href="<?=base_url()?>css/bootstrap/font-awesome.css" type="text/css" rel="stylesheet"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.css"/>
    <![endif]-->
    
</head>

<body>
	<input type="hidden" id="baseurl" value="<?= base_url() ?>"/>
		 <?php $this->datestring = "%l %j%S %M  %Y %G:%i:%s";?>
<!--top menu-->
<section id="top-menu">
    <div class="container">
        <div class="row">
            <div class="span3 hidden-phone">
                
            </div>
            <div class="span9">
               <nav id="menu" class="clearfix pull-right">
                   <ul>
                   <?= $this->load->view('global/' . $this -> config_theme . '/menu') ?>
                   </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--header-->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="span4 logo">
                <a class="logo-img" href="<?=base_url()?>" title="YLN"><img src="<?=base_url()?>css/bootstrap/images/logo3.png" alt="Tabulate"></a>
            </div>
            <div class="span4">
              
            </div>
            <div class="span4 hidden-phone">
                    <section class="search clearfix">
                        <form id="search" class="input-append" method="post" action="<?=base_url()?>search/results">
                            <input class="span4" id="appendedInputButton" size="16" type="text" value="Search..." name="search"
                                   onfocus="if(this.value=='Search...') this.value=''" onblur="if(this.value=='') this.value='Search...'"/>
                            <input class="btn search-bt" type="submit" name="submit" value="" />
                        </form>
                    </section>
                </div>
        </div>
    </div>
</header>
<!--page header / breadcrumbs-->
<section class="breadcrumbs">
    <div class="container">
    	 <div class="page-header">
            <div class="row">
                <div class="span8">
                   
                    <div><a href="#">Home</a> &nbsp;&rsaquo;&nbsp; About Us</div>
                </div>
                <div class="span4 hidden-phone">
                  
                </div>
            </div>
        </div>
    </div>
</section>

<!--slideshow-->

 <?= $this->load->view('slideshow/slideshow') ?>


<!--container-->
<section id="container">
    <div class="container">
    	
    	
                    <?= $this->load->view('slideshow/hero') ?>
        
    
        <?php 
		$col1 = "6";
		$col2 = "6";
		
		if(isset($column1) && $column1 != NULL) { $col1 =  $column1; }
		
		if(isset($column2) && $column2 != NULL) { $col2 =  $column2; }
		if(!isset($sidebox) || $sidebox == NULL) { $col1 = '8'; $col2 = '4';}
		
		?>
        <div class="row">
            <section id="page" class="pull-left span<?=$col1?>">
              	<?= $this -> load -> view($main_content) ?>
            </section>

            <aside id="sidebar" class="pull-right span<?=$col2?>">
            	
                <section class="popular-posts">
                    <?php if(isset($sidebox) && $sidebox != NULL) { ?>
                    	<div class="well bg-color-gray-light fg-color-gray-dark">
                  
					<?=$this -> load -> view('sidebox/' . $sidebox) ?>
					</div>
					<? } ?>
                </section>
            </aside>
        </div>
    </div>
</section>

<!--footer-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span4">
                <p>Yangtzejiang Lawyers Network</p>
                <address>
                    <p><i class="icon-map-marker"></i> Street Name 432/2, London, 90210</p>
                    <p><i class="icon-phone"></i> (123) 456-7890</p>
                    <p><i class="icon-mobile-2"></i> (123) 456-7890</p>
                    <p><i class="icon-mail-3"></i> <a href="mailto:#">info@email.com</a></p>
                </address>
            </div>
            <div class="span8">
                <div class="row">
                    <div class="span8"></div>
                    <div class="span8">

                    </div>
                </div>
            </div>
            <div class="span4">
                <p class="heading">About Us</p>
                <p>The Yantzejiang Legal Network has 26 Chinese independent mid-sized law firm members throughout China with more
                	 than 860 lawyers providing a full range of legal services to satisfy the diverse needs of 
                	 their international and domestic clients.  </p>
                
            </div>
            <div class="span4">
                <p class="heading">YLN</p>
                <ul class="footer-navigate">
                    <?= $this->load->view('global/' . $this -> config_theme . '/menu') ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--footer menu-->
<section id="footer-menu">
    <div class="container">
        <div class="row">
            <div class="span4">
                <p class="copyright">&copy; Copyright 2012. Developed by <a href="http://www.redstudio.co.uk/">Redstudio Design Limited</a>.</p>
            </div>
            <div class="span8 hidden-phone">
                <ul class="pull-right">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.quicksand.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/superfish.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/hoverIntent.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.elastislide.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/smoothscroll.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/jquery.ui.totop.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/main.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/bootstrap/ajax-mail.js"></script>
     <script src="<?=base_url()?>js/chinamap.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</body>
</html>
