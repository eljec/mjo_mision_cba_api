
 <?php 

	/**
	*  This classs will be use to manage all the informaction about itinerary
	*/
	class ItineraryManager 
	{
		
		const ITINERARY_FILE_PATH = "resources/itinerary.json";

		public  function getFullItinerary ()
		{
			$file_content = file_get_contents(self::ITINERARY_FILE_PATH);

			return ($file_content); 
		}
	}
 ?>