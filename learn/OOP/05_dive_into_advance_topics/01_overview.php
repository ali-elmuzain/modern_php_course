<?php
// Overview:
/*
 * - Static function, static variable
 * - Constants
 * - The singleton pattern
 *   => will allow us to create a class the can only instantiated one
 *      time, and every time you try to get the class, it will always
 *      be the same instance.
 * - Magic methods (__set, __get, __isset, __unset)
 */

// static function:
/*
 * - add static keyword after public keyword
 * - by using it you method then will be related to the class not the
 *   instance
 * - to call the static function out of the class
 *   ClassName::Method
 *
 * Notes
 * - so you don't need to initialize an instance to access
 *   the static method
 * - you can do the same with properties
 * - to access the static property or method in the class itself you
 *   need to use the keyword self::
 */

// Constants:
/*
 * Define global options and class attached value with 'define' & 'const'
 *
 * define:
 *  - use to declare a constant
 *  - it usually use for configuration options
 *
 * const:
 *  - use to define a constant
 *  - to attach the value to the class
 *
 * note:
 *  - to access a constant in the class
 *      Class::Constant
 */

// singleton pattern:
/*
 * - by using singleton pattern you cannot initialize multiple instance
 *   of that class
 *
 * how to do that:
 *  - by define a private __construct()
 *
 * you will note that:
 *  - we have 2 files called singleton 03 and the 04 file
 *
 *  - the first one if you try to initialize an instance it will generate
 *    an error and ot access it's member it will be related to the class
 *
 *  - while the second you can initialize only one instance and if you
 *    initialize multiple instance the all will return the same one,
 *    and this the singleton
 *
 * note:
 *  - don't overuse this pattern
 *
 */


// constant Method:
/*
 * __get($key)
 *  - if you add it to the class then when you try to access property
 *    that is not related to this object the __get method then will
 *    be called
 *
 * __set($key, $value)
 *  - it will be called when you try to set a property that is not exist.
 *
 * __isset()
 * - it will be called when using isset  function
 *
 * __unset()
 *  - it will be called when you use unset function
 */