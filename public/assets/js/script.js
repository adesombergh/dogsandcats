$(document).ready(function(){
    $('#content').fullpage({
        scrollingSpeed: 1000,
        anchors: ['section1','section2','section3','section4']
    });

    var biggest = 0;
    $('.thumbnail').each(function(){
    	if (biggest < $(this).height() ) {
    		biggest = $(this).height();
    	}
    })
    $('.thumbnail').each(function(){
    	$(this).css('height',biggest);
    })
})
