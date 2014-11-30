<?php
require ("includes/clsPage.php"); 
require_once "connection/DB.php";
$output = new Webpage();
$title=" - Members Directory";

if (isset($_GET['sort']) && (($_GET['sort']=='name') || ($_GET['sort']=='company'))) {
	$sort = $_GET['sort'];
	$letter = $_GET['l'];
}
else {
	$sort = 'name';
	$letter = 'a';
}

$back_name = ($sort=='name') ? 'background-color: #cccccc;' : '';
$back_company = ($sort=='company') ? 'background-color: #cccccc;' : '';

$sort_query = ($sort=='name') ? "m.company_n,m.preset_order,m.last_n" : "m.company_n,m.preset_order";

//Hack for MeranoTours -- it needs to compare as first into its company section
if ($sort=='company' && isSet($letter) && $letter==36) {
	$results = array();
	$where_query = "where m.id='$letter' and company_n='PROTRAVEL-MERANOTOURS' and active='y'";
  
  $sql = "SELECT 
		  					m.first_n,
		  					m.last_n,
		  					m.company_n,
		  					m.address,
		  					m.city,
		  					m.state,
		  					m.zip,
		  					m.phone,
		  					m.fax,
		  					m.email,
		  					m.email2,
		  					m.web,
		  					m.web2,
		  					m.cell_phone,
		  					m.description,
		  					m.id,
		  					m.no_company_name,
		  					c.cat
		  					FROM iaccw_members m INNER JOIN iaccw_category c USING(id)  
		  					$where_query 
		  					ORDER BY $sort_query ASC";
		 
	$Result = mysql_query($sql, $connect) or die(mysql_error());
	while ($row = mysql_fetch_assoc($Result)) {
		array_push($results,$row);
	}
	
	$where_query = "where m.id='".$letter."' and company_n!='PROTRAVEL-MERANOTOURS' and active='y'"; 	
	
	$sql = "SELECT 
		  					m.first_n,
		  					m.last_n,
		  					m.company_n,
		  					m.address,
		  					m.city,
		  					m.state,
		  					m.zip,
		  					m.phone,
		  					m.fax,
		  					m.email,
		  					m.email2,
		  					m.web,
		  					m.web2,
		  					m.cell_phone,
		  					m.description,
		  					m.id,
		  					m.no_company_name,
		  					c.cat
		  					FROM iaccw_members m INNER JOIN iaccw_category c USING(id)  
		  					$where_query 
		  					ORDER BY $sort_query ASC";	
		  					
	$Result = mysql_query($sql, $connect) or die(mysql_error());
	while ($row = mysql_fetch_assoc($Result)) {
		array_push($results,$row);
	}	  								
//MeranoTours Hack -- END

//Normal company sorting section display  
} else if ($letter){
	$results = array();
	$where_query = ($sort=='name') ? "where substring(m.company_n,1,1)='".$letter."'" : "where m.id='".$letter."'";
	$where_query .= " and active='y'";
	$results = array();
	 $sql = "SELECT 
		  					m.first_n,
		  					m.last_n,
		  					m.company_n,
		  					m.address,
		  					m.city,
		  					m.state,
		  					m.zip,
		  					m.phone,
		  					m.fax,
		  					m.email,
		  					m.email2,
		  					m.web,
		  					m.web2,
		  					m.cell_phone,
		  					m.description,
		  					m.id,
		  					m.no_company_name,
		  					c.cat
		  					FROM iaccw_members m INNER JOIN iaccw_category c USING(id)  
		  					$where_query 
		  					ORDER BY $sort_query ASC";
		  			
	$Result = mysql_query($sql, $connect) or die(mysql_error());
	while ($row = mysql_fetch_assoc($Result)) {
		array_push($results,$row);
	}
}
//Name sorting section
if ($sort=='name'){
if (!empty($results)){
	foreach($results as $arr){
			if($arr['company_n']!='' && $arr['no_company_name']==0) $disp_results .= "<b>".$arr['company_n']."</b><br>";
			else $disp_results .= "<b>".$arr['first_n']." ".$arr['last_n']."</b><br>";
			if ($arr['description']) $disp_results .="<span style='color:#95130B'>".$arr['description']."</span><br>";
			if ($arr['address']) $disp_results .= $arr['address']."<br>";
			if ($arr['city']) $disp_results .= $arr['city'];
			if (($arr['state']) && ($arr['city'])) $disp_results .= ",&nbsp;".$arr['state'];
			else if ($arr['state']) $disp_results .= $arr['state'];
			if (($arr['zip']) && (($arr['state']) || ($arr['city']))) $disp_results .= "&nbsp;".$arr['zip'];
			else if ($arr['zip']) $disp_results .= $arr['zip'];
			if ($arr['zip'] || $arr['state'] || $arr['city'] || $arr['address']) $disp_results .= '<br>';
			if ($arr['phone']) $disp_results .= "Phone: ".$arr['phone'];
			if ($arr['phone'] && $arr['fax']) $disp_results .= "&nbsp;-&nbsp;";
			if ($arr['fax']) $disp_results .= "Fax: ".$arr['fax'].'<br>';
			else if ($arr['phone']) $disp_results .= '<br>';
			if ($arr['cell_phone']) $disp_results .= "Mobile: ".$arr['cell_phone'].'<br>';
			if ($arr['email']!='') $disp_results .="Email: <a href='mailto:".$arr['email']."'>".$arr['email']."</a>";
			if ($arr['email2']!='') $disp_results .=" - <a href='mailto:".$arr['email2']."'>".$arr['email2']."</a>";
			if ($arr['email']!='' || $arr['email2']!='') $disp_results .= '<br>';
			if ($arr['web']!='') $disp_results .="<a href='http://".$arr['web']."' target='_blank'>".$arr['web']."</a><br>";
			if ($arr['web2']!='') $disp_results .="<a href='http://".$arr['web2']."' target='_blank'>".$arr['web2']."</a><br>";
			if ($arr['company_n'] && $arr['last_n'] && $arr['first_n']) $disp_results .="Contact Person: ".$arr['first_n']."&nbsp;".$arr['last_n']."<br>";
			$disp_results .='<br>';
	}
}
else $disp_results .="<br><br><b>No Results Found</b><br>";
	
	$page_txt = "
		<div align='center'><b><span style='line-height: 25px; $back_name'>&nbsp;&nbsp;<a href='/member_directory.php?sort=name&l=a'>Sort by Name</a>&nbsp;&nbsp;</span>&nbsp|&nbsp<span style='line-height: 25px;'.$back_company.''>&nbsp;&nbsp;<a href='/member_directory.php?sort=company'>Sort by Sector/Industry</a>&nbsp;&nbsp;</span></b></div>
												 <br>
												 <b style='font-size: 12px'>
												 <a href='/archive/member_directory.php?sort=name&l=a'>A</a> - 
												 <a href='/archive/member_directory.php?sort=name&l=b'>B</a> -
												 <a href='/archive/member_directory.php?sort=name&l=c'>C</a> -
												 <a href='/archive/member_directory.php?sort=name&l=d'>D</a> -
												 <a href='/archive/member_directory.php?sort=name&l=e'>E</a> -
												 <a href='/archive/member_directory.php?sort=name&l=f'>F</a> -
												 <a href='/archive/member_directory.php?sort=name&l=g'>G</a> -
												 <a href='/archive/member_directory.php?sort=name&l=h'>H</a> - 
												 <a href='/archive/member_directory.php?sort=name&l=i'>I</a> -
												 <a href='/archive/member_directory.php?sort=name&l=j'>J</a> -
												 <a href='/archive/member_directory.php?sort=name&l=k'>K</a> -
												 <a href='/archive/member_directory.php?sort=name&l=l'>L</a> -
												 <a href='/archive/member_directory.php?sort=name&l=m'>M</a> -
												 <a href='/archive/member_directory.php?sort=name&l=n'>N</a> -
												 <a href='/archive/member_directory.php?sort=name&l=o'>O</a> - 
												 <a href='/archive/member_directory.php?sort=name&l=p'>P</a> -
												 <a href='/archive/member_directory.php?sort=name&l=q'>Q</a> -
												 <a href='/archive/member_directory.php?sort=name&l=r'>R</a> -
												 <a href='/archive/member_directory.php?sort=name&l=s'>S</a> -
												 <a href='/archive/member_directory.php?sort=name&l=t'>T</a> -
												 <a href='/archive/member_directory.php?sort=name&l=u'>U</a> -
												 <a href='/archive/member_directory.php?sort=name&l=v'>V</a> - 
												 <a href='/archive/member_directory.php?sort=name&l=w'>W</a> -
												 <a href='/archive/member_directory.php?sort=name&l=x'>X</a> -
												 <a href='/archive/member_directory.php?sort=name&l=y'>Y</a> -
												 <a href='/archive/member_directory.php?sort=name&l=z'>Z</a>
												 </b>	
												 <br><br>
												 <div align='left' width='100%' style='background-color: #cccccc; color: #000000; font-weight: bold;'>&nbsp;&nbsp;&nbsp;".strtoupper($letter)."</div><br>
												 <div align='left' width='100%' style='margin-left: 40px;'>
												 		".$disp_results."
												 </div>
		";
	
} else {
	if (!$letter) {
		$results = array();
		 $sql = "SELECT 
		  					*
		  					FROM iaccw_category  
		  					ORDER BY cat ASC";
		  					
		$Result = mysql_query($sql, $connect) or die(mysql_error());
		while ($row = mysql_fetch_assoc($Result)) {
			array_push($results,$row);
		}
		if (!empty($results)){
			foreach($results as $arr){
				$href = '/archive/member_directory.php?sort=company&l='.$arr['id'];
				$disp_results .= "<b><a href='".$href."' target='_self'>".$arr['cat']."</a><br>";
			}
			$disp_results .="</b><br>";
		}
		else $disp_results .="<br><br><b>No Results Found</b><br>";
		  					
	} else {
		if (!empty($results)){
		$category = $results[0]['cat'];
		foreach($results as $arr){
			if($arr['company_n']!='' && $arr['no_company_name']==0) $disp_results .= "<b>".$arr['company_n']."</b><br>";
			else $disp_results .= "<b>".$arr['first_n']." ".$arr['last_n']."</b><br>";
			if ($arr['description']) $disp_results .="<span style='color:#95130B'>".$arr['description']."</span><br>";
			if ($arr['address']) $disp_results .= $arr['address']."<br>";
			if ($arr['city']) $disp_results .= $arr['city'];
			if (($arr['state']) && ($arr['city'])) $disp_results .= ",&nbsp;".$arr['state'];
			else if ($arr['state']) $disp_results .= $arr['state'];
			if (($arr['zip']) && (($arr['state']) || ($arr['city']))) $disp_results .= "&nbsp;".$arr['zip'];
			else if ($arr['zip']) $disp_results .= $arr['zip'];
			if ($arr['zip'] || $arr['state'] || $arr['city'] || $arr['address']) $disp_results .= '<br>';
			if ($arr['phone']) $disp_results .= "Phone: ".$arr['phone'];
			if ($arr['phone'] && $arr['fax']) $disp_results .= "&nbsp;-&nbsp;";
			if ($arr['fax']) $disp_results .= "Fax: ".$arr['fax'].'<br>';
			else if ($arr['phone']) $disp_results .= '<br>';
			if ($arr['cell_phone']) $disp_results .= "Mobile: ".$arr['cell_phone'].'<br>';
			if ($arr['email']!='') $disp_results .="Email: <a href='mailto:".$arr['email']."'>".$arr['email']."</a>";
			if ($arr['email2']!='') $disp_results .=" - <a href='mailto:".$arr['email2']."'>".$arr['email2']."</a>";
			if ($arr['email']!='' || $arr['email2']!='') $disp_results .= '<br>';
			if ($arr['web']!='') $disp_results .="<a href='http://".$arr['web']."' target='_blank'>".$arr['web']."</a><br>";
			if ($arr['web2']!='') $disp_results .="<a href='http://".$arr['web2']."' target='_blank'>".$arr['web2']."</a><br>";
			if ($arr['company_n'] && $arr['last_n'] && $arr['first_n']) $disp_results .="Contact Person: ".$arr['first_n']."&nbsp;".$arr['last_n']."<br>";
			$disp_results .='<br>';
		}
	}
	else $disp_results .="<br><br><b>No Results Found</b><br>";
	}
	$page_txt = "
		<div align='center'><b><span style='line-height: 25px; $back_name'>&nbsp;&nbsp;<a href='/archive/member_directory.php?sort=name&l=a'>Sort by Name</a>&nbsp;&nbsp;</span>&nbsp|&nbsp<span style='line-height: 25px; $back_company'>&nbsp;&nbsp;<a href='/archive/member_directory.php?sort=company'>Sort by Sector/Industry</a>&nbsp;&nbsp;</span></b></div>
												 
												 <br><br>
												 <div align='left' width='100%' style='background-color: #cccccc; color: #000000; font-weight: bold;'>&nbsp;&nbsp;&nbsp;".$category."</div><br>
												 <div class='members_details'>
												 		".$disp_results."
												 </div>
		";
	
}

$output -> DisplayTop($title, 2);
$output -> DisplayCenter('member_directory', 
													array('page_title'=>'Members Directory', 			 
												 'page_txt'=>$page_txt,
																			
												  'menu_voice'=>array(array('url'=>'/archive/members.php', 'menu_name'=>'Membership', 'high'=>0), 
												                array('url'=>'/archive/member_level.php', 'menu_name'=>'10 Top Reasons to Join', 'high'=>0), 
												                array('url'=>'/archive/member_directory.php', 'menu_name'=>'Members Directory', 'high'=>1),
												                array('url'=>'/archive/join.php', 'menu_name'=>'My Membership Card', 'high'=>0))),'membership.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>