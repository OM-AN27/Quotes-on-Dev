
(function ($) {
    let quoteContainer = $('.quotes-container');
    
    $('.main-button').on('click', function (event) {
        event.preventDefault();
        
        $.ajax({
            method: 'get',
            url: red_vars.rest_url + '/wp/v2/posts?filter[posts_per_page]=1&filter[orderby]=rand',
            
        }).done(function (data) {
            console.log(data);
            $('.main-quote').css('display', 'none');
            $('.author-main-quote').css('display', 'none');
            quoteContainer.append(`<h1 class='main-quote'>${data[0].content.rendered}</h1> <h2 class='author-main-quote'>-- ${data[0].title.rendered}, </h2>`);

        }).fail(function(){
            alert('Fail to load, try again later.');
        })
    });
})(jQuery);

$('.wpcf7-form').on('submit', function (event) {
 event.preventDefault();
 $.ajax({
     url:red_vars.rest_url + 'wp/v2/posts',
     type: 'POST',
     data : {
       'title' : $('input[name="your-name"]').val() ,
       'content' : $('input[name="your-quote"]').val() ,
       '_qod_quote_source' : $('input[name="your-subject"]').val() ,
       '_qod_quote_source_url' : $('input[name="quote-source-url"]').val() ,
    
     },
     beforeSend: function(xhr) {
       xhr.setRequestHeader("X-WP-Nonce", red_vars.wpapi_nonce);
     }
 }).done(function(data) {
     alert("Thanks for your contribution!");
 }).fail(function(data) {
     alert("Uh Oh, there was an error try again later!");
 })
});