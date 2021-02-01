<?php   
//===============================================
class GTimesheetUi extends GWidget {
    //===============================================
    private $datas = array();
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lTimePattern = "[0-9]{2}h[0-9]{2}";
        $lDaysPattern = "[0-5]{1}";
        $lTotalPattern = "[0-9]{2,3}h[0-9]{2}";
        $lDayOfWeek = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Jours", "Total");
        //
        $this->datas["collaborator"] = "";
        $this->datas["manager"] = "";
        $this->datas["client"] = "";
        $this->datas["address"] = "";
        //
        $this->request();
        //
        echo sprintf("<form action='' method='post' enctype='multipart/form-data'>\n");
        echo sprintf("<div class='timesheet_id'>\n");
        echo sprintf("<div class='content'>\n");
        echo sprintf("<div class='item month'>Mois de Janvier 2021</div>\n");
        // profile
        echo sprintf("<div class='item'>\n");
        echo sprintf("<div class='profile'>\n");
        echo sprintf("<div class='img'><i class='icon fa fa-user'></i></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='collaborator'>Collaborateur :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='collaborator' name='collaborator' placeholder='Gérard KESSE' required/></div>\n", $this->datas["collaborator"]);
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='manager'>Manager :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='manager' name='manager' placeholder='Yvon MOUTSINGA' required/></div>\n", $this->datas["manager"]);
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='client'>Client :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='client' name='client' placeholder='PMC Carrus Groupe' required/></div>\n", $this->datas["client"]);
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label' for='address'>Adresse :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' value='%s' id='address' name='address' placeholder='56 Avenue Raspail, 94100 Saint-Maur-des-Fossés' required/></div>\n", $this->datas["address"]);
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // table
        echo sprintf("<div class='item'>\n");
        echo sprintf("<div class='table_id'>\n");
        echo sprintf("<table>\n");
        echo sprintf("<thead>\n");
        echo sprintf("<tr>\n");
        for($i = 0; $i < 7; $i++) {
            $lHeader = $lDayOfWeek[$i];
            echo sprintf("<th>$lHeader</th>\n");
        }
        echo sprintf("</tr>\n");
        echo sprintf("</thead>\n");
        echo sprintf("<tbody>\n");
        for($i = 0; $i < 5; $i++) {
            echo sprintf("<tr>\n");
            for($j = 0; $j < 7; $j++) {
                $lReq = sprintf("data_%d_%d", $i, $j);
                if($j < 5) {
                    $lData = "00h00";
                    echo sprintf("<td class='time'><input type='text' pattern='$lTimePattern' maxlength='5' size='5' id='$lReq' name='$lReq' value='$lData'/></td>\n");
                }
                else if($j == 5) {
                    $lData = "0";
                    echo sprintf("<td class='days'><input type='text' pattern='$lDaysPattern' maxlength='3' size='3' id='$lReq' name='$lReq' value='$lData'/></td>\n");
                }
                else if($j == 6) {
                    $lData = "00h00";
                    echo sprintf("<td class='total'><input type='text' pattern='$lTotalPattern' maxlength='6' size='6' id='$lReq' name='$lReq' value='$lData'/></td>\n");
                }
             }
            echo sprintf("</tr>\n");
        }
        echo sprintf("</tbody>\n");
        echo sprintf("</table>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='item buttons'>\n");
        echo sprintf("<a class='button_id' href='/home'>
        <i class='icon fa fa-times'></i> Annuler</a>\n");
        echo sprintf("<button class='button_id' type='submit' id='req' name='req' value='save'>
        <i class='icon fa fa-save'></i> Sauvegarder</button>\n");
        echo sprintf("<button class='button_id' type='submit' id='req' name='req' value='valid'>
        <i class='icon fa fa-calendar'></i> Valider</button>\n");
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
                GManager::Instance()->loginOn();
                $this->datas["collaborator"] = $_POST["collaborator"];
                $this->datas["manager"] = $_POST["manager"];
                $this->datas["client"] = $_POST["client"];
                $this->datas["address"] = $_POST["address"];
                var_dump($_POST);
            }
            else if($lReq == "valid") {
                GManager::Instance()->loginOn();
                var_dump($_POST);
            }
        }
    }
    //===============================================
}
//===============================================
?>