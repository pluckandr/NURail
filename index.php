<!DOCTYPE html>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="shortcut icon" href="logo.png">
<script type="text/javascript">
$(document).ready(function(){
    var maindiv = $("div.feature-project");//document.getElementById('cont');
    var count = maindiv.length;
    
    var indexPicked = Math.floor((Math.random() * count));
	maindiv[indexPicked].style.display = "block";
	//alert(Math.random()+" "+count+" "+indexPicked);
});
</script>
<style type="text/css">
div.feature-project { 
  display: none;
}​
</style>


<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>
<body>
<header>
  <div class="nurail-banner"> <img src="resources/images/nurail-banner.png" class="img-responsive" alt="NURail banner"> </div>
</header>
<nav>
  <?php 
                $page = "home";
                require_once(__DIR__.'/includes/header.php');
            ?>
</nav>
<section>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-8" style="margin-top:10px">
          
          <div class="panel panel-body">
            <div class="panel-body">
              <h3 class="text-navy"> NURail Students Awarded AREMA Scholarships <br>
                <small class="text-illini">February 20, 2015</small> </h3>
              <p>On February 20, 2015 the AREMA Educational Foundation announced its 2015 Scholarship Winners. Of the 34 scholarships given over half went to students attending NURail Center partner schools. For a complete list of all 18 names and their awarded scholarships, click <a href="https://drive.google.com/file/d/0B1ZXVUXcyz-HcnBUSXNyNkxOYk0/view?usp=sharing" target="blank">here</a>. Congratulations to all!</p>
            </div>
          </div>
          
          <div class="panel panel-body">
            <div class="panel-body">
              <h3 class="text-navy"> Dr. Bo Zou next Hay Seminar Speaker <br>
                <small class="text-illini">October 17, 2014</small> </h3>
              <p>NURail Center welcomes Dr. Bo Zou, Assistant Professor of Civil and Materials Engineering at the University of Illinois at Chicago, as the Hay Seminar guest speaker on Friday, October 17. His presentation is titled: Integrated Modeling of High Performance Passenger and Freight Train Operation Planning on Shared Use Rail Corridors. See the <span class="text-danger">Hay Seminar</span> page for details.</p>
            </div>
          </div>
          <div class="panel panel-body">
            <div class="panel-body">
              <h3 class="text-navy"> 2014 AREMA Conference <br>
                <small class="text-illini">October 7, 2014</small> </h3>
              <img src="resources/images/nurail-arema.png" class="img-responsive" alt="2014 Arema Conference">
              <p>Over 60 NURail students from the partner universities attended the 2014 AREMA Conference in Chicago in September. In addition to attending sessions and giving poster presentations, many worked the NURail booth in the exhibition hall.</p>
            </div>
          </div>
          <div class="panel panel-body">
            <div class="panel-body">
              <h3 class="text-navy"> Railway Engineering Education Symposium<br>
                <small class="text-illini">June 23, 2014</small> </h3>
              <img src="resources/images/nurail-rees.png" class="img-responsive" alt="REES presentation">
              <p>Professors from around the country attended the Railway Engineering Education Symposium (REES) on June 23-25, 2014 in Overland Park, Kansas. NURail helped sponsor the event. The objective of the symposium was to further inform the professors of the workforce crisis and give them materials to educate students about railway infrastructure, performance, engineering, and design at their respective universities. It also included trips to BNSF Railway&#39;s Freight Yard and the Kansas City Intermodal Facility.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <h4>Featured Project</h4>
          <hr>
          <div class="feature-border projects">
		    <?php 
                require_once(__DIR__.'/tech-and-pub/featured-projects.php');
            ?>
		  </div>
		  
		  
		  
          <h4>Upcoming Events</h4>
          <hr>
          <div class="well well-event">
            <div class="row">
              <div class="col-xs-3 col-sm-4 col-md-3">
                <div class="date-box"> <span class="date-month">Nov</span> <span class="date-day">14</span> </div>
              </div>
              <div class="col-xs-9 col-sm-8 col-md-9">
                <p> <strong>12:00p.m. <span class="text-illini">Urbana, IL</span></strong><br>
                  William W. Hay Railroad Engineering Seminar </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3 col-sm-4 col-md-3">
                <div class="date-box"> <span class="date-month">Jan</span> <span class="date-day">11</span> </div>
              </div>
              <div class="col-xs-9 col-sm-8 col-md-9">
                <p> <strong>2:00p.m. <span class="text-illini">Washington, DC</span></strong><br>
                  NURail Meeting at TRB </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3 col-sm-4 col-md-3">
                <div class="date-box"> <span class="date-month">Jun</span> <span class="date-day">4</span> </div>
              </div>
              <div class="col-xs-9 col-sm-8 col-md-9">
                <p> <strong>8:00a.m. <span class="text-illini">Chicago, IL</span></strong><br>
                  NURail Annual Meeting </p>
              </div>
            </div>
          </div>
		  
		  <h4> Who We Are </h4>
          <hr>
		  
          <div class="feature-border">
		  <div class="feature-box">
		    <p>The NURail Center is a rail-focused seven-university consortium led by the <a target="new" href="http://railtec.illinois.edu">Rail Transportation and Engineering Center (RailTEC)</a> at the <a target="new" href="http://www.uiuc.edu">University of Illinois at Urbana-Champaign</a>.</p>
            <p>We are a Tier-1 University Transportation Center (UTC) under the US Department of Transportation (DOT) Office of the Assistant Secretary for Research &amp; Technology (OST) program working to improve and expand rail education, research, workforce development, and technology transfer.</p>
		  </div>
		  </div>
		  
		  <h4>Contact</h4>
		  <hr>
          <div class="feature-border">
		  <div class="feature-box">
		            
             
            <address>
			    NURail Center<br>
                1239B Newmark Engineering Laboratory, MC-250<br>
                205 N. Mathews Avenue<br>
                Urbana, IL 61801<br>
            </address>    
            <p>
                Tel: (217) 244-4999<br>
                Fax: (217) 333-9464<br>
                NURail-Center@illinois.edu
            </p>
            
		  </div>
		  </div>

		  
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="footer">
    <div class="row" style="text-align: center">
        <div class="col-sm-13" style="margin:0 -10px; background:#fff; padding: 1px">
    
            <a target="_blank" href="http://illinois.edu/"><img style="width:13%" src="about/images/logos/uiuc.png"/></a>&nbsp;
      <a target="_blank" href="http://www.uic.edu/uic/"><img style="width:13%" src="about/images/logos/uic.png"/></a>&nbsp;
      <a target="_blank" href="http://web.mit.edu/"><img style="width:11%" src="about/images/logos/mit.jpg"/></a>&nbsp;
      <a target="_blank" href="http://www.mtu.edu/"><img style="width:10%" src="about/images/logos/mt.jpg"/></a>&nbsp;&nbsp;
      <a target="_blank" href="http://www.uky.edu/"><img style="width:6%" src="about/images/logos/uk.jpg"/></a>&nbsp;&nbsp;
      <a target="_blank" href="http://www.utk.edu/"><img style="width:9%" src="about/images/logos/utk.jpg"/></a>&nbsp;
      <a target="_blank" href="http://www.rose-hulman.edu/"><img style="width:11%" src="about/images/logos/rhit.png"/></a>
    
        </div>
    <div style="text-align: center; margin:2px;">National University Rail Center &copy; <?php echo date("Y"); ?> All rights reserved </div>
    </div>
  </div> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
  <script src="resources/js/header.js"></script> 
</footer>
</body>
</html>
