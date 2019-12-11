<?php
/**
 * Created by PhpStorm.
 * User: ishineguy
 * Date: 2018/06/26
 * Time: 13:16
 */

namespace block_shimshim\output;

use \block_shimshim\constants;


class renderer extends \plugin_renderer_base {
    //In this function we prepare and display the content that goes in the block
    function fetch_block_content($blockid, $localconfig, $courseid){
        global $USER;


        //show our intro text
        $content = '';
        $content .= '<br />' . get_string('welcomeuser', constants::M_COMP,$USER) . '<br />';

        $shimbutton = $this->fetch_alert_button(true);
        $nonshimbutton = $this->fetch_alert_button(false);

        $content .= $shimbutton . ' <br />' . $nonshimbutton . '<br />';

        return $content;
    }


    function fetch_alert_button($withshim=false){
        //these are attributes for a simple html button.
        $attributes = array();
        $attributes['type']='button';
        $attributes['id']= \html_writer::random_id(constants::M_COMP . '_');
        $attributes['class']=constants::M_COMP . '_triggerbutton';
        $opts = array('buttonid' => $attributes['id']);
        if($withshim) {
            $button = \html_writer::tag('button', "Click for Shim alert", $attributes);
            $this->page->requires->js_call_amd(constants::M_COMP . "/triggershimalert", 'init', array($opts));
        }else{
            $button = \html_writer::tag('button', "Click for Non Shim Alert", $attributes);
            $this->page->requires->js_call_amd(constants::M_COMP . "/triggernonshimalert", 'init', array($opts));
        }

        //finally return our button for display
        return $button;
    }
}