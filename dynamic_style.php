.container {
    max-width: 1200px;
}
.icon i {
    font-size: 60px;
}
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5 {
    padding-right: 12px;
    padding-left: 12px;
}
#blog .card-img-top{
    max-height:200px;
    object-fit:cover;
}
<?php
$biru ="#0000FF";
$hijau ="#00ff00";

if(date("h")>12) {
    $bg_color = $biru;
}
else{
    $bg_color = $hijau
}

?>

body {
    background-color: <?=$bg_color?>;
}