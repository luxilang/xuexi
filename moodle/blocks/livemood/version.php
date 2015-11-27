<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * livemood block is a bridge for live-school platform and moodle
 *
 * @package    contrib
 * @subpackage block_livemood
 * @copyright  2014 Franck Chionna (infor@live-school.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$plugin->version = 2015021698;    // The current module version (Date: YYYYMMDDXX)
$plugin->requires  = 2014111000;        // Requires this Moodle version
$plugin->cron      = 3600;               // Period for cron to check this module (secs)
$plugin->component = 'block_livemood'; // To check on upgrade, that module sits in correct place
$plugin->release    = '9.8.0';
$plugin->maturity   = MATURITY_STABLE;
?>
