<?php   
//===============================================
require "./php/class/GAutoload.php";
//===============================================
GManager::Instance()->redirectPost();
GProcess::Instance()->run();
//===============================================
?>