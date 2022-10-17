<?php 

if(isset($_GET['view'])){
    $view = $_GET['view'];
    require 'src/views/' . $view . '.php';
}else{require 'src/views/home.php';} 
//END OF app.php


/*OLD CODE
    $view = $_GET['view'];
    if($view == 'home'){
        require 'views/home.php';
    }elseif($view == 'about'){
        require 'views/about.php';
    }elseif($view == 'contact'){
        require 'views/contact.php';
    }else{
        require 'views/404.php';
    }*/
    
?>