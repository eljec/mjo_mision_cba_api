
 <?php 

	/**
	*  This classs will be use to manage all the informaction aboutn itinerary
	*/
	class ItineraryManager 
	{
		
		const ITINERARY_FILE_PATH = "itinerary.json";

		public  function getFullItinerary ()
		{
			$file_content = file_get_contents(self::ITINERARY_FILE_PATH);

			return ($file_content); 
		}
	}
 ?>