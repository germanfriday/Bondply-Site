<?php

    define('PERCH_LICENSE_KEY', 'P10910-ZSJ583-KLE683-DPZ476-RYP020');

    define("PERCH_DB_USERNAME", 'thegermanfrida');
    define("PERCH_DB_PASSWORD", 'pissedoff1');
    define("PERCH_DB_SERVER", "internal-db.s1364.gridserver.com");
    define("PERCH_DB_DATABASE", "db1364_bondplystage");
    define("PERCH_DB_PREFIX", "perch_");
    
    define('PERCH_EMAIL_FROM', 'chris@thegermanfriday.com');
    define('PERCH_EMAIL_FROM_NAME', 'Bill Reynolds');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
?>