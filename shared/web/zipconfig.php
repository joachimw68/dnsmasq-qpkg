<?php

include("functions.php");

$file_names = array(
	'dnsmasq.conf',
	'dnsmasq_dhcphosts.conf',
	'dnsmasq_hostmap.conf'
	);
$archive_file_name = $QPKG_NAME.'_config_backup_'.date("ymd.His").'.zip';
$temp_zip_file_name = "~temp.zip";

//check if dir is writable for webserver user
if (!is_writable($installPath."/web")) {
	log_error("Zip cannot write to $installPath/web dir.");
	exit("Error: cannot write to $installPath/web \n");
}

$zip = new ZipArchive();
//create the file and throw the error if unsuccessful
if ($zip->open($temp_zip_file_name, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE )!==TRUE) {
	exit("Error: cannot open $temp_zip_file_name \n");
}
//add each of the files of $file_name array to archive
foreach($file_names as $file){
	if (!file_exists($installPath."/".$file)) {
		log_error("Zip file ".$file." does not exist.");
	} elseif (!is_readable($installPath."/".$file)) {
		log_error("Zip file ".$file." is not readable.");
	} else {
		if ($zip->addFile($installPath."/".$file, $file)) {
			log_error("Zip add ".$installPath."/".$file);
		} else {
			log_error("Zip could not add ".$installPath."/".$file);
		}
	}
}
$zip->close();

header("Content-type: application/zip");
header("Content-Disposition: attachment; filename=$archive_file_name");
header("Content-length: " . filesize($temp_zip_file_name));
header("Pragma: no-cache");
header("Expires: 0");
readfile("$temp_zip_file_name");

?>
