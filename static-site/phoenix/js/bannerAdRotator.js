banner = new Array("gif/azBusBank.gif", "jpg/ilviaggio.jpg", "jpg/vanderzee.jpg", "jpg/terraItalia.jpg", "gif/republicBeverage.gif", "jpg/villaVitaIntl.jpg", "jpg/30fps_logo.jpg", "gif/marcolin.gif","jpg/sanCarloMichael.jpg","jpg/fuLynda.jpg","jpg/sunriseBank.jpg");

links = new Array("http://www.azbizbank.com/", "http://www.ilviaggio.com", "http://www.vanderzee.net/", "http://www.terraitalia.org/", "http://www.republicbeverage.com/", "http://www.villavita.net", "http://www.30fps.com", "http://www.marcolinusa.com/","http://www.oliovalledelsosio.com/","http://www.myitalianhideaway.com","http://www.sunrisebankofarizona.com");

iLength = banner.length;

function randombanner() {
	var randomnumber = Math.random();
	i = Math.round( (iLength - 1) * randomnumber) + 1;
	document.currBanner.src = banner[i];
	}

function startTime() {

        var time= new Date();
        hours = time.getHours();
        mins = time.getMinutes();
        secs = time.getSeconds();
        closeTime = (hours * 3600) + (mins * 60) + secs;
        closeTime += 5;
        Timer();
	}

function Timer(){
        var time = new Date();
        hours = time.getHours();
        mins = time.getMinutes();
        secs = time.getSeconds();
        curTime = (hours * 3600) + (mins * 60) + secs;
        if (curTime >= closeTime) {
                if (iLength < 9){ //											if iLength is less than the number of ads - 1(array starts at 0)
                        iLength++;
                        document.currBanner.src = banner[iLength];
                }
                else {
                        iLength = 0;
                        document.currBanner.src = banner[iLength];
                }
                startTime();
        }
        else {
                window.setTimeout("Timer()",1000)}
		}

function clickLink() {
        top.location = links[iLength]
}