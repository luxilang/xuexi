<?php

defined('MOODLE_INTERNAL') || die;
global $USER;
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('block_livemood_skey', get_string('skey', 'block_livemood'), get_string('description', 'block_livemood'), null, PARAM_RAW));
    //$link ='<a href="https://secure.live-school.net/indexOrg.lol?email='.$USER->email.'" target="_blank">Get my Manager secret key</a>';
	$link ='<a href="http://www.live-school.net/indexOrg.lol" target="_blank">Live-Mood website</a>';
    $settings->add(new admin_setting_heading('block_livemood', '', $link));
}

?>
