 <?php 

	/**
	*  This classs is a representation of a section on the client app
	*/
	class Section 
	{
		
		public $id;
    	public $name;
    	public $active;

	    function __construct($id,$name,$active){
		     $this->id=$id;
		     $this->name=$name;
		     $this->active = $active;
	    }

	    // Get
	    function getId(){
	      	 return $this->id;
	   	}
	    function getName(){
	      	 return $this->name;
	   	}

	   	function getActive(){
	      	 return $this->active;
	   	}
	}
 ?>