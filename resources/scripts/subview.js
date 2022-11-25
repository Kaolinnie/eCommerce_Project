function openSubview(){
    $.ajax({
        url: "/Subviews/openSubview",
        type: "get",
        data: {},
        success: function(data){
            $("#subviews").append(data);
            $("#subviews").addClass("open");
            $("#content").addClass("noevents");
            console.log("success");
        }
    })
}

function closeSubview(){
    $("#subviews").children().remove();
    $("#content").removeClass("noevents");
}

function updateAddress() {
    address = $("#address_input").val()
    suite = $("#suite_input").val()
    $.ajax({
        url: "/Account/changeAddress",
        type: "get",
        data: {"address":address,"suite":suite},
        success: function(data){
            $("#location_text").text(data);
        }
    })
}