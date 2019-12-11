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
 * The block_shimshim scheduled task
 *
 * @package    mod_shimshim
 * @copyright  Justin Hunt (https://poodll.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_shimshim\task;
use block_shimshim\constants;


defined('MOODLE_INTERNAL') || die();

class do_something extends \core\task\scheduled_task {
		
	public function get_name() {
        // Shown in admin screens
        return get_string('shimshim_dosomething_task', constants::M_COMP);
    }
	
	 /**
     *  Run the task
      */
	 public function execute(){
		$trace = new \text_progress_trace();
		$trace->output('running the block new_block dosomething task now');
         \block_shimshim\common::do_something();
	}

}

