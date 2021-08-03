<?php
class system { //system prop? 
    //handles $_GLOBALS["props"=>[propTypes, ..., etc]]
}
class prop {
    
    /** prop types: define sq prop, define layer prop, define divide prop (2), define checkpoint prop (0), define property prop (1)
    Is the prop a part of a successful checkpoint?
     Is the prop a part of a sequence?
      What layer in the sequence is the prop a part of? What is happening in this layer now (i.e. pass the activity ball (prop) to its head (divide prop))
      
      steps of a sequence are layers of a sq segment 
       props of layer are properties of a sequence segment step
       
      overlapping sequence segments (i.e. layers of a segment that connect with layers of another) are members of a t-prop
    
      //t handles traffic of overlapping sq props (via centralised t prop (final sq prop?))
    
     Thus: sv prop, sq prop, x-prop, y-prop
     **/
    
    function divide() {} //division @ 0 decides, division @ 1 checkpoints a decision as a new prop
    
    function findProps() {} //for each and every prop of $this->P[] there are two states of activity denoted as state 0 and state 1, where state 1 is current input activity and state 0 being a previous state of input activity
    
    function cycle() {} //
    
    function findActiveProps() {
        
    }
    
}
?>