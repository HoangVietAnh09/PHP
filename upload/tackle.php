<?php
    if(!empty($_SERVER['REQUEST_METHOD'])){
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';

    }
?>