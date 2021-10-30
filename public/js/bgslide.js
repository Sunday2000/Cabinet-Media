$(document).ready(() => {

    let intro = $('#intro')
    let intro_next = $('#intro_next');
    let imgs = ['img/media/1.jpg', 'img/media/2.jpg', 'img/media/3.jpg'];
    let index = 0;
    let tmp_content;
    
    intro.css('background', "linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(0, 200, 205, 0.2)),"+ `url(${imgs[index]})` + "center top no-repeat" ); 
    setInterval(() => {
    
        if(index == (imgs.length - 1))
            index = 0;
        else
            index++;
        intro_next.contents().remove();
        intro_next.css('background', "linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(0, 200, 205, 0.2)),"+ `url(${imgs[index]})`+ "center top no-repeat");
        intro_next.append(intro.find('.first').clone());
        intro.fadeOut("slow", function(){
            $(this).css('background', "linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(0, 200, 205, 0.2)),"+ `url(${imgs[index]})`+ "center top no-repeat")/* .show() */;
            $(this).fadeIn(3000);
        });
    }, 8000); 
});
