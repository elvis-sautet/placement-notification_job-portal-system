<?php
include "includes/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesheets/company.jobpost.css?v=<?php echo time()?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company</title>
    <link rel="shortcut icon" type="image/png" href="index images\favicon.PNG" >

</head>

<body class="companysitee">
    <?php
    include "companyheader.php";
    ?>
    <div class="welcome">
        <div class="welcome-note">
            <p>Welcome <span style="color:#FF4500;font-weight:bold;"><?php echo $_SESSION['companyname']?></span> to
                One<span style="color:#6CB4EE;" class="code">Code</span>. </p>
            <p>Inneed of a developer🤔 from One<span style="color:#6CB4EE;" class="code">Code</span>
                <a class="link" href="#" class="clickre">Get One here😉😉!!!</a>
            </p>
        </div>
    </div>
    <div class="recentjobs">
        <div class="recent">
            <h3 class="heading">Recently posted</h3>
        </div>
    </div>
</body>

</html>