const BOX = $('form.change-image-box')
const INPUT = BOX.find('.change-image-label input')
const PREVIEW = BOX.find('.preview img')

INPUT.on('change', function(){
    let file = $(this)[0].files[0]
    let url = URL.createObjectURL(file)

    PREVIEW.attr('src', url)
})
