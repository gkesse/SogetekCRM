<?php   
//===============================================
class GSQLiteUi extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lTables = gSQLite::Instance()->queryCol("
        select name from sqlite_master
        where type='table'
        ");
        echo sprintf("<div class='sqlite_id'>\n");
        for($i = 0; $i < count($lTables); $i++) {
            $lTable = $lTables[$i];
            $lTableUpper = strtoupper($lTable);
            $lTableLower = strtolower($lTable);
            echo sprintf("<form action='/home/sqlite/show' method='post'>
            <input type='hidden' id='req' name='req' value='show_table'/>
            <input type='hidden' id='table' name='table' value='%s'/>
            <button class='item' type='submit'>
            <i class='icon fa fa-database'></i>
            %s</button></form>\n", $lTableLower, $lTableLower);
        }
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>