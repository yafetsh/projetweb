<script  $(document).ready(function() {
    $(".ghomelistingse1").each(function() {
        var str_enddate = $(this).html();
    
var end = new Date(str_enddate);

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
	 var now = new Date();
        var distance = end - now;
		
		
 var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
		  if (distance < 0) {
		$(this).html("Expired");
	
		}
		else{
        countdown($(this), days, hours, minutes, seconds);
		}
    });
    
    function countdown(element, days, hours, minutes, seconds) {
        var interval = setInterval(function() {
            if(seconds == 0) {
                if(minutes == 0) {
                    if(hours == 0) {
                        if(days == 0) {
                            return;
                        }
                        else {
                            days--;
                            hours = 23;
                            minutes = 59;
                            hours = 60;
                        }
                    }
                    else {
                        hours--;
                        minutes = 59;
                        seconds = 60;
                    }
                }
                else {
                    minutes--;
                    seconds = 60;
                }
            }
            seconds--;
            element.html(days + "d " + hours + "h " + minutes + "m " + seconds + "s");
        }, 1000);
    }
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
Month/ Date / Year
Example:  10/25/2014
<br/>
Date: 09/29/2014   <br/>
<span class="ghomelistingse1">09/29/2014</span>
<hr>

Date: 11/19/2014   <br/>
<span class="ghomelistingse1">11/19/2014</span>
<hr>
Date: 10/24/2014   <br/>
<span class="ghomelistingse1">10/24/2014</span>