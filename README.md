Moodle ShimShim Block
=====================
This is a demonstration of a problem with shimmed libraries in Moodle 3.8

In Moodle 3.8
 * add this block to a course page
 * with cache js on, click the shim alert button [a message will show]
 * turn cache js off, reload course page, click the shim alert button[ it won't work..errors loading amd modules]
 
 It does not matter that the shimmed libraries work or not.
 It is to do with babel not loading shimmed libraries I think
 

