<?php/** PLEASE NOTE: * the root is not accessible by default * for security reasons. You can start * from where you want, i.e. quick.php **************************************/// get configuration fileinclude_once 'config.php';// redirect to website's home pageheader('Location: ' . $cfg['site_full_url']);/***** CREDITS *****/// https://github.com/simonewebdesign/newsletter// www.simonewebdesign.it