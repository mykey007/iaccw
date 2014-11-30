<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Follow Our Members";

$page_txt = "
							<ul style='margin-right:5px;text-align:justify'>
									<li>
										<b>Pedaling Through WeHo: Your Explore Guide</b><br>
										We recently sat down with L.A. mama Tina Fanelli Moraccini, co-founder of
										Piccolo Chef (<a href='http://www.piccolochef.com' target='_blank'>www.piccolochef.com</a>) in Culver City. Piccolo Chef is
										a fun, innovative cooking school where kids learn how to prepare
										high-quality, fresh and healthy food in creatively themed classes.<br>
										Tina and her husband of 20 years have two daughters, ages 7 and 3. Since 1996, when
										they moved from Italy, they've proudly called West Hollywood home. In
										addition to giving us an insider's perspective of raising kids in Weho, Tina
										also takes us on a culinary journey, highlighting the most delicious
										restaurants to dine at with kids.<br>
										<a href='http://www.redtri.com/los-angeles-kids/tina-fanelli-moraccini-west-hollywood?utm_source=contactology&utm_medium=email&utm_campaign=Los-Angeles-Newsletter-2012-07-26' target='_blank'>Read the article</a> 
									</li><br>
									
									<li>
										<b>Striped Shorts, Celebrities, and Cinder Blocks</b><br>
										Earlier this year, Sundek and Surf for Life teamed up and took a crew of pro
										surfers and actors (Leven Ramblin from The Hunger Games, Eric Balfour of Six
										Feet Under, Andrew Keegan, whom you probably remember from your little
										sister's wall) down to El Cuco, El Salvador, to build the town's first high
										school.<br>
										<a href='http://r20.rs6.net/tn.jsp?e=001LNxJYjz8AmWbwptGiqH53Z54ODL8d8lpZQROutGHPy1pBUp1V5MzrNHwa6nkOFqqHqJqEN3StkCuLyTRHWbc04H46jV_-dM9HX7ZdOI8WbJ6ZCbnAmSqxr1KMAnS2Gzargi2MfhfOMjkHyQy7kVzDatQXIKEcyCcpW-w3-DEhL-w7W67b-N8EQDnmieS-eL9' target='_blank'>Watch the video</a> 
									</li><br>
							</ul>
						";

//$page_txt = constr(); 

$output -> DisplayTop($title);
$output -> DisplayCenter('follow_members', 
													array('page_title'=>'Follow Our Members', 			 
												 'page_txt'=>$page_txt,
												 'page_txt_left'=>''							
												 ),'footsteps.jpg');
$update="August, 11 2011";
$output -> DisplayBottom();
?>