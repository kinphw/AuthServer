<?php
    $answer = 'sky';
    
    $a = $_GET['key'];
    if ($a == $answer){
        echo 'Success';
    } else {
        echo 'Fail';
    };
?>