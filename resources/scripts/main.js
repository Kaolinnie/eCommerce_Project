const locale = getCookie('lang');
const translations = {
    // English translations
    "en": {
        "error": "Error",
        "continue": "Continue",
        "transaction": "You already have a transaction going on with ",
        "clearCart": "Clear your cart and start over?",
        "addressRequired":"Address required!",
        "inputAddress":"Please input your address",
        "clearYourCart":"Clear your cart",
        "address":"Address",
        "optional":"optional",
        "areyousure":"Are you sure?",
        "removeFromCart":'Remove from cart?',
        "checkout":"Checkout",
        "readyToCheckout":"Are you ready to checkout?"
    },
    // French translations
    "fr": {
        "error": "Erreur",
        "continue": "Continuer",
        "transaction": "Vous avez déjà une transaction avec ",
        "clearCart": "Vider le panier et recommencer?",
        "addressRequired":"Adresse requise!",
        "inputAddress":"Veuillez entrer votre adresse",
        "clearYourCart":"Vider le panier",
        "address":"Adresse",
        "optional":"optionnel",
        "areyousure":"Êtes-vous certain?",
        "removeFromCart":'Enlever du panier?',
        "checkout":"Payer",
        "readyToCheckout":"Êtes-vous prêt à payer?"

    }
}
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
    let error_message = $("#errorMessage").val();
    if(error_message!=null) {
        $.confirm({
            title:translations[locale]["error"],
            content: error_message,
            theme: 'Modern',
            closeIcon: function() {
                location.href='/'
            },
            buttons: {
                ok: function() {
                    location.href='/'
                }
            }
        })
    }
});
function openSubview(){
    $.confirm({
        title: 'Address',
        content: "<form>" +
            "<input type='text' class='form-control' id='address_input' required placeholder="+translations[locale]["address"]+"></br><br>" +
            "<input type='text' class='form-control' id='suite_input' placeholder=' Suite ("+translations[locale]["optional"]+")'>" +
            "</form>",
        theme: 'Modern',
        closeAnimation: 'scale',
        closeIcon: true,
        buttons: {
            change: function() {
                address = $("#address_input").val();
                if(address==="") {
                    $.alert({
                        title: translations[locale]["addressRequired"],
                        content: translations[locale]["inputAddress"],
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
        title: translations[locale]["clearYourCart"]+"?",
        content: translations[locale]["areyousure"],
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
        title: translations[locale]["removeFromCart"],
        content: translations[locale]["areyousure"],
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
                            title:translations[locale]["continue"]+"?",
                            content: translations[locale]["transaction"]+storeName+' .<br>'+translations[locale]["clearCart"],
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
        title: translations[locale]["checkout"],
        content: translations[locale]["readyToCheckout"],
        theme:'Modern',
        buttons: {
            confirm: function(){
                location.href="/Checkout/checkout"
            },
            cancel: function(){}
        }
    })
}



//background (from codepen.io)
$(document).ready(function() {

    var html = '';
    for (var i = 1; i <= 50; i ++) {
        html += '<div class="shape-container--'+i+' shape-animation"><div class="random-shape"></div></div>';
    }

    document.querySelector('.shape').innerHTML += html;

    var $allShapes = $("[class*='shape-container--']");
});


//cookies (from w3schools.com)
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}