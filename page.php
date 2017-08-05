<?php get_header();?>
<div class="center">
   <div class="wrap2">
      <?php get_sidebar();?>
      <div class="rightSide">
         <div id="dnn_ContentPane" class="center">            
			<div class="DnnModule DnnModule-DNN_HTML DnnModule-1052">
               <a name="1052"></a>
               <div class="noTitle">
                  <div id="dnn_ctr1052_ContentPane">
                     <!-- Start_Module_1052 -->
                     <div id="dnn_ctr1052_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
                        <div id="dnn_ctr1052_HtmlModule_lblContent" class="Normal">
<?php if (have_posts()) : ?>	
	<?php while (have_posts()) : the_post(); ?>
							<h1 class="ContentHeadMain"><?php the_title();?></h1>
							<?php the_content();?>
	<?php endwhile; ?>
<?php endif; ?>
                        </div>
                     </div>
                     <!-- End_Module_1052 -->
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="clr"></div>
   </div>
</div>
<?php get_footer();?>