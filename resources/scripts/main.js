$.ajax({
    type:'GET',
    url:'/Page/getAllPages',
    data: {},
    success: function(data) {
        $(".brief_pages").append(data);
    }
});