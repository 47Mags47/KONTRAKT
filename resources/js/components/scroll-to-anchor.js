$('a').each(function(){
    if($(this).attr('href')[0] == '#'){
        $(this).on('click', function(e){
            e.preventDefault()
            let item = $($(this).attr('href'))
            let offset = item.offset().top - item.parent().offset().top - item.parent().scrollTop()

            $('section.content').stop().animate({
                scrollTop: offset - 1
            }, 500)
        })
    }
})


