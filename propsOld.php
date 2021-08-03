<?php
class system { //system prop? 
    //handles $_GLOBALS["props"=>[propTypes, ..., etc]]
    private $_TURN = 0; //global T-prop (addenda: sub-types of props are denoted via lower case and vice versa)
    
    private $ID = 0; //one per system
    /** over time as the system develops (as props mature into properties), it will find the desired
    identity with which it operates itself (thus, the prop of ID whereby the system tries to learn how
    to operate itself) **/
}
class prop {
    
    public $p = array(); //every prop has its best known state, current state*, and an input state *where current state may exceed a best known state
    
    public $_TURN = 0; //every prop has its own turn as a member of T-net
    
    /** prop types: define sq prop, define layer prop, define divide prop (2), define checkpoint prop (0), define property prop (1)
    Is the prop a part of a successful checkpoint?
     Is the prop a part of a sequence?
      What layer in the sequence is the prop a part of? What is happening in this layer now (i.e. pass the activity ball (prop) to its head (divide prop))
      
      steps of a sequence are layers of a sq segment 
       props of layer are properties of a sequence segment step
       
      overlapping sequence segments (i.e. layers of a segment that connect with layers of another) are members of a t-prop
    
      //t handles traffic of overlapping sq props (via centralised t prop (final sq prop?)) -- t prop as axiomatic sq prop?
    
     Thus: sv prop, sq prop, x-prop, y-prop
       //y-prop finds what is needed, x-prop supervises all props, sq-prop finds order of activity that's required for checkpoint
         //each prop receives its own potential (via prop domain division of potential)
           //thus, e.g. less sq potential means that sq must optimize sequences (sq as an activity prop, i.e. meta)
             //x-prop finds what the target is
               //division occurs as a result of splitting (i.e. target prop domain divides)
                 //new props emerged as a result bud on a new sq prop from division (i.e. a new sq segment emerges and is budded on by newly divided props)
     
     
     sq prop knows whether the sequence of activity was correct or not, y prop knows whether it found the right property or not and x prop knows whether the target is correct or not
      thus, for sq prop, a single array comprised of multiple connections representing the activity ...
      sq prop tracks checkpoint sequences (i.e. it follows from a trail of checkpoints), multiple sq props via division disambiguate multiple checkpoints 
     
     
     
     sq[011101010101] iff weight == target weight, then activate sq prop (i.e. output) thus sq[state0[], state1[currentSnapshot], staten+1[nextBestSnapshot]]
       //each permutation set comprises its own weight and result, the set of permutations of permutation sets also comprises its own unique weight and result, ..., etc as prop domain divulges deeper
         //sq finds the desired order of activity via weights (i.e. a triggered weight manifested by a particular order of activity (i.e. sequence))
            //prediction potential
            //prediction by system solving problems of x that it has anticipated as a way of understanding x (i.e. properties of x that have been disseminated and solved and ordered by sq)
       //sq segment helps recombine properties throughout a layer/region
       
       //sub-sampling 
       
       //deep vs lite processing of cycle (thus, cycle potential as input energy)
       
       for T-counter, let there be nested arrays of props which are to emerge with which properties within its counter (i.e. an active prop within cycle, demonstrating flow)
        - thus, T[propA[properties@t_n+1], propB[properties@t_n+3]]
        
        sequences defined as successful checkpoint combinations (primitively, as a weighted invariant)
     
     //T prop mediates sequencing for sq props, where sq props are like sequenced animations of a master animation (via T prop)
       //layers emerge as points of previous T prop divisions relative to a master (PV(n+1)) checkpoint
      //T for tree (i.e. time prop (aggregate spatial function))
     
      //wave logic (why waves? how?)
     **/
    
    //combining spatial/temporal inference together into a single prop function (processing step that can perform both)
    
    function checkpoint() {
        /** reinforce all positively active props: autoassociate active input segment with active prop segment to index prop search **/
    }
    
    function divide() {
        /** new checkpoint layer emerges from previous prop 
              - new sequence segment to relate to other checkpoints of the same layer 
                - overlapping segments resolved by T 
                
                //sq segment is essentially the winning prop of its layer which focuses on patterns of activity
        **/
        
    } //division @ 0 decides, division @ 1 checkpoints a decision as a new prop
    
    function findProps() {
        
        //when a property becomes detached from a prop chain, it becomes potential ... ?
    } //for each and every prop of $this->P[] there are two states of activity denoted as state 0 and state 1, where state 1 is current input activity and state 0 being a previous state of input activity
    
    function cycle() {
        //try to activate target prop $x from $p, looping through all the props of $p where $p
        //is the output prop of its domain, let findProps($p, DECIDE) update prop potentials until $x is found
        //when $x is found, store a sq thread of $p such that $p[,targets[$x=>$sqThread]]
        /** stores sequence segments of successful runs (i.e. like manufacturing a protein) as props, can also acquire longer sequences
             by extending the amount of iterations the cycle operation executes
         **/
    }
    
}
?>