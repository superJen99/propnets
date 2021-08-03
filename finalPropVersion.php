<?php

/**
there are two functions: activation potential (for mapping prop^q=>prop^p) and activation potential for releasing a true or false value
i.e. whether the q/p = 1 or more etc whatever criteria that is to be learned for such mapping holding the activation potential stable

additionally, superficial functions:
-error (also can be interpreted as entropy)
-attention (also can be interpreted as direction)

quintessential attributes of props (SDR definitions encoded by default...):
-activation potential (super upper/lower scaled mapping... e.g. prop from very distant network can map connections vice versa)
-activation function (logic that is compounded)
-prop (sole storage of captured bit that was useful somehow: iff props, it's an encapsulation of other prop (multiples) and an attribute can satisfy this property
 //this could also be of an SDR, hence instant super upper/lower scaling of activity/storage, also relies on polygonal prop for alpha storage handle)
-connection (ditto from above for communication) [3 layers? attribute 0, synaptic prop 1, n+1 semantic?]
-polygonal prop (ditto two steps above, albeit concerned with forming structure for data storage)
-checkpoint (for GSA evolution... i.e. prop generation evolves as a system into a new next best generation, optimising all the ways in which
 it performs its duty operations)
-attribute (new attribute compounded by means of other attributes, as a new prop); these can also be shared, as can props themselves and connections and anything else described here
-potential (neurotransmitter substitute that is learned over time distributively); also primary activity prop i.e. before a prop becomes a prop, it is just active differentiated space
**/


//now code this shit...
 /** coding techniques, methodologies, workarounds, ..., etc
	elastic: the idea that some given z set of data is scheduled and potentially queued for a pull, from which it is then 
	processed via a superfast lane to reach its given target z1 (else, a)
	
	notational stuff:
		k refers to an organised set of data in general
		z refers to any given set of data
		q refers to a set part of an expect set pack
		p vice versa as therefore above
		s refers to any given to-be introduced (initially? initialised?) set 
		n refers to a n quantity of sets, separate as a value (int or float) or as a n container within itself (???)
		m refers to any quantity of sets to be stored within any given set m
		y refers to a set from which to map
		x refers to a set to which to map (i.e. target set)
		h refers to a hidden set (e.g. crytographically to encode set data, or generally as a hidden set of sets)
		i refers to some imaginary set (constructor defined(???))
		
	addition: required super fast serial processing of input arrays/arrangement of prop solutions (order by best? prediction used to find fastest method for serial processing?)
	addition: rotations as a piece of cycle, separated or appended
	addition: new idea for programming methodology to ponder, a bulldozer function/class for prop constructors 
 **/

class globalProps { /** this is the current active system, i.e. the system that is now currently online and in use **/
	//global prop memory to be shared... a resource parameter...
	public $output = array("global"=>array()); //a binary output sequence produced from props to be interpreted by an external decoder app
	public $input = array("global"=>array()); //every new Props shares its own array within this array for its input; a global input for global output via $this['input'] to access inputs
	public $globalSDRs = array(); //set of all registered SDRs of the entire network of Props (systems of prop; systems of systems)
	public $globalMemory = array(); //requires parameters; will learn these as the network app is being developed
	private $setup = array("inUse"=>0, "setup"=>0); //is this class ready for use? can we use props now? (private to prevent external overrides)
	private $stability = array("globalStabiltiy"=>0, array()); //homeostasis global variable to ensure that all systems are functioning harmonically 

	function __construct($config=null, $update=null) { /** a homostasis global variable to prevent entire system from collapsing if a new override is attempted; only a very special hidden and secret key can do this... (pseudo-radiation/etc experiments on PGMs?) **/
		//setup props via $this->setup, else skip
	}
	
	function input($input) {
		if($this->decode($input) < 1) {
			//no need to decode input, can skip the computationally wasteful and timing process of decoding input of this function
			
		}
		//stream of encoded input to be digested
	}
	
	function cycle() {
		//construct activation potential and terminal activation functions from this global function (i.e. a formula is needed so props can learn their own terminal activation functions (gated sequencing))
	}
	
	function SV() {
		//sentient construct for resolving disrepencies that otherwise cannot be corrected by prop deterministic means
			//establish a means for self-awareness and have sentience as a self-learning mechanism for finding better ways
			//of maintaining self-awareness, with recursive improvement of how it enables sentience itself (i.e. self-improving sentience)
	}
	
	function output($local=null, $output, $localisation) {
		if($local != 0) {
			//output to a local, specified by the additional localisation parameter
			return true;
		}
	  $this->output = $output; //update and set current output
								//a new globalsOutput for each Props system 
	  return true;
	}
}
class globalActivity {}
class propActivity {
	/** necessary for separating formed from forming, i.e. potential from prop **/
	
}
class universalProps {
	
	public $activeSynthesis = array(); //set of all props that are currently trying to synthesize together their PGMs to produce offspring Props
	public $activeSGSs = array(); //new prop idea: sparse generational sequences, i.e. filtering out unnecessary props of PGM via SGSs
	private $PGM = array(); //references etc to where Prop Generational Memory will be stored 
	private $generation = 0; //this will be private for each instance, because it will be for each system (Props)
	/** genetic algorithmic sequencing for props to find next best generation and activations (checkpoints) **/
	
	private $setup = array("inUse"=>0, "setup"=>0); //is this class ready for use? can we use props now? (private to prevent external overrides)


	function __construct($config=null) {
		//setup props via $this->setup, else skip
	}
	
	//unloading $this->PGM into a new Props
		//comprises inside the array: location for quintessential attributes necessary for any prop system to function, e.g. SV, PV, UV, ID[], Props[], Attributes[attrQa, ..., etc], ..., etc
		//including a rule for merging to PGMs (i.e. Props reproduction, albeit polyProps merging is perhaps more desired to acquire the best of a set of systems to find the best means of a set of systems...)
	
}

class Props { /** this stores the set of all systematically evolved collections of prop that have formed systems i.e. Props **/
	
	private $props = array(); //this will be replaced with /$uniqueIDProps instead of default $props variable definition

	function updateProps($props, $GSF) {
		//an update is permitted if an evolutionary step is acquired, hence $GFS: current best solution has peaked for this current
		//problem, so we now take a step up and apply a new array encapsulating the previous array from which the new array will depend
		//the older layer will function like a protien manfacturing line or such, whilst this will be functioning as a continuously evolving
		//plasma membrane challenging the external environment of problems thrown at props, resolved autonomously or by means of $_GLOBALS['SV']
	}
	//a system or network if a member of a set of Props (this is acquired and addressed via $_GLOBALS['globalMemory']['systemSet'])
}


class Prop {
	
	function newProp() { //describe intrinsic prop, and then append additional attribute argument (otherwise default attribute of $_PARENT)
		
	}
	//how props, attributes, ..., etc are formed...; a parent ($_PARENT) prop is the domain from which the current prop is dividing
	/** IMPORTANT NOTE: regarding connection mutlisymmetrical positioning from which to direct to another prop, refer to paper notes for solution to this problem **/
}
?>