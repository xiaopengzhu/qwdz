<?php
# MetInfo Enterprise Content Management System 
require_once '../login/login_check.php';
$id=$admin_list[id];
$sexx[$admin_list[admin_sex]]="checked='checked'";
$css_url="../templates/".$met_skin."/css";
$img_url="../templates/".$met_skin."/images";
include template('admin/admin_pass');
footer();
?>