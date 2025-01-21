const BOX = $('form.change-image-box')
const INPUT = BOX.find('.change-image-label input')

const PREVIEW_BOX = BOX.find('.preview')
const PLACEHOLDER = PREVIEW_BOX.find('.placeholder-box')
const IMAGE = PREVIEW_BOX.find('img')

const VALID_IMAGE_TYPES = ['image/gif', 'image/jpeg', 'image/png']

INPUT.on('input', function(e){
    let file = $(this)[0].files[0]

    let file_type = file['type']
    if(! VALID_IMAGE_TYPES.includes(file_type)){
        e.preventDefault
        alert('Загружаемый файл не является изображением')
        $(this)[0].files = []
        $(this).val()
        return
    }

    let url = URL.createObjectURL(file)
    IMAGE.attr('src', url)
    PLACEHOLDER.remove()
})
