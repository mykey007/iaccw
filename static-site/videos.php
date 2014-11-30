<?php
	require ("includes/clsPage.php"); 
//	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Media Videos";

//$page_txt = constr();

$page_txt = "

                        <script type='text/Javascript'>
				function open_video(video_id) {
					var conts = document.getElementsByName('videoName');
					for (var i=0; i<conts.length; i++) {
						if (conts[i].id != ('video'+video_id)) {
							conts[i].style.display = 'none';
						} else {
							conts[i].style.display = 'block';
						}
					}
				}
				var videoObj = new Object;
				var current_spotlight = 0;
				var displayed_rel_videos = 4;
   			</script>

                        <div id='video_cont'>
				<b>The \"Marchio Ospitalit&agrave; Italiana\" at TASTE OF ITALY 2012 goes on TV this year again!</b>
				<div class='video_sub'>
                                    <a href='http://www.ktla.com/news/local/viewerinfo/ktla-taste-of-italy-benefitting-italian-american-museum-of-los-angeles-iamla-20121008,0,7916882.story?utm_source=BenchmarkEmail&utm_campaign=Oct_10_2012_Email&utm_medium=email' target='_blank'>Watch KTLA News Report with Celestino Drago</a><br>
                                    <a href='http://www.ktla.com/news/local/viewerinfo/ktla-taste-of-italy-20121010,0,5317704.story?utm_source=BenchmarkEmail&utm_campaign=Oct_10_2012_Email&utm_medium=email' target='_blank'>Watch KTLA News Report with Locanda del Lago and Obika' Mozzarella Bar</a>
                                </div>
			</div>
                        
   			<div id='video_cont'>
   				<a href='#' onClick='open_video(1);video_gallery_populate(1);'>VIVA VINO L.A. 2011</a>
				<div id='video1' name='videoName'>
					<table id='video_cont_table' width='657' border='0' class='page_table page_table_Q'>
						<tr>
							<td>
								<div id='spotlight'>  
																	
									    	
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div id='related_video'>  
																	
								</div>
							</td>
						<tr>
					</table>
				</div>
			</div>

			<div id='video_cont'>
				<b>Italian restaurants around the world - Rai TV International</b>
				<div class='video_sub'><a href='http://www.youtube.com/watch?v=2kQHHv6nfmg&feature=player_embedded' target='_blank'>Watch video</a></div>
			</div>			

			<div id='video_cont'>
				<b>The \"Marchio Ospitalit&agrave; Italiana\" at TASTE OF ITALY goes on TV!</b>
				<div class='video_sub'><a href='http://www.youtube.com/iamofla' target='_blank'>Watch KTLA News Report</a></div>
			</div>
			
   			<div id='video_cont'>
				<b>Video of the Italian Chambers of Commerce Abroad</b>
				<div class='video_sub'><a href='#' onClick='open_video(2);'>Italian Version</a>&nbsp;|&nbsp;<a href='#' onClick='open_video(3);'>English Version</a>
					<div id='video2' name='videoName' class='gen_video'>
						<object width='370' height='285' classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'>
							<param name='flashvars' value='file=http://www.iaccw.net/media/videos/VIDEO_ASSOCAMERE_2010.flv'>
							<param name='movie' value='http://www.iaccw.net/media/player.swf'>
							<embed src='http://www.iaccw.net/media/player.swf' width='370' height='285' bgcolor='#FFFFFF' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' flashvars='file=http://www.iaccw.net/media/videos/VIDEO_ASSOCAMERE_2010.flv'>
						</object>
					</div>
					
					<div id='video3' name='videoName' class='gen_video'>
						<object width='370' height='285' classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0'>
							<param name='flashvars' value='file=http://www.iaccw.net/media/videos/Video2010English.flv'>
							<param name='movie' value='http://www.iaccw.net/media/player.swf'>
							<embed src='http://www.iaccw.net/media/player.swf' width='370' height='285' bgcolor='#FFFFFF' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer' flashvars='file=http://www.iaccw.net/media/videos/Video2010English.flv'>
						</object>
					</div>
				</div>		
			</div>
			";	

$output -> DisplayTop($title, 6);
$output -> DisplayCenter('newsletter', 
						array('page_title'=>'Videos', 'extra_page_table_class'=>'video_div',			 
												 'page_txt'=>$page_txt),'video_pic2.jpg');
//$update="January, 03 2008";
$output -> DisplayBottom();
?>


				