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
                        <div id="EDN_NewsOne" class="news eds_subCollection_news eds_news_NewsOne eds_template_List_Article_Default eds_templateGroup_newsListDefault eds_styleSwitchCriteria_portalSettingsSource">
							<div id="dnn_ctr1089_ViewEasyDNNNewsMain_ctl00_pnlListArticles">	
								<span id="dnn_ctr1089_ViewEasyDNNNewsMain_ctl00_dlArticleList" class="edn_1089_article_list_wrapper">
									<span valign="top">
<?php if (have_posts()) : ?>	
	<?php while (have_posts()) : the_post(); ?>							
							<div class="article details">
								<h1><?php the_title();?></h1>
								<h2 class="edn_subTitle"></h2>
								<div class="meta_text no_margin">Author: <?php the_author_posts_link();?><span class="separator">/</span><?php the_date('M d,Y')?><span class="separator">/</span>Categories: <?php the_category(', ');?></div>
								<div class="clear_content"></div>
								<div class="main_content">								
									<?php the_content();?>
									<div class="clear_content"></div>
								</div>
								<p class="meta_text eds_viewsComments">Number of views (<?php echo get_post_meta($post->ID,'views', true);?>)<span class="separator">/</span>Comments (<?php comments_number( '0', '1', '%' ); ?>)</p>
								<div class="box_list_container">Tags: <?php the_tags('');?></div>	
							</div>
	<?php endwhile; ?>
<?php endif; ?>
									</span>
								</span>
							</div>
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