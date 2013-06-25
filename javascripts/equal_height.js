//equal height columns

var biggestHeight = 0;
$('.equal_height').each(function() {
	if($(this).height() > biggestHeight) {
		biggestHeight = $(this).height();
	}
});

$('.equal_height').height(biggestHeight);
