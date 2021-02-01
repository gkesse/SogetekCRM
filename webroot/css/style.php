<?php
//===============================================
header('content-type: text/css');
//===============================================
require $_SERVER["DOCUMENT_ROOT"]."/php/class/GAutoload.php";
//===============================================
$config = array(
// app
"app_bg_color" => "#102030",
"app_light_color" => "#304050",
"app_font_size" => 20,
"app_icon_size" => 16,
"login_size" => 30,
);
//===============================================
?>
/* ============================================== */
/* common */ 
/* ============================================== */
* {
    color: white;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

*:focus { 
    border: none;
    outline: none;
}

html {
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    overflow: auto;
    scrollbar-color: #5f6681 #051039;
    scrollbar-color: <?php echo $config['app_light_color']; ?> #051039;
    scrollbar-width: auto;
}

body {
    background-color: <?php echo $config['app_bg_color']; ?>;
    font-family: Allan;
    font-size: <?php echo $config['app_font_size']; ?>px;
    text-align: left;
}

button {
    background-color: transparent;
    border: none;
    color: white;
    cursor: pointer;
    font-family: Allan;
    font-size: <?php echo $config['app_font_size']; ?>px;
}

input {
    background-color: transparent;
    border: none;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    font-family: Allan;
}

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus {
    -webkit-text-fill-color: white ;
    transition: background-color 5000s ease-in-out 0s;
}

select {
    background-color: transparent;
    border: none;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    cursor: pointer;
}

textarea {
    background-color: transparent;
    border: none;
    border-radius: 0;
    padding: 5px 10px 5px 10px;
    font-family: arial;
    font-size: <?php echo $config['app_font_size']; ?>px;
    color: white;
    width: 100%;
    resize: none;
}

textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
    transition: background-color 5000s ease-in-out 0s;
}

xmp {
    padding: 10px 10px 10px 50px;
	font-size: <?php echo $config['app_font_size']; ?>px;
}

a {
    text-decoration: none;
}

b {
    color: cyan;
}

hr {
    background-color: #051039; 
    border: none;
	height: 3px; 
    width: 100%; 
    margin: auto;
    margin-top: 20px;
    text-align: center;
}

hr:after {
    content: "\f164";
    font-family: FontAwesome;
	font-size: <?php echo $config['app_font_size']; ?>px;
    background-color: #051039;
    color: white; 
    display: inline-block;
    position: relative;
    top: -20px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
}

