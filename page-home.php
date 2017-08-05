<?php
/*
Template Name: Home
*/
get_header();?>

    <div class="banner">
        <div class="center2">
			<div class="center">
				  <div class="left">
					<div class="motor"><h2>Motorcycle Accident Attorneys</h2></div>
					<a href="https://www.youtube.com/watch?v=x8wHoin6xqk"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/play.png" class="playmotor"/></a>
				  </div>
				  <div class="right">
					<div id="dnn_MotorcyclePane" class="motorcycle">
						<div class="DnnModule DnnModule-DynamicForms DnnModule-1051">
							<a name="1051"></a>
							<div class="noTitle">
								<div id="dnn_ctr1051_ContentPane">
									<!-- Start_Module_1051 -->
									<div class="DynamicForms_MainPanel">
										<?php //echo do_shortcode( '[contact-form-7 id="4" title="Home form"]' ); ?>
										<script type="text/javascript" src="https://form.jotform.com/jsform/70256709972162"></script>
									</div>
									<!-- End_Module_1051 -->
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="clr"></div>
			</div>
        </div>
    </div>

    <div class="paragraph">
		<div id="dnn_LeftPaneSM" class="center">
			<div class="DnnModule DnnModule-DNN_HTML DnnModule-2883">
				<a name="2883"></a>
				<div class="DNNContainer_without_title">
					<div id="dnn_ctr2883_ContentPane">
						<!-- Start_Module_2883 -->
						<div id="dnn_ctr2883_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
							<div id="dnn_ctr2883_HtmlModule_lblContent" class="Normal">
								<ul>
									<li class="p1"><a href="/BLOG/category/36977/Biker-Spotlight"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/p1.png" /></a>
									<span class="txtparagraph">Biker Spotlight</span></li>
									<li class="p1"><a href="MOTORCYCLE-ACCIDENT/Motorcycle-Insurance"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/motorcycle-coverage-button-2016.jpg" /></a>
									<span class="txtparagraph">Motorcycle Coverage</span></li>
									<li class="p1"><a href="/Biker-Events"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/p3.png" /></a>
									<span class="txtparagraph">Biker Events</span></li>
									<li class="p1"><a href="/disclaimer-settlements"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/p4.png" /></a>
									<span class="txtparagraph">Verdicts and Settlements</span></li>
									<li class="p1"><a href="https://www.youtube.com/watch?v=x8wHoin6xqk"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/p5.png" /></a>
									<span class="txtparagraph">A Message From David Sweat</span></li>
									<li class="p1"><a href="/Seminars"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/p6.png" /></a>
									<span class="txtparagraph">Biker Seminar Registration</span></li>
								</ul>
								<div class="clr"></div>
							</div>
						</div>
						<!-- End_Module_2883 -->
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="video">
		<div class="center2">
			<div class="center">
				<div id="dnn_LeftEvents" class="left events">
					<div class="DnnModule DnnModule-DNN_Reports DnnModule-2896">
						<a name="2896"></a>
						<div class="Title_h3 SpacingBottom">
							<h3><span id="dnn_ctr2896_dnnTITLE_titleLabel" class="TitleH3">Upcoming Events <a class="btn-showall" href="/Biker-Events"></a></span></h3>
							<div id="dnn_ctr2896_ContentPane" class="Padding">
								<!-- Start_Module_2896 -->
								<div id="dnn_ctr2896_ModuleContent" class="DNNModuleContent ModDNNReportsC"></div>
								<!-- End_Module_2896 -->
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="right message">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/vrlinevideo.png" alt="" class="vrlinevideo"/>
					<div class="davidtxt">
						<a href="https://www.youtube.com/watch?v=x8wHoin6xqk" alt=""><img src="<?php bloginfo('stylesheet_directory'); ?>/img/play-messages.png" alt="" class="play-message"/></a>
						<h2>A Message From</h2> 
						<h1>David Sweat</h1>
					</div>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/david.png" alt="" class="davidimg"/>
				</div>
                <div class="clr"></div>
			</div>
			<div class="clr"></div>
		</div>
    </div>

    <div class="text">
        <div id="dnn_ContentPane" class="center">
			<div class="DnnModule DnnModule-DNN_HTML DnnModule-2881">
				<a name="2881"></a>
				<div class="noTitle">
					<div id="dnn_ctr2881_ContentPane">
						<!-- Start_Module_2881 -->
						<div id="dnn_ctr2881_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
							<div id="dnn_ctr2881_HtmlModule_lblContent" class="Normal">
<?php if (have_posts()) : ?>	
	<?php while (have_posts()) : the_post(); ?>
								<?php the_content();?>
	<?php endwhile; ?>
<?php endif; ?>
							</div>
						</div>
					<!-- End_Module_2881 -->
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
    </div>

    <div class="seminar">
        <div id="dnn_Footer1LinePane" class="center2">
			<div class="DnnModule DnnModule-DNN_HTML DnnModule-2897">
				<a name="2897"></a>
				<div class="Title_h4 SpacingBottom">
					<h4></h4>
					<div id="dnn_ctr2897_ContentPane" class="Padding">
						<!-- Start_Module_2897 -->
						<div id="dnn_ctr2897_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
							<div id="dnn_ctr2897_HtmlModule_lblContent" class="Normal">
								<div class="seminar-logo">
									<a href="/"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/home-ft-logo.png" /></a>
								</div>
							</div>
						</div>
						<!-- End_Module_2897 -->
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
    </div>

    <div class="verdict">
        <div class="center2">
            <div class="center">
                <div id="dnn_Footer2LLinePane" class="left">
					<div class="DnnModule DnnModule-DNN_HTML DnnModule-2898">
						<a name="2898"></a>
						<div class="Title_h3 SpacingBottom">
							<h3><span id="dnn_ctr2898_dnnTITLE_titleLabel" class="TitleH3">Verdicts and Settlements</span></h3>
							<div id="dnn_ctr2898_ContentPane" class="Padding">
								<!-- Start_Module_2898 -->
								<div id="dnn_ctr2898_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
									<div id="dnn_ctr2898_HtmlModule_lblContent" class="Normal">
										<p>You must read and accept the following disclaimer in order to view client testimonials provided by<br /> Rue &amp; Ziffra</p>
									</div>
								</div>
								<!-- End_Module_2898 -->
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
                <div id="dnn_Footer2RLinePane" class="right">
					<div class="DnnModule DnnModule-DNN_HTML DnnModule-2899">
						<a name="2899"></a>
						<div class="noTitle">
							<div id="dnn_ctr2899_ContentPane">
								<!-- Start_Module_2899 -->
								<div id="dnn_ctr2899_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
									<div id="dnn_ctr2899_HtmlModule_lblContent" class="Normal">
										<a href="/disclaimer-settlements" class="btn-verdict"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/btnReadAndAccept.png" /></a>
									</div>
								</div>
								<!-- End_Module_2899 -->
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="clr"></div>
            </div>
        </div>
    </div>

<?php get_footer();?>