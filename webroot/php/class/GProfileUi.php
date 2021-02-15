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
        echo sprintf("<form action='' method='post'>\n");
        echo sprintf("<div class=''>\n");
        echo sprintf("<div class='content2'>\n");
        echo sprintf("<div class='item2 title2'>%s</div>\n", $lApp->user_name);
        echo sprintf("<input type='hidden' id='user_name' name='user_name' value='%s'/>", $lApp->user_name);
        // profile
        echo sprintf("<div class='item2'>\n");
        echo sprintf("<div class='center'>\n");
        echo sprintf("<div class='profile2'><i class='icon3 fa fa-user'></i></div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='full_name'>Collaborateur :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='full_name' name='full_name' placeholder='Gérard KESSE' required/></div>\n", $this->datas["collaborator"]);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='manager_name'>Manager :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='manager_name' name='manager_name' placeholder='Yvon MOUTSINGA' required/></div>\n", $this->datas["manager"]);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='client_name'>Client :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='client_name' name='client_name' placeholder='PMC Carrus Groupe' required/></div>\n", $this->datas["client"]);
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label2' for='client_address'>Adresse :</label></div>\n");
        echo sprintf("<div class='field2'><input class='input2' type='text' value='%s' id='client_address' name='client_address' placeholder='56 Avenue Raspail, 94100 Saint-Maur-des-Fossés' required/></div>\n", $this->datas["address"]);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='item2 right'>\n");
        echo sprintf("<a class='button' href='/home'>
        <i class='icon fa fa-times'></i> Annuler</a>\n");
        echo sprintf("<button class='button' type='submit' id='req' name='req' value='save'>
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