    <div class="footer">
        <div class="center2">
            <div class="center">
            <div class="divfooterbox">
                <div class="footerbox log1">
                    <div class="footer-logo">
                        <a href="<?php echo get_bloginfo('home');?>"><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-footer.png" /></a>
                    </div>
                </div>
                <div class="footerbox">
                    <h6>Port Orange Office</h6>
                    <p>632 Dunlawton Ave.<br />
                    Port Orange, FL 32127<br />
                    (386) 788-7700<br />
                    (800) JUSTICE</p>
                </div>
                <div class="footerbox">
                    <h6>Deland Office</h6>
                    <p>101 North Woodland Blvd St. 213<br />
                    DeLand, FL 32720<br />
                    (386) 668-6292</p>
                </div>
                <div class="footerbox">
                    <h6>Palm Coast Office</h6>
                    <p>389 Palm Coast Parkway SW, St. 4<br />
                    Palm Coast, FL 32137<br />
                    (386) 439-0249</p>
                </div>
               <div class="footerbox log2">
                    <div class="footer-logo">
                       <a id="dnn_LOGO3_hypLogo" title="Attorneys For Bikers" href="<?php echo get_bloginfo('home');?>"><img id="dnn_LOGO3_imgLogo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-footer.png" alt="Attorneys For Bikers" /></a>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="footerend">
                <div class="footmenu">
                   <div id="dnn_FooterRightPane" class="menu">
						<div class="DnnModule DnnModule-DNN_HTML DnnModule-2886"><a name="2886"></a>
							<div class="noTitle">
								<div id="dnn_ctr2886_ContentPane"><!-- Start_Module_2886 -->
									<div id="dnn_ctr2886_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
										<div id="dnn_ctr2886_HtmlModule_lblContent" class="Normal">
											<?php
												if(function_exists('wp_nav_menu'))
													wp_nav_menu( array( 'menu_class' => 'footer-menu', 'container' => 'none', 'theme_location' => 'menu_footer') );
												else
													wp_page_menu('show_home=1&menu_class=footer-menu&title_li=&depth=1&sort_column=menu_order');
											?>
											<!--<ul>
												  <li><a href="/sitemap.aspx">Site Map</a></li>
												  <li><a href="/disclaimer">Disclaimer</a></li>
												  <li><a href="/privacy-policy">Privacy</a></li>
												  <li><dnn:LOGIN ID="LOGIN" runat="server"></dnn:LOGIN></li>
											</ul>-->
										</div>
									</div><!-- End_Module_2886 -->
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<a id="dnn_LOGIN_loginLink" title="Login" class="SkinObject" rel="nofollow" href="/wp-login.php">Login</a>
					<div class="clr"></div>
                </div>
                <div class="copyright">
					<span id="dnn_dnnCopyright_lblCopyright" class="SkinObject">Copyright 2017 by Attorneys for Bikers</span>
				</div>
                <div class="clr"></div>
            </div>
         </div>
        </div>
      </div>
	</div>
	<!-- BoldChat Visitor Monitor HTML v4.00 (Website=AttorneysforBikers.com,ChatButton=My AttorneysforBikers Floating Chat Button,ChatInvitation=My Invite Ruleset) -->
	<script type="text/javascript">
	  var _bcvma = _bcvma || [];
	  _bcvma.push(["setAccountID", "463364322084421743"]);
	  _bcvma.push(["setParameter", "WebsiteDefID", "3877728028373727875"]);
	  _bcvma.push(["setParameter", "InvitationDefID", "5718403227292407309"]);
	  _bcvma.push(["addFloat", {type: "chat", id: "2943162296638436417"}]);
	  _bcvma.push(["pageViewed"]);
	  (function(){
		var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
		vms.src = ('https:'==document.location.protocol?'https://':'http://') + "vmss.boldchat.com/aid/463364322084421743/bc.vms4/vms.js";
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
	  })();

	</script>
	<noscript>
	<a href="http://www.boldchat.com" title="Visitor Monitoring" target="_blank"><img alt="Visitor Monitoring" src="https://vms.boldchat.com/aid/463364322084421743/bc.vmi?wdid=3877728028373727875" border="0" width="1" height="1" /></a>
	</noscript>
	<!-- /BoldChat Visitor Monitor HTML v4.00 -->
	<input name="ScrollTop" type="hidden" id="ScrollTop" />
<script> 
	var wi = $(document).width();
	if(wi < 680){
		
	}
	else{
		$('.elements_wrapper').masonry({
		  // options
		  itemSelector: '.lc_element_item',
		  gutter: 15
		});
		
	}
	if(wi < 979){
		$('.menu-item-has-children').append('<span class="m_open"></span>');
		$('.m_open').on('click', function () {
			$('.menu-item-has-children ul').not($(this).prev()).slideUp();
			$(this).prev().slideToggle();
		});
	}
	
var frameListener;
$(window).load(function () {
    frameListener = setInterval("frameLoaded()", 50);
});
function frameLoaded() {
    var frame = $('iframe').get(0);
    var frame2 = $('iframe').get(1);
	
	var css = '<style type="text/css">' +
			  'body{color: #fff;}' +
			  '.supernova .form-all, .form-all {background-color: transparent;border: 1px solid transparent;}' +
			  '.supernova {background-color: transparent;}' +
			  '.form-all .form-textbox, .form-all .form-radio-other-input, .form-all .form-checkbox-other-input, .form-all .form-captcha input, .form-all .form-spinner input, .form-all .form-pagebreak-back, .form-all .form-pagebreak-next, .form-all .qq-upload-button, .form-all .form-error-message, .form-dropdown {background: #fff;padding: 5px;    line-height: 28px;    border-radius: 20px!important;    padding-left: 15px!important;    padding-right: 15px!important;    height: auto; -webkit-box-sizing: border-box;    -moz-box-sizing: border-box;    box-sizing: border-box;    width: 100%!important;}' +
			  '.form-all .form-textarea {background: #fff;line-height: 28px;    border-radius: 20px!important;    height: 74px; -webkit-box-sizing: border-box;    -moz-box-sizing: border-box;    box-sizing: border-box;    width: 100%;}' +
			  '[data-type="control_dropdown"] .form-input, [data-type="control_dropdown"] .form-input-wide { width: 100%!important;}' +
			  '</style>';
	
    if (frame != null) {
        var frmHead = $(frame).contents().find('head');
        if (frmHead != null) {
            clearInterval(frameListener); // stop the listener			
            frmHead.append(css); // clone existing css link
        }
    }
    if (frame2 != null) {
        var frmHead2 = $(frame2).contents().find('head');
        if (frmHead2 != null) {
            clearInterval(frameListener); // stop the listener			
            frmHead2.append(css); // clone existing css link
        }
    }
}
</script>
    <?php wp_footer();?>
</body>
</html>