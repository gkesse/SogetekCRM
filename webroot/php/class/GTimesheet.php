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
        $lDayOfWeek = array(
        "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"
        );
        echo sprintf("<div class='timesheet_id'>\n");
        echo sprintf("<div class='content'>\n");
        echo sprintf("<div class='item month'>Mois de Janvier 2021</div>\n");
        // profil
        echo sprintf("<div class='item'>\n");
        echo sprintf("<div class='profil'>\n");
        echo sprintf("<div class='img'><i class='icon fa fa-user'></i></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='date'>\n");
        echo sprintf("<div class='date2'>\n");
        echo sprintf("<div class='tick'>Date :</div>\n");
        echo sprintf("<div class='tick clock'>27/01/2021</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div>\n");
        echo sprintf("<div class='tick'>heure :</div>\n");
        echo sprintf("<div class='tick clock'>14h30</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Collaborateur :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='Gérard KESSE'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Manager :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='Yvon MOUTSINGA'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Client :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='PMC Carrus Groupe'/></div>\n");
        echo sprintf("</div>\n");
        echo sprintf("<div class='row'>\n");
        echo sprintf("<div class='key'><label class='label'>Adresse :</label></div>\n");
        echo sprintf("<div class='field'><input class='input' type='text' placeholder='56 Avenue Raspail, 94100 Saint-Maur-des-Fossés'/></div>\n");
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
                $lData = "00h00";
                echo sprintf("<td>$lData</td>\n");
            }
            echo sprintf("</tr>\n");
        }
        echo sprintf("</tbody>\n");
        echo sprintf("</table>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>