<?php
/*
Template Name: Videos
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
		<div id="dnn_ctr1102_ModuleContent" class="DNNModuleContent ModLiveContentC"> 
 <div class="pinboard">
      <a name="LiveContent1102"></a> 
      <div id="dnn_ctr1102_View_LC1102">
         <div id="LCElementsWrapper1102" class="elements_wrapper">
            <ul>
				<?php
				$args = array(
					'numberposts' => 9999,
					'post_type' => 'videos',
				);
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post);?>
						<li class="lc_element_item" style=" display: list-item;">
						  <p class="title">
							 <?php the_title();?>
						  </p>
						  <a id="LC11022" class="highslide " href="<?php echo get_post_meta($post->ID, 'video', true); ?>"><img alt="" src="<?php the_post_thumbnail_url(array(196, 130));?>" width="180"></a>
						  <p class="caption">
							<?php echo get_post_meta($post->ID, 'vid_desc', true); ?>
						  </p>
					   </li>
				<?php endforeach; ?>
               <!--<li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     9/11 Memorial Ride and Ceremony
                  </p>
                  <a id="LC11022" class="highslide " href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/9-11 Memorial Ride - Rue, Ziffra &amp; Caldwell.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11022eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11022Heading',headingOverlay: {fade: 1},captionId: 'LC11022Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '2'}); "> <img title="9/11 Memorial Ride and Ceremony" alt="9/11 Memorial Ride and Ceremony" src="https://i.ytimg.com/vi/q-GZ4lN0rF4/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=GZbBdvisK19_GFZP5K6vCIVD2-s" width="180"></a>
                  <p class="caption">
                     The annual 9-11 Memorial Rides are all about remembering the heroes, volunteers, and victims who lost their lives and family on September 11, 2001 and since.
                  </p>
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Bike Week - Chases on the Beach
                  </p>
                  <div class="highslide-heading" id="LC11023Heading">Bike Week - Chases on the Beach</div>
                  <a id="LC11023" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Bike Week 2012 - Chases on the Beach in New Smyrna Beach, FL.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11023eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11023Heading',headingOverlay: {fade: 1},captionId: 'LC11023Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '3'}); "> <img title="Bike Week - Chases on the Beach" alt="Bike Week - Chases on the Beach" src="https://i.ytimg.com/vi/6K7Oh8QmEzw/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=hShDwTUxeLO5fY5CB08i7FzfRu0" width="180"></a> 
                  <p class="caption">
                     The motorcycle attorneys at the Law Firm of Rue &amp; Ziffra traveled throughout Volusia and Flagler County during Bike Week. The personal injury law firm has been representing motorcyclists for over 30 years.
                  </p>                 
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Bike Week
                  </p>
                  <div class="highslide-heading" id="LC11024Heading">Bike Week</div>
                  <a id="LC11024" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Bike Week 2012 With The Biker Attorneys of Rue, Ziffra &amp; Caldwell.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11024eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11024Heading',headingOverlay: {fade: 1},captionId: 'LC11024Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '4'}); "> <img title="Bike Week" alt="Bike Week" src="https://i.ytimg.com/vi/sUSgUnQmQ94/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=8DhdyNS4tbHdGfE2hK2Sj8RWiyY" width="180"></a>
				  <p class="caption">
                     he Biker Attorneys traveled around Volusia and Flagler County during Bike Week. This video summarized their week and all of the venues they visited. Attorneys for Bikers!
                  </p>                 
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Bike Week at OB's
                  </p>
                  <div class="highslide-heading" id="LC11025Heading">Bike Week at OB's</div>
                  <a id="LC11025" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Bike Week at OB's in Deland, FL.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11025eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11025Heading',headingOverlay: {fade: 1},captionId: 'LC11025Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '5'}); "> <img title="Bike Week at OB's" alt="Bike Week at OB's" src="https://i.ytimg.com/vi/wBkeF-WQZsc/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=2yPQ5Ef2BlL769gzdb1h9blqfTY" width="180"></a>
				  <p class="caption">
                     The Famous Bike Week kicked off in Deland, Florida at Ob's with the Law Firm of Rue &amp; Ziffra. Attorneys For Bikers for over 30 years!
                  </p>                  
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Biketoberfest
                  </p>
                  <div class="highslide-heading" id="LC11026Heading">Biketoberfest</div>
                  <a id="LC11026" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Biketoberfest 2012 - Rue, Ziffra &amp; Caldwell.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11026eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11026Heading',headingOverlay: {fade: 1},captionId: 'LC11026Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '6'}); "> <img title="Biketoberfest" alt="Biketoberfest" src="https://i.ytimg.com/vi/GM0vW5ydt00/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=KHyONqS3wIwGKs7AReLNjU4d8FM" width="180"></a>
				  <p class="caption">
                     Rue &amp; Ziffra were out for Biketoberfest! It was great seeing everyone and we hope to see you next year!
                  </p>                 
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Biketoberfest at The White Eagle
                  </p>
                  <div class="highslide-heading" id="LC11027Heading">Biketoberfest at The White Eagle</div>
                  <a id="LC11027" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Biketoberfest at The White Eagle.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11027eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11027Heading',headingOverlay: {fade: 1},captionId: 'LC11027Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '7'}); "> <img title="Biketoberfest at The White Eagle" alt="Biketoberfest at The White Eagle" src="https://i.ytimg.com/vi/-ALuqfB3l0w/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=RtyAEuqnbP7Q1fjTo5JXEIzNd-8" width="180"></a>
				  <p class="caption">
                     Biketoberfest at The White Eagle Lounge.
                  </p>                  
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Biketoberfest
                  </p>
                  <div class="highslide-heading" id="LC11028Heading">Biketoberfest</div>
                  <a id="LC11028" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Biketoberfest with Rue, Ziffra &amp; Caldwell 2011.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11028eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11028Heading',headingOverlay: {fade: 1},captionId: 'LC11028Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '8'}); "> <img title="Biketoberfest" alt="Biketoberfest" src="https://i.ytimg.com/vi/eHMU0UM8ABk/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=UdPcC65AbDSwahFIL8CgqL-jjo8" width="180"></a>
				  <p class="caption">
                     Biketoberfest with Rue &amp; Ziffra
                  </p>
               </li>
               <li class="lc_element_item" style="display: list-item;">
                  <p class="title">
                     Bruce Rossmeyer Ride for Children
                  </p>
                  <div class="highslide-heading" id="LC11029Heading">Bruce Rossmeyer Ride for Children</div>
                  <a id="LC11029" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Bruce Rossmeyer Ride for Children - Camp Boggy Creek - Rue, Ziffra &amp; Caldwell 2012.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC11029eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC11029Heading',headingOverlay: {fade: 1},captionId: 'LC11029Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '9'}); "> <img title="Bruce Rossmeyer Ride for Children" alt="Bruce Rossmeyer Ride for Children" src="https://i.ytimg.com/vi/dIXHpxl6NSg/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=ZlWq_NnMI6j_x2vqDyH0qaqrPHE" width="180"></a>
				  <p class="caption">
                     The Bruce Rossmeyer Ride for Children was a motorcycle run benefiting Camp Boggy Creek, a year-round medical camp for children ages 7-16 who suffer from chronic or life-threatening illnesses.
                  </p>
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Daytona Bike Week
                  </p>
                  <div class="highslide-heading" id="LC110210Heading">Daytona Bike Week</div>
                  <a id="LC110210" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Daytona Bike Week 2012 - The Orginial First Turn - Port Orange, FL.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC110210eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC110210Heading',headingOverlay: {fade: 1},captionId: 'LC110210Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '10'}); "> <img title="Daytona Bike Week" alt="Daytona Bike Week" src="https://i.ytimg.com/vi/4C4CTOH_Ps8/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=lBAiF94dG0iH4z-O8njwIco9uq0" width="180"></a>
				  <p class="caption">
                     The biker attorneys from the Law Firm of Rue &amp; Ziffra rode out to First Turn Lounge during Bike Week.
                  </p>
               </li>
               <li class="lc_element_item" style="display: list-item;">
                  <p class="title">
                     9-11 Memorial Run
                  </p>
                  <div class="highslide-heading" id="LC110211Heading">9-11 Memorial Run</div>
                  <a id="LC110211" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Memorial Ride 9-11 Full Length.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC110211eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC110211Heading',headingOverlay: {fade: 1},captionId: 'LC110211Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '11'}); "> <img title="9-11 Memorial Run" alt="9-11 Memorial Run" src="https://i.ytimg.com/vi/iXhZhtVFafQ/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=R0lr2bAPNrEiI0XMXs5VzyG4b8M" width="180"></a>
				  <p class="caption">
                     Memorial Run Bike Ride 9/11 Flagler County FL- Sponsored by the HOG and Rue &amp; Ziffra.
                  </p>
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Rue &amp; Ziffra Helps
                  </p>
                  <div class="highslide-heading" id="LC110212Heading">Rue &amp; Ziffra Helps</div>
                  <a id="LC110212" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/Rue &amp; Ziffra Helps - Volusia County Grub Run.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC110212eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC110212Heading',headingOverlay: {fade: 1},captionId: 'LC110212Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '12'}); "> <img title="Rue &amp; Ziffra Helps" alt="Rue &amp; Ziffra Helps" src="https://i.ytimg.com/vi/pL87aDFi4Bo/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=VSfVEcGHOdKf2YNwudeD41eFkdI" width="180"></a>
				  <p class="caption">
                     Volusia County Grub Run- The Volusia County Grub run is a motorcycle run in Port Orange, Florida.
                  </p>
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Law Enforcement Memorial Ride
                  </p>
                  <div class="highslide-heading" id="LC110213Heading">Law Enforcement Memorial Ride</div>
                  <a id="LC110213" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/The 2012 Law Enforcement Memorial Ride- In Flagler County.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC110213eVideo',allowHeightReduction: false,headingId: 'LC110213Heading',headingOverlay: {fade: 1},captionId: 'LC110213Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '13'}); "> <img title="Law Enforcement Memorial Ride" alt="Law Enforcement Memorial Ride" src="https://i.ytimg.com/vi/6r9RsAsjJQ0/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=nde4BJbliSidJqi3Bn_3S-9yivY" width="180"></a>
				  <p class="caption">
                     Remembering fallen officers with a Memorial ride in Flagler County.
                  </p>
               </li>
               <li class="lc_element_item" style="display: list-item;">
                  <p class="title">
                     Volusia County Grub Run
                  </p>
                  <div class="highslide-heading" id="LC110214Heading">Volusia County Grub Run</div>
                  <a id="LC110214" class="highslide" href="http://www.attorneysforbikers.com/Portals/2/LiveContent/1102/Videos/-Volusia County Grub Run- - Rue, Ziffra &amp; Caldwell.mov.mp4" onclick="return hs.htmlExpand(this, {contentId: 'LC110214eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC110214Heading',headingOverlay: {fade: 1},captionId: 'LC110214Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '14'}); "> <img title="Volusia County Grub Run" alt="Volusia County Grub Run" src="https://i.ytimg.com/vi/uNPxfEDk56k/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=G2oaWZ8ZkeIEc4XVcnqyfVU-Yt8" width="180"></a>
				  <p class="caption">
                     Volusia County Grub Run benefiting the Children's Home Society and Second Harvest Food Bank.
                  </p>
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     St.Jude's Bike Run
                  </p>
                  <div class="highslide-heading" id="LC110215Heading">St.Jude's Bike Run</div>
                  <a id="LC110215" class="highslide" href="https://www.youtube.com/watch?v=Jwimu7ikTyw" onclick="return hs.htmlExpand(this, {contentId: 'LC110215eVideo',allowHeightReduction: false,dimmingOpacity: 0.75,headingId: 'LC110215Heading',headingOverlay: {fade: 1},captionId: 'LC110215Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102',width: 560,height: 380}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '15'}); "> <img title="St.Jude's Bike Run" alt="St.Jude's Bike Run" src="https://i.ytimg.com/vi/Jwimu7ikTyw/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=yqGW_I1p2WrozUayxgk_vy9aJKU" width="180"></a>
				  <p class="caption">
                     Raising money for St. Jude Children's Hospital.
                  </p>
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     9/11 Memorial Ride &amp; Ceremony
                  </p>
                  <div class="highslide-heading" id="LC110229Heading">9/11 Memorial Ride &amp; Ceremony</div>
                  <a id="LC110229" class="highslide" href="https://www.youtube.com/embed/Ur0rqcLYvp8" onclick="return hs.htmlExpand(this, {src: 'https://www.youtube.com/embed/Ur0rqcLYvp8', contentId: 'LC110229Frame',allowHeightReduction: false,headingId: 'LC110229Heading',headingOverlay: {fade: 1},captionId: 'LC110229Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102', objectType: 'iframe',width: 500,height: 500,objectWidth: 500,objectHeight: 500,objectLoadTime: 'after',preserveContent: false, scrolling: 'yes'}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '29'}); "> <img title="9/11 Memorial Ride &amp; Ceremony" alt="9/11 Memorial Ride &amp; Ceremony" src="https://i.ytimg.com/vi/Ur0rqcLYvp8/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=WAOTjlKGfPB15TLyPBs4DlSNxU4" width="180"></a>
				  <p class="caption">
                     The 9/11 10- Year Anniversary Memorial Run in Flagler County...Over 6,800 Bikers stretched over 11 miles on the motorcycle run.
                  </p>
               </li>
               <li class="lc_element_item" style="display: list-item;">
                  <p class="title">
                     Uninsured Motorist Practice Area
                  </p>
                  <div class="highslide-heading" id="LC110230Heading">Uninsured Motorist Practice Area</div>
                  <a id="LC110230" class="highslide" href="https://www.youtube.com/embed/mgq8anUhups" onclick="return hs.htmlExpand(this, {src: 'https://www.youtube.com/embed/mgq8anUhups', contentId: 'LC110230Frame',allowHeightReduction: false,headingId: 'LC110230Heading',headingOverlay: {fade: 1},captionId: 'LC110230Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102', objectType: 'iframe',width: 500,height: 500,objectWidth: 500,objectHeight: 500,objectLoadTime: 'after',preserveContent: false, scrolling: 'yes'}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '30'}); "> <img title="Uninsured Motorist Practice Area" alt="Uninsured Motorist Practice Area" src="https://i.ytimg.com/vi/mgq8anUhups/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=WhoWxO8QJUnv_hH0RHSJK4QWevM" width="180"></a>
				  <p class="caption">
                     At Rue &amp; Ziffra, we have 8 attorneys with over 30 years of combined experienced helping individuals receive compensation for motorcycle accidents, car accidents and other types of personal injury claims
                  </p>
               </li>
               <li class="lc_element_item" style="display: list-item;">
                  <p class="title">
                     Motorcycle Accident Commercial
                  </p>
                  <div class="highslide-heading" id="LC110231Heading">Motorcycle Accident Commercial</div>
                  <a id="LC110231" class="highslide" href="https://www.youtube.com/embed/BPKnmD-xLzU" onclick="return hs.htmlExpand(this, {src: 'https://www.youtube.com/embed/BPKnmD-xLzU', contentId: 'LC110231Frame',allowHeightReduction: false,headingId: 'LC110231Heading',headingOverlay: {fade: 1},captionId: 'LC110231Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102', objectType: 'iframe',width: 500,height: 500,objectWidth: 500,objectHeight: 500,objectLoadTime: 'after',preserveContent: false, scrolling: 'yes'}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '31'}); "> <img title="Motorcycle Accident Commercial" alt="Motorcycle Accident Commercial" src="https://i.ytimg.com/vi/BPKnmD-xLzU/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=9goXP6kT8IGhkJrstQqLEKWhYQQ" width="180"></a>
				  <p class="caption">
                     The Florida Motorcycle Accident Attorneys at Rue &amp; Ziffra, are in your community and on your side.
                  </p>
               </li>
               <li class="lc_element_item" style=" display: list-item;">
                  <p class="title">
                     Rue &amp; Ziffra Motorcycle Accidents
                  </p>
                  <div class="highslide-heading" id="LC110232Heading">Rue &amp; Ziffra Motorcycle Accidents</div>
                  <a id="LC110232" class="highslide" href="https://www.youtube.com/embed/x8wHoin6xqk" onclick="return hs.htmlExpand(this, {src: 'https://www.youtube.com/embed/x8wHoin6xqk', contentId: 'LC110232Frame',allowHeightReduction: false,headingId: 'LC110232Heading',headingOverlay: {fade: 1},captionId: 'LC110232Caption',captionOverlay: {fade: 1},preserveContent: false,transitions: ['expand','crossfade'],outlineType:'rounded-white',wrapperClassName: 'pinboard',slideshowGroup: '1102', objectType: 'iframe',width: 500,height: 500,objectWidth: 500,objectHeight: 500,objectLoadTime: 'after',preserveContent: false, scrolling: 'yes'}, {TabId: '364',ModuleId: '1102',PortalId: '2',ElementId: '32'}); "> <img title="Rue &amp; Ziffra Motorcycle Accidents" alt="Rue &amp; Ziffra Motorcycle Accidents" src="https://i.ytimg.com/vi/x8wHoin6xqk/hqdefault.jpg?custom=true&amp;w=196&amp;h=110&amp;stc=true&amp;jpg444=true&amp;jpgq=90&amp;sp=68&amp;sigh=cycayxKdhxdHrR6dvmvU2aOZlsg" width="180"></a>
				  <p class="caption">
                     The attorneys at Rue &amp; Ziffra are more experienced in handling motorcycle accident claims than most others! Why? Because our Florida Motorcycle Accident Attorneys are active bikers themselves!
                  </p>
               </li>-->
            </ul>
         </div>
      </div>
      <div style="clear: both">
      </div>
   </div>
</div>
			
         </div>
      </div>
      <div class="clr"></div>
   </div>
</div>
<?php get_footer();?>