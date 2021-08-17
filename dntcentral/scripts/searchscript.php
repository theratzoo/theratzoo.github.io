<?php
    $q = $_GET['q'];
    if($_GET['q'] == 'Search...') {
        header('Location: index.php');
    }
    
    if($_GET['q'] !== '') {
        $con = mysqli_connect('localhost', 'theratzoo', 'Talia$1024');
        $db = mysqli_select_db($con, 'dntsitesearch');
    } else {
        header('Location: index.php');
    }
?>
