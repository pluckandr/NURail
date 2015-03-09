<!DOCTYPE html>
<link rel="shortcut icon" href="../logo.png">
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Research Briefs</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
    </head>
    <body>
        <nav>
            <?php 
                $page = "tech";
                require_once(__DIR__.'/../includes/header.php');
            ?>
        </nav>
        
        <section>
            <div class="section">
                <div class="container">
                    <div class="row">
                         <div class="col-sm-12">
                            <div class="col-sm-12 panel panel-body">
                            <h1> Research Briefs</h1>
                            <iframe src="https://docs.google.com/spreadsheets/d/1uUvGq_ldx20puglNXBFj1RAp-JG1LBgQUJTRa3UK7ak/pubhtml?widget=true&amp;headers=false" width="100%" frameborder='0'></iframe>
                            <?php 
                require_once( 'featured-projects.php');
            ?>
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