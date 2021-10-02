
$(document).ready(function(){
    let owl = $(".owl-carousel");
    owl.owlCarousel({
        items:3,
        nav:true,
        dots:false,
        loop:true,
        responsive:{
            0:{
                items: 1,
                margin:10,
            },
            768:{
                items: 3,
                margin:30,
            },
            992:{
                items: 4,
                margin:30,
            }
        },
        autoplaySpeed: 2000,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });
    spoiler();
});

function spoiler(){
    spoiler = document.querySelectorAll('.spoiler');
    for (let i = 0; i <spoiler.length; i++){
        moreLess(spoiler[i]);
    }
}

function moreLess(spoiler){
    let [newContent, nextContent] = changeText(spoiler);
    let spoilerContent = spoiler_content(spoiler, nextContent);
    spoiler.innerHTML = newContent;
    if(nextContent.length > 0){
        createSpoilerLink(spoiler);
    }
    spoiler.appendChild(spoilerContent);
}

function createSpoilerLink(parent){
    link = createLink("Lire plus ");
    parent.appendChild(link);

    link.addEventListener('click', function(e) {
        e.preventDefault();
        span = this.nextElementSibling;
        parent.removeChild(this);
        span.className = span.className + ' visible';
        parent.querySelector('a.spoiler-content').className = 'spoiler-content visible';
        parent.innerHTML = parent.innerHTML.replace('...', '');
    }, false);
}

function changeText(spoiler){
    let textContent = spoiler.innerHTML.trim();
    let newContent;
    let nextContent = '';

    if (textContent.length >= 100){
        newContent = textContent.substring(0, 100);
        if (textContent.length > 100){
            newContent = newContent + "...";
            nextContent = textContent.substring(100, textContent.length);
        }
    }else{
        newContent = textContent;
    }
    return [newContent, nextContent];
}

function spoiler_content(parent, text){
    if(!parent.querySelector('span.spoiler-content')){

        let spoilerContent = document.createElement('span');
    
        spoilerContent.className ="spoiler-content";
        spoilerContent.innerHTML = text;
        for (let j = 1; j < parent.children.length; j++){
            spoilerContent.appendChild(parent.children[j]);
        }
        return spoilerContent;
    }
    return parent.querySelector('span.spoiler-content');
}

function reduce(clicked){
    window.event.preventDefault();
    parent = clicked.parentElement;
    paragraph = parent.parentElement;
    parent.className= 'spoiler-content';
    moreLess(paragraph);
}

function createLink(text){
    let link = document.createElement('a');
    let font_awesome = document.createElement('i');
    let linkText = document.createTextNode(text);

    link.setAttribute('href', '#');
    link.className = 'btn btn-more i-right';
    font_awesome.className = 'fa fa-angle-right';
    link.appendChild(linkText);
    link.appendChild(font_awesome);
    return link;
}