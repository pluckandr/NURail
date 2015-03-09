<!DOCTYPE html>
<link rel="shortcut icon" href="../logo.png">
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
    </head>
    <body>
        <nav>
            <?php 
                $page = "about";
                require_once(__DIR__.'/../includes/header.php');
            ?>
        </nav>
        <section>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div style=" " class="panel panel-body">
                            <h2>Contact Us</h2>
                            <h4>NURail Center</h4><br>
University of Illinois at Urbana-Champaign<br>
1239B Newmark Engineering Laboratory, MC-250<br>
205 N. Mathews Ave<br>
Urbana, IL 61801 <br>
Tel: (217) 244-4999 <br>
Fax: (217) 333-1924 <br>
Email: <a href="mailto: NURail-Center@illinois.edu">NURail-Center@illinois.edu</a><br><br>
<p><a target="_blank" href="http://illinois.edu/map/view?amp;buildingId=369">View Larger Map</a></p>

<iframe width="100%" scrolling="no" height="650" frameborder="0" src="http://illinois.edu/map/view?skinId=4830&buildingId=24"></iframe>
                            
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <?php require_once(__DIR__.'/../includes/footer.php'); ?> 

            
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <script src="../resources/js/script.js"></script>
        </footer>
    </body>
</html>