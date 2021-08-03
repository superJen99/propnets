<?php
class _potential {
	
	//motion: change of y amidst a->b of p
		//all the things amidst a->b y of x 
	
}
class _prop { //chaining props together for looping
	
	public $PV = 0; //stores index key for SDR (universals) array
	
	function input() {} //input gate
	function output(){} //output gate
	function divide(){} //can divide from _system context also; mitosis (iff prop is inside another prop, it becomes a new property)
	function checkpoint() {
		/** new qualia++ **/
	} //equivalent to serializing a hidden state within an LSTM neuron; activation function
	
}
class _system {
	
	/** _init parameters:  **/
	
	//I/O calls; CRUD methods
	public $SV = 0; //either between 0 -> 1
	
	function cycle() {}
	function supervise() {}
	
}


?>