<?php
class P { //system prop - ax-P are classes of P which collaboratively form P itself


    //focus (i.e. a fixed cycle (where a continuous cycle passes the ball from output and cycles this throughout system, where the ball may find new problems to feed; thus, a fixed cycle navigates the ball against a single problem))
      //inverse of this as problem inference?
    //continuous vs fixed output/cycling //instrument (guitar/string) logic (i.e. burst vs fixed/stable firing modes)
     //wave function/prop/potential/... queue/traffic spiral
    
    /** potential represents transition between state 0->1 **/
    
    //checkpoint between two players must have a mutual target (i.e. both must work together to mutually acquire a goal, x)

    public static $props = null; //global props array
    //private indicators that should only be read/write by this class 
      //i.e. step flags indicating what step of a cycle a prop is currently in w/ rules determining whether a prop can contradict local step traffic (thus, traffic indicators)
    /** global properties (identities of prop activity) -- traffic (i.e. signals) indicators (traffic logic needed, e.g. how is it occupied, mediated, etc) **/
      //signal props, i.e. how traffic is mediated
      //traffic indicators as a means for synchronizing prop polarities with checkpoint (i.e. where the prop containing checkpoint mediates traffic coordination)
        //i.e. as a means of mediating time - when (traffic indicators follow checkpoint, i.e. as a means of guiding prop activity; thus, internally, all props must find a way to contribute to checkpoint)
        //the path on which a checkpoint is found (for system) comprises properties (i.e. other defining props of checkpoint 1*), which can be refreshed thus emerging state ax whereby PV can try a new best state for emerging a better, more refined (Defined), checkpoint
        //*checkpoint 1 is a current stable path of checkpoint, checkpoint0 is a new potential path from which checkpoint n+1 may be found
    private static $step = 0; //cycle steps (steps in processing P) - steps towards checkpoint
      //$step ultimately indicates the stage at which potential has been processed (thus, a negative step indicates displaced potential)
      //$step are the different stages of prop activity, while $checkpoint is the acquisition of a new best state 
    private static $checkpoint = 0; //has a ball been acquired (occurs as eventual signal after this prop) -- determines prop polarity
     //only one prop can have checkpoint (as a means to reinforce all the desired properties acquired from a system)
      //iff checkpoint is found in the midst of a system cycle, process all props which manifested that checkpoint, starting from the prop from which it was found
    //$sq as how props are processed ...
    private static $ID = 0; //? - operator (e.g. for PV prop, ID is literally PV as the SV operator of that prop)
    
    function __construct($isset=0) { //set to null on initial startup
      if($this) {
        if(!$this->isset || $isset=1) { //config may also be refreshed?
           if(!isset($_GLOBALS["props"])) { //start initial config
              $_GLOBALS["props"] = array();
              $_GLOBALS["props"]["init"]["isset"] = 1;
              $_GLOBALS["props"]["main"] = array(); //create a main prop tree (in case there are multiple systems?)
              $_GLOBALS["props"]["main"][] = $this; //append a reference to $this prop - how to order props in an array?
                //props are ordered by their closeness to checkpoint (i.e. iteration starts with the last best known prop to receive checkpoint)
              if($_GLOBALS["test"]) {
                 $_GLOBALS["test"] = new test; //reference to instantiated test (one instance? threads? (define: threads))
                 $_GLOBALS["test"]->addClass($this);
              }
              print "Log class not found.<br>"; //notification (not an obstruction to app function)
           }
        }
      }
    } //step -1 (uninitialized)(?)
    
    function cycle() { //keeps sequencing P until target is acquired (i.e. checkpoint(x) has occurred), it may also find ways to
      //activate prop identities (e.g. PV, UV, ..., etc)
        //i.e. ultimately, cycle is a function for accreting a solution (such that analogues may emerge as spin, try, ..., etc)
    } //step 0 (?) [for a given potential, there may be $steps in processing the same input (thus cultivating layers of the same input)]
    
    function output($p) { //final step ($p=changesAppliedToP)
    /** output must tag input potential - it must be fed continuously updated meta data regarding its condition (e.g. direction, value, etc) **/
        //releases prop (property) to post-prop via SV (i.e. findProps must succeed SV for output to occur)
    } //ax-P (SV) -- for the final prop, output($p) is the end result of a system cycle
    
    /** findCheckpoint() ? -- finds which ball to play with **/
    
    //sequence handler (sq)?
    
    protected function newProp($checkpoint) { //extra step (step(n+1)) -- checkpoint function (?) -- requires signal to spark division (i.e. fertilization)
     //this is a prop state in itself and will be tagged via $_GLOBALS["props"]["Pn"]["stateN"] to prevent interference from other props
      //thus a temporary membrane (prop container) as a transitional state from property to prop
        //props emerge as checkpointed properties (i.e. $_GLOBALS["props"]["Pn"] = new P as a configuration to be executed by global P)
        //divide $this->props($P) index
         //when a prop divides, it will bud on the parent domain (i.e. thus inheriting the characteristics of that domain)
    } //ax-P
    
    protected function findProps($mode=0) { //intermediary step - many-to-one input (bi-state function, can either work on input or output)
     /** $size: prop size pattern, $index: prop index pattern (dimensions from which to loop) etc $parameters[...] **/
     //bi-state prop function (findProps in state 0 finds potential; in state 1, it finds checkpoint)
        //find desired activity (local to the prop) 
        //looks for desired input (local activity of $P) -- for ax, findProps is identical to input()
    } //ax-P
    
    protected function updateProps() { //post-intermediary step
     //continuous or as a tree?
        //update desired activity (i.e. processes feedback)
        //processes prop uptake (replace $this->props index with the temporary index constructed by findProps)
    }
    
    
    
    
}
class test {
    /** performs method tests to ensure class stability (prevents conflicts/unnecessary overlapping of access/values, ..., etc) **/
    
    private $isset = 0;    
    public $classes = array(); //is this current instance in use? (one use per class instance?)
    
    
    function __construct($isset=0) {
        //...?
        if(!$this->isset || $isset=1) { //init
            $this->isset = 1;
        }
        return true;
    }
    
    function addClass($class) { //add class to log array for monitoring
        if(empty($this->classes) || !$this->classes[$class]) {
            $this->classes[$class] = array();
            return true;
            //map array to class properties/methods
        }
        return false;
    }
    
    function classActive($class) {
        if($_GLOBALS["$class"]) {
            return true;
        }
        print "<b>$class</b> is not active.\n";
        return false;
    }
    
    function switched($class, $property, $value) {
        if($this->classActive($class)) {
            if($_GLOBALS["$class"]->$propery == $value) {
                print "$property has been switched to value $value.<br>";
                return false;
            }
            return true; //continue
        }
    }
    
}
?>