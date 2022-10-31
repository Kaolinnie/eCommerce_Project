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