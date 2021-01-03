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
 * Rule that blocks attempt to open same quiz attempt in other session
 *
 * @package    quizaccess_onesession
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'You are trying to access quiz attempt from computer, device or browser other than the one you used to start quiz. If you have accidentally closed your browser, please, contact the teacher.';
$string['eventattemptblocked'] = 'Student\'s attempt to continue quiz attempt using other device was blocked';
$string['eventattemptunlocked'] = 'Student was allowed to continue quiz attempt using other device';
$string['onesession'] = 'Block concurrent connections';
$string['onesession:unlockattempt'] = 'Unlock quiz attempt';
$string['onesession_help'] = 'If enabled users can continue quiz attempt only in the same browser session. Any attempts to open same quiz attempt using another computer, device or browser will be blocked. This may be useful to be shure that no one helps student by opening same quiz attempt on other computer.';
$string['pluginname'] = 'Block concurrent sessions quiz access rule';
$string['privacy:metadata'] = 'The plugin stores the hash of the string used to identify the client device session. Although the original string contains the client\'s IP address and the User-Agent header sent by the client\'s browser, the hash does not allow to extract this information. The hash is automatically deleted immediately after the end of the quiz session.';
$string['studentinfo'] = 'Attention! It is prohibited to change device while attempting this quiz. Please note that after beginning of quiz attempt any connections to this quiz using other computers, devices and browsers will be blocked. Do not close the browser window until the end of attempt, otherwise you will not be able to complete this quiz.';
$string['unlockthisattempt'] = 'Allow student to continue this attempt using other device';
$string['unlockthisattempt_header'] = 'Block concurrent connections';
