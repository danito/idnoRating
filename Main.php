<?php
namespace IdnoPlugins\IdnoRating {

  class Main extends \Idno\Common\Plugin {
    
	/**
	 * Return the saved rating for an item
	 */
	static function getRatingForId($id) {
	    if ($result = \Idno\Core\site()->db()->getObjects('IdnoPlugins\IdnoRating\Rating', ['ratingId' => $id]))
		return $result;

	    return false;
	}
	
	function saveRating($id){
		$rating = new Rating();
		$rating -> ratingId = $id;
		$rating -> ratingStars = 0;
		save();
	}

    function registerPages() {


    	    // Add custom CSS & js
	    \Idno\Core\site()->template()->extendTemplate('shell/head', 'rating/head');
	        	    // Extend entity objects
	
	    \Idno\Core\site()->template()->extendTemplate('entity/Entry', 'rating/entity/Entry');
	    \Idno\Core\site()->template()->extendTemplate('entity/Checkin', 'rating/entity/Entry');


	    \Idno\Core\site()->addEventHook('post/article', function(\Idno\Core\Event $event) {
			error_log("THIS IS EVENT");
			$file = "rating.json";
			//$current = json_encode($event);
			$json = json_encode( (array)$event, JSON_PRETTY_PRINT );
			$current = ($json);
			$temp_file = (sys_get_temp_dir());
			//error_log("TEMP FILE: ".$temp_file."/".$file." ".$current);
			file_put_contents($temp_file."/".$file, $current);	
		});
    }
  
  }
}
?>
