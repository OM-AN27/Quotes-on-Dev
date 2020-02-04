
(function ($) {
    let quoteContainer = $('.quotes-container');
    
    $('.main-button').on('click', function (event) {
        event.preventDefault();
        console.log('click');
        
        $.ajax({
            method: 'get',
            url: red_vars.rest_url + '/wp/v2/posts?filter[posts_per_page]=1&filter[orderby]=rand',
            
        }).done(function (data) {
            console.log(data);
            $('.main-quote').css('display', 'none');
            $('.author-main-quote').css('display', 'none');
            quoteContainer.append(`<h1 class='main-quote'>${data[0].content.rendered}</h1>`)
            quoteContainer.append(`<h2 class='author-main-quote'>-- ${data[0].title.rendered}</h2>`)

        });
    });
})(jQuery);