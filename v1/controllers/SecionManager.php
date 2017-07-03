

 <?php 

	/**
	*  This classs will be use to manage all the informaction about the sections of the app.
	*  We use this array to show some sections accroding specific times
	*/
	class SecionManager 
	{
		
		//const SECTION_FEEDBACK_ACTIVE_DATE = "2018-01-15";

		const SECTION_FEEDBACK_ACTIVE_DATE = "2017-07-02";

		public  function getSections ()
		{
			
		 	$sections = array("sec_itinerary", "sec_readings", "sec_prayer", "sec_songbook","sec_location_group", "sec_map");
		 	$input = self::SECTION_FEEDBACK_ACTIVE_DATE;
		 	
		 	if (date("Y-m-d") >= $input)
			{
			    $sections[6] = "sec_feedback";
			    $sections[7] = "sec_contact";
			}else{
				 $sections[6] = "sec_contact";
			}


			$response = array();
		    $response["client_sections"] = $sections;

			return json_encode($response);
		}
	}
 ?>