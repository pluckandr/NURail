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
  <?php $page = "home";
        require_once(__DIR__.'/includes/header.php');?>
</nav>
<section>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-8" style="margin-top:10px">


          <div class="panel panel-body">
            <div class="panel-body">
              <h3 class="text-navy"> Youth Summer Rail Program <br>
                <small class="text-illini">March 5, 2015</small> </h3>
                <h3><img width="30%" class = " " src="resources/images/syp14.jpg" class="img-responsive" alt="Youth Summer Rail Program"></h3>
              <p>
                NURail Partner, Michigan Technological University, is gearing up to host the 
                <a href="https://webmail.illinois.edu/owa/redir.aspx?C=4XUGLPtpPU-w_d2LJVrHwIwU0S4VLtIIFIk2-TaIQVCmUhnET7GRFbXSM0SlZeJwi_jNso9oqHc.&URL=http%3a%2f%2fwww.rail.mtu.edu%2fsummer_youth.html" target="blank">6th Annual Rail and Intermodal Transportation Summer Youth Program </a>
                on July 26 – August 1 in Houghton, MI. This program is sponsored by 
                the NURail Center and is a weeklong investigation designed to create awareness and 
                stimulate interest in the areas of rail and intermodal transportation. 
                Student in grades 9 – 11 are encouraged to apply and scholarships are available. 
                <a href="https://webmail.illinois.edu/owa/redir.aspx?C=4XUGLPtpPU-w_d2LJVrHwIwU0S4VLtIIFIk2-TaIQVCmUhnET7GRFbXSM0SlZeJwi_jNso9oqHc.&URL=http%3a%2f%2fwww.syp.mtu.edu%2fdocs%2fRTP_App.pdf" target="blank">Applications</a> are due by May 2.
              </p>
            </div>
          </div>

          <div class="panel panel-body">
            <div class="panel-body">
              <h3 class="text-navy"> NURail Principal Investigator named Fulbright Scholar <br>
                <small class="text-illini">March 3, 2015</small> </h3>
              <p>Congratulations to Civil and Materials Engineering Professor Craig Foster at the University of Illinois at Chicago for being named a 2015-16 U.S. Fulbright Scholar. Professor Foster's work is to study earthen buildings in India. Click <a href="http://www.cs.uic.edu/bin/view/CME/ComputerModeling" target="blank">here</a> to read the UIC News Bureau article for additional information. For the NURail Center, Professor Foster is the principal investigator for the project titled <a href="http://www.nurailcenter.org/research/nurail2012-uic-r01" target="blank">“Modeling of Rail Track Substructure and Rail Vehicle Energy Dissipation”</a>. Congratulations to all!</p>
            </div>
          </div>
          
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
                <div class="date-box"> <span class="date-month">Jun</span> <span class="date-day">4</span> </div>
              </div>
              <div class="col-xs-9 col-sm-8 col-md-9">
                <p> <strong>8:00a.m. <span class="text-illini">Chicago, IL</span></strong><br>
                  NURail Annual Meeting </p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3 col-sm-4 col-md-3">
                <div class="date-box"> <span class="date-month">Jun</span> <span class="date-day">3</span> </div>
              </div>
              <div class="col-xs-9 col-sm-8 col-md-9">
                <p> <strong>1:00p.m. <span class="text-illini">Chicago, IL</span></strong><br>
                  NURail Annual Meeting begins </p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3 col-sm-4 col-md-3">
                <div class="date-box"> <span class="date-month">Mar</span> <span class="date-day">23</span> </div>
              </div>
              <div class="col-xs-9 col-sm-8 col-md-9">
                <p> <strong>1:00p.m. <span class="text-illini">San Jose, CA</span></strong><br>
                  Joint Rail Conference </p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3 col-sm-4 col-md-3">
                <div class="date-box"> <span class="date-month">Mar</span> <span class="date-day">13</span> </div>
              </div>
              <div class="col-xs-9 col-sm-8 col-md-9">
                <p> <strong>12:00p.m. <span class="text-illini"></span></strong><br>
                  William W. Hay Railroad Engineering Seminar Dan Peltier, BNSF </p>
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
