<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");
	require_once "connection/DB.php";

$output = new Webpage(); 
$video_content = $output->get_VideoContent();
if ($video_content) { ?>
	<script type="text/JavaScript">
		var videoObj = <?php echo $video_content; ?>;
		var current_spotlight = 0;
		var displayed_rel_videos = 4;
	</script>
<?php 
	$page_txt = '<div id="videopics"><span class="active">Video</span> | <a href="/Q_mediagalleryPict.php">Pictures</a></div>
				 <table width="657" border="0" class="page_table page_table_Q">
														  <tr>
														    <td>
														    	<div id="spotlight">  
																	
														    	
														    	</div>
														    </td>
														  </tr>
														  <tr>
														  	<td>
														    	<div id="related_video">  
																	
														    	</div>
														    </td>
														  <tr>
														</table>';
	$extra_js = 'display_video_gallery();';
} else {
	$page_txt = constr();
}
$title=" - Ospitalit&agrave; Italiana Media Gallery";
$output -> DisplayTop($title);
$output -> DisplayCenter('about', 
           array('page_title'=>'Media Gallery', 
           			 'page_txt'=>$page_txt,
		             'extra_page_table_class'=>'page_table_Q_video', 	
            		 'menu_voice'=>array(array('url'=>'/Q_highlights.php', 'menu_name'=>'Project Highlights', 'high'=>0), 
            		 										 array('url'=>'/Q_mediagallery.php', 'menu_name'=>'Media Gallery', 'high'=>1), 
            		 										 array('url'=>'/Q_newspress.php', 'menu_name'=>'News & Press', 'high'=>0),
            		 										 array('url'=>'/Q_restaurantlist.php', 'menu_name'=>'Participating Restaurants', 'high'=>0))),'ospitalita.jpg');
	//$update="January, 03 2008";
$output -> DisplayBottom($extra_js);
?>