<?php
if (isset($_POST['option'])) {
    $url = $_POST['option']; 
    header("Location: " . $url);  
    exit();
}