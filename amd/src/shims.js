/* jshint ignore:start */
define([], function () {
    window.requirejs.config({
        paths: {
            "meaninglessfunctions": M.cfg.wwwroot + '/blocks/shimshim/nonamdlibraries/meaninglessfunctions'
        },
        shim: {
            'meaninglessfunctions': {exports: 'Meaninglessfunctions'}
        }
    });//end of window.requirejs.config
});