<?php
namespace IdnoPlugins\IdnoRating {

  class Main extends \Idno\Common\Plugin {
    
	/**
	 * Parse Hashtags for 'ratingstars' and return the last value 
	 */
	static function checkForHashtag($hashtags) {
		if ((array) $hashtags !== $hashtags ) {
			return false;
		}
		$tag = "";
		$rating = -1;
		foreach ($hashtags as $hashtag){ 
			$pos = 	stripos($hashtag,'ratingstars') ; 
			if ($pos !== false) {
				$rating = preg_replace('/\D/','',$hashtag);
				$tag = $hashtag;
				if (empty($rating)){
					$rating = -1;
				}	
			}
			if ($rating === -1){
				return false;
			} else {
				return $rating;
			}	
		}	
	}	
	

    function registerPages() {

    	    // Add custom CSS & js
	    \Idno\Core\site()->template()->extendTemplate('shell/head', 'rating/head');
	    // Extend entity objects
	    \Idno\Core\site()->template()->extendTemplate('entity/Entry', 'rating/entity/Entry');
	    \Idno\Core\site()->template()->extendTemplate('entity/Checkin', 'rating/entity/Entry');
	    \Idno\Core\site()->template()->extendTemplate('entity/Like', 'rating/entity/Entry');
	    \Idno\Core\site()->template()->extendTemplate('entity/Photo', 'rating/entity/Entry');
	    \Idno\Core\site()->template()->extendTemplate('entity/Recipe', 'rating/entity/Entry');
	    \Idno\Core\site()->template()->extendTemplate('entity/Event', 'rating/entity/Entry');
    

  	}
  }
}
?>
