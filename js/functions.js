// AJAX Page Load
jQuery(document).ready(function($) {
  var ppp = 1; // Post per page
  var pageNumber = 1;


function load_posts(){
  pageNumber++;
    var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
    $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_posts.ajaxurl,
        data: str,
        success: function(data){
            var $data = $(data);
            if($data.length){
                $("#ajax-posts").append($data);
                $("#more_posts").addClass('posts_loading');
            } else{
                $("#more_posts").removeClass('posts_loading').addClass('no_more_posts');
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }

    });
    return false;
  }

  $("#more_posts").on("click",function(){ // When btn is pressed.
      load_posts();
  });
});