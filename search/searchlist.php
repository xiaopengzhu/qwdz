<?php
	$htmname=($list[filename]<>"" and $metadmin[pagename])?$filename."/".$list[filename]:$filename."/".$filenamenow.$list[id];
	$phpname=$filename."/show".$pagename.".php?id=".$list[id];	
	$pseudoname=($list[filename]<>"" and $metadmin[pagename])?$filename."/".$list[filename]:$filename."/".$list[id];
	$list[url]=$met_pseudo?$pseudoname.'-'.$lang.$met_htmtype:($met_webhtm?$htmname.$met_htmtype:$phpname."&lang=".$lang);
	$list[url]=$list['links']?$list['links']:$list[url];
if($met_member_use==2){
 if(intval($metinfo_member_type)>=intval($nowaccess))$search_list[]=$list;
}else{
$search_list[]=$list;	
}
?>