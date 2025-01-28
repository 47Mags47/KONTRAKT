import { closeLoadIco, openLoadIco } from "../func/load-ico"

$('.table-box').each(function () {
    const BOX = $(this)
    const OPTIONS_BOX = BOX.find('form.options')
    const TBODY = BOX.find('table tbody')

    const SEARCH_BOX = BOX.find('.options .search')
    const SEARCH_INPUT = SEARCH_BOX.find('input')

    SEARCH_INPUT.on('input', delay(function () { OPTIONS_BOX.trigger('submit') }, 500))

    OPTIONS_BOX.on('submit', function (e) {
        e.preventDefault()

        let ignored = []
        /* Убрать пустые select */
        $(this).find('select').each(function () {
            if ($(this).val() === '0') {
                $(this).prop('disabled', true)
                ignored.push($(this))
            }
        })

        /* Убрать пустые input */
        $(this).find('input').each(function () {
            if ($(this).val() === '') {
                $(this).prop('disabled', true)
                ignored.push($(this))
            }
        })

        /* Загрузить ответ */
        let url = BOX.find('.options').attr('action') ?? location.href
        openLoadIco()

        $.ajax({
            method: 'get',
            url: url,
            data: $(this).serialize(),
            success: function (data) {
                TBODY.html(data)
            },
            complete: function(){
                closeLoadIco()
            }
        })

        /* Восстановить поля */
        ignored.forEach(element => {
            element.prop('disabled', false)
        });
    })

    function delay(fn, ms) {
        let timer = 0
        return function (...args) {
            clearTimeout(timer)
            timer = setTimeout(fn.bind(this, ...args), ms || 0)
        }
    }
})

