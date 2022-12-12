function openSubview(){
    $.ajax({
        url: "/Subviews/addAddressView",
        type: "get",
        data: {},
        success: function(data){
            $("#subviews").removeClass("hideSubview");
            $("#subviews").append(data);
            $("#subviews").addClass("open");
            $("#content").addClass("noevents");
        }
    })
}

function closeSubview(){
    $("#subviews").addClass("hideSubview");
    $("#subviews").children().remove();
    $("#content").removeClass("noevents");
}

function openCartSubview(){
    $("#subviewCart").removeClass("hideSubview");
    $("#subviewCart").addClass("open");
    $("#content").addClass("noevents");  
}

function closeCartSubview(){
    $("#subviewCart").addClass("hideSubview");
    $("#subviewCart").children().remove();
    $("#content").removeClass("noevents");
}

function updateAddress() {
    address = $("#address_input").val()
    suite = $("#suite_input").val()
    $.ajax({
        url: "/Account/addAddress",
        type: "post",
        data: {"address":address,"suite":suite},
        success: function(data){
            $("#location_text").text(data);
        }
    })
}