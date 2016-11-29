$(function() {
    // IPad/IPhone
    var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
        ua = navigator.userAgent,

        gestureStart = function() {
            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
        },

        scaleFix = function() {
            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                document.addEventListener("gesturestart", gestureStart, false);
            }
        };

    scaleFix();
    // Menu Android
    if (window.orientation != undefined) {
        var regM = /ipod|ipad|iphone/gi,
            result = ua.match(regM)
        if (!result) {
            $('.sf-menu li').each(function() {
                if ($(">ul", this)[0]) {
                    $(">a", this).toggle(
                        function() {
                            return false;
                        },
                        function() {
                            window.location.href = $(this).attr("href");
                        }
                    );
                }
            })
        }
    }
});
var ua = navigator.userAgent.toLocaleLowerCase(),
    regV = /ipod|ipad|iphone/gi,
    result = ua.match(regV),
    userScale = "";
if (!result) {
    userScale = ",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">')

var currentYear = (new Date).getFullYear();
$(document).ready(function() {
    $("#copyright-year").text((new Date).getFullYear());

    var contactForm = $('#contactForm');
    if (contactForm && contactForm.length > 0) {
        contactForm.submit(function(event) {
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function() {
                    $('.overlay').show();
                    $('body').addClass("modal-open");
                    $('.notification').hide();
                    $('.notification').removeClass('error');
                }
            }).done(function(data, textStatus, jqXHR) {
                $('.overlay').hide();
                $('body').removeClass("modal-open");
                grecaptcha.reset();
                if (jqXHR.status === 200 && jqXHR.responseJSON && jqXHR.responseJSON.success) {
                    $(":input").val('');
                    $(".notification").text('Your e-mail has been successfully sent, we will get back to you shortly.').fadeIn();
                } else {
                    $(".notification").addClass('error');
                    if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                        $(".notification").text(jqXHR.responseJSON.message).fadeIn();
                    } else {
                        $(".notification").text('We were unable to send your e-mail, please try again later.').fadeIn();
                    }
                }
            }).fail(function(xhr, status, error) {
                $('.overlay').hide();
                $('body').removeClass("modal-open");
                $(".notification").addClass('error');
                $(".notification").text('We were unable to send your e-mail, please try again later.').fadeIn();
                console.log("Status: " + status + " Error: " + error);
                console.log(xhr);
            });
            event.preventDefault();
        });
    }
});

$(function() {
    $('.sf-menu').superfish({
        autoArrows: true
    })
})
