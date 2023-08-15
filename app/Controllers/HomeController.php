<?php

namespace App\Controllers;

class HomeController
{
    public $page = "pages/home.php";
    public function loadHomePage()
    {
        return $this->page;
    }

    public $page2 = "pages/skill.php";
    public function loadSkillPage(){
        return $this->page2;
    }

    public $page3 = "pages/services.php";
    public function loadServicesPage(){
        return $this->page3;
    }
    public $page4 = "pages/contact.php";
    public function loadContactPage(){
        return $this->page4;
    }
}