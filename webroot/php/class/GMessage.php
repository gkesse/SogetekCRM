<?php   
//===============================================
class GMessage extends GWidget {
    //===============================================
    private $datas = array();
    //===============================================
    public function __construct() {

    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        if($lApp->message == "") {$lApp->message = sprintf("Vous n'êtes pas connectés");}
        echo sprintf("<form action='' method='post' enctype='multipart/form-data'>\n");
        echo sprintf("<div class='message_id login_id'>\n");
        echo sprintf("<div class='body'>\n");
        // profile
        echo sprintf("<div class='profile'><i class='fa fa-comments-o'></i></div>\n");
        // content
        echo sprintf("<div class='edit'>\n");
        echo sprintf("%s\n", $lApp->message);
        echo sprintf("</div>\n");
        // button
        echo sprintf("<div class='buttons'>\n");
        echo sprintf("<a class='button_id' href='/home'>
        <i class='icon fa fa-comments'></i> Ok</a>\n");
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</form>\n");
    }
    //===============================================
}
//===============================================
?>