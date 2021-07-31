sys = { //compound data types [asymptote, ..., etc] //memory is immediate (i.e. within synaptic memory), short-term (cellular) and long-term and axiomtic (long-term for each sys, ax for trees)
 /** feeling or activity pulled from Facebook, Twitter, ..., etc with tag encodings **/ //prop frequencies of activity and potential differentiation of activation patterns
 PV: { /** quintessential: PV requires a checkpointing method for mediating true, false and unknown successes/misses **/
 //angles and lengths of vectors for properties between both properties (for connections) and props, summerised by PV-layer I/O  (note: properties are still comprised of potentials and thus qualia)
	 //since properties are comprised of potentials and carry potentials, they are therefore comprised of probabilities
	 internalTarget = {/EVReference/UVReference/},
	 externalTarget = {}, //expressing a target: predictive area, depth and time 
	 UVplug: 0; //feed
	 SVplug: { 
	 //SV focus on interests; newProperty when new connection between interests are made 
	 //(i.e. newProp(interest (qualia positive/negative/neutral))); potentials feed qualia tagged data (e.g. text like words and paragraphs)
	 //relational values (multidimensional vectorised) between words and sentences
	   //omnicontextual relationships between words and sentences/semantics (valued sentences); use fb/twitter/etc for emoji emotional data for identifying positive/negative/curious meanings(semantics)
		 //qualia/potential threshold polycontextual activation method i.e. activate if any of the potentials exceed a learned threshold of desired recognition/response
		   //activation through prediction n-steps or n-steps of magnitude into the past; activation through votes (i.e. if enough props experience the same perception)
		 immediateFocus: 0;  //receptive field and temporal field size (e.g. 12x12 for 5ms - 1sec)
		 shortTermFocus: {
			 receptiveField: 0; //contingent on sense (so e.g. how many words, how big of a receptive field for vision; sample of audio; etc)
			 temporalField: 0; //for how long to focus on something with receptiveField parameters set
		 },
		 workTermFocus: {
			 UVFocus[taskA=>UVFocus[shortTermMemA], ..., etc]; //which part of UVFocus to load memory from
			 tasks: []; //task memory -- i.e. current goals of working memory -- once these are complete workTermFocus is free'd
		 }
		 UVFocus: { //immediate, short-term and long-term memory stuffs
			 immediateTermMemory = []; //immediate banks of memory pooled
			 shortTermMemory = []; //short term banks of memory pooled
			 longTermMemory = []; //this requires its own process for updating its pool (i.e. a pooling class/operator e.g. dreaming)
			 /refertoUV/ //qualia focus with qualia matrix for UV/PV/SV focuses (starting centermomst with SV, overlapped by UV and then PV) -- this comes from all experience (every possible permutation of the rainbow)
		 }
	 }
 },
 UV: { /**internal reflects externally **/
	 //axplugin -- this is an axiomatic superdynamic constant
	  //PSO-like centrifuge cycling +,- and ? qualia to relative outputs w/ SV and PV pull/pushes too
	  PVplug: 0;
	  SVplug: null; //undecided: attributes: focus, target, universalTarget(s)
 },
 SV: { //special hrefs to SV also internal SV qualia matrix file with procedurally dynamic updates
	 ID = {/stableReferencestoself/} //like a moon orbiting a planet giving day and night
	 internalTarget = {/references/};
	 longTermSelfGoal = {}; //refertoUV
	 selfReference = [self, positive=[/positive=[logEmotion], negative=[logEmotion], direction=[nDcuriosityVector]/]
 },
 /** note: each layer has its own unique cycle function with plugins to each other (I/O) to allow for activity to flow between layers **/
 layer0: { //layers for each sense (including quantum/unknown)
  //ref to complex potentials of layer0 by complex potentials for layer0 -- quantum layer
  //connection via time-delay sequencing of PVhref; time-delay href markers
  //interpreter: convolution (use where adversial attacks can be averted/avoided) or transformer (also learnby method too w/ supervised/semi (requires UI)/unsuperviseds))
  //learning parameters (e.g. learnByConlv, transform, stochasticTransform (i.e. by anything))
   },
 layer1: { //or alpha; layer plugs for connections between layers (via internal href)
  //ditto -- also append with sense -- plugin sense layer (i.e. add new sense to this layer as system grows)
   },
 layer2: { //ditto could be beta
   //groups of senses (i.e. groups text, vision, audio, ..., etc together) -- this is necessary to allow for sensory amalgamation required for recognition and response
   },
 layer3: { //delta -- activity works on connections in layer 3 (i.e. focus activity and layerActivity to focus only on properties here)
   //networked via ganglion-like amalgamation //note on unsupervised learning: this merely allows for something to learn new things by itself rather than things of importance (unless by accident)
  }, 
 layer4: { //even socially if theta is involved -- between systems
	  //network ganglion
  }, 
 layer5: { //gamma is layern+1 -- between environments on layer 5n+1 (note to self: could drop layer 1 and have 4 layers instead)
	  //central ganglion (at the center of all networked ganglion) -- physical engagement via senses from this layer?
  }
 },
 layerActivity: {
	 //an activtion function for each layer with turns, steps, skips, waits, ..., etc usual functions; sync activation mode (concurrent activity thresholds required)
 },
 activity: {
	 //separate activity class for props themselves e.g. for determining their time-delays, potential buildup from qualia and compound qualia (i.e. potential) and connective/disjoint qualia/potential
	//division happens here too in various ways (yet to be quantified properly i.e. how from props, to properties from potential, to propnets and propsys and an entire system with an SV ID)
     //predictive and social activation modes (mirror activity) available too (requires social transformations -- these must be trained)
	 //training vision, textual, audio, social, connective, ..., etc convolutions and transformers/etc
 },
 props: {
	 //props have properties which are comprised of potentials which are comprised of qualia (i.e. semantic connections -- every connection is colorful)
 }
 //columns with layers and layer3 for connecting columns together
}