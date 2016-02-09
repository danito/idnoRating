
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

$(document).on('change' , '#rating-enable' , function(){

    if(this.checked) {
	ratingEnabled = true;
	$("i.rating").removeClass('rating-star-o');
	$("i.rating").addClass('rating-star');
    } else {
	ratingEnabled = false;
	ratingStars = 0;
	starsClicked(0);	
	$('#rating-stars').val(ratingStars);
	$("i.rating").addClass('rating-star-o');
	$("i.rating").removeClass('rating-star');
}


});
$("i.rating").hover(function() {
	if (ratingEnabled == false){
		return false;
	}
	var star = $(this).data("star");
	starsClicked(star);
}, function(){
	if (ratingEnabled == false){
		return false;
	}
	var star = $(this).data("star");
	starsClicked(ratingStars);

});

$(document).on('click','i.rating', function(){
	if (ratingEnabled == false){
		return false;
	}
	var star = $(this).data('star');
	if ($(this).hasClass('rating-star-clicked') && ratingStars == star){
		star=star-1;
	} 
	ratingStars = star;
	$('#rating-stars').val(ratingStars);
	starsClicked(star);
});

function starsClicked(star){
	$('i.rating').removeClass('rating-star-clicked');
	$('i.rating').removeClass('fa-star');
	$('i.rating').addClass('fa-star-o');
	$('i.rating').addClass('rating-star');
	for (i=1;i <= star; i++){
		$('i.star-'+i).removeClass('fa-star-o');
		$('i.star-'+i).removeClass('rating-star');
		$('i.star-'+i).addClass('rating-star-clicked');
		$('i.star-'+i).addClass('fa-star');
		console.log('star-'+i);
	}	
}
    });

