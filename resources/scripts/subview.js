function openSubview(){
    $.confirm({
        title: 'Address',
        content: "<form>" +
            "<input type='text' class='form-control' id='address_input' required placeholder=' Address'></br><br>" +
            "<input type='text' class='form-control' id='suite_input' placeholder=' Suite (optional)'>" +
            "</form>",
        theme: 'Modern',
        closeAnimation: 'scale',
        closeIcon: true,
        buttons: {
            change: function() {
                address = $("#address_input").val();
                if(address==="") {
                    $.alert({
                        title: 'Address required!',
                        content: 'Please input your address',
                        type: 'red',
                        typeAnimated: true
                    })
                    return false;
                }
                suite = $("#suite_input").val();
                $.ajax({
                    url: "/Account/address",
                    type: "post",
                    data: {"address":address,"suite":suite},
                    success: function(data){
                        $("#location_text").text(data)
                    }
                })
            }
        }
    });

}