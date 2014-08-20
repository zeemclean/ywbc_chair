$(document).ready(function(){
	// var visiblePage = $('.content-section:visible');
	// var visibleId = visiblePage.attr('id');
	// var contentHref = $('.contentLink').attr('href');

	// if(contentHref == visibleId) {
	// 	contentHref
	// }
        showHideProductText($(window));


	   $(window).on('scroll', function (e) {

        var self = $(this);
        console.log(self.scrollTop());

        showHideProductText(self);

        // if (self.scrollTop() < 100) {
        //     self.css({
        //         position: 'absolute',
        //         top: 100
        //     });
        // } if (self.scrollTop() < 60 ){
            
        // }
        //  else {
        //     self.css({
        //         position: 'fixed',
        //         top: 0
        //     });        
        // }

        });
});

function showHideProductText(element) {

        if (element.scrollTop() < 153 ) {

            $('.productText').css('visibility', 'hidden');

        } else {

            $('.productText').css('visibility', 'visible');
        }
}