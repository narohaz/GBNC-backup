
        
(function ($, Drupal) {

    $(function () {
        let rightnews=$(".toptags");
        $.each(rightnews, function (indexInArray, valueOfElement) { 
             $(this).text(indexInArray + 1);
        });
    });
}(jQuery, Drupal));;
