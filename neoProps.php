<?php
//potential modifies the weights (values) of prop connections

/** Important update: qprops as the means with which randomness is acquired, i.e. they search
for better r, randomness and further seek to optimise r, such that rP can be acquired (i.e. the most
accurate randomness whilst also being stable)

domain logic structuring division and props

divisive means as q, i.e. a potential that is initially chaotic until it is resolved into stability by P, prop
thus constituting a domain within which new prop structures may emerge

domain propagation methods, i.e. singularity states/props wherein a prop may acquire as many abstractions
of the same structure of itself via recursive cycling and jump steps, thus emerging a more abstraction
representation of that domain 
 //propagation via numerical variables (of constants) of fibbonaci sequencing, ..., etc 
   //for the system as a whole, IQ would be the means with which the system tries to predict ahead of itself
   (i.e. anticipating what will be after, before)   

quintessential tags (tripolar): tag of decisive, divisive and of system identity (stability)

open vs closed parameters
 **/

/**
 * P, prop (malleable foundation):
 *  attributes (types: primary (definition), feature (attachment/peripheral (types: essential (necessary), optional (accessory)))): 
 *    - x, target (attributes: y, solution) i.e. every prop has a target/solution input/output connections
 *         //change in prop direction can also occur, causing solution mediating props to mediate targets and vice versa
 *    - sq, sequence (t member, position variable)
 *    - t, time*
 *    - id, identity (i.e. how sv came to be)
 *    - sv, decision, ax decision (thus decision(0 against 1))* // how to express ax=>sv(prop); primary agent
 *    - l, layer*(*)
 *    - i, input
 *      - activity, input that leaves a mark
 *    - pv, perfect state
 *    - ax, axiom (the means by which a prop state is acquired (thus, the pv of ax is a desired result))
 *    //division as either a) duplication, b) binary duplication (i.e. two props find a way to fuse together (either as a singular prop or as producing a child prop))
 * 
 * Constants (i.e. what will always be):
 *   - Turn
 *   - Step
 * 
 * Functions (manifestationf):
 *   - Cycle* (, steps**)
 *   - _init (seed[], ax) //where ax is the prop from which to manifest the seed[] (ax becomes the default position from which UV occurs)
 *
 *  **as a target, e.g. to reduce the time required to complete a task or sequence (for optimisation)
 * 
 *  //decision is how sv checkpoints a property, division is how ax checkpoints a prop
 *
 * //inference of dimensions (compound direction) via fibbonaci sequencing (also recursive to n power, i.e. fib(fib, power) recursive)
 * //recycling of inputs and tagging input start->end as a means for finding direction of potential/input
 *
 * Description of prop functions (cycle differentiations)
 *
 * motivation as delta reward for mediating prop acceleration (i.e. awareness of potential reward)
 *
 * The problem of limits (i); zero and rings for closing asymptotic loops
 * */
 
class prop extends props { //$SV as agent for focusing attention 
    
	//as chains (e.g. like markov chains) thus appending a new prop must follow the overall rule of the Chain
	
    public $index = null;
    private $properties = array();
    
    public $divide = 0; //division potential
    public $decide = 0; //decision potential
    
    const TURN = 0; //release of inhibition produces $TURN = 1
    const STEP = 0; //for each $step["position"] => $step["value"/"weight"] respectively
    
    
    function __construct($defaults=null, $ID) {
        $this->index = $_GLOBALS["props"];
        //find this prop
    }
    
    function cycle() { /** unique prop function adapted from $_GLOBALS["props"] **/ //i.e. search function
        //extends global cycle
    }
}
 
class props { //space?
    //layer logic
    
    /** construct function for awakening PV (i.e. best prop structure/active state) **/
      //when resting, remain active as standby in UV state
    
    //cycle potential (i.e. if more, then cycle will extrapolate more, else only partial or less than full loops are enabled)
}


/**
* Interface design:
*  - division stats, decision stats, target/resource and input stats (i.e. prop and cycle stats)
*  - prop domain/cell and property stats 
*  - global and local stats
*  - ax and pv stats
*  - encoded data and decoded outputs
**/
?>