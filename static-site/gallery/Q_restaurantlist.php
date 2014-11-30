<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");
	require_once "connection/DB.php";

	$output = new Webpage();
	$title=" - Ospitalit&agrave; Italiana List of Restaurants";
	$rest_list = $output->get_RestList();
	//echo json_encode($rest_list['results']);die;
	if ($rest_list['results']) { ?>
		<script type="text/JavaScript">
			var restList = <?php echo json_encode($rest_list['results']); ?>;
			var rest_city = 1;
		</script>
<?php 
//print_r($rest_list['cities']);die;
		$page_txt = "<div class='select_city'>";
		$page_txt .= "Display by city: <select id='city' onChange='update_rist_list()'>";
		$page_txt .= "<option value='' selected='selected'>---</option>";
		foreach ($rest_list['cities'] as $key=>$city) {
				$page_txt .= "<option value='{$city}'>{$city}</option>";
		}
		$page_txt .= "</select></div>";
		$page_txt .= '<table border="0" id="r_list" class="page_table page_table_Q_rest_tb">';
		foreach ($rest_list['results'] as $city=>$city_rest) {
			$page_txt .= "<tr><td class='Q_city_column'>{$city}</td></tr>";
			foreach ($city_rest as $key=>$rest) {
					if ($key ==0) {
						$page_txt .= "<tr><td class='Q_rest_column up'>";
					} else {
						$page_txt .= "<tr><td class='Q_rest_column'>";	
					}
					$page_txt .=  "<b>{$rest['name']}</b><br>";
					$page_txt .=  "{$rest['address']}<br>";
					$page_txt .=  "{$rest['city']}, {$rest['zipcode']} {$rest['state']}<br>";
					$page_txt .=  "Phone: ({$rest['phone'][0]}{$rest['phone'][1]}{$rest['phone'][2]}) {$rest['phone'][3]}{$rest['phone'][4]}{$rest['phone'][5]}-{$rest['phone'][6]}{$rest['phone'][7]}{$rest['phone'][8]}{$rest['phone'][9]}";
					$page_txt .=  ($rest['fax']) ? ", Fax: {$rest['fax']}<br>" : '<br>'; 
					$page_txt .=  "Website: <a href='http://{$rest['url']}' target='_blank'>{$rest['url']}</a>"; 
					$page_txt .=  '</td></tr>'; 
			}
		}	 
		$page_txt .=  '</table>';
	} else {
		$page_txt = constr();
	}

$output -> DisplayTop($title);
$output -> DisplayCenter('about', 
           array('page_title'=>'Participating Restaurants', 
           			 'extra_page_table_class'=>'page_table_Q_rest', 
           			 'page_txt'=>$page_txt,
           			 'menu_voice'=>array(array('url'=>'/Q_highlights.php', 'menu_name'=>'Project Highlights', 'high'=>0), 
            		 										 array('url'=>'/Q_mediagallery.php', 'menu_name'=>'Media Gallery', 'high'=>0), 
            		 										 array('url'=>'/Q_newspress.php', 'menu_name'=>'News & Press', 'high'=>0),
            		 										 array('url'=>'/Q_restaurantlist.php', 'menu_name'=>'Participating Restaurants', 'high'=>1))),'ospitalita.jpg');
//$update="January, 03 2008";
$output -> DisplayBottom();
?>