<?php

define('USER','oh2');
define('DOMAIN','oh2.ir');
define("SERVER","/home/oh2/domains/");

if($_GET['id']=='/jq.php'){
    include SERVER."files_program/main/jq_load_path.php";
}
else{

    if(isset($_GET['id']))
        $_GET['id']=substr($_GET['id'],1);


    if(!isset($_GET) || !$_GET['id'])
        $_GET['id']='index';


if($_GET["id"]=='api')
    include SERVER."files_program/user/iron/controller/json/load.php";
else if($_GET["id"]=='film_api')
    include SERVER."files_program/user/film/admin/controller/json/load.php";
else if($_GET["id"]=='serviskar_api')
    include SERVER."files_program/user/noroserviskar/admin/controller/json/load.php";
else if($_GET["id"]=='asanzi_api')
    include SERVER."files_program/user/asanzi/admin/controller/json/load.php";
else
    include SERVER."files_program/main/load_path.php";


}
