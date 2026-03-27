<?php
# Stagiaire/Michael/mvc-19/public/index.php

/* 
Chargement une seule fois 
et qui arrête 
le srcipt en cas d'échec 
*/
require_once "../config.php";


if(!isset($_GET['page'])) {
    
    include ROOT_PATH."/view/index.php";


}else if(in_array($_GET['page'],PUBLIC_PAGES)){

    
    include ROOT_PATH."/view/".$_GET['page'].".php";
}

else {
   
    include ROOT_PATH."/view/404.php";
}