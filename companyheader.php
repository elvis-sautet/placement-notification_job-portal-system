
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
        integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="stylesheets/homepage.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <!--the header-->
    <?php

     $sqlprofile = "SELECT companyprofile  FROM companyregistration WHERE id=$user[id]";
     $result = $conn->query($sqlprofile);
     $resultcount = $result->rowcount();
     if($resultcount>0){
         while($row=$result->fetch()){
             $image = $row->companyprofile;
             if($image == NULL){
                 ?>
    <div class="navgation">
        <div class="header">
            <div class="logo"><a href="processpost"><img id="mylogo" src="index images\mylogo for (2).PNG"
                        alt="logo"></a></div>
            <ul class="main">
                <li><a href="processpost">Post job</a></li>
                <?php
    $companylogged = $user['companyName'];
    $sql = "SELECT * FROM jobapplicantion WHERE companyname = ? AND Message IS NULL ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$companylogged]);
    $rows = $stmt->rowcount();
    if($rows>0){
        ?>
                <li><a href="applications" id="rfrsh">Applications <i class="fas fa-bell"><sup class="sup"><?php echo $rows   ?></sup></i></a></li>

    <?php
    }else{
        ?>
                <li><a href="applications" id="rfrsh">Applications<i class="fas fa-bell"><sup class="sup"></sup></i></a></li>

        <?php
    }
    ?>                <li><a href="#"><img src="profiles/mainpic.png" class='profle'></img> user</a>
                    <ul>
                        <li><a href="companyaccount">Account</a></li>

                        <li>
                            <form action="includes/logout.php" method="post">
                                <a href="#"><button id="logout" type="submit" name="logout"><i
                                            class="fas fa-sign-out-alt"></i> logout</button></a>
                            </form>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>

    <?php

}else{
?>
    <div class="navgation">
        <div class="header">
            <div class="logo"><a href="processpost"><img id="mylogo" src="index images\mylogo for (2).PNG"
                        alt="logo"></a></div>
            <ul class="main">
                <li><a href="processpost">Post job</a></li>
                <?php
    $companylogged = $user['companyName'];
    $sql = "SELECT * FROM jobapplicantion WHERE companyname = ? AND Message IS NULL ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$companylogged]);
    $rows = $stmt->rowcount();
    if($rows>0){
        ?>
                <li><a href="applications" id="rfrsh">Applications <i class="fas fa-bell" ><sup class="sup"><?php echo $rows   ?> </sup></i></a></li>

    <?php
    }else{
        ?>
                <li><a href="applications" id="rfrsh">Applications <i class="fas fa-bell"><sup class="sup"></sup></i> </a></li>

        <?php
    }
    ?>
                <li><a href="#"><img src="profiles/<?php echo $image?>?<?php mt_rand()?>" class='profle'></img> user</a>
                    <ul>
                        <li><a href="companyaccount">Account</a></li>

                        <li>
                            <form action="includes/logout.php" method="post">
                                <a href="#"><button id="logout" type="submit" name="logout"><i
                                            class="fas fa-sign-out-alt"></i> logout</button></a>
                            </form>
                        </li>
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>
    <?php
             }
         }
     }else{
         echo "SQL ERROR";
     }
    ?>


  
</body>

</html>