
<?php
if ($objs = \IdnoPlugins\IdnoRating\Main::checkForHashtag($vars['object']->hashtags))
{
		echo $this->draw('entity/Rating');
		
}

