
<?php
/*
if ($objs = \IdnoPlugins\IdnoRating\Main::getRatingForId($vars['object']->url))
{
	foreach($objs as $o) {
		$this->ogp = $o;
		echo $this->draw('entity/Rating');
	}
		
}
*/

//echo "<pre>YES PLEASE ";print_r(($vars));echo "</pre>";
		echo $this->draw('entity/Rating');
