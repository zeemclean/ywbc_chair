$(document).ready(function(){
	// var visiblePage = $('.content-section:visible');
	// var visibleId = visiblePage.attr('id');
	// var contentHref = $('.contentLink').attr('href');

	// if(contentHref == visibleId) {
	// 	contentHref
	// }

	   $('.productText').scroll(function (e) {
        if ($('.productText').scrollTop() < 100) {
            $this.css({
                position: 'absolute',
                top: 100
            });
        } else {
            $this.css({
                position: 'fixed',
                top: 0
            });
        }
    });
});