$(document).ready(function(){
        getTweets();
        showHideProductText($(window));


	   $(window).on('scroll', function (e) {

        var self = $(this);
         // console.log(self.scrollTop());

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

       $('.contentLink').on('click', function(event){
        event.preventDefault();
        var contentId = $($(this).attr('href'));
        var otherSection = $('.content-section').not(contentId);

        if (otherSection.is(':visible')) {
            otherSection.fadeOut('fast', function() {
                contentId.fadeIn('slow');
            });

        } else {
            contentId.fadeIn('slow');
        }
        // $('.contentLink').removeClass('active');
        // $(this).addClass('active');
       });

       $('.productnav').on('click', function(event){
        event.preventDefault();
        if ($('#mainnav').is(':visible')) {
            $('#mainnav').fadeOut('fast', function(){
                $('#productnav').fadeIn('slow');
            });
        } else {
            $('#productnav').fadeOut('fast', function(){
                $('#mainnav').fadeIn('slow');
            });
        }
       });
});


function showHideProductText(element) {

        if (element.scrollTop() < 200 ) {

            $('.productText').removeClass('fadeaway', function(){
                $('.productText').addClass('appear');
            });

        } else {

            $('.productText').removeClass('appear', function(){
                $('.productText').addClass('fadeaway');
            });
        }
}
 function getTweets() {
        $.getJSON('js/twitter.json', function(data){
            console.log(data);
            $('.tweetContainer').html(
                    "<div class=\"row\">"+
                    "<div class=\"col-md-6\">"+
                    "<h4>"+data.user.name+"</h4>"+
                    "</div><div class=\"col-md-6\">"+
                    "<h5>@"+data.user.screen_name+"</h5></div></div>"+
                    "<div class=\"row\"><div class=\"col-md-12\">"+
                    "<p>"+data.text+"</p>"+
                    "<h5>"+data.created_at+"</h5></div></div><hr>");
            
        });
}