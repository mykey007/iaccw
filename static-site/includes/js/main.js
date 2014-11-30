var max_width = 510;
var max_height = 340;
var thumb_max_width = 120;
var thumb_max_height = 90;

function email_join() {
	var error = 0;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var email = document.getElementById("email").value;
	var c_name = document.getElementById("c_name").value;
	var address = document.getElementById("address").value;
	var city = document.getElementById("city").value;
	var zip = document.getElementById("zip").value;
	var busy = document.getElementById("busy").value;
	
	if (trim(fname)=="") error = 1;
	if (trim(lname)=="") error = 1;
	if (trim(email)=="") error = 1;
	if (trim(c_name)=="") error = 1;
	if (trim(address)=="") error = 1;
	if (trim(city)=="") error = 1;
	if (trim(zip)=="") error = 1;
	if (trim(busy)=="") error = 1;
	
	if (error) {
		alert("All required informations need to be inserted before submitting the form.");
		return false;
	}
return valid(email);
}

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

function submenu() {
	var mediasubmenu = document.getElementById("mediasubmenu");
	var mediabutton = document.getElementById("mediabutton");
	var left = mediabutton.offsetLeft;
	var top = (mediabutton.offsetTop-17);
	mediasubmenu.style.left = left+'px';
	mediasubmenu.style.top = top+'px';
	mediasubmenu.style.display = 'block';
}

function openSAlbum(album) {
	try{
		s_album = document.getElementById('s_album'+album);
	} catch(e) {}
	if (s_album) {
		if (s_album.style.display == 'none') {
			s_album.style.display = 'block';
		} else {
			s_album.style.display = 'none';
		}
	} else {
		return false;
	}
}

function display_video_gallery(hide_loader) {
	var spotspace = document.getElementById("spotlight");
	var rel_vid_space = document.getElementById("related_video");
	var thumb;
	var related_vid = '';
	if (videoObj[0].YT_video_id) {
		var spotlight = '<iframe width="480" height="390" src="'+videoObj[0].url+'" frameborder="0" allowfullscreen></iframe>';
	} else {	
		var spotlight = "<video width='480' height='390' controls='controls'><source src='"+videoObj[0].url+"' type='video/flash' />Your browser does not support the video tag.</video>";
	}
	related_vid += "<div id='ajax_arrow_left'><a href='javascript:void(0);' onClick='scroll(1);'><img src='/images/arrow_left.png' width='30' border='0'></a></div>";
	for (var i=0; i<4; i++) {
		if (videoObj[i].YT_video_id) {
			thumb = "<img src='http://img.youtube.com/vi/"+videoObj[i].YT_video_id+"/default.jpg' width='120' height='90'>";
		} else if (videoObj[i].custom_thumb) {
			thumb = "<img src='images/"+videoObj[i].custom_thumb+"' width='120' height='90'>";
		} else {
			thumb = "<img src='images/default_video_thumb.jpg' width='120' height='90'>";
		}
		if (videoObj[i].external_link) {
			related_vid += "<div id='rel_vid_"+i+"' class='rel_vid'><a href='"+videoObj[i].url+"' target='_blank' title='"+videoObj[i].description+"'>"+thumb+"</a></div>";
		} else {
			related_vid += "<div id='rel_vid_"+i+"' class='rel_vid'><a href='javascript:void(0);' onClick='pushspotlight("+i+")'>"+thumb+"</a></div>";
		}	
	}
	related_vid += "<div id='ajax_arrow_right'><a href='javascript:void(0);' onClick='scroll(2);'><img src='/images/arrow_right.png' width='30' border='0'></a></div>";
	spotspace.innerHTML = spotlight;
	rel_vid_space.innerHTML = related_vid;
	if (typeof('hide_loader') != 'undefined') {
		var media_loader = document.getElementById("media_loader");
		var main_table = document.getElementById("video_cont_table");
		//document.removeChild(media_loader);
		media_loader.style.display = 'none';
		main_table.style.display = 'block';
	}
}

function adjust_dims(orig_width, orig_height, max_width, max_height) {
	if (orig_width > orig_height) {
		if (orig_width > max_width) {
			dims = "width='"+max_width+"' heigth='"+max_height+"'";
		} else {
			dims = "width='"+orig_width+"' heigth='"+orig_height+"'";
		}
	} else {
		if (orig_height > max_height) {
			var width = Math.round(max_height/1.5);
			dims = "width='"+width+"' heigth='"+max_height+"'";
		} else {
			width = Math.round(orig_height/1.5);
			dims = "width='"+width+"' heigth='"+orig_height+"'";
		}
	}
	return dims;
}

