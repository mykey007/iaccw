<?php
	include("../tpl/siteAdmin/siteAdmin_head.tpl");
	include("../tpl/siteAdmin/siteAdmin_menu.tpl");
print("<center><table width='580'> 
<form action='$PHP_SELF?name=$name' method='POST' enctype='multipart/form-data'> 
<tr> 
<td align=center colspan=2> 
<input type='hidden' name='MAX_FILE_SIZE' value='102400'> 
<input type='hidden' name='name' value='$name'> 
<p>Upload Image: <input type='file' name='imgfile'></td> 
</tr><tr> 
<td align=center><input type='submit' value='Upload Image'></form></td></tr></table></center>");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$uploaddir = "$webpath/uploads";
	$pext = getFileExtension($imgfile_name);
	$pext = strtolower($pext);
	if (($pext != "jpg") && ($pext != "jpeg") && ($pext != "pjpeg") && ($pext != "bmp"))
	{
		print "<h1>ERROR</h1>Image Extension Unknown.<br>";
        print "<p>Please upload only images with the extensions .jpg .jpeg or .bmp<br><br>"; 
        print "The file you uploaded had the following extension: $pext</p>\n"; 

        /*== delete uploaded file ==*/ 
        unlink($imgfile); 
        exit(); 
    } 

    /*== check filename length ==*/ 
    if (strlen($imgfile_name)>20) { 
        print "<h1>ERROR</h1>Image filename too long.<br>"; 
        print "<p>The file you uploaded needs to have a shorter name.</p>\n"; 

        /*== delete uploaded file ==*/ 
        unlink($imgfile); 
        exit(); 
    } 

    //-- RE-SIZING UPLOADED IMAGE 

    /*== only resize if the image is larger than 600 x 400 ==*/ 
    $imgsize = GetImageSize($imgfile); 

    /*== check size  0=width, 1=height ==*/ 
    if (($imgsize[0] > 600) || ($imgsize[1] > 400))  
    { 
        /*== temp image file -- use "tempnam()" to generate the temp 
             file name. This is done so if multiple people access the  
            script at once they won't ruin each other's temp file ==*/ 
        $tmpimg = tempnam("/tmp", "MKUP"); 

        /*== RESIZE PROCESS 
             1. decompress jpeg image to pnm file (a raw image type)  
             2. scale pnm image 
             3. compress pnm file to jpeg image 
print("<center><table width='580'> 
<form action='$PHP_SELF?name=$name' method='POST' enctype='multipart/form-data'> 
<tr> 
<td align=center colspan=2> 
<input type='hidden' name='MAX_FILE_SIZE' value='102400'> 
<input type='hidden' name='name' value='$name'> 
<p>Upload Image: <input type='file' name='imgfile'></td> 
</tr><tr> 
<td align=center><input type='submit' value='Upload Image'></form></td></tr></table></center>"); 


if ($REQUEST_METHOD == "POST") { 

    /* SUBMITTED INFORMATION - use what you need 
     * temporary filename (pointer): $imgfile 
     * original filename           : $imgfile_name 
     * size of uploaded file       : $imgfile_size 
     * mime-type of uploaded file  : $imgfile_type 
     */ 

     /*== upload directory where the file will be stored  
          relative to where script is run ==*/ 
     
    $uploaddir = "$webpath/uploads"; 
     

    /*== get file extension (fn at bottom of script) ==*/ 
    /*== checks to see if image file, if not do not allow upload ==*/ 
    $pext = getFileExtension($imgfile_name); 
    $pext = strtolower($pext); 
    if (($pext != "jpg") && ($pext != "jpeg") && ($pext != "pjpeg") && ($pext != "bmp"))  
    { 
        print "<h1>ERROR</h1>Image Extension Unknown.<br>"; 
        print "<p>Please upload only images with the extensions .jpg .jpeg or .bmp<br><br>"; 
        print "The file you uploaded had the following extension: $pext</p>\n"; 

        /*== delete uploaded file ==*/ 
        unlink($imgfile); 
        exit(); 
    } 

    /*== check filename length ==*/ 
    if (strlen($imgfile_name)>20) { 
        print "<h1>ERROR</h1>Image filename too long.<br>"; 
        print "<p>The file you uploaded needs to have a shorter name.</p>\n"; 

        /*== delete uploaded file ==*/ 
        unlink($imgfile); 
        exit(); 
    } 

    //-- RE-SIZING UPLOADED IMAGE 

    /*== only resize if the image is larger than 600 x 400 ==*/ 
    $imgsize = GetImageSize($imgfile); 

    /*== check size  0=width, 1=height ==*/ 
    if (($imgsize[0] > 600) || ($imgsize[1] > 400))  
    { 
        /*== temp image file -- use "tempnam()" to generate the temp 
             file name. This is done so if multiple people access the  
            script at once they won't ruin each other's temp file ==*/ 
        $tmpimg = tempnam("/tmp", "MKUP"); 

        /*== RESIZE PROCESS 
             1. decompress jpeg image to pnm file (a raw image type)  
             2. scale pnm image 
             3. compress pnm file to jpeg image 
        ==*/ 
         
        /*== Step 1: djpeg decompresses jpeg to pnm ==*/ 
        system("djpeg $imgfile >$tmpimg"); 
         

        /*== Steps 2&3: scale image using pnmscale and then 
             pipe into cjpeg to output jpeg file ==*/ 
        system("pnmscale -xy 600 400 $tmpimg | cjpeg -smoo 10 -qual 50 >$imgfile"); 

        /*== remove temp image ==*/ 
        unlink($tmpimg); 

    } 

    /*== setup final file location and name ==*/ 
    /*== change spaces to underscores in filename  ==*/ 
    $final_filename = str_replace(" ", "_", $imgfile_name); 
    $newfile = $uploaddir . "/$final_filename"; 
     
    /*== do extra security check to prevent malicious abuse==*/ 
    if (is_uploaded_file($imgfile)) 
    { 

       /*== move file to proper directory ==*/ 
       if (!copy($imgfile,"$newfile"))  
       { 
          /*== if an error occurs the file could not 
               be written, read or possibly does not exist ==*/ 
          print "Error Uploading File."; 
          exit(); 
       } 
     } 

    /*== delete the temporary uploaded file ==*/ 
    unlink($imgfile); 

    /*== update database info ==*/ 
    $db=mysql_connect($db_host, $db_user, $db_passwd) or die ('Cannot connect to database.<br>'. mysql_error()); 
    mysql_select_db($db_name, $db); 

    $name = $_POST[name]; 
    $update = mysql_query("UPDATE rmp_users SET us_pic = '$final_filename' WHERE us_name = '$name'"); 
    $update1 = mysql_query("UPDATE rmp_users SET us_ok = 'waiting' WHERE us_name = '$name'"); 

    /*== display outcome with uploaded picture ==*/ 
    print("<center><table width='580'> 
           <tr><td align='center' bgcolor='white' class='content'><font size=2><b>Your image was uploaded successfully</b></font></td></tr>            
           <tr><td align='center' class='content'><img src=\"$weburl/uploads/$final_filename\"></td></tr> 
           <tr><td align='center' class='content'>A decision on whether to approve this image will be made within 24 hours</td></tr></table></center> 
         "); 

} 

    /*== FUNCTIONS ==*/ 

    function getFileExtension($str) { 

        $i = strrpos($str,"."); 
        if (!$i) { return ""; } 

        $l = strlen($str) - $i; 
        $ext = substr($str,$i+1,$l); 

        return $ext; 

    } 
?>