<?php

use App\Controllers\HomeController;

require_once "vendor/autoload.php";



if("login" == $_GET['page'] || "registration" == $_GET['page'])
{
   
}else{
    include_once "pages/includes/header.php";
}

if("home" == $_GET["page"])
{
    $homeController = new HomeController();
    include_once $homeController->loadHomePage();

}
elseif("skill" == $_GET["page"]){
    $homeController = new HomeController();
    include_once $homeController->loadSkillPage();

}
elseif("services" == $_GET["page"]){
    $homeController = new HomeController();
    include_once $homeController->loadServicesPage();

}
elseif("contact"==$_GET["page"]){
    $homeController = new HomeController();
    include_once $homeController->loadContactPage();
}
elseif("registration" == $_GET["page"]){
    include_once "pages/registration.php";

}
elseif("login" == $_GET["page"]){
    include_once "pages/login.php";
}


if("login" == $_GET['page'] || "registration" == $_GET['page'])
{
  
}
else{
    include_once "pages/includes/footer.php";
}
