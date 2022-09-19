$('input[type="checkbox"]').on('click',function(){
    var selected = $(this).parent().parent().parent();    $(selected).toggleClass('highlight');
    });