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
        $("#menunav").toggleClass('open');
    });
    $('.checkout_link').click(function(){
        $("#cartSubview").toggleClass('open');
    });
    $("main").click(function(){
        $('#menunav').removeClass('open');
        $('#cartSubview').removeClass('open');
    });
});

function closeCart() {
    $("#cartSubview").removeClass('open');
}

function addItemToCart(product_id){
    $.ajax({
        url:'/Checkout/addToCart/'+product_id,
        type:'POST',
        data:{},
        success: function(data) {
            $("#productsAdded").empty().append(data);
        }
    });
}

function clearCart() {
    $.confirm({
        title: 'Clear your cart?',
        content: 'Are you sure?',
        theme: 'Modern',
        animation: 'zoom',
        closeAnimation: 'scale',
        closeIcon: true,
        buttons: {
            confirm: function () {
                $.ajax({
                    url:'/Checkout/clearCart',
                    type:'get',
                    data:{},
                    success: function(data) {
                        $("#productsAdded").empty();
                    }
                });
            },
            cancel: function () {}
        }
    });
}
function removeFromCart(product_id) {
    $.confirm({
        title: 'Remove from cart?',
        content: 'Are you sure?',
        theme: 'Modern',
        animation: 'zoom',
        closeAnimation: 'scale',
        closeIcon: true,
        buttons: {
            confirm: function () {
                $.ajax({
                    url:'/Checkout/removeFromCart/'+product_id,
                    type:'post',
                    data:{},
                    success: function(data) {
                        $("#productsAdded").empty().append(data);
                    }
                });
            },
            cancel: function () {}
        }
    });

}
function removeOne(product_id) {
    if($("#quantityOfProduct"+product_id).text()==="1") {
        removeFromCart(product_id);
    } else {
        $.ajax({
            url:'/Checkout/removeOne/'+product_id,
            type:'post',
            data:{},
            success: function(data) {
                $("#productsAdded").empty().append(data);
            }
        });
    }
}
function addOne(product_id) {
    $.ajax({
        url:'/Checkout/addOne/'+product_id,
        type:'post',
        data:{},
        success: function(data) {
            $("#productsAdded").empty().append(data);
        }
    });
}

function redirectToStore(page_id){
    $.ajax({
        url:'/Checkout/getStore',
        type:'get',
        data: {},
        success: function(data) {
            if(data==="null") {
                location.href="/Company/Page/"+page_id;
            } else if(parseInt(page_id)===parseInt(data)) {
                location.href="/Company/Page/"+page_id;
            } else {
                $.ajax({
                    url:'/Company/getPageName/'+data,
                    type:'get',
                    data: {},
                    success: function(storeName) {
                        $.confirm({
                            title:'Continue?',
                            content: 'You already have a transaction going on with '+storeName+'.<br>Clear your cart and start over?',
                            closeIcon: true,
                            theme:'Modern',
                            buttons: {
                                confirm: function() {
                                    location.href='/Company/Page/'+parseInt(page_id);
                                },
                                cancel: function(){}
                            }
                        })
                    }
                })
            }
        }
    })
}

function confirmCheckout() {
    $.confirm({
        title: 'Checkout',
        content: 'Are you ready to checkout?',
        theme:'Modern',
        buttons: {
            confirm: function(){
                location.href="/Checkout/checkout"
            },
            cancel: function(){}
        }
    })
}



//background
$(document).ready(function() {

    var html = '';
    for (var i = 1; i <= 50; i ++) {
        html += '<div class="shape-container--'+i+' shape-animation"><div class="random-shape"></div></div>';
    }

    document.querySelector('.shape').innerHTML += html;

    var $allShapes = $("[class*='shape-container--']");
});


