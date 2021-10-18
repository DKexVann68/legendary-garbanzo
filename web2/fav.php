<html>
<head><title>Your Favorite</title></head>
<body>
<?php
    if(isset($_POST['username']) && $_POST['username'] != ''){
        echo '<h3>Thanks for your selection '.$_POST['username'].'</h3>';
        if(isset($_POST['color']) && isset($_POST['dish']) && $_POST['dish'] != ''){
            echo '<h3>You really enjoy the '. $_POST['dish'].' dish <br> -  and especially with a nice '.$_POST['color'].' wine.</h3>';
        }else{
            echo '<h3>But please specify both your preferred dish and wine color '.$_POST['username'].'</h3>';
        }
    }else{
        echo '<h1>Please Enter Your Username First!</h1>';
    }

    
?>
</body>
</html>