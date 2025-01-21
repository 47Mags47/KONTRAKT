const BOX = $('.list-adder-box')
const ADD_INPUT = BOX.find('.add-box input')
const ADD_BUTTON = BOX.find('.add-box button')
const LIST = BOX.find('.item-list')
const EXAMPLE_ITEM = BOX.find('.example-item')

ADD_BUTTON.on('click', function(){
    if (ADD_INPUT.val() == '') return

    let item = EXAMPLE_ITEM.clone()
    item.removeClass('example-item')
    item.find('span').text(ADD_INPUT.val())
    item.find('input').prop('disabled', false)
    item.find('input').val(ADD_INPUT.val())
    item.find('svg').on('click', setItemEvent)
    LIST.append(item)
    setName()

    ADD_INPUT.val('')
})

function setItemEvent(){
    $(this).parent().remove()
    setName()
}

function setName(){
    let name = LIST.find('li.example-item input').attr('name')
    LIST.find('li:not(.example-item) input').each(function(i, item){
        $(this).attr('name', `${name}[${i}]`)
    })
}

LIST.find('li:not(.example-item) svg').each(function(){
    $(this).on('click', setItemEvent)
})
