<?php
define('_VALID', 1);
define('_ENTER', true);
define('_CLI', true);

// Argvs
$video_name = $_SERVER['argv'][1];
$vid = (int) $_SERVER['argv'][2];
$video_path = $_SERVER['argv'][3];

// Required
$basedir = dirname(dirname(__FILE__));
require $basedir. '/include/config.php';
require $basedir. '/include/function_video.php';
require $basedir. '/include/function_conversion.php';
require $basedir. '/include/function_server.php';

$vi = array();
$video_info = array();
$nl = "=========================================================\n";

echo "\n".$nl."Video Details:\n".$nl;
echo "\n".$nl."-----------------:\n".$nl;
echo "Parameters:\n";
echo "Video Name: $video_name\n";
echo "Vidoe ID: $vid\n";
echo "Video Path: $video_path\n\n";

// Error Checks
if (!preg_match("/^[0-9]{1,5}\.[a-z0-9]{2,4}$/i", $video_name)) {
	echo "Video Name: $video_name is invalid. Err #1. Exiting ..."; exit();
} else {
	$ffp_data = get_ffprobe_data($video_path);
	$video_info = ffpInfo($ffp_data);
}

// Get Encoder
$encodings = getEncodings();
foreach($encodings as $encoding) {
	convert($encoding, $vid, $video_name, $video_info);	
}
postThumbs($vid,$video_path);
postConversion($vid,$video_path);

// Multi-Server
if($config['multi_server'] == '1') {
	echo "\n".$nl."Multi Server\n".$nl;
	$server 	 = get_server();
	$sql 		 = "UPDATE video SET server = '".$server['video_url']."' WHERE VID = '".(int)$vid."'";
	executeQuery($sql);		
	$sql     	 = "SELECT formats FROM video WHERE VID = '" .(int)$vid. "' LIMIT 1";
	$rs 	     = selectQuery($sql);
	$formats 	 = $rs['formats'];
	
	if ($formats) {
		$formats_arr = explode(',', $formats);
		foreach ($formats_arr as $format) {
			 unset($f);
			 $f    		  = explode('.', $format);
			 $vf[] = $config['H264_DIR'].'/'.$vid."_".$f[1].".".$f[2];	//New Formats
		}
	}
	foreach ($vf as $file) {
		upload_video($file, $server['server_ip'], $server['ftp_username'], $server['ftp_password'], $server['ftp_root']);
		@chmod($file, 0777);
		@unlink($file);		
		echo "\n Video ".$file." moved to server: ".$server['server_ip'];	
	}
}

// Display :: Encoder Core End
echo "\n<-- End of Script -->\n\n";
exit();
?>
