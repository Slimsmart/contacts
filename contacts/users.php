<?php
if (isset($_GET['source'])){
    $source = $_GET ['source'];

}else{
    $source='';
}
switch ($source) {
    case 'add_users':
        include "includes/add_users.php";
        break;
    case 'update_user':
        include "update_user.php";
        break;
    case '34':
        echo "nice work";
        break;
    default:
        include "index.php";
        break;
}


?>

