$('a').each(function(){
    if($(this).attr('href')[0] == '#'){
        $(this).on('click', function(e){
            e.preventDefault()
            let item = $($(this).attr('href'))
            let offset = item.parent().scrollTop() + item.position().top - item.parent().position().top

            $('section.content').stop().animate({
                scrollTop: offset
            }, 500)
        })
    }
})


