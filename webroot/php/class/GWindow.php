<?php   
//===============================================
class GWindow extends GWidget {
    //===============================================
    private $m_widgetMap;
    //===============================================
    public function __construct() {
        $this->m_widgetMap = GWidget::Create("stackwidget");
    }
    //===============================================
    // method
    //===============================================
    public function load() {
        $lApp = GManager::Instance()->getData()->app;
        $lLogin = "Connexion";
        $lLoginUrl = "home/login";
        if($lApp->login_on == "on") {
            $lLogin = "Déconnexion";
            $lLoginUrl = "home/logout";
        }
        //
        $this->m_widgetMap->addPage("home", "home", "Accueil");
        $this->m_widgetMap->addPage($lLoginUrl, "login", $lLogin);
        $this->m_widgetMap->addPage("home/users", "user", "Utilisateurs");
        $this->m_widgetMap->addPage("home/profile", "profile", "Profil");
        //
        $this->m_widgetMap->addPage("home/sqlite", "sqlite", "SQLite");
        $this->m_widgetMap->addPage("home/sqlite/show", "sqliteshow", "Affichage de la table");
        //
        $this->m_widgetMap->addPage("home/timesheet", "timesheet", "Feuille de temps");
        $this->m_widgetMap->addPage("home/filesystem", "filesystem", "Filesystem");
        //
        $this->m_widgetMap->addPage("home/debug", "debug", "Debug");
        $this->m_widgetMap->addPage("home/message", "message", "Message");
    }
    //===============================================
    public function start() {
        $lApp = GManager::Instance()->getData()->app;
        if($lApp->title == "") {$lApp->title = $this->m_widgetMap->getTitle($lApp->page_id);}
    }
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $lPage = $this->m_widgetMap->getPage($lApp->page_id);
        echo sprintf("<div class='window'>\n");
        GWidget::Create($lPage)->run();
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>