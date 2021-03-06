<?php   
//===============================================
class GLoginUi extends GWidget {
    //===============================================
    private $datas = array();
    //===============================================
    public function __construct() {
        $this->datas["error"] = false;
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $this->request();
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<div class='box3'>\n");
        //
        if($lApp->login_on != "on") {
            echo sprintf("<div class='body2'>\n");
            echo sprintf("<div class='profile'><i class='fa fa-user'></i></div>\n");
            //
            if($this->datas["error"] == true) {
                echo sprintf("<div class='error'>\n");
                echo sprintf("Les identifiants sont incorrects\n");
                echo sprintf("</div>\n");
            }
            //
            echo sprintf("<div class='edit'>\n");
            echo sprintf("<label class='label' for='username'><i class='icon2 fa fa-user'></i></label>\n");
            echo sprintf("<div class='field'><input class='input' type='text' id='username' name='username' placeholder='Nom d&#39;utilisateur' required/></div>\n");
            echo sprintf("</div>\n");
            //
            echo sprintf("<div class='edit'>\n");
            echo sprintf("<label class='label' for='password'><i class='icon2 fa fa-key'></i></label>\n");
            echo sprintf("<div class='field'><input class='input' type='password' id='password' name='password' placeholder='Mot de passe' required/></div>\n");
            echo sprintf("</div>\n");
            //
            echo sprintf("<div class='right'>\n");
            echo sprintf("<a class='button' href='%s'><i class='icon fa fa-times'></i> Annuler</a>\n", $lApp->last_url);
            echo sprintf("<button class='button' type='submit' id='req' name='req' value='login'>
            <i class='icon fa fa-sign-in'></i> Se Connecter</button>\n");
            echo sprintf("</div>\n");
            //
            echo sprintf("</div>\n");
        }
        else {
            echo sprintf("<div class='center'>\n");
            echo sprintf("<a class='button' href='%s'><i class='icon fa fa-times'></i> Annuler</a>\n", $lApp->last_url);
            echo sprintf("<button class='button' type='submit' id='req' name='req' value='logout'>
            <i class='icon fa fa-sign-out'></i> Se Déconnecter</button>\n");
            echo sprintf("</div>\n");
        }
        //
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "login") {
                GLogin::Instance()->login();
                if($lApp->login_on == "off") {$this->datas["error"] = true;}
            }
            else if($lReq == "logout") {
                $lApp->login_on = "off";
                GManager::Instance()->clearSession();
                GManager::Instance()->redirect($lApp->last_url);
            }
        }
    }
    //===============================================
}
//===============================================
?>