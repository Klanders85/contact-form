<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP, MySQL Practice</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- If adding Bootstrap, un-comment below and remove normalize, add the bootstrap file to CSS dir -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <h1 class="center">Sign Up Here!</h1>
        <div class="container">
            <section>
                <form action="contact.php" method="post">
                    <input type="text" name="f_Name" placeholder="First" class="form_inputs"/><br>
                    <input type="text" name="l_Name" placeholder="Last" class="form_inputs" /><br>
                    <input type="text" name="email"  placeholder="Email Address" class="form_inputs" /><br>
                    <input type="submit" value="Join Newsletter!" class="form_inputs" />   
                </form>
            </section>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
    </body>
</html>
