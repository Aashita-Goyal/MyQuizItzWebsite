
$('.fade').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

var today = new Date();
var day = today.getDay();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
document.getElementById("displayDateTime").innerHTML = dateTime + ' <br> Day :- ' + daylist[day];