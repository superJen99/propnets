<?php //to-do: return handle for allowing data to be extracted from classes and to be used elsewhere
class handler { //handles all global functions as a $_GLOBAL['handles'] handler for interfacing with handles
	
	public $handles = array(); //set of system handles ($_GLOBALS['mainHandles'], $_GLOBALS['superHandles'], $_GLOBALS['handles'] => $_GLOBALS['handles'])
	  protected $handleMethods = array(); //corresponding set of functions for operating $this->handles, i.e. splits system handles into sets=>methods
		private $_CONFIG = array(); //special config set of handles as underlying handle fabric: splits system handles into sets=>methods=>values
		
	const $_SETUP = 0; //has config been set? (check via construct)
	
	
	function __construct() {
		
	}
	
	/** core system handles
	
	- for loop: open/close/swap/.../timer extensions
	- if/else statement: ditto
	- break: lock/release/timers
	
	**/
	
	function newHandle($handle, $config, $set=0, $methods=0) { //optional $set and $methods, $config necessary for matching system config
		//how
	}
	
	function updateHandle($handle, $config, $set=0, $method=0) { //optional $set and $method for search time improvements
		
	}
} 
class sys { //system handler
	//system activity handler
	
	private $previousConfig = array();
	private $currentConfig = array();
	private $futureConfig = array(); //how? shut down prop system and reupdate its foundation?
	const $_SETUP = 0;
	const $_TURN = 0;
	
	/** protected universals **/
	protected $SV = 0;
	protected $UV = 0;
	protected $PV = 0;
	
	/** private identity function for ID'ing each system **/
	private $ID = 0; //long string for uniquely identifying sys
		private $IDaffects = array(); //all the things which have led to producing $this->ID
	
	
	function __construct($config, $update) {
		if($this->setup <=0) {
			//run config
		} else {
			if($update) {
				//needs to split update config into futureConfig array
			}
			$_GLOBALS['sys'];
			$_GLOBALS['props'];
			$_GLOBALS['prop'];
		}
		//check isset/configured
	}
	
	function openInputSpace($i) {
		//there may be more than one feed of input, e.g. auditory/visual/tactile/etc, so $i can be $y, $x, $z
	}
	
	function openOutputSpace() {} //ditto as a parallel function above
	
	function findMoreInputSpace() {}
	function findMoreOutputSpace() {}
}
class props { //global props handler
	
	public $spatialMemory = array(); //x, y, z parameters for each instance
	public $temporalMemory = array(); //t space
	public $specialKMemory = array();
	
	public $checkpoints = array(); //for each x, y, z, t, k
	public $cycles = array();
		protected $turns = array(); //special t space handle
	
	
	function checkpoint() {} //note: $config of sys sets defaults for how checkpoint emerges
	function predictPoint() {} //props can try to anticipate new checkpoints and even reconstruct older memory pathways via this prediction method
	
	function cycle() {} /** cycle a<->b i.e. bouncy cycles (also note: bouncy sentience)**/
	
}
class prop {
	
	public $propType = array("SV"=>0, "UV"=>1, "PV"=>2, "ID"=>3);
	
	function newProp(){} //i.e. split the atom
	function updateProp(){}
	//scheduel update function to pool into $_GLOBALS['props']
	
} //single instance by means of divisive mechanism; also single local prop handler
?>