function display_pic_gallery() {
	var spotspace = document.getElementById("spotlight");
	var rel_vid_space = document.getElementById("related_video");
	var pics_counter = document.getElementById("pics_counter");
	var thumb;
	var related_vid = '';
	
	var thumb_width = 0;
	dims = adjust_dims(videoObj[0].width, videoObj[0].height, max_width, max_height);
	var counter = "Picts (1/"+videoObj.length+')';
	var spotlight = '<img '+dims+' src="/images/iaccw_Q_picts/'+videoObj[0].name+'" border="0">';
	
	related_vid += "<div id='ajax_arrow_left'><a href='javascript:void(0);' onClick='pic_scroll(1);'><img src='/images/arrow_left.png' width='30' border='0'></a></div>";
	for (var i=0; i<4; i++) {
		dims = adjust_dims(videoObj[i].width, videoObj[i].height, thumb_max_width, thumb_max_height);
		thumb = "<img src='/images/iaccw_Q_picts/"+videoObj[i].name+"' "+dims+">";
		related_vid += "<div id='rel_vid_"+i+"' class='rel_vid'><a href='javascript:void(0);' onClick='pushpicspotlight("+i+")'>"+thumb+"</a></div>";
	}
	related_vid += "<div id='ajax_arrow_right'><a href='javascript:void(0);' onClick='pic_scroll(2);'><img src='/images/arrow_right.png' width='30' border='0'></a></div>";
	pics_counter.innerHTML = counter;
	spotspace.innerHTML = spotlight;
	rel_vid_space.innerHTML = related_vid;
}

function update_rist_list() {
	var city_sel = document.getElementById('city');
	var city = city_sel.options[city_sel.selectedIndex].value;
	var r_list = document.getElementById('r_list');
	var injected_content;
	if (city != '') {
		injected_content = "<tr><td class='Q_city_column'>"+city+"</td></tr>";
		for (var i=0; i<restList[city].length; i++) {
			if (i==0) {
				injected_content += "<tr><td class='Q_rest_column up'>";
			} else {
				injected_content += "<tr><td class='Q_rest_column'>";	
			}
			injected_content += "<b>"+restList[city][i].name+"</b><br>";
			injected_content += restList[city][i].address+"<br>";
			injected_content += restList[city][i].city+', '+restList[city][i].zipcode+' '+restList[city][i].state+'<br>';
			injected_content += 'Phone: ('+restList[city][i].phone[0]+restList[city][i].phone[1]+restList[city][i].phone[2]+') '+restList[city][i].phone[3]+restList[city][i].phone[4]+restList[city][i].phone[5]+'-'+restList[city][i].phone[6]+restList[city][i].phone[7]+restList[city][i].phone[8]+restList[city][i].phone[9];
			if (restList[city][i].fax) {
				injected_content += ', Fax: '+restList[city][i].fax+'<br>';
			} else {
				injected_content += "<br>";
			}
			injected_content += "Website: <a href='http://"+restList[city][i].url+"' target='_blank'>"+restList[city][i].url+"</a>"; 
			injected_content += '</td></tr>'; 
			r_list.innerHTML = injected_content;
		}
	} else {
		/*
		for (var i=0; i<restList.length; i++) {
			//injected_content = "<tr><td class='Q_city_column'>"+restList[i]city+"</td></tr>";
			for (var i=0; i<restList[city].length; i++) {
				if (i==0) {
					injected_content += "<tr><td class='Q_rest_column up'>";
				} else {
					injected_content += "<tr><td class='Q_rest_column'>";	
				}
				injected_content += "<b>"+restList[city][i].name+"</b><br>";
				injected_content += restList[city][i].address+"<br>";
				injected_content += restList[city][i].city+', '+restList[city][i].zipcode+' '+restList[city][i].state+'<br>';
				injected_content += 'Phone: ('+restList[city][i].phone[0]+restList[city][i].phone[1]+restList[city][i].phone[2]+') '+restList[city][i].phone[3]+restList[city][i].phone[4]+restList[city][i].phone[5]+'-'+restList[city][i].phone[6]+restList[city][i].phone[6]+restList[city][i].phone[7]+restList[city][i].phone[8];
				if (restList[city][i].fax) {
					injected_content += ', Fax: '+restList[city][i].fax+'<br>';
				} else {
					injected_content += "<br>";
				}
				injected_content += "Website: <a href='http://"+restList[city][i].url+"' target='_blank'>"+restList[city][i].url+"</a>"; 
				injected_content += '</td></tr>'; 
			}
		}*/
	}
	
}

