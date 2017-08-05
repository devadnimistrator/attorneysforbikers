<?php
/*
Template Name: Galleries
*/
get_header();?>
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
			
			<div id="dnn_ctr1097_ContentPane">
			   <!-- Start_Module_1097 -->
			   <div id="dnn_ctr1097_ModuleContent" class="DNNModuleContent ModLiveGalleryC">
				  <div id="LiveGallery1097" class="LiveGalleryDefault">
					 <ul class="LGAlbums">					 
						<?php
						$args = array(
							'numberposts' => 9999,
							'post_type' => 'page',
							'post_parent' => 133
						);
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) : setup_postdata($post);?>
						<li class="LGAlbum " style="width:300px;  height:100px">
						   <a id="LGAlbumAnchor109713" href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(array(80, 80));?>" style="width:80px; height:80px"></a>
						   <div class="LGAlbumInfo">
							  <a href="<?php the_permalink();?>"><span class="LGAlbumName" style=""><?php echo get_post_meta($post->ID, 'gal_title', true); ?></span></a><span class="small" style="">Last Updated On: <?php the_time('m/d/Y')?></span>
							  <p style=""><?php echo get_post_meta($post->ID, 'gal_desc', true); ?></p>
						   </div>
						</li>
						<?php endforeach; ?>
					 </ul>
					 <br style="clear:both">
					 <ul class="LGImages"></ul>
				  </div>
				  <br style="clear:both">
			   </div>
			   <!-- End_Module_1097 -->
			</div>
			
			
         </div>
      </div>
      <div class="clr"></div>
   </div>
</div>
<?php get_footer();?>