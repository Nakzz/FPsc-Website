<?php include("./../login/database/db_conection.php");
///////////////////////////////////////////////////////////////////////////////////////////////
//
// Created  by  Ghaffar Khan
//
// Article’s Blog and support site :
//
// http://ghaffarkh.blogspot.com/2009/04/site-statistics-with-php-and-mysql_12.html
//
////////////////////////////////////////////////////////////////////////////////////////////////
?>

   <script language="Javascript" src="<?php echo $base_url;?>count.php?page=<?php echo $_REQUEST['section'];?>"></script>

<?php

    echo "<br>";
    echo '<img src="'.$base_url.'graph.php?page='.$_REQUEST['section'].'" />';

?>
