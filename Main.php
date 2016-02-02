<?php
namespace IdnoPlugins\Rating {
  class Main extends \Idno\Common\Plugin {
    
    function registerPages() {
    	    // Add custom CSS
	    \Idno\Core\site()->template()->extendTemplate('shell/head', 'rating/css');
	        	    // Extend entity objects
	    \Idno\Core\site()->template()->extendTemplate('entity/Entry', 'rating/entity/Entry');
	    \Idno\Core\site()->template()->extendTemplate('entry/edit', 'rating/entity/edit');
    }
  
  }
}
?>
