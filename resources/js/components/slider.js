const WRAPPER = $('.slider-box .slidewrapper')
const SLIDE_INTERVAL = 10000

var slideNow = 1;
var slideCount = WRAPPER.find('img').length
var translateWidth = 0

function nextSlide() {
    if (slideNow == slideCount) {
        WRAPPER.css('transform', 'translate(0, 0)')
        slideNow = 1
    } else {
        translateWidth = -WRAPPER.width() * (slideNow)
        WRAPPER.css({
            'transform': 'translate(' + translateWidth + 'px, 0)',
            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
        })
        slideNow++
    }
}

setInterval(nextSlide, SLIDE_INTERVAL);
