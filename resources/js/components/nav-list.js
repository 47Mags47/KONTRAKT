const BOX = $('.nav-list-box')

let ids = []
BOX.find('li:not(.disabled) a').each(function () {
    let id = $(this).attr('href')
    let element = $(id)

    if (id === '' || $(id).length === 0) {
        return
    }

    new Waypoint({
        element: element[0],
        context: $('section.content')[0],
        offset: 0,
        handler: function () {
            BOX.find('li.active').removeClass('active')
            BOX.find(`li a[href='#${this.element.id}']`).parent().addClass('active')
        }
    })

})
