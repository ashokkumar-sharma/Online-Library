$(document).ready(function () {
    setTimeout(function () {
        $('body').addClass('loaded');
        }, 3000);

    setTimeout(function(){
        $('body').addClass('loadeds');
    }, 3010);
    
    setTimeout(function(){
        $('#loader-wrapper').hide();
    }, 4010);
    
});