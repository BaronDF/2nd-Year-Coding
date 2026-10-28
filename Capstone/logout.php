<?php 
session_start();
if (isset ($_GET ['user_id'])){
    session_destroy();
}
?>