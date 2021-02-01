<?php   
//===============================================
class GProfileUi extends GWidget {
    //===============================================
    private $datas = array();
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        GManager::Instance()->loginOn();
        $lApp = GManager::Instance()->getData()->app;
        //
        $this->datas["collaborator"] = "";
        $this->datas["manager"] = "";
        $this->datas["client"] = "";
        $this->datas["address"] = "";
        //
        $this->request();
        //
        echo sprintf("<form action='' method='post' enctype='multipart/form-data'>\n");
        echo sprintf("<div class='profile_id'>\n");
        echo sprintf("<div class='content'>\n");
        echo sprintf("<div class='item username'>$lApp->user_name</div>\n");
        echo sprintf("<input type='hidden' id='user_name' name='user_name' value='%s'/>", $lApp->user_name);
        // profile
        echo sprintf("<div class='item'>\n");
        echo sprintf("<div class='profile'>\n");
        echo sprintf("<div class='img'><i class='icon fa fa-user'></i></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='full_name'>Collaborateur :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='full_name' name='full_name' placeholder='Gérard KESSE' required/></div>\n", $this->datas["collaborator"]);
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='manager_name'>Manager :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='manager_name' name='manager_name' placeholder='Yvon MOUTSINGA' required/></div>\n", $this->datas["manager"]);
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='client_name'>Client :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='client_name' name='client_name' placeholder='PMC Carrus Groupe' required/></div>\n", $this->datas["client"]);
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='client_address'>Adresse :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='client_address' name='client_address' placeholder='56 Avenue Raspail, 94100 Saint-Maur-des-Fossés' required/></div>\n", $this->datas["address"]);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='item buttons'>\n");
        echo sprintf("<a class='button_id' href='/home'>
        <i class='icon fa fa-times'></i> Annuler</a>\n");
        echo sprintf("<button class='button_id' type='submit' id='req' name='req' value='save'>
        <i class='icon fa fa-address-book-o'></i> Sauvegarder</button>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "save") {
                GProfile::Instance()->createProfile($_POST);
            }
        }
    }
    //===============================================
}
//===============================================
?>