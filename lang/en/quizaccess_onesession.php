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
 * Rule that blocks attempt to open same quiz attampt in other session
 *
 * @package    quizaccess_onesession
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/*$string['addsubnet'] = 'Add location';
$string['allowedsubnets'] = 'Allowed locations';
$string['allowedsubnets_help'] = 'Quiz access may be restricted to particular locations depending on user\'s IP address. List of locations and corresponding IP subnets is defined by site administrator. Use Ctrl to select multiple locations. Select none to disable this location check.';
$string['editsubnet'] = 'Editing location';
$string['managesubnets'] = 'Locations management';*/
$string['pluginname'] = 'Block concurrent sessions quiz access rule';
$string['onesession'] = 'Block concurrent connections';
$string['onesession_help'] = 'If enabled users can continue quiz attempt only in the same browser session. Any attempts to open same quiz attampt from another computer will be blocked. This may be useful to be shure that no one helps student by opening same quiz attampt on other computer.';
