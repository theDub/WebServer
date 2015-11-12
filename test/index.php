<?
error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign In form</title>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <?
        try {
            // database connection
            include('db.php');             
            // route to appropriate controller action
            include('routes.php');
        } catch (Exception $e) {
            die($e->getMessage());
        }
        ?>
    </body>

</html>