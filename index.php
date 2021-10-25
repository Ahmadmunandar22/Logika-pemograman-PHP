<?php
$blog = array(
    array(
        'image' => 'https://images.unsplash.com/photo-1633673489026-62f02b97c1fe?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80'
    ),
    array(
        'image' => 'https://images.unsplash.com/photo-1633671856163-34f97909b715?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80'
    ),
    array(
        'image' => 'https://images.unsplash.com/photo-1633665502596-fc90320b0b79?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=464&q=80'
    ),
    array(
        'image' => 'https://images.unsplash.com/photo-1568444438385-ece31a33ce78?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5fHx8ZW58MHx8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'
    ),
);
?>

<html>
    <head>
        
        <?php
        require("style.php")
        ?>
        
    </head>
    <body>  
    
    <?php
        require("navbar.php");

        // include:jalan terus walau eror
        //reqire : berhenti ketika eror
        include("fitur.php");
        require("blog.php");
        
        ?>
                
    </body>     
</html>