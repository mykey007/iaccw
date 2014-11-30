if (document.images) {
						img13on = new Image();
            img13on.src = "/images/grigio_13bis.jpg";
            img13off = new Image();
            img13off.src = "/images/blue_13bis.jpg"; 
						
						img12on = new Image();
            img12on.src = "/images/grigio_12.jpg";
            img12off = new Image();
            img12off.src = "/images/blue_12.jpg"; 	
						
						img11on = new Image();
            img11on.src = "/images/grigio_11.jpg";
            img11off = new Image();
            img11off.src = "/images/blue_11.jpg"; 
	
						img10on = new Image();
            img10on.src = "/images/buttons/grigio_10.jpg";
            img10off = new Image();
            img10off.src = "/images/buttons/blue_10.jpg"; 
						img9on = new Image();
            img9on.src = "/images/buttons/grigio_09.jpg";
            img9off = new Image();
            img9off.src = "/images/buttons/blue_09.jpg"; 
						img8on = new Image();
            img8on.src = "/images/buttons/grigio_08.jpg";
            img8off = new Image();
            img8off.src = "/images/buttons/blue_08.jpg"; 
            img7on = new Image();
            img7on.src = "/images/buttons/grigio_07.jpg";
            img7off = new Image();
            img7off.src = "/images/buttons/blue_07.jpg"; 
						img6on = new Image();
            img6on.src = "/images/buttons/grigio_06.jpg";
            img6off = new Image();
            img6off.src = "/images/buttons/blue_06.jpg"; 
						img5on = new Image();
            img5on.src = "/images/buttons/grigio_05_new.jpg";
            img5off = new Image();
            img5off.src = "/images/buttons/blue_05_new.jpg"; 
            img4on = new Image();
            img4on.src = "/images/buttons/grigio_04.jpg";
            img4off = new Image();
            img4off.src = "/images/buttons/blue_04.jpg"; 
            img3on = new Image();
            img3on.src = "/images/buttons/grigio_03.jpg";
            img3off = new Image();
            img3off.src = "/images/buttons/blue_03.jpg"; 
            img2on = new Image();
            img2on.src = "/images/buttons/grigio_02.jpg";
            img2off = new Image();
            img2off.src = "/images/buttons/blue_02.jpg"; 
            img1on = new Image();
            img1on.src = "/images/buttons/grigio_01.jpg";
            img1off = new Image();
            img1off.src = "/images/buttons/blue_01.jpg"; 
}
function imgOn(imgName) {
	
if (document.images) {
document[imgName].src = eval(imgName + "on.src");}
}
function imgOff(imgName) {
if (document.images) {
document[imgName].src = eval(imgName + "off.src");}
}
