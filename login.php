<?php include_once("include/functions.php"); ?>
<?php noUser();?>
<?php $settings = getSettings(); ?>
<?php
$credentialsWarning = FALSE;
if (isset($_POST['login'])){
    if (isset($_GET['redirect'])) {} else {
        $redirect = '';
    }
    if (handleLogin($_POST['username'], $_POST['password'], $redirect)) {
    } else {
        $credentialsWarning = TRUE;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1D77FF">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <title>Login - SimpleCloud</title>
</head>

<body>
    <header class="header--page" id="home">
        <nav class="navbar navbar-dark navbar-expand-md bg-faded justify-content-center fixed-top" data-toggle="affix">
            <div class="container">
                <a href="/" class="navbar-brand d-flex mr-auto">SimpleCloud</a>
            </div>
        </nav>
    </header>
    <div class="body--page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="login-reminder">
<?php
if (isset($_GET['registered'])): ?>
<div class="alert alert-success" role="alert">
    Account created, please login.
</div>
<?php else: ?>
<p>Don't have an account? <a href="register.php">Sign up</a> today!</p>
<?php endif; ?>
<?php
if ($credentialsWarning): ?>
    <div class="alert alert-danger" role="alert">
        Wrong login credentials.
    </div>
<?php endif; ?>
                    </div>
                    <div class="card-top">
                        <h1>LOGIN</h1>
                    </div>
                    <div class="card-body card-body--form">
                        <form method="POST">
                            <div class="form-group">
                                <label for="username">USERNAME</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="form-group">
                                <label for="password">PASSWORD</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-submit">
                                <button type="submit" name="login" class="btn btn-primary">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p><i class="fas fa-map-marker-alt"></i><?php echo $settings['address']; ?></p>
                        <p><i class="far fa-envelope"></i><a href="mailto:<?php echo $settings['email']; ?>"><?php echo $settings['email']; ?></a></p>
                        <p><i class="fas fa-phone"></i><a href="tel:+<?php echo $settings['phone']; ?>"><?php echo $settings['phone']; ?></a></p>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo $settings['facebooklink']; ?>"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo $settings['instagramlink']; ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $settings['twitterlink']; ?>"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <?php echo $settings['copyright']; ?>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script>
        function navbarUpdate() {
            if ($(window).scrollTop() >= 60) {
                $(".navbar").addClass("scrolling");
            } else {
                $(".navbar").removeClass("scrolling");
            }
        }

        $(document).ready(function() {
            navbarUpdate();
            $(window).on("scroll", function() {
                navbarUpdate();
            });
        });

    </script>
</body>

</html>
