
$(window).bind('unload', function(){
    $.ajax({
        type: 'get',
        async: false,
        url: '../logout.php'
    });
});

