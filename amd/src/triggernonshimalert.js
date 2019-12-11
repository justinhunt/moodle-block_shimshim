/* jshint ignore:start */
define(['jquery','core/log'], function($, log) {

    "use strict";
    log.debug('Trigger non shim alert button: initialising');

    return {

        buttonid: null,

        //pass in config, and register any events
        init: function(props){
            log.debug(props);
            this.buttonid=props.buttonid;
            this.register_events();

        },

        register_events: function() {
            var triggerbutton = $('#' + this.buttonid);

            triggerbutton.click(function (e) {
                e.preventDefault();
                var message = "The Non Shim alert displays successfully";
                alert(message);
            });
        }
    };//end of returned object
});//total end