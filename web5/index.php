<?php
/*
PRACTICE SET 5-04
What function do we use to start a session?
- session_start();
Where are these session variables stored? 
- Unlike cookies session data is not stored in the 
user's computer it is stored in the SERVER


*/

//PRACTICE SET 5-05
session_start();

if(isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views']+1;
    $count = $_SESSION['views'];
    if($_SESSION['views'] == 5){
        echo 'Thank you for visiting the page a lot.<br>';
    }
    if($_SESSION['views'] == 10){
        header('Location: congratulations.php');
    }

}else{
    $_SESSION['views']=0;
    $count = $_SESSION['views'];
}
      

?>

<h1>Hello</h1>
<p>You have visited this page <?php echo $count; ?> times</p>
<form action="<?php $_SESSION['views']=0;  ?>">
    <input type="submit" value="Reset">
</form>

