<?php   
//===============================================
class GHome extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lApp->filesystem = ".";
        $lLogin = "Connexion";
        $lLoginUrl = "/home/login";
        if($lApp->login_on == "on") {
            $lLogin = "Déconnexion";
            $lLoginUrl = "/home/logout";
        }
        //
        echo sprintf("<div class='home_id'>\n");
        GWidget::Create("listbox")->start();
        GWidget::Create("listbox")->addItem("$lLoginUrl", $lLogin, "user");
        GWidget::Create("listbox")->addItem("/home/sqlite", "SQLite", "database");
        GWidget::Create("listbox")->addItem("/home/timesheet", "Timesheet", "calendar");
        GWidget::Create("listbox")->addItem("/home/filesystem", "Filesystem", "hdd-o");
        GWidget::Create("listbox")->addItem("/home/debug", "Debug", "file-text-o");
        GWidget::Create("listbox")->end();
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>