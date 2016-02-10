
var ratingEnabled = false;
var ratingStars = 0;

    $(document).ready(function() {
$('body').find('a[rel="tag"]').each(function(i){
	var tag = $(this).html();
	tag = tag.toLowerCase();
	var stars = tag.replace(/\D/g,'');
	var strRating = "ratingstars";
	if (tag.indexOf(strRating) >= 0){
		console.log("RATINGSTARS: "+ tag + " " + stars);
		$(this).addClass('hidden');
	}
});
});

