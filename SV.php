<?php
/** 
 0. SV rule -- AGENT 
   -- ID as the seat of P, its best state of activity or such (thus, system naturally cycles props to find the best SV to operate system)
 1. Checkpoint rule
   -- how agent knows whether its output is true or false (i.e. its target) -- TARGET
**/

//default checkpoint rule; boost (natural consequence of hierarchical domain feedback?)

class SV { //for each prop... ?
    //polarity logic for modulating prop states (between open/close regarding I/O)
    
    private $step = 0; //stage of $this->cycle()
    //to/from indexes of properties (e.g. whether a prop has caused a property or whether a property has been passed to it)
      //i.e. predicting actions of itself or its environment
    //ball logic... (replaces tagging method for identifying properties)
    public $props = array(); //representation of C[0]... - the props of $this->SV
      //$props[] as a company with employees which has its own divisions and subsequent employers/employees
      //while as itself, it may be a division (branch) of another ascending company
      //size of SV domain prop is determined by reward, such that e.g. a prop size of 8 when there are a total of 8 props, as the biggest - and - 8.10 as the first of the second biggest of the biggest
      
    private $checkpoint = 0; //has a checkpoint been acquired? (goal/player relationship between two SV props for mediating feedback amidst a connection (reward pathway))
    //states of prop activity: active in cycle, active checkpoint, ..., inactive 
     /** negative checkpoint, i.e. degraduation of potential (tantamount to negative reward) **/
      //thus, checkpoint is a non-int value that is either -1 (disconnect/loss of prop), 0 (inactive), 1 (current active state), n+1 (next best state)
      //prop value as a measure of its closeness to checkpoint (e.g. a value between -1 and 1, such that it is either losing or winning a checkpoint (if it goes further than 1, a new checkpoint has been acquired))
    /** ultimately, checkpoint is a signaling device for mediating signals between props **/
      //checkpoint is displaced into properties of a prop for determining its future activation (signaling)
    
    
    private $ID = 0; //Identity -- index for ID -- best player for C (alternatively, index in a global prop chain?)
     //for system, ID[ID] as system operator (king of the hill)
     
    function cycle() { /** recursive input? - target prop throws ball back to input prop until x is acquired from input prop **/
        //cycle potentials (start (excite), stop (inhibit)) for each prop and cycle refractory hormones (alternatively, refactory response as checkpoint for potentials)
          //thus, three states of checkpoint: 0 - potential, 1 - property acquired, n+1 - next best state (1+), i.e. updating of 1
    } //i.e. keep trying, don't give up! - $this->findProps() until checkpoint is acquired
    
    /** checkpoint **/ //intermediary function
    function checkpoint() { //two primary checkpoints: 1) default checkpoint for each and every prop by most successful checkpoint for best prop definition (e.g. checkpoint as positive reward delta), 2) superficial feedback from i, trickling through the entire system whereby i decides whether the output is sufficient (the two may work together, such that while 1 is active and in process, 2 may at any time decide to influence the direction of 1)
    	//what signal to listen to for confirmation
    	  //a goal is scored -- keep passing the ball until it gets past PVn+1
    }
    
    function output () { } //decide (modulated by ...), alternatively $this->SV() -- action
    function newProp() { //for system environment (multiple SV), synthesize props such that ax(n)=>pv(n) for each
    	//lay egg (relies on $this->output()?)
        //division modes: budding and synthesis, whereby the latter acquires a prop which manifests a vector (differentiation) of multiple props; the former passing a checkpoint as a ball
    } //divide -- expand checkpoint index
    function findProps() { 
    	//props connected to current SV (i.e. loop something for $this->props)
    } //find props from $P index of any size restricted by $n
}
//context is how the ball is played (e.g. same mechanism generating the ball for tiredness and hunger)
?>