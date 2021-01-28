<?php   
//===============================================
class GTimesheet extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        echo sprintf("<div class='timesheet_id'>\n");
        echo sprintf("<div class='content'>\n");
        echo sprintf("<div class='item month'>Mois de Janvier 2021</div>\n");
        echo sprintf("<div class='item'>\n");
        echo sprintf("<div class='profil'>\n");
        echo sprintf("<div class='img'><i class='icon fa fa-user'></i></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='date'>\n");
        echo sprintf("<div class='tick'>Date :</div>\n");
        echo sprintf("<div class='tick clock'>28/01/2021</div>\n");
        echo sprintf("<div class='tick'>heure :</div>\n");
        echo sprintf("<div class='tick clock'>01h30</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Collaborateur : </label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='Gérard KESSE'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Manager : </label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='Yvon MOUTSINGA'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Client : </label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='PMC Carrus Groupe'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Adresse : </label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='56 Avenue Raspail, 94100 Saint-Maur-des-Fossés'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='item'>GTimesheet</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>