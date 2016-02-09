<?php
$item =   $vars['object'];	
$rating = -1;
if (!empty($item->hashtags))	{
	$hashtags = $item->hashtags;
	$tag = "";
	foreach ($hashtags as $hashtag) {
		if (strpos(strtolower($hashtag),'ratingstars') !== 'false') {
			$rating = preg_replace('/\D/','',$hashtag);
			$tag = $hashtag;
			if (empty($rating)){
				$rating = -1;
			}	
		}

	}
	error_log("HASHTAGS ".$tag." ".$rating);

 }
	if ($rating > -1) {
		
		?>
		<div class="idno-rating rating">
		<aside class="h-review hreview">	
			<p></p>
			<h2 class="p-name hidden item p-item h-item"><span class="fn org"></span></h2>
			<p> 
				<data class="p-rating rating" value="<?= $rating?>" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
				<?php
					for ($i=1;$i<=5;$i++){
							$star = "fa-star f-star";
						if ($i > $rating){
							$star = "fa-star-o e-star";
						}
						echo '<i class="fa rating-star '.$star.'"></i>';
					}
				?>
					<span class="hidden">
						<data class="rating" value="<?=$rating ?>"><span itemprop="ratingValue"><?=$rating ?></span>
						</data>/5
					</span>
				</data>
			</p>
			<p class="p-author author h-card vcard hidden">
                		<a href="<?= $item->getAuthorURL() ?>" class="icon-container">
			<img class="u-logo logo u-photo photo" src="<?=$item->getIcon() ?>"/></a>
		                <a class="p-name fn u-url url" href="<?= $item->getAuthorURL() ?>"><?= $item->getAuthorName() ?></a>
				<a class="u-url" href="<?= $item->getAuthorURL() ?>">
					<!-- This is here to force the hand of your MF2 parser --></a>
			</p>
		</aside>
		
		</div>
		
		<?php
		
	}
