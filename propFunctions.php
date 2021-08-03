<?php
class p_system {
	//quintessential prop system functions
	
	private const $_systems_ref = array("total_systems"=>0, "connected_systems"=>array(), "connected_potentials"=>array()); //key to accessing the database indexing the IDs of all other prop systems
	public $_system_rank = 0; //how well competitive this system is with others
	private const $_init = 0;
	private const $_init_setup = array("connectiveSystem"=>array("true"=0, "minConnect"=0, "maxConnect"=>1));
	private const $_current_setup = array();
	private $_future_setup = array(); //until fluid updates are designed...
	private $_future_setup_ready = 0; //any conflicts are bypasses/mitigated
	
	private $t_cycle = 0; //complete system cycle (1 if active)
	private $t_count = 0; //since system first initiation
	private $t_current = 0; //how long system has been active for since startup
	
	protected $ID = 0; //SV's ID
	/** checkpoint min targets for each and their current spread of universal presence in prop space **/
	protected $PV = 0; //within props
	protected $UV = 0; //within props
	protected $SV = 0; //within props
	public $props = array(); //system of props reference
	
	__construct($config=0) {
		//setup a unique ID for this system after scanning for local systems
	}
	
	function findSystems() {}
	
	function updateSetup() {}
	
}
class props {
	//quintessential functions for all props
	
	public $output = 0; //checkpoint output
	
	public $minPotential = 0;
	public $minProperty = 0;
	public $minProp = 0;
	public $minUniversal = 0; //props of this class have access to $_GLOBALS['root_p_system_ID'] methods
	
	const $system = 0; //global reference
	
	/** buffering **/
	protected $newProps = array();
	protected $connectProps = array();
	

	function _construct() {
		//for setting up prop parameters and connecting to system to establish prop system environment
	}
	
	function findCheckpoint() { //start from output and traverse towards all active props, including properties and potentials
		
	}
	
	function newProps() { //props can be potentials, properties or overlaying props (encapsulations as sub-environments)
		
	}
	
	function connectProps() { //a synaptic connection between props as n-step association 
		
	}
	
	function updateProps() { //all weights and values, including potential merging of props are computed
		
	}
	
	
	
}
class prop extends props {
	//individual functions for each prop (e.g. findLocalProps)
	
	public $input = 0; //acquired from this->input($i)
	public $minOverlap = 0;
	public $maxOverlap = 0; //max value before merging two props
	
	public $offspringPotential = 0; //let props find the calibration necessary for synthesizing themselves together (note: MPT training feature)
		//let this be public as an attractor

		
	function output($i) {
		
	}	
		
	function input($i) { //parses $i (must occur at Axiom (input layer))
		$i = str_replace("01", "3", $i);
		$i = str_replace("10", "4", $i);
		$i = str_replace("11", "2", $i);
		$i = str_replace("00", "1", $i);
		return $i;
	}	
		
		
		
		
		
}
?>