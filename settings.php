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
 * Block shimshim
 *
 * @package    block_shimshim
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use block_shimshim\constants;

defined('MOODLE_INTERNAL') || die();
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_heading(constants::M_COMP . '_config_header',
        get_string('headerconfig', constants::M_COMP),
        get_string('descconfig', constants::M_COMP)));

    $settings->add(new admin_setting_configcheckbox(constants::M_COMP . '/somecheck',
        get_string('somecheck', constants::M_COMP),
        get_string('somecheck_desc', constants::M_COMP),
        '0'));

    $settings->add(new admin_setting_configtext(constants::M_COMP . '/sometext',
        get_string('sometext', constants::M_COMP),
        get_string('sometext_desc', constants::M_COMP),
        'sometext', PARAM_TEXT));
}