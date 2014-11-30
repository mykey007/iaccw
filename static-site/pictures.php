<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Media Pictures";
if (!isset($_GET['album'])) {
	$params = array('what_to_get'=>1, 'landing_page'=>1);
	$albums = $output->get_mediaPicts($params);
} else {
	$params = array('what_to_get'=>2, 'landing_page'=>1, 't_album'=>$_GET['album']);
	$albums = $output->get_mediaPicts($params);
}

if (is_array($albums)) { 
	if ($albums['json_picts']) { ?>
	<script type="text/JavaScript">
		var picObj = <?php echo $albums['json_picts']; ?>;
		var pic_page = <?php echo $albums['pic_page']; ?>;
		var tot_pages = <?php echo $albums['tot_pages']; ?>;
		var album = "<?php echo $_GET['album']; ?>";
	</script>		
<?php 	}
		if ($albums['picts']) {
		$page_txt = '<div id="pics_crumb"><a href="pictures.php" title="Back to Albums">Albums</a> > '.$albums['header'].'</div><div id="media_pics_counter">Picts (<span id="up_page">1</span>/'.$albums['tot_pics'].')</div>
				  <table width="657" border="0">
														  <tr>
														    <td>
														    	<div id="spotlight">  
																	<img src="'.$albums['picts'][0]['pic_name'].'" '.$albums['picts'][0]['orientation'].' border="0">	
														    	</div>
														    </td>
														  </tr>
														  <tr>
														  	<td>
														    	<div id="related_video">';
		if ($albums['tot_pics'] > 5) {
			$l_arrow = '<a onclick="media_pic_scroll(1,2);" href="javascript:void(0);">
					    	<img width="30" border="0" src="/images/arrow_left.png">
						</a>';
			$r_arrow = 	'<a onclick="media_pic_scroll(2,2);" href="javascript:void(0);">
						 	<img width="30" border="0" src="/images/arrow_right.png">
						 </a>';
		}	
			$page_txt .= '											<div id="ajax_arrow_left">'.$l_arrow.'</div><div id="thumbs">';	
														    		foreach ($albums['picts'] as $index=>$pic) {
																		$page_txt .= '<div id="rel_vid_'.$index.'" class="rel_vid rel_vid_margin">
																						<a onclick="media_pushpicspotlight('.$index.')" href="javascript:void(0);">
																							<img src="'.$pic['pic_name'].'" '.$pic['thumb_orientation'].' border="0">
																						</a>
																					  </div>';	
																	}
																	$page_txt .= '</div>';	
		//if ($albums['tot_pics'] > 5) {															
			$page_txt .= '								    			<div id="ajax_arrow_right">'.$r_arrow.'</div>';
		//}
		$page_txt .= '
																</div>
														    </td>
														  <tr>
														</table>';
		
	} else {
		$page_txt = "<div id='media_album'>";
		foreach ($albums as $key=>$album) {
			$page_txt .= "<p><a";
			if ($album['sub_album']) {
				$page_txt .= " href='javascript:void(0)' onClick='openSAlbum(".$key.")' title='".$album['album']."'>".$album['album']."</a></p>";
				$page_txt .= "<div class='s_album' id='s_album".$key."' style='display:none'>";
				foreach ($album['sub_album'] as $s_key=>$s_album) {
					$page_txt .= "<span id='s_album_a'><a href='pictures.php?album=".$key."_".$s_key."' title='".$s_album."'>".$s_album."</a></span>";
				}
				$page_txt .= "</div>";
			} else {
				$page_txt .= " href='pictures.php?album=".$key."' title='".$album['album']."'>".$album['album']."</a></p>";
			}
		} 
		$page_txt .= "</div>";
	}
} else {
	$page_txt = constr();
}
//$page_txt = constr();

$output -> DisplayTop($title, 6);
$output -> DisplayCenter('newsletter', 
						  array('page_title'=>'Pictures', 			 
							    'page_txt'=>$page_txt,
								'extra_page_table_class'=>'page_table_Media_picts'),
						  'picture_pic3bis.jpg');
						  
$update="January, 03 2008";
$output -> DisplayBottom();
?>