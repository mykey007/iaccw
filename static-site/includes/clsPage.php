<?php
//require_once "/home/users/web/b2495/ipw.iaccwnet/public_html/connection/DB.php";
//require_once "/connection/DB.php";
class Webpage
{
  // class Webpage attributes
  var $keywords = NULL;
  var $desc = NULL;
  var $header = "Italy America Chamber of Commerce - Los Angeles";

  function DisplayTop($title, $page=101)
  {
  	//Default page number very high. Don't want any button to be selected
  	
	?>
	<html xmlns="http://www.w3.org/1999/xhtml"/>
	<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Language" content="en-us" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
		<meta name="robots" content="index,follow" />
		<meta name="description" xml:lang="en-us" content="<?php $this->desc;?>" />
		<meta name="keywords" xml:lang="en-us" content="" />
		<title><?php echo $this->header.$title; ?></title>
		<link rel="stylesheet" type="text/css" href="/includes/css/main.css" />
		<link rel="shortcut icon" href="/favicon.ico"/>
		<script language="Javascript" type="text/Javascript" src="/includes/js/jquery-1.6.2.min.js"></script>
		<script language="Javascript" type="text/Javascript" src="/includes/js/light_menu.js"></script>
		<script language="Javascript" type="text/Javascript" src="/includes/js/main.js"></script>
		<!-- Javascript files -->

	</head>
	<body>
		<div align="center">
			<div id="top_div">
				<div class="top_date"><?php echo date("l, F d, Y");?></div>
				<!-- Facebook Badge START -->
				<div class="FB_page">
					<a href="http://www.facebook.com/pages/Italy-America-Chamber-of-Commerce-West-Los-Angeles/102567339835771" target="_blank" title="Visit our Page on Facebook">
						<img src="/images/FBlogo.jpg" border=0 width="30px" />
					</a>
				</div>
				<!-- Facebook Badge END -->
				<!-- <div class="bottom_FB"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="iaccw.net" send="false" layout="button_count" width="90" show_faces="true" action="recommend" font=""></fb:like></div>-->
			</div>
		</div>
		<div align="center" class="button_menu">
				<a href="/archive/about_us.php" <? if ($page!=1){?>onMouseOver="imgOn('img1')" onMouseOut="imgOff('img1')"<?}?>><? if ($page == 1 ) {?><img src="/images/buttons/grigio_01.jpg" name="img1" border="0"><?} else {?><img src="/images/buttons/blue_01.jpg" name="img1" border="0"><?}?></a>
				<a href="/archive/members.php" <? if ($page!=2){?>onMouseOver="imgOn('img2')" onMouseOut="imgOff('img2')"<?}?>><? if ($page == 2 ) {?><img src="/images/buttons/grigio_02.jpg" name="img2" border="0"><?} else {?><img src="/images/buttons/blue_02.jpg" name="img2" border="0"><?}?></a>
				<a href="/archive/trade.php" <? if ($page!=5){?>onMouseOver="imgOn('img3')" onMouseOut="imgOff('img3')"<?}?>><? if ($page == 5 ) {?><img src="/images/buttons/grigio_03.jpg" name="img3" border="0"><?} else {?><img src="/images/buttons/blue_03.jpg" name="img3" border="0"><?}?></a>
				<a href="/archive/events.php" <? if ($page!=4){?>onMouseOver="imgOn('img4')" onMouseOut="imgOff('img4')"<?}?>><? if ($page == 4 ) {?><img src="/images/buttons/grigio_04.jpg" name="img4" border="0"><?} else {?><img src="/images/buttons/blue_04.jpg" name="img4" border="0"><?}?></a>
				<a href="/archive/newsletter.php" id="mediabutton" onMouseOver="submenu();" onMouseOut="close_submenu();<?php if ($page!=6){?>imgOff('img5');<?php }?>"><? if ($page == 6 ) {?><img src="/images/buttons/grigio_05_new.jpg" name="img5" border="0"><?} else {?><img src="/images/buttons/blue_05_new.jpg" name="img5" border="0"><?}?></a>
				<a href="/archive/partners.php" <? if ($page!=7){?>onMouseOver="imgOn('img6')" onMouseOut="imgOff('img6')"<?}?>><? if ($page == 7) {?><img src="/images/buttons/grigio_06.jpg" name="img6" border="0"><?} else {?><img src="/images/buttons/blue_06.jpg" name="img6" border="0"><?}?></a>
				<a href="/archive/services.php"  <? if ($page!=3){?>onMouseOver="imgOn('img7')" onMouseOut="imgOff('img7')"<?}?>><? if ($page == 3 ) {?><img src="/images/buttons/grigio_07.jpg" name="img7" border="0"><?} else {?><img src="/images/buttons/blue_07.jpg" name="img7" border="0"><?}?></a>
				<a href="/archive/links.php" <? if ($page!=8){?>onMouseOver="imgOn('img8')" onMouseOut="imgOff('img8')"<?}?>><? if ($page == 8 ) {?><img src="/images/buttons/grigio_08.jpg" name="img8" border="0"><?} else {?><img src="/images/buttons/blue_08.jpg" name="img8" border="0"><?}?></a>
				<a href="/archive/contact_us.php" <? if ($page!=9){?>onMouseOver="imgOn('img9')" onMouseOut="imgOff('img9')"<?}?>><? if ($page == 9 ) {?><img src="/images/buttons/grigio_09.jpg" name="img9" border="0"><?} else {?><img src="/images/buttons/blue_09.jpg" name="img9" border="0"><?}?></a>
				<a href="/archive/" <? if ($page!=0){?>onMouseOver="imgOn('img10')" onMouseOut="imgOff('img10')"<?}?>><? if ($page == 0 ) {?><img src="/images/buttons/grigio_10.jpg" name="img10" border="0"><?} else {?><img src="/images/buttons/blue_10.jpg" name="img10" border="0"><?}?></a>
		</div>
		<div class="submenu" id ="mediasubmenu" onMouseOver="submenu();" onMouseOut="close_submenu();<?php if ($page!=6){?>imgOff('img5');<?php } else {?>imgOn('img5');<?php }?>">
			<div style="margin:5px 5px 5px 12px;">
			<a href="/archive/newsletter.php">Newsletters</a><br>
			<a href="/archive/videos.php">Videos</a><br>
			<a href="/archive/pictures.php">Pictures</a>
			</div>
		</div>
    <?php
}

/*
 * <?php if ($page!=6){?>imgOn('img5');<?php }?>
 * 
 * 
 */

function DisplayCenter($page, $params=0,$pict='',$comic=0) {
		if ($page=='index'){ ?>
			<div align="center">
				<img src="/images/banner_blue.gif" border="0">
	        </div>
			<div align="center"  class="index_line" valign="top">
				<img src="/images/line_blue.jpg" border="0" height="3">
			</div>
			<table align="center" height="220px" width="1024px" border="0">
				<tr>
					<td valign="middle">
						<!-- LEFT MENU BUTTONS -->
						<!-- TO ENABLE THE COMIC INSERT CLASS ATTRIBUTE button_left_bg -->
						<div <?php if ($comic) echo "class='buttons_left_bg'"; ?> >
							<div class="button_left_top">
								 <a href="/news.php" onMouseOver="imgOn('img11')" onMouseOut="imgOff('img11')" ><img src="/images/blue_11.jpg" border="0" name="img11"></a>
							</div>
							<div class="button_left">
								 <a href="/members.php" onMouseOver="imgOn('img12')" onMouseOut="imgOff('img12')" ><img src="/images/blue_12.jpg" border="0" name="img12"></a>
							</div>
							<div class="button_left">
								 <a href="/follow_our_members.php" onMouseOver="imgOn('img13')" onMouseOut="imgOff('img13')" ><img src="/images/blue_13bis.jpg" border="0" name="img13"></a>
							</div>
						</div>
					  <!-- LEFT MENU BUTTONS *** END-->
					</td>
					<td width="60%" valign="top">
						<div style="margin-top:20px">
						<p><span class="tbl_home">WELCOME</span><br>
							 <span class="tbl_text">to the Italy-America Chamber of Commerce West</span>
						</p>
						<p class="tbl_small_text">
							Founded in 1987, the Italy-America Chamber of Commerce West (IACCW)  is a private, non-profit organization whose mission is to promote and foster all economic and trade relations between Italy and the West Coast of the United States.<br><br>
							The goal of the IACCW is to provide our members with a broad range of services, emphasizing commercial assistance and referrals, in support of their business activities and expansion goals.
						</p>
					</div>
					</td>
				</tr>
		  </table>
<?php	} else if ($page=='new_index'){ ?>
			<div align="center">
				<img src="/images/banner_blue.gif" border="0">
	        </div>
			<div align="center"  class="index_line" valign="top">
				<img src="/images/line_blue.jpg" border="0" height="3">
			</div>
			<table align="center" height="220px" width="1024px" border="0">
				<tr>
					<td valign="middle">
						<!-- LEFT MENU BUTTONS -->
						<!-- TO ENABLE THE COMIC INSERT CLASS ATTRIBUTE button_left_bg -->
						<div <?php if ($comic) echo "class='buttons_left_bg'"; ?> >
							<div class="button_left_top">
								 <a href="/news.php" onMouseOver="imgOn('img11')" onMouseOut="imgOff('img11')" ><img src="/images/blue_11.jpg" border="0" name="img11"></a>
							</div>
							<div class="button_left">
								 <a href="/follow_our_members.php" onMouseOver="imgOn('img13')" onMouseOut="imgOff('img13')" ><img src="/images/blue_13bis.jpg" border="0" name="img13"></a>
							</div>
							<div class="button_left_Q">
								 <a href="/Q_highlights.php"><img src="/images/logoQ.jpg" border="0"></a>
							</div>
						</div>
					  <!-- LEFT MENU BUTTONS *** END-->
					</td>
					<td width="60%" valign="top">
						<div style="margin-top:20px">
						<p><span class="tbl_home">WELCOME</span><br>
							 <span class="tbl_text">to the Italy-America Chamber of Commerce West</span>
						</p>
						<p class="tbl_small_text">
							Founded in 1987, the Italy-America Chamber of Commerce West (IACCW)  is a private, non-profit organization whose mission is to promote and foster all economic and trade relations between Italy and the West Coast of the United States.<br><br>
							The goal of the IACCW is to provide our members with a broad range of services, emphasizing commercial assistance and referrals, in support of their business activities and expansion goals.
						</p>
					</div>
					</td>
				</tr>
		  </table>
<?php 	} else if ($page=='admin'){ ?>
			<div align="center" class="flash_menu">
				<!--<object height="150px" width="950px" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
				<param value="" name="movie"/>
				<param value="high" name="quality"/>
				<embed height="150px" width="950px" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" value=""/>
				</object>-->
		  </div>
			<div align="center">
				<img src="/images/line_blue.jpg" border="0">
			</div>
			<table align="center" height="220px" width="1024px" border="0">
				<tr>
					<td valign="top">
						<div>
						 <p><h1><?=$params['page_title'];?></h1></p>
					</div>
					</td>
				</tr>
		  </table>
<?php   } else if (in_array($page, array('newsletter','news','partners','links','contacts', 'follow_members'))){
			$this->_displayInternalNoMenu($params,$pict);
		} else {
			$this->_displayInternal($params,$pict);
		}
}

function _displayInternal($params,$pict=''){ 
		if (!$params['target']) {
			$params['target'] = '_self';
		} 
		?>
		<table width="1024px" height="100px" align="center" border="0">
		  <tr>
		    <td valign="top">
		    	<img src="/images/<?=$pict;?>" width="360px" height="200px">
		    	<div class="pict">
		    		<img src="/images/line_blue.jpg" width="362px" height="3px">
		    	</div>
		    	<div class="menu_page">
		    		<?php foreach($params['menu_voice'] as $arr ){ ?>
		    			<img src="/images/line_grey.jpg" border="0" width="320px" height="2px" class="txt_align">
		    			<div <? if($arr['high']){?>class="menu_txt_high" id="menu_txt_high"<?php } else {?>class="menu_txt" id="menu_txt"<?php } ?> ><a href="<?=$arr['url']?>" target="<?=$arr['target']?>"><span class="margin_txt"><?=$arr['menu_name']?></span></a></div>
		    		<? } ?>
		    		<img src="/images/line_grey.jpg" border="0" width="320px" height="2px" class="txt_align">
		    	</div>	
		    </td>
		    <td valign="top"><div><img src="/images/line_blue.jpg" width="662px" height="3"></div>
		    	<div style="margin-left: 15px;">
		     		<p><h1><?=$params['page_title'];?></h1></p>
		     		<div class="page_table <?=$params['extra_page_table_class']?>"><?=$params['page_txt'];?></div>
		  	  </div>
		    	</td>
		  </tr>
		</table>
	<?php
}

function _displayInternalNoMenu($params,$pict='') { ?>
		<table width="1024px" align="center" border="0">
		  <tr>
		    <td valign="top" width="360px">
		    	<img src="/images/<?=$pict;?>" width="360px" height="200px">
		    </td>
		    <td valign="top"><div><img src="/images/line_blue.jpg" width="662px" height="3"></div>
		    	<div style="margin-left: 15px;">
		     		<h1><?=$params['page_title'];?></h1>
		     		<div class="page_table <?=$params['extra_page_table_class']?>" style="margin-right: 30px;margin-bottom: 10px"><?=$params['page_txt'];?></div>
		  	  </div>
		    	</td>
		  </tr>
		  <tr>
		  	<td colspan="2">
		  	<?php if ($params['page_txt_left']) { ?>
			  	<div style="margin-top: 2px;">
			    	<img src="/images/line_blue.jpg" width="362px" height="3px">
			    </div>	
		  	  <div class="no_menu_page">
		    		<?php echo $params['page_txt_left']; ?>
		    	</div>
		    <? } ?>
		  	</td>	
		  </tr>
		</table>
	<?php
}

function DisplayBottom($js_code='', $no_display_flash=0) {
	?>
		<div align="center" class="m_top">
			<img src="/images/line_blue.jpg" border="0">
	 </div>
<?php if (!$no_display_flash) { ?>	 
	 <div align="center">
	 <div class="footer_flash_menu">
	 	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="100%" height="100%">
		  <param name="allowScriptAccess" value="sameDomain" />
		  <param name="movie" value="/theLookingGlassV4.swf">
		  <param name="menu" value="true" />
			<param name="quality" value="high" />
			<param name="scale" value="noscale" />
			<param name="salign" value="lt" />
		  <param name="quality" value="high">
		  <embed src="/theLookingGlassV4.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" scale="noscale" salign="lt"  width="100%" height="100%"></embed>
		</object>
	 </div>
	</div>
	 <div align="center">
			<img src="/images/line_blue.jpg" border="0">
	 </div>
<?php } ?>
	 	  <table width="1024px" align="center" border="0">
	 	  	<tr>
	 	  		<td width="33%">
	 	  			<div class="copy_left">Copyright <?=date('Y', time())?> &copy; IACCW. All Rights Reserved.</div>
	 	  		</td>
	 	  		<td width="33%">
	 	  			<div align="center"><img src="//shield.sitelock.com/shield/www.iaccw.net" id="sl_shield_image" style="cursor: pointer;" width="90px"/><script id="sl_shield" type="text/javascript" src="//shield.sitelock.com/sitelock.js" language="javascript"></script></div>
	 	  		</td>	
	      	<td width="33%">
	      		<div class="copy_right">Development By: <a href="mailto:alessandro@asorrentino.com"><img src="/images/logoAS-final.png" width="20" align="middle" border="0"></a>&nbsp;-&nbsp;Design By: <a href="mailto:daniela@maniezzo.com"><img src="/images/logoDM.png" width="20" border="0" align="middle"></a></div>
	      	</td>	
	     </tr>
	    </table>  
<?php 
	if ($js_code) { ?>
		<script type="text/JavaScript">
			<?php echo $js_code; ?>	
		</script>
<?php } ?>	
    </body>
</html>
	<?php
}

function get_ComicFlag() {
	if (!isset($_COOKIE['comic_flag'])) {
		global $connect;
		echo 'coockie not set<br>';
		$sql = "SELECT 
		  		comic_flag, end_date 
		  		FROM iaccw_comic  
		  		WHERE start_date < NOW() and end_date > NOW()";
		
		$Result = mysql_query($sql, $connect) or die(mysql_error());
		$row = mysql_fetch_assoc($Result);
		if ($row['comic_flag']) {
			$expire = strtotime($row['end_date']);
			setcookie('comic_flag', 1, $expire, '/', 'www.iaccw.net');
			return 1;
		} else {
			echo '****setting 0 cookie';
			setcookie('comic_flag', 36, time()+3600, '/', 'www.iaccw.net');
			return 0;
		}
	} else {
		echo 'cookie set';	
		return 	$_COOKIE['comic_flag'];
	}
}

function get_VideoContent() {
	global $connect;
	$sql = "SELECT 
	  		external_link, url, spotlight, YT_video_id, description   
	  		FROM iaccw_video_content 
	  		WHERE active=1   
	  		ORDER BY insert_date DESC";
	//echo $sql.'<br>';
	$Result = mysql_query($sql, $connect) or die(mysql_error());
	if (mysql_num_rows($Result)) {
		//echo mysql_num_rows($Result);
		$count = 1;
		while($row = mysql_fetch_assoc($Result)) {
			if ($row['spotlight']) {
				$spotlight[0]['url'] = $row['url'];
				$spotlight[0]['YT_video_id'] = $row['YT_video_id'];
			} else {
				if ($row['external_link']) {
					$videos[$count]['external_link'] = $row['external_link'];
				}
				$videos[$count]['description'] = $row['description'];
				$videos[$count]['url'] = $row['url'];
				$videos[$count]['YT_video_id'] = $row['YT_video_id'];
				$count++;
			}
		}
		if ($spotlight && $videos) {
			array_unshift($videos, $spotlight[0]);
		} else if (!$videos) {
			$videos = $spotlight;	
		}
		/*echo '<pre>';
		print_r($videos);
		echo '</pre>';die;*/
		if ($videos) {
			return json_encode($videos);	
		} else {
			return false;
		}
	}	
}

function get_media_VideoContent($content_type) {
	global $connect;
	$sql = "SELECT 
	  		external_link, url, spotlight, YT_video_id    
	  		FROM iaccw_media_video_content 
	  		WHERE active=1   
	  		ORDER BY insert_date DESC";
	//echo $sql.'<br>';
	$Result = mysql_query($sql, $connect) or die(mysql_error());
	//echo mysql_num_rows($Result);
	if (mysql_num_rows($Result)) {
		$count = 1;
		while($row = mysql_fetch_assoc($Result)) {
			if ($row['spotlight']) {
				$spotlight[0]['url'] = $row['url'];
				$spotlight[0]['YT_video_id'] = $row['YT_video_id'];
			} else {
				if ($row['external_link']) {
					$videos[$count]['external_link'] = $row['external_link'];
				}
				$videos[$count]['url'] = $row['url'];
				$videos[$count]['YT_video_id'] = $row['YT_video_id'];
				$count++;
			}
		}
		if ($spotlight && $videos) {
			array_unshift($videos, $spotlight[0]);
		} else if (!$videos) {
			$videos = $spotlight;	
		}
		/*echo '<pre>';
		print_r($videos);
		echo '</pre>';die;*/
		if ($videos) {
			return json_encode($videos);	
		} else {
			return false;
		}
	}	
}

function get_PicContent() {
	$pics_list = scandir('images/iaccw_Q_picts/');
	if (count($pics_list)>3) {
		foreach ($pics_list as $key=>$pic_name) {
			if (preg_match('/\.png|\.jpg$/', $pic_name)) {
				$img_dims = getimagesize('images/iaccw_Q_picts/'.$pic_name);
				$results[] = array('name'=>$pic_name, 'width'=>$img_dims[0], 'height'=>$img_dims[1]);
			}
		}
	}
	if ($results) {
		return json_encode($results);	
	} else {
		return FALSE;	
	}
}

function get_mediaPicts($params) {
//print_r($params);die;
	if (!is_array($params)) {
		return FALSE;
	}
	extract($params);
	switch ($what_to_get) {
		//Albums - for pictures.php
		case 1: 
			$album_list = scandir('media/pictures/');
			$count = 0;
			foreach($album_list as $key=>$album_name) {
				if ($album_name != '.' && $album_name != '..') {
					$results[$count]['album'] = $album_name; 
					$sub_albums = scandir('media/pictures/'.$album_name);
					if (!empty($sub_albums)) {
						$sub_count = 0;	
						foreach($sub_albums as $sub_key=>$sub_album_name) {	
							if ($sub_album_name != '.' && $sub_album_name != '..' && !preg_match('/\.png|\.jpg|\.JPG$/', $sub_album_name)) {
								$results[$count]['sub_album'][] = $sub_album_name;
							} else if ($sub_count < 4 && $sub_album_name != '.' && $sub_album_name != '..' && preg_match('/\.png|\.jpg|\.JPG$/', $sub_album_name)) {
								$results[$count]['prev_picts'][$sub_count]['pic'] = 'media/pictures/'.$album_name.'/'.$sub_album_name;
								$img_dims = getimagesize('media/pictures/'.$album_name.'/'.$sub_album_name);	
								$results[$count]['prev_picts'][$sub_count]['thumb_orientation'] = ($img_dims[0] > $img_dims[1]) ? 'width="120" height="90"' : 'width="60" height="90"';
								$sub_count ++;
							}
						}
					}
					
					$count++;
				}
				
			}
			if ($results) {
				/*echo '<pre>';
				print_r($results);
				echo '</pre>';die;*/
				return $results;	
			}
			return FALSE;
		break;
		
		//Picts - for pictures.php
		case 2:
			preg_match('/^(\d+)(_|)(\d+|)$/', $t_album, $matches);
			$album = $matches[1];
			$sub_album = $matches[3];
			if (is_numeric($album)) {
				$count = 0;
				$album_list = scandir('media/pictures/');
				foreach($album_list as $key=>$album_name) {
					if ($album_name != '.' && $album_name != '..') {
						if ($count == $album) {
							$selected_album = $album_name;
							if (is_numeric($sub_album)) {
								$sub_album_list = scandir('media/pictures/'.$album_name);
								if (!empty($sub_album_list)) {
									$sub_count = 0;
									foreach($sub_album_list as $sub_key=>$sub_album_name) {
										if ($sub_album_name != '.' && $sub_album_name != '..' && !preg_match('/\.png|\.jpg$/', $sub_album_name)) {
											if ($sub_count == $sub_album) {
												$selected_sub_album = $sub_album_name;
												break;	
											}
											$sub_count++;
										}
									}
								}
							}
							break;
						}
						$count++;	
					}
				}
			}
			if ($selected_album) {
				$picts_list = scandir('media/pictures/'.$selected_album.'/'.$selected_sub_album);
				$count = 0;
				if ($landing_page) {
					$results['header'] = $selected_album;
					$results['header'] .= ($selected_sub_album) ? " > $selected_sub_album" : '';
				}
				foreach ($picts_list as $key=>$pict) {
					if (preg_match('/\.png|\.jpg|\.JPG$/', $pict)) {
						$results['picts'][] = $pict;
					}
				}
				if ($landing_page) {
					$results['tot_pics'] = count($results['picts']);
				}	
				if ($p_page) {
					$start = $p_page * 4;
				}
				if (!$start) {
					$start = 0;
				}
				$results['picts'] = array_slice($results['picts'], $start, 4, true);
				$count = 0;
				foreach ($results['picts'] as $index=>$pic_name) {
					$count++;
					$img_dims = getimagesize('media/pictures/'.$selected_album.'/'.$selected_sub_album.'/'.$pic_name);	
					$tmp['picts'][$index]['pic_name'] = 'media/pictures/'.$selected_album.'/'.$selected_sub_album.'/'.$pic_name;
					$tmp['picts'][$index]['orientation'] = ($img_dims[0] > $img_dims[1]) ? 'width="510" height="340"' : 'width="227" height="340"';
					$tmp['picts'][$index]['thumb_orientation'] = ($img_dims[0] > $img_dims[1]) ? 'width="120" height="90"' : 'width="60" height="90"';
				}
				$results['picts'] = $tmp['picts'];
				if ($landing_page) {
					$results['json_picts'] = json_encode($tmp['picts']);
					$results['pic_page'] = 0; 
					$results['tot_pages'] = ceil($results['tot_pics']/4); 
				} else {
					$results['pic_num'] = $p_page * 4;
					$results['p_page'] = $p_page;
					$results['pic_qty'] = $count;
					return json_encode($results);
				}
				return $results;
			}
		break;
	
	
		//Albums - for Q_mediagallery_pic
		case 3: 
			$album_list = scandir('images/iaccw_Q_picts/');
			$count = 0;
			foreach($album_list as $key=>$album_name) {
				if ($album_name != '.' && $album_name != '..') {
					$results[$count]['album'] = $album_name; 
					$sub_albums = scandir('images/iaccw_Q_picts/'.$album_name);
					if (!empty($sub_albums)) {
						$sub_count = 0;	
						foreach($sub_albums as $sub_key=>$sub_album_name) {	
							if ($sub_album_name != '.' && $sub_album_name != '..' && !preg_match('/\.png|\.jpg|\.JPG$/', $sub_album_name)) {
								$results[$count]['sub_album'][] = $sub_album_name;
							} else if ($sub_count < 4 && $sub_album_name != '.' && $sub_album_name != '..' && preg_match('/\.png|\.jpg|\.JPG$/', $sub_album_name)) {
								$results[$count]['prev_picts'][$sub_count]['pic'] = 'media/pictures/'.$album_name.'/'.$sub_album_name;
								$img_dims = getimagesize('images/iaccw_Q_picts/'.$album_name.'/'.$sub_album_name);	
								$results[$count]['prev_picts'][$sub_count]['thumb_orientation'] = ($img_dims[0] > $img_dims[1]) ? 'width="120" height="90"' : 'width="60" height="90"';
								$sub_count ++;
							}
						}
					}
					
					$count++;
				}
				
			}
			if ($results) {
				/*echo '<pre>';
				print_r($results);
				echo '</pre>';die;*/
				return $results;	
			}
			return FALSE;
		break;
		
		//Picts - for Q_mediagallery_pic
		case 4:
			preg_match('/^(\d+)(_|)(\d+|)$/', $t_album, $matches);
			$album = $matches[1];
			$sub_album = $matches[3];
			if (is_numeric($album)) {
				$count = 0;
				$album_list = scandir('images/iaccw_Q_picts/');
				foreach($album_list as $key=>$album_name) {
					if ($album_name != '.' && $album_name != '..') {
						if ($count == $album) {
							$selected_album = $album_name;
							if (is_numeric($sub_album)) {
								$sub_album_list = scandir('images/iaccw_Q_picts/'.$album_name);
								if (!empty($sub_album_list)) {
									$sub_count = 0;
									foreach($sub_album_list as $sub_key=>$sub_album_name) {
										if ($sub_album_name != '.' && $sub_album_name != '..' && !preg_match('/\.png|\.jpg$/', $sub_album_name)) {
											if ($sub_count == $sub_album) {
												$selected_sub_album = $sub_album_name;
												break;	
											}
											$sub_count++;
										}
									}
								}
							}
							break;
						}
						$count++;	
					}
				}
			}
			if ($selected_album) {
				$picts_list = scandir('images/iaccw_Q_picts/'.$selected_album.'/'.$selected_sub_album);
				$count = 0;
				if ($landing_page) {
					$results['header'] = $selected_album;
					$results['header'] .= ($selected_sub_album) ? " > $selected_sub_album" : '';
				}
				foreach ($picts_list as $key=>$pict) {
					if (preg_match('/\.png|\.jpg|\.JPG$/', $pict)) {
						$results['picts'][] = $pict;
					}
				}
				if ($landing_page) {
					$results['tot_pics'] = count($results['picts']);
				}	
				if ($p_page) {
					$start = $p_page * 4;
				}
				if (!$start) {
					$start = 0;
				}
				$results['picts'] = array_slice($results['picts'], $start, 4, true);
				$count = 0;
				foreach ($results['picts'] as $index=>$pic_name) {
					$pic_url = ($selected_sub_album) ? 'images/iaccw_Q_picts/'.$selected_album.'/'.$selected_sub_album.'/'.$pic_name : 'images/iaccw_Q_picts/'.$selected_album.'/'.$pic_name;
					$count++;
					$img_dims = getimagesize($pic_url);	
					$tmp['picts'][$index]['pic_name'] = $pic_url;
					$tmp['picts'][$index]['orientation'] = ($img_dims[0] > $img_dims[1]) ? 'width="510" height="340"' : 'width="227" height="340"';
					$tmp['picts'][$index]['thumb_orientation'] = ($img_dims[0] > $img_dims[1]) ? 'width="120" height="90"' : 'width="60" height="90"';
				}
				$results['picts'] = $tmp['picts'];
				if ($landing_page) {
					$results['json_picts'] = json_encode($tmp['picts']);
					$results['pic_page'] = 0; 
					$results['tot_pages'] = ceil($results['tot_pics']/4); 
				} else {
					$results['pic_num'] = $p_page * 4;
					$results['p_page'] = $p_page;
					$results['pic_qty'] = $count;
					return json_encode($results);
				}
				return $results;
			}
		break;
	}
}

function get_RestList() {
	global $connect;
	$sql = "SELECT 
	  		name, address, city, zipcode, state, phone, fax, url    
	  		FROM iaccw_restaurants_list    
	  		ORDER BY city ASC";
	$Result = mysql_query($sql, $connect) or die(mysql_error());
	if (mysql_num_rows($Result)) {
		while($row = mysql_fetch_assoc($Result)) {
			$rest_list[$row['city']][] = $row;	
			$city_list[] = $row['city'];
		}
		usort($rest_list, 'cmp');
		return array('cities'=>array_unique($city_list), 'results'=>$rest_list);
	} else {
		return FALSE;	
	}
}

private static function cmp($a, $b) {
    if ($a['name'] == $b['name']) {
        return 0;
    }
    return ($a['name'] < $b['name']) ? -1 : 1;
}

}
?>