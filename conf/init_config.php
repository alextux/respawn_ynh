<?php 
 /* The configuration generated with auto_form*/
$GLOBAL['data_folder']='YNH_DATA_FOLDER';
$GLOBAL['default_data_folder']='YNH_DEFAULT_FOLDER';
$GLOBAL['rss_title']='Respawn: RSS feed of your web library';
$GLOBAL['rss_description']='The Respawn feed';
$GLOBAL['message']='Your Web Library';
$GLOBAL['public_title']='YNH_TITLE';
$GLOBAL['skin']='pinterest';

$userconfigfile = realpath(dirname(__FILE__)) . '/config_user.php';
if (is_file($userconfigfile))
{
  require($userconfigfile);
}
?>
