function test(){
    $.ajax({
        url: "/Subviews/test",
        type: "get",
        data: {},
        success: function(data){
            $("body").append(data);
            $("body").addClass("fade");
            
        }
    })
}