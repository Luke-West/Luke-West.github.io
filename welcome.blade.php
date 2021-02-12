<!DOCTYPE html>
<html>
<title>CJB Valeting</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" 
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" 
	crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}

body, html {
  height: 103%;
  color: black;
  line-height: 1.8;
}

.header-panel {
  background: black;
  min-height: 100%;
}

.black-background-content {
  background: black;
  color: red;
  min-height:50%;
  padding-top: 10%;
}

.bgimg-3 {
  
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
.w3-bar-item {color: red; font-size: 1.7em;}
.w3-white .w3-bar-item {color: black; font-size: 1.7em;}

@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}

.chevron-middle {
	position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%,-50%);
	color: red;
	font-size: 50px;
}

.social-button {
  color: red;
}

</style>
<body>

<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Home</a>
        <a href="#pricing" class="w3-bar-item w3-button w3-hide-small"><i class="fas fa-tags"></i> Pricing</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Portfolio</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Contact</a>
    </div>

    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">Pricing</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Portfolio</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Contact</a>
    </div>
</div>

<div class="header-panel w3-display-container" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <img src="{{ asset('images/cjb-valeting.png') }}">
    </div>
	<div class="chevron-middle" style="white-space:nowrap;">
		<i class="fas fa-chevron-down chevron-down text-centre"></i>
    </div>
</div>

<div class="w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-red">PRICING</span>
    </div>
</div>

<div class="black-background-content" id="pricing">
	<div class="w3-row-padding w3-center">
		<h3>Services Provided</h3>
		<p>- Standard Interior Clean *<br>
		- Deep Interior Clean *</p>

		<table class="table table-dark offset-md-3 col-md-6 pt-sm-10">
			<thead>
				<tr>
					<th>Service</th>
					<th>Standard*</th>
					<th>Deep*</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Smaller Cars</td>
					<td>&pound;30.00</td>
					<td>&pound;45.00</td>
				</tr>
				<tr>
					<td>Larger Cars</td>
					<td>&pound;40.00</td>
					<td>&pound;55.00</td>
				</tr>
				<tr>
					<td>Vans</td>
					<td>&pound;50.00</td>
					<td>&pound;60.00</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>



<div class="w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-red">PORTFOLIO</span>
    </div>
</div>

<div class="black-background-content" id="pricing">
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-1.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 1">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-2.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 2">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-3.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 3">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-4.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 4">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-5.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 5">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-6.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 6">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-7.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 7">
    </div>

    <div class="w3-col m3">
      <img src="{{ asset('images/demo-img-8.png') }}" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pic 8">
    </div>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>

<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- <div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div> -->

<!-- <div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Get in touch</h3>
  <p class="w3-center"><em>Drop me a message and I'll get back to you shortly</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> South / West Yorkshire<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 012345678<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: cjb-valeting@gmail.com<br>
      </div>
      <p>Or leave me a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div> -->

<footer class="w3-center w3-padding-64 black-background-content">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity social-button"></i>
    <i class="fa fa-instagram w3-hover-opacity social-button"></i>
  </div>
</footer>
 
<script>

$(function() {
	$('.chevron-down').click(function () {
		$('html, body').animate({
            scrollTop: $("#pricing").offset().top - 100
        }, 2000);
	});
});

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
