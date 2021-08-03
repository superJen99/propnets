<?php
class prop { //for each instance, and a map of prop networks via $this; all values derived from weights; +1 bias as boost, -1 inhibition
	
	/** alternatively, rather than checkpoint there are switches to be found for building synapses
			- synapses may describe relations between two props (i.e. a semantic); these may further be compounded (i.e. synapses of synapses, with props between)
			  - thus, the following: propa->propb is by synapseZ, and synapseZ1->synapseZ2 is by propZ
	**/
	
	/** global attributes and props: 
		PV (UV within), ID, SV, divide, decide, checkpoint
		
		additional info:
		- checkpoint spread, for the problem is unknown (i.e. attributes: where, how, what and domain structuring of this)
		- synapse potential
		//switches for synapses, i.e. the directions in which input could flow (i.e. where the synapse may lead to, thus switches are external
		modifier weights for synapses)
		//unknowns: 
	**/
	
	//structure
	public $props = 0; //globals reference (as a structure, comprising the set of all props, ..., etc)
		public $inputs = 0;
		public $properties = 0; //features (find resource, y from input and produce x, target of output prop)
		public $potential = 0; //floating inputs/properties (i.e. external/internal awaiting reuptake)
	public $synapses = array(); //mediating direction of activity flow
	
	//position
	public $indexes = array(); //list of prop index attributes for calculating its address
	public $domains = array();
	public $dimensions = array(); //a dimension describes the scale of a position, e.g. how much to extrapolate from this
	
	//processes
	public $checkpoints = array(); //map of active checkpoints 0->1 (note: checkpoint is the learning function/method)
		//weights of -1 -> 1 checkpoint, i.e. find how hard a checkpoint should be
		//checkpoint.bias -1 -> 1, e.g. a means by which props can decide to rely solely on external signals, or figure out checkpoint itself
		  //representing supervised->non-supervised learning via floating point integer value (weight)
	public $cycles = array(); /** a means of describing activity, as how it flows (polarity) **/
		//chains, attributes; switches (i.e. a bridge to cross via a synapse); checkpoints
	public $calculations = array(); //formulas from which e.g. a dimension is determined, radiances, ..., etc
		//define(angle)! e.g. of property/prop, etc
		//getWeights, getBias(-1, +1), getDimensions, getDomains, getAddress = formula
		//findProperties, findPotential, findInputs, findRadiance = formula
		//sliceAttribute = formula 
		//isDomain, isDimension = formula
		//isInput, isOutput, isPotential, isProperty = formula
		//isT - time limitations
	
	function checkpoint() {} //update all relative attributes, etc of current prop (i.e. update overall prop structure and its synapses)
		//0, default checkpoint (i.e. has reached required activity); 1, optimal checkpoint (i.e. reached current best state); +1, better optimal (i.e. pv(n+1) has occurred)
	function cycle() {} //gate logic and relative restrictions
	
};
class props extends prop {
	
	public $props = 0; //extending properties/methods?
	
}

$props = 0;


?>