function scroll(direction) {
	var new_lyout;
	var related_vid = '';
	var rel_vid_space = document.getElementById("related_video");
	if (direction == 1) {
		//move to right
		if ((displayed_rel_videos-4) > 0) {
			if ((displayed_rel_videos-4) >= 4) {
				new_lyout = displayed_rel_videos-7;
			} else {
				new_lyout = 0;
			}
		} else {
			return false;
		}
	} else if (direction == 2) {
		//move to left
		if ((displayed_rel_videos+1) < videoObj.length) {
			if ((displayed_rel_videos+5) <= videoObj.length) {
				new_lyout = displayed_rel_videos+1;
			} else {
				new_lyout = videoObj.length - displayed_rel_videos;
			}
		} else {
			return false;
		}	
	}
	related_vid += "<div id='ajax_arrow_left'><a href='javascript:void(0);' onClick='scroll(1);'><img src='/images/arrow_left.png' width='30' border='0'></a></div>";
	for (var i=new_lyout; i<new_lyout+4; i++) {
		if (videoObj[i].YT_video_id) {
			thumb = "<img src='http://img.youtube.com/vi/"+videoObj[i].YT_video_id+"/default.jpg' width='120' height='90'>";
		} else if (videoObj[i].custom_thumb) {
			thumb = "<img src='images/"+videoObj[i].custom_thumb+"' width='120' height='90'>";
		} else {
			thumb = "<img src='images/default_video_thumb.jpg' width='120' height='90'>";
		}
		if (videoObj[i].external_link) {
			related_vid += "<div id='rel_vid_"+i+"' class='rel_vid'><a href='"+videoObj[i].url+"' target='_blank' title='"+videoObj[i].description+"'>"+thumb+"</a></div>";
		} else {
			related_vid += "<div id='rel_vid_"+i+"' class='rel_vid'><a href='javascript:void(0);' onClick='pushspotlight("+i+")'>"+thumb+"</a></div>";
		}	
	}
	related_vid += "<div id='ajax_arrow_right'><a href='javascript:void(0);' onClick='scroll(2);'><img src='/images/arrow_right.png' width='30' border='0'></a></div>";
	rel_vid_space.innerHTML = related_vid;
	displayed_rel_videos = i-1;
}

function pic_scroll(direction) {
	var new_lyout;
	var related_vid = '';
	var rel_vid_space = document.getElementById("related_video");
	var pics_counter = document.getElementById("pics_counter");
	if (direction == 1) {
		//move to right
		if ((displayed_rel_videos-4) > 0) {
			if ((displayed_rel_videos-4) >= 4) {
				new_lyout = displayed_rel_videos-7;
			} else {
				new_lyout = 1;
			}
		} else {
			return false;
		}
	} else if (direction == 2) {
		//move to left
		if ((displayed_rel_videos+1) < videoObj.length) {
			if ((displayed_rel_videos+5) <= videoObj.length) {
				new_lyout = displayed_rel_videos+1;
			} else {
				new_lyout = videoObj.length - displayed_rel_videos;
			}
		} else {
			return false;
		}	
	}
	related_vid += "<div id='ajax_arrow_left'><a href='javascript:void(0);' onClick='pic_scroll(1);'><img src='/images/arrow_left.png' width='30' border='0'></a></div>";
	for (var i=new_lyout; i<new_lyout+4; i++) {
		dims = adjust_dims(videoObj[i].width, videoObj[i].height, thumb_max_width, thumb_max_height);
		thumb = "<img src='/images/iaccw_Q_picts/"+videoObj[i].name+"' "+dims+">";
		related_vid += "<div id='rel_vid_"+i+"' class='rel_vid'><a href='javascript:void(0);' onClick='pushpicspotlight("+i+")'>"+thumb+"</a></div>";
	}
	counter = 'Picts ('+new_lyout+'/'+videoObj.length+')';
	related_vid += "<div id='ajax_arrow_right'><a href='javascript:void(0);' onClick='pic_scroll(2);'><img src='/images/arrow_right.png' width='30' border='0'></a></div>";
	rel_vid_space.innerHTML = related_vid;
	pics_counter.innerHTML = counter;
	displayed_rel_videos = i-1;
}

