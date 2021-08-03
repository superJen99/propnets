<?php
class system {
    
    public $systemTime = 0; 
    
    function __construct() {}
    function cycle() { //method for recurrent application of prop/potential/system methods
        //may recurrently apply potentials->getInput() to provide a feed of input
    }
    
    function divide() {} //exclusive system level function for producing differential membranes
        //how are new systems going to form connections with previous systems? How can they evolve, connectively, as one?
    
}
class potentials {
    
    //measuring of continuous system activity
    
    function getInput(){} //static or continuous options (pause/resume) :: acquires action potential
}
class prop {
    
    /** the prop in and of itself is a connection **/
    public $props = array();
    public $propTypes = array();
    public $propTime = 0; //for temporal mappings
    
    function decide($angle, $input, $prop) {
        //decides some subset of input for $prop :: activation function
    }
    
    function newProp() {} //if decide...
    function updateProp() {}
    
}
?>