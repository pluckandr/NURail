<?php $pathPrefix = $page== 'home' ? '' : '../'; 


?>

<div class="navbar navbar-nurail navbar-nurail-position">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nurail-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div>
                <a class="navbar-brand" href="../index.php">
                    <img style="max-width:100%; margin-top:-8%;" src="<?php echo $pathPrefix?>resources/images/logo-swoosh.png">
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="nurail-navbar">
            <ul class="nav navbar-nav">
                <li class="dropdown <?php echo $page == 'home' ? 'active' : '' ?>">
                    <a href="<?php echo $pathPrefix?>index.php">Home</a>
                </li>
                <li class="dropdown <?php echo $page == 'about' ? 'active' : '' ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        About
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $pathPrefix?>about/directors-message.php">Director's Message</a></li>
                        <li><a href="<?php echo $pathPrefix?>about/overview.php">Overview</a></li>
                        <li><a href="<?php echo $pathPrefix?>about/consortium-members.php">Consortium Members</a></li>
                        <li><a href="<?php echo $pathPrefix?>about/affiliate-members.php">Affiliate Members</a></li>
                        
                        <li><a href="<?php echo $pathPrefix?>about/news-archive.php">News Archive</a></li>
                        <li><a href="<?php echo $pathPrefix?>about/contact-us.php">Contact Us</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php echo $page == 'people' ? 'active' : '' ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        People
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $pathPrefix?>people/leadership.php">Leadership</a></li>
                        <li><a href="<?php echo $pathPrefix?>people/executive-advisory-board.php">Executive Advisory Board</a></li>
                        <li><a href="<?php echo $pathPrefix?>people/technical-advisory-committee.php">Technical Advisory Committee</a></li>
                        <li><a href="<?php echo $pathPrefix?>people/student-leadership-council.php">Student Leadership Council</a></li>
                        <li><a href="<?php echo $pathPrefix?>people/student-of-the-year.php">Student of the Year</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php echo $page == 'research' ? 'active' : '' ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Research
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $pathPrefix?>research/current-research.php">Current Research</a></li>
                        <li><a href="<?php echo $pathPrefix?>research/completed-research.php">Completed Research</a></li>
                        <li><a href="<?php echo $pathPrefix?>research/rfps.php">RFPs</a></li>
                        <li><a href="<?php echo $pathPrefix?>research/research-facilities.php">Research Facilities</a></li>
                        
                        <li><a href="<?php echo $pathPrefix?>research/strategic-development-plans.php">Strategic Development Plans</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php echo $page == 'education' ? 'active' : '' ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Education &amp; Outreach
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $pathPrefix?>education-and-outreach/railroad-course-offerings.php">Railroad Course Offerings</a></li>
                        <li><a href="<?php echo $pathPrefix?>education-and-outreach/curriculum-development-projects.php">Curriculum Development Projects</a></li>
                        <li><a href="<?php echo $pathPrefix?>education-and-outreach/outreach-youth-programs.php">Outreach &amp; Youth Programs</a></li>
                        <li><a href="<?php echo $pathPrefix?>education-and-outreach/workforce-development-projects.php">Workforce Development Projects</a></li>
                        <li><a href="<?php echo $pathPrefix?>education-and-outreach/student-groups.php">Student Groups</a></li>
                        <li><a href="<?php echo $pathPrefix?>education-and-outreach/prospective-students.php">Prospective Students</a></li>
                    </ul>
                </li>
                <li class="dropdown <?php echo $page == 'tech' ? 'active' : '' ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Technology &amp; Publications
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo $pathPrefix?>tech-and-pub/hay-seminar-series.php">Hay Seminar Series</a></li>
                        <li><a href="<?php echo $pathPrefix?>tech-and-pub/sponsored-conferences.php">Sponsored Conferences</a></li>
                        <li><a href="<?php echo $pathPrefix?>tech-and-pub/annual-meeting.php">Annual Meeting</a></li>
                        <li><a href="<?php echo $pathPrefix?>tech-and-pub/annual-reports.php">Annual Reporting</a></li>
                        <li><a href="<?php echo $pathPrefix?>tech-and-pub/research-briefs.php">Research Briefs</a></li>
                        <li><a href="<?php echo $pathPrefix?>tech-and-pub/project-reports-publications.php">Project Reports &amp; Publications</a></li>
                        <li><a href="<?php echo $pathPrefix?>tech-and-pub/conference-presentations.php">Conference Presentations</a></li>
                    </ul>
                </li>  
            </ul>
        </div>
    </div>
</div>