span {
    word-break: break-all;
}
/* ============================================== */
/* custom */ 
/* ============================================== */
/* addresskey */
.addresskey_id {
    padding: 0px;
}
/* ============================================== */
/* body */
.body_id {
    position: relative;
    max-width: 1000px;
    margin: auto;
    padding-top: 0px;
    padding-bottom: 0px;
}
/* ============================================== */
/* button */
.button_id {
    display: inline-block;
    display: inline-block;
    line-height: 30px;
    background-color: <?php echo $config['app_light_color']; ?>;
    padding: 0px 10px;
    border-radius: 5px;
}
.button_id:not(:last-child) {
    margin-right: 5px;
}
.button_id .icon {
    margin-right: 5px;
}
/* ============================================== */
/* debug */
.debug_id {

}
.debug_id .header {
    padding: 5px 10px;
    border-bottom: 1px solid #ffffff;
    font-size: 0px;
    text-align: right;
}
.debug_id .header .item {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    text-align: center;
    border-radius: 5px;
    margin-left: 5px;
}
.debug_id .header .item form button {
    font-size: 18px;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    background-color: <?php echo $config['app_light_color']; ?>;
    width: 25px;
    border-radius: 5px;
}
.debug_id .body {
    padding: 10px;
    font-family: "Courier Prime";
    font-size: 16px;
    overflow: hidden;
    overflow-x: auto;
    white-space: nowrap;
}
/* ============================================== */
/* error */
.error_id {
    padding: 50px 10px;
    text-align: center;
}
/* ============================================== */
/* filesystem */
.filesystem_id {

}
.filesystem_id .header {
    padding: 10px 10px;
    border-bottom: 1px solid #ffffff;
}
.filesystem_id .header .sep {
    font-size: <?php echo $config['app_icon_size']; ?>px;
    margin: 0px 5px;
}
.filesystem_id .header .form {
    display: inline-block;
}
.filesystem_id .body .file {
    display: block;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
    text-align: left;
}
.filesystem_id .body .file:hover {
    background-color: <?php echo $config['app_light_color']; ?>;
}
.filesystem_id .body .file .icon {
    font-size: <?php echo $config['app_icon_size']; ?>px;
    margin-right: 5px;
}
/* ============================================== */
/* html */
.html_id {
    position: relative;
}
/* ============================================== */
/* lineedit */
.icon_id {
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
    background-color: <?php echo $config['app_light_color']; ?>;
    width: 25px;
}
/* ============================================== */
/* lineedit */
.lineedit_id {
    position: relative;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
    overflow: hidden;
    min-height: 30px;
}
.lineedit_id .label {
    display: inline-block;
    vertical-align: middle;
    position: absolute;
    background-color: <?php echo $config['app_light_color']; ?>;
    min-width: 100px;
    left: 0px;
    top: 0px;
    bottom: 0px;
}
.lineedit_id .label .icon {
    background-color: transparent;
    min-width: 30px;
    min-height: 30px;
    text-align: center;
    display: inline-block;
    vertical-align: middle;
    padding-top: 2px;
}
.lineedit_id .field {
    background-color: transparent;
    display: inline-block;
    vertical-align: middle;
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 100px;
    right: 30px;
}
.lineedit_id .field input {
    width: 100%;
    height: 100%;
    padding: 0px 10px;
}
.lineedit_id .goto {
    background-color: <?php echo $config['app_light_color']; ?>;
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 0px;
    font-size: 18px;
    min-width: 30px;
    min-height: 30px;
    text-align: center;
    vertical-align: middle;
    padding-top: 2px;
    cursor: pointer;
}
/* ============================================== */
/* listbox */
.listbox_id {
    text-align: left;
}
.listbox_id .item {
    padding: 5px 10px;
    cursor: pointer;
}
.listbox_id .item:hover {
    background-color: <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
}
/* ============================================== */
/* login */
.login_id {
    padding: 50px 10px;
}
.login_id .body {
    border: 1px solid #ffffff;
    max-width: 500px;
    margin: auto;
    border-radius: 5px;
    padding: 20px 10px 10px 10px;
}
.login_id .body .profile {
    border: 1px solid #ffffff;
    width: 150px;
    height: 150px;
    margin: auto;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    font-size: 100px;
    margin-bottom: 20px;
}
.login_id .body .error {
    color: #ffaa55;
    text-align: center;
    margin-bottom: 20px;
}
.login_id .body .success {
    color: #aaff55;
    text-align: center;
    margin-bottom: 20px;
}
.login_id .body .edit {
    position: relative;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
    min-height: 30px;
    margin-bottom: 20px;
}
.login_id .body .edit .label {
    position: absolute;
    background-color: <?php echo $config['app_light_color']; ?>;
    min-width: 30px;
    left: 0px;
    top: 0px;
    bottom: 0px;
}
.login_id .body .edit .label .icon {
    width: 100%;
    height: 100%;
    text-align: center;
}
.login_id .body .edit .field {
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 30px;
    right: 0px;
}
.login_id .body .edit .field input {
    width: 100%;
    height: 100%;
    padding: 0px 10px;
}
.login_id .body .buttons {
    text-align: right;
}
.login_id .logout {
    text-align: center;
}
/* ============================================== */
/* main */
.main_id {
    padding: 10px;
}
/* ============================================== */
/* message */
.message_id .edit {
    background-color: <?php echo $config['app_light_color']; ?>;
    padding: 20px 10px;
    color: #ffffff;
}
.message_id .error {
    color: #ffaa33;
}
.message_id .success {
    color: #aaff33;
}
/* ============================================== */
/* profile */
.profile_id {
    padding: 10px;
    overflow: hidden;
    overflow-x: auto;
}
.profile_id .content {
    border: 1px solid #305050;
}
.profile_id .content .item {
    border: 1px solid #305050;
    padding: 10px;
    overflow: hidden;
    overflow-x: auto;
}
.profile_id .content .item.username {
    background-color: #305050;
    padding: 5px 10px;
    text-align: center;
}
.profile_id .content .item .profile {
    padding: 10px 10px 20px 10px;
    text-align: center;
}
.profile_id .content .item .profile .img {
    display: inline-block;
    background-color: #305050;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    padding-top: 10px;
}
.profile_id .content .item .profile .img .icon {
    display: inline-block;
    font-size: 120px;
}
/* profile */
.profile_id .content .item .row {
    border: 1px solid #305050;
    margin-bottom: 10px;
    position: relative;
    min-height: 30px;
}
.profile_id .content .item .row .key {
    background-color: #305050;
    position: absolute;
    top: 0px; 
    bottom: 0px; 
    left: 0px;
    min-width: 120px;
}
.profile_id .content .item .row .key .label {
    display: inline-block;
    vertical-align: middle;
    padding: 0px 10px;
}
.profile_id .content .item .row .field {
    position: absolute;
    top: 0px; 
    bottom: 0px;
    right: 0px;
    left: 120px;
}
.profile_id .content .item .row .field .input {
    width: 100%;
    height: 100%;
    display: inline-block;
    vertical-align: middle;
    padding: 0px 10px;
}
.profile_id .table_id {
    padding: 0px;
    font-family: "Archivo Narrow";
    font-size: 18px;
}
.profile_id .table_id .time {
    color: #aaaaaa;
}
.profile_id .table_id .time input {
    font-family: "Archivo Narrow";
    font-size: 18px;
}
.profile_id .table_id .days {
    background-color: <?php echo $config['app_light_color']; ?>;
}
.profile_id .table_id .days input {
    font-family: "Archivo Narrow";
    font-size: 18px;
}
.profile_id .table_id .total {
    background-color: <?php echo $config['app_light_color']; ?>;
}
.profile_id .table_id .total input {
    font-family: "Archivo Narrow";
    font-size: 18px;
}
/* ============================================== */
/* sqlite */
.sqlite_id {

}
.sqlite_id .item {
    display: block;
    padding: 5px 10px;
    cursor: pointer;
    width: 100%;
    text-align: left;
}
.sqlite_id .item:hover {
    background-color: <?php echo $config['app_light_color']; ?>;
    border-radius: 5px;
}
.sqlite_id .item .icon {
    padding-right: 5px;
}
/* ============================================== */
/* table */
.table_id {
    display: inline-block;
    padding: 10px;
}
.table_id .name {
    background-color: #305050;
    border: 1px solid #aaaaaa;
    border-bottom-color: transparent;
    padding: 5px 10px;
    text-align: center;
}
.table_id table {
    border-collapse: collapse;
}
.table_id table thead tr {
    background-color: <?php echo $config['app_light_color']; ?>;
    text-align: left;
}
.table_id table th, .table_id  table td {
    padding: 5px 10px;
    border: 1px solid #aaaaaa;
}
.table_id table th {
    font-weight: normal;
}
.table_id  table td {
    color: #aaaaaa;
}
.table_id table tbody tr {

}
.table_id table tbody tr:nth-of-type(even) {

}
.table_id table tbody tr:last-of-type {

}
.table_id table tbody tr.active-row {

}
/* ============================================== */
/* timesheet */
.timesheet_id {
    padding: 10px;
    overflow: hidden;
    overflow-x: auto;
}
.timesheet_id .content {
    border: 1px solid #305050;
}
.timesheet_id .content .item {
    border: 1px solid #305050;
    padding: 10px;
    overflow: hidden;
    overflow-x: auto;
}
.timesheet_id .content .item.month {
    background-color: #305050;
    padding: 5px 10px;
    text-align: center;
}
.timesheet_id .content .item .profile {
    padding: 10px 10px 20px 10px;
    text-align: center;
}
.timesheet_id .content .item .profile .img {
    display: inline-block;
    background-color: #305050;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    padding-top: 10px;
}
.timesheet_id .content .item .profile .img .icon {
    display: inline-block;
    font-size: 120px;
}
.timesheet_id .content .item .row {
    border: 1px solid #305050;
    margin-bottom: 10px;
    position: relative;
    min-height: 30px;
}
.timesheet_id .content .item .row .key {
    background-color: #305050;
    position: absolute;
    top: 0px; 
    bottom: 0px; 
    left: 0px;
    min-width: 120px;
}
.timesheet_id .content .item .row .key .label {
    display: inline-block;
    vertical-align: middle;
    padding: 0px 10px;
}
.timesheet_id .content .item .row .field {
    position: absolute;
    top: 0px; 
    bottom: 0px;
    right: 0px;
    left: 120px;
}
.timesheet_id .content .item .row .field .input {
    width: 100%;
    height: 100%;
    display: inline-block;
    vertical-align: middle;
    padding: 0px 10px;
}
.timesheet_id .table_id {
    padding: 0px;
    font-family: "Archivo Narrow";
    font-size: 18px;
}
.timesheet_id .table_id .time {
    color: #aaaaaa;
}
.timesheet_id .table_id .time input {
    font-family: "Archivo Narrow";
    font-size: 18px;
}
.timesheet_id .table_id .days {
    background-color: <?php echo $config['app_light_color']; ?>;
}
.timesheet_id .table_id .days input {
    font-family: "Archivo Narrow";
    font-size: 18px;
}
.timesheet_id .table_id .total {
    background-color: <?php echo $config['app_light_color']; ?>;
}
.timesheet_id .table_id .total input {
    font-family: "Archivo Narrow";
    font-size: 18px;
}
/* ============================================== */
/* titlebar */
.titlebar_id {
    position: relative;
    border-bottom: 5px solid <?php echo $config['app_light_color']; ?>;
    padding-bottom: 5px;
}
.titlebar_id .logo {
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    height: 20px;
}
.titlebar_id .logo img {
    width: auto;
    height: 20px;
}
.titlebar_id .app_name {
    display: inline-block;
    vertical-align: middle;
}
.titlebar_id .title {
    position: absolute;
    left: 110px;
    right: 30px;
    top: 0px;
    bottom: 0px;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
}
.titlebar_id .login {
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 0px;
    display: inline-block;
    vertical-align: middle;
    border: 2px solid <?php echo $config['app_light_color']; ?>;
    background-color: <?php echo $config['app_light_color']; ?>;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
}
/* ============================================== */
/* tooltip */
.tooltip_id {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black; 
}
.tooltip_id .tooltiptext {
    visibility: hidden;
    background-color: #305050;
    color: #aaaaaa;
    text-align: center;
    padding: 5px 0px;
    border-radius: 5px;
    position: absolute;
    z-index: 1;
    width: 120px;
    top: 100%;
    left: 50%;
    margin-left: -60px;
}
.tooltip_id:hover .tooltiptext {
    visibility: visible;
}
.tooltip_id .tooltiptext::after {
    content: " ";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent <?php echo $config['app_light_color']; ?> transparent;
}
/* ============================================== */
/* view */
.view_id {
    position: relative;
    min-height: 30px;
}
.view_id .date {
    background-color: <?php echo $config['app_light_color']; ?>;
    position: absolute;
    top: 0px;
    bottom: 0px;
    padding-top: 2px;
    border-radius: 5px;
    min-width: 100px;
    text-align: center;
}
.view_id .view {
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 110px;
    right: 90px;
    text-align: center;
}
.view_id .view .data {
    background-color: <?php echo $config['app_light_color']; ?>;
    display: inline-block;
    text-align: center;
    height: 100%;
    padding: 2px 10px;
    border-radius: 5px;
    text-align: center;
}
.view_id .time {
    background-color: <?php echo $config['app_light_color']; ?>;
    position: absolute;
    top: 0px;
    bottom: 0px;
    right: 0px;
    min-width: 80px;
    text-align: center;
    padding-top: 2px;
    border-radius: 5px;
}
/* ============================================== */
/* window */
.window_id {
    border: 1px solid #aaaaaa;
    border-radius: 5px;
    overflow: hidden;
    overflow-x: auto;
}
/* ============================================== */
/* mobile */ 
/* ============================================== */
@media (max-width:1024px) {

}
/* ============================================== */
@media (max-width:960px) {

}
/* ============================================== */
