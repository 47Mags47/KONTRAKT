const BOX = $('.nav-list-box')

let ids = []
BOX.find('li:not(.disabled) a').each(function(){
    let id = $(this).attr('href')

    if (id != '')
        new Waypoint({
            element: $(id)[0],
            context: $('section.content')[0],
            offset: -1,
            handler: function(){
                BOX.find('li.active').removeClass('active')
                BOX.find(`li a[href='#${this.element.id}']`).parent().addClass('active')
            }
        })


})