function pushpicspotlight(pic_num) {
	var spotspace = document.getElementById("spotlight");
	
	dims = adjust_dims(videoObj[pic_num].width, videoObj[pic_num].height, max_width, max_height);
	var spotlight = '<img '+dims+' src="/images/iaccw_Q_picts/'+videoObj[pic_num].name+'" border="0">';
	spotspace.innerHTML = spotlight;
}

function media_pushpicspotlight(pic_num) {
	var spotspace = document.getElementById("spotlight");
	var up_page = document.getElementById("up_page");
	var spotlight = '<img '+picObj[pic_num].orientation+' src="'+picObj[pic_num].pic_name+'" border="0">';
	spotspace.innerHTML = spotlight;
	up_page.innerHTML = pic_num+1;
}

function pushspotlight(video_num) {
	var spotspace = document.getElementById("spotlight");
	var rel_vid_space = document.getElementById("related_video");
	var rel_video_thumb_space = document.getElementById("rel_vid_"+video_num);
	var spotlight;
	var thumb;
	
	if (videoObj[video_num].YT_video_id) {
		spotlight = '<iframe width="480" height="390" src="'+videoObj[video_num].url+'" frameborder="0" allowfullscreen></iframe>';
	} else {	
		spotlight = "<video width='480' height='390' controls='controls'><source src='"+videoObj[video_num].url+"' type='video/flash' />Your browser does not support the video tag.</video>";
	}
	spotspace.innerHTML = spotlight;
}

function media_pic_scroll(dir, wtg) {
	if (dir != 1 && dir!=2) {
		return false;
	}
	if (dir == 1) {
		if (pic_page == 0) {
			return false;
		}
	} else {
		if ((pic_page + 1) == tot_pages) {
			return false;
		}
	} 
	if (typeof(wtg) == 'undefined') {
		return false;
	}
	var thumbs_spot = $('#thumbs'); 
	var results = '';
	results += '<div class="loader"><img src="images/ajax-loader_red.gif"></div>';
	thumbs_spot.html(results);
	var url = 'ajax_media_call.php';
	var data_obj = new Object;
	data_obj['album'] = album;
	data_obj['wtg'] = wtg;
	if (dir==1) {
		data_obj['p_page'] = pic_page-1;
	} else {
		data_obj['p_page'] = pic_page+1;
	}
	$.ajax({
		url:url,
		data:data_obj,
		dataType:"json",
		success:function(data){
			try{
				if (data.picts){
					picObj = data.picts;
					var pic_num = data.pic_num;
					pic_page = parseInt(data.p_page);
					var spotspace = $("#spotlight");
					var up_page = parseInt($("#up_page").html());
					var page_spot = $("#up_page");
					results = '';
					
					//page_spot.html(pic_num);
					for (var i=0; i<parseInt(data.pic_qty); i++) {
						results += '<div id="rel_vid_'+(i+data['pic_num'])+'" class="rel_vid rel_vid_margin"><a href="javascript:void(0);" onclick="media_pushpicspotlight('+(i+data['pic_num'])+')"><img '+picObj[(i+data['pic_num'])].thumb_orientation+' src="'+picObj[(i+data['pic_num'])].pic_name+'" border="0"></a></div>';
					}
					thumbs_spot.html(results);
				}
			} catch(e) { return false; } 
		}
	});
}

function video_gallery_populate(video_content) {
	var video_spot = $('#video'+video_content); 
	var results = '';
	results += '<div id="media_loader"><img src="images/ajax-loader_red.gif"></div>';
	video_spot.append(results);
	var data_obj = new Object;
	data_obj['query_type'] = 'videos';
	data_obj['content_type'] = video_content;
	$.ajax({
		url:'ajax_media_call.php',
		data:data_obj,
		dataType:"json",
		success:function(data){
			try{
				/*if (data.picts){
					picObj = data.picts;
					var pic_num = data.pic_num;
					pic_page = parseInt(data.p_page);
					var spotspace = $("#spotlight");
					var up_page = parseInt($("#up_page").html());
					var page_spot = $("#up_page");
					results = '';
					
					//page_spot.html(pic_num);
					for (var i=0; i<parseInt(data.pic_qty); i++) {
						results += '<div id="rel_vid_'+(i+data['pic_num'])+'" class="rel_vid rel_vid_margin"><a href="javascript:void(0);" onclick="media_pushpicspotlight('+(i+data['pic_num'])+')"><img '+picObj[(i+data['pic_num'])].thumb_orientation+' src="'+picObj[(i+data['pic_num'])].pic_name+'" border="0"></a></div>';
					}
					thumbs_spot.html(results);
				}*/
				videoObj = data;
				display_video_gallery(1);
				$('#media_loader').remove();
			} catch(e) { return false; } 
		}
	});
}

