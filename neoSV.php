<?php

/**
 T-step method for mapping temporal sequences (two modes: global and local sequencing):
  - $_GLOBALS["T"]["P"] prop array for each prop, where "P" comprises temporal steps of T-step (global)
    - $_GLOBALS["P"]["t"] prop array for local temporal sequencing of "P"

 Initialization by means of Axiom:
  - reduce the overall prop set to a single domain prop in which all other props m 
 [first frame of bits][second frame][nth frame] = findProps(i.e. find which bits have remained active and find their relationships by finding
 bits with the vector properties of those bits (i.e. size, shape, etc)) 
    //PV i.e. such that $_GLOBALS["INIT"]["PV"]["P"] and iff $_GLOBALS["P"]["PV"] (PV to map "reality")
	  //UV=>PV connections, i.e. abstractions which coincide with reality
	  
	  locality vs global: local top-down prop tree, with intersparsed layers via T-step sequencing, manifesting autoassociative networks in 3 dimensions
	  
	  
  
  Division may also divide SV (i.e. spawn a new cycle (cog), thus there can be many simultaneous cycles of varying size)
  
  Impact ratio: for each prop depth (lN of pn), traverse tree post-checkpoint to determine how far a prop reached out towards a network cell which
  contributed/else provided checkpoint (thus e.g. a cell 10 steps deep from a layer 3 cell of PV, which has acquired  8-steps of reach, then
  apply the influence top-down (starting with the layer 3 cell, and then the cell which reached furthest towards it and boost its connection_aborted
  relatively))
**/

/** additional descriptions: angles of props, degrees of cycle (i.e. whether partial, medial, ..., full cycle will occur);
  reflexive checkpoints (i.e. mirror neurons) **/

class SV { //process

 define("SV_active", true);

  $SV = $_GLOBALS["SV"];
  $props = $_GLOBALS["props"];
 
}



class error {

  private $error = 0; //active prop querying error (as an array, it would thus be a sequence of errors scheduled)
  protected $errors = array();
  
  function __construct($defaults) {
      //load error file
  }
  
  function past() {
  
  }
  
  function present() {
  
  }
  
  function future($p, $n) {
    //where $p = $P[$p[n]] and n = $t (subscript of $_GLOBALS[$T])
  }

}



class display { //interface
 
     /** polymorphic display **/

}

?>