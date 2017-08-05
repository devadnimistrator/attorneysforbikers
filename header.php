<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xml:lang="en-US" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head id="Head">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php wp_title();?></title>
	<meta id="MetaCopyright" name="COPYRIGHT" content="Copyright <?php echo date('Y') ?> by Attorneys for Bikers" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
	<meta content="text/javascript" http-equiv="Content-Script-Type" />
	<meta content="text/css" http-equiv="Content-Style-Type" />
	<meta name="RESOURCE-TYPE" content="DOCUMENT" />
	<meta name="REVISIT-AFTER" content="1 DAYS" />
	<meta name="RATING" content="GENERAL" />
	
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-migrate.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/masonry.pkgd.min.js" type="text/javascript"></script>

	<style type="text/css">.MNormal{font-family: Tahoma, Arial, Helvetica;font-size: 11px;font-weight: normal;}.MNormalBold{font-family: Tahoma, Arial, Helvetica;font-size: 11px;font-weight: bold;}.MNormalRed{font-family: Tahoma, Arial, Helvetica;font-size: 12px;font-weight: bold;color: #ff0000;}.MHead{font-family: Tahoma, Arial, Helvetica;font-size: 20px;font-weight: normal;color: #333333;}.MSubHead{font-family: Tahoma, Arial, Helvetica;font-size: 11px;font-weight: bold;color: #003366;}.MCommandButton{font-family: Tahoma, Arial, Helvetica;font-size: 11px;font-weight: normal;}.MNormalTextBox{font-family: Tahoma, Arial, Helvetica;font-size: 12px;font-weight: normal;}</style>
	
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />    
        
			    <script type="text/javascript">
			      var _gaq = _gaq || [];
			      _gaq.push(['_setAccount', 'UA-51396338-1']);
			      _gaq.push(['_trackPageview']);
			 
			      (function() {
				    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			      })();
			    </script>
        
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php wp_head();?>
	<script>/*<![CDATA[*//* menu */
$(function() {  
    var pull        = $('#pull');  
        menu        = $('.nav-collapse .nav-pills');  
        menuHeight  = menu.height();  
  
    $(pull).on('click', function(e) {  
        e.preventDefault();  
        menu.slideToggle(); 
    });  
});
$(window).resize(function(){  
    var w = $(window).width();  
    if(w > 979 && menu.is(':hidden')) {  
        menu.removeAttr('style');  
    }  
});/*]]>*/</script>
</head>

<body id="Body" <?php body_class();?>>
	<div class="aspNetHidden"></div>
	<div id="LCABSBASE" style="position:absolute; top:0; left:0"></div>
	<div class="aspNetHidden"></div>
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/slides.min.jquery.js" type="text/javascript"></script>

	<div class="wrap <?php if(!is_front_page()){echo'inner';}?>">
		<div class="head">
			<div class="center">
				<div id="RZCNav">
					<div class="navbar">
						<div class="navbar-inner"><a class="btn btn-navbar" id="pull">Menu</a>
							<div class="nav-collapse collapse">
								<?php
									if(function_exists('wp_nav_menu'))
										wp_nav_menu( array( 'menu_class' => 'nav nav-pills', 'container' => 'none', 'theme_location' => 'menu_head') );
									else
										wp_page_menu('show_home=1&menu_class=nav-pills&title_li=&depth=1&sort_column=menu_order');
								?>
							</div><!-- END nav-collapse -->
						</div>
					</div>
				</div><!--End Nav-->
				<div class="leftright">
					<div id="dnn_HeadLeftPane" class="left social">
						<div class="DnnModule DnnModule-DNN_HTML DnnModule-2885">
							<a name="2885"></a>
							<div class="noTitle">
								<div id="dnn_ctr2885_ContentPane"><!-- Start_Module_2885 --><div id="dnn_ctr2885_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
								<div id="dnn_ctr2885_HtmlModule_lblContent" class="Normal">
								<a href="https://www.facebook.com/pages/Attorneys-For-Bikers/186631941393721?ref=hl" class="facebook" target="new"><em class="fa fa-facebook" aria-hidden="true"></em></a>
							<a href="https://twitter.com/rueziffra" target="new"><em class="fa fa-twitter" aria-hidden="true"></em></a>
							<a class="googleplus" href="https://plus.google.com/101491406698790425720/posts" target="new"><em class="fa fa-google-plus" aria-hidden="true"></em></a>
							<a href="" class="search"><em class="fa fa-search" aria-hidden="true"></em></a>
							</div>

							</div><!-- End_Module_2885 --></div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<div class="search">
						<span id="dnn_SEARCH_ClassicSearch">
							<span class="SkinObject" title="Google Web Search"><input id="dnn_SEARCH_WebRadioButton" type="radio" name="dnn$SEARCH$Search" value="WebRadioButton" checked="checked" /><label for="dnn_SEARCH_WebRadioButton">Web</label></span>
							<span class="SkinObject" title="Site Search"><input id="dnn_SEARCH_SiteRadioButton" type="radio" name="dnn$SEARCH$Search" value="SiteRadioButton" checked="checked" /><label for="dnn_SEARCH_SiteRadioButton">Site</label></span>
							<span class="searchInputContainer" data-moreresults="See More Results" data-noresult="No Results Found">
								<form><input name="s" type="text" maxlength="255" size="20" id="dnn_SEARCH_txtSearch" class="NormalTextBox" autocomplete="off" placeholder="Search..." /></form>
								<a class="dnnSearchBoxClearText"></a>
							</span>
							<a id="dnn_SEARCH_cmdSearch" class="SkinObject" href="javascript:__doPostBack(&#39;dnn$SEARCH$cmdSearch&#39;,&#39;&#39;)">Search</a>
						</span>						
					</div>
					<div id="dnn_HeadRightPane" class="right tel">
						<div class="DnnModule DnnModule-DNN_HTML DnnModule-2884">
							<a name="2884"></a>
							<div class="noTitle">
								<div id="dnn_ctr2884_ContentPane">
									<!-- Start_Module_2884 -->
									<div id="dnn_ctr2884_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
										<div id="dnn_ctr2884_HtmlModule_lblContent" class="Normal">
											<a href="tel:1-800-587-8423"><br />
											<em class="fa fa-phone" aria-hidden="true"></em>1-800-587-8423</a>
										</div>

									</div>
									<!-- End_Module_2884 -->
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="logo">
					<a id="dnn_dnnLOGO_hypLogo" title="Attorneys For Bikers" href="<?php echo get_bloginfo('home');?>"><img id="dnn_dnnLOGO_imgLogo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Attorneys For Bikers" /></a>
				</div>
				<div class="clr"></div>
			</div>
		</div>