function close_submenu() {
	var mediasubmenu = document.getElementById("mediasubmenu");
	mediasubmenu.style.display = 'none';
}

function fiera() {
	var container = document.getElementById("fiera");
	if (container.style.display=='inline') {
		container.style.display = 'none';
	} else {
		container.style.display = 'inline';
	}
}

/*function more_span(num) {
	var container = document.getElementById("more_info_"+num);
	var elem = document.getElementById("link"+num);
   // alert(elem.innerHTML);
	if (elem.innerHTML == '<BR>Close this News' || elem.innerHTML == '<br>Close this News') {
		container.style.display = 'none';
		elem.innerHTML = '<br>Read More';
	} else {
		container.style.display = 'inline';
		elem.innerHTML = '<BR>Close this News';
	}
}*/

function more_span(name){
	var name_span = document.getElementById('more_'+name);
	var name_info_span = document.getElementById('more_info_'+name);
	if (name_span.style.display == 'none') name_span.style.display = 'inline';
	else name_span.style.display = 'none';
	if (name_info_span.style.display == 'none') name_info_span.style.display = 'inline';
	else name_info_span.style.display = 'none';
}

function open_trade(name){
	var more_trade = document.getElementById('more_trade_'+name);
	if (more_trade.style.display == 'none') more_trade.style.display = 'inline';
	else more_trade.style.display = 'none';
}

function more_span_mod(name){
	var name_span = document.getElementById('more_'+name);
	var name_info_span = document.getElementById('more_info_'+name);
	if (name_info_span.style.display == 'none') name_info_span.style.display = 'inline';
	else name_info_span.style.display = 'none';
}

function email_trade() {
	var error = 0;
	var fname = document.getElementById("fname").value;
	var email = document.getElementById("email").value;
	var busy = document.getElementById("busy").value;
	
	if (trim(fname)=="") error = 1;
	if (trim(email)=="") error = 1;
	if (trim(busy)=="") error = 1;
	
	if (error) {
		alert("All required informations need to be inserted before submitting the form.");
		return false;
	}
return valid(email);
}

function email_contact() {
	var error = 0;
	var fname = document.getElementById("fname").value;
	var email = document.getElementById("email").value;
	var comments = document.getElementById("comments").value;
	
	if (trim(fname)=="") error = 1;
	if (trim(email)=="") error = 1;
	if (trim(comments)=="") error = 1;
	
	if (error) {
		alert("All required informations need to be inserted before submitting the form.");
		return false;
	}
return valid(email);
}

function join_delete() {
	var fname = document.getElementById("fname").value = "";
	var lname = document.getElementById("lname").value = "";
	var email = document.getElementById("email").value = "";
	var c_name = document.getElementById("c_name").value = "";
	var address = document.getElementById("address").value = "";
	var city = document.getElementById("city").value = "";
	var zip = document.getElementById("zip").value = "";
	var busy = document.getElementById("busy").value = "";
	var fax = document.getElementById("fax").value = "";
	var phone = document.getElementById("phone").value = "";
}

function trade_delete() {
	var fname = document.getElementById("fname").value = "";
	var email = document.getElementById("email").value = "";
	var busy = document.getElementById("busy").value = "";
}

function conatct_delete() {
	var fname = document.getElementById("fname").value = "";
	var email = document.getElementById("email").value = "";
	var comments = document.getElementById("comments").value = "";
}

function valid(mail){
	var reg1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/; // not valid
	var reg2 = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/; // valid
	if ((mail == '') || (reg1.test(mail)) || (!reg2.test(mail))) {
		alert('Please, insert a valid Email address before submitting the form.');
		return false;
	} else return true;
}	

function trim(stringToTrim) {
	return stringToTrim.replace(/^\s+|\s+$/g,"");
}

function show_contacts(contact){
	if (contact==1){
		var contact_form = document.getElementById('contact_form');
		
	} else if (contact==2){
		var contact_form = document.getElementById('show_phoenix');
		
	}
		if (contact_form.style.display == 'inline-block') contact_form.style.display = 'none';
		else contact_form.style.display = 'inline-block';
	
}

function display_form() {
	var doc_form = document.getElementById("join");
	doc_form.style.display = 'block';
}