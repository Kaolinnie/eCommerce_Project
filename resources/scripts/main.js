$.ajax({
    type:'GET',
    url:'/Page/getAllPages',
    data: {},
    success: function(data) {
        $(".brief_pages").append(data);
    }
});

function startOrderWithAddress() {
    alert("address is: "+$("#address_input").val());
}

$(document).ready(function(){
    $('.hamburger').click(function(){
        $(this).toggleClass('open');
        $("#menunav").toggleClass('open');
    });
    $("main").click(function(){
        $('.hamburger').removeClass('open');
        $('#menunav').removeClass('open');
    });
});


