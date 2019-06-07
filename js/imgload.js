var devices = ["phone", "tablet", "desktop"];
var device = 0;
var interval = 2000;
var ticker = setInterval(animate, interval);

$('.device').click(function() {
  animate();
  clearInterval(ticker);
  ticker = setInterval(animate, interval);
});

function animate() { $('.device').children().toggleClass(devices[device]).toggleClass(devices[(device+1)%devices.length]);
  device = (device+1)%devices.length;
}

$(document).ready(function(){ 
	$('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
    }); 
	
var hiddenDiv = document.getElementById("hide");

var bell = document.getElementById("Concierge");
var email = document.getElementById("hiddenEmail");
var bellbutton = document.getElementById("bellButton");
var bellbody = document.getElementById("bellBody");
var sound = document.getElementById("soundEffect");

var all=[email,bellbutton,bellbody,sound];
//remove the hidden and then add it back in...

function activate(){
  console.log("working");
  //get all the stuff, and add active to everything
  all.forEach(function(entry){
    entry.classList.toggle("active");
    
  });
  
}
