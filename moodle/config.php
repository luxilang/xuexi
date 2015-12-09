<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'bitnami_moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
);

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $CFG->wwwroot   = 'https://' . $_SERVER['HTTP_HOST'] . '/moodle';
} else {
    $CFG->wwwroot   = 'http://' . $_SERVER['HTTP_HOST'] . '/moodle';
};

$CFG->dataroot  = 'E:/pro/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02775;

$CFG->passwordsaltmain = 'e7a3309a4f3a6bb0ffa69b41e62043662661e00ac64b95a60a7bed898cc913bf';
require_once(dirname(__FILE__) . '/lib/setup.php');
require_once 'fun_kaoshi.php';

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
