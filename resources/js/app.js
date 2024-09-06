import './bootstrap';
import jquery from 'jquery';
window.$ = jquery

$(window).on('load', function () {
    /****** */
    let slide_time = 3
    $('.message-box .background').css('transition', `${slide_time}s`)
    $('.message-box .background').css('width', 0)
    setTimeout(() => {
        $('.message-box').css('top', '-100%')
    }, slide_time * 1000);
    /* */

    /****** */
    console.log($('label.logo-circle input[name="logo"]'));

    $('label.logo-circle input[name="logo"]').on('change', function () {
        let file = $(this)[0].files[0]
        let link = URL.createObjectURL(file)

        $('label.logo-circle .preview img').attr('src', link)
        $('label.logo-circle .preview img').one('load', function () {
            URL.revokeObjectURL(link)
        })
    })
    /* */
})
