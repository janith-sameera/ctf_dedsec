window.onload = function() {

    var thumbsList = document.getElementById("thumbsList");
    var allLIs = thumbsList.getElementsByTagName("li");
    var allImages = thumbsList.getElementsByTagName("img");

    var TheLightBox = document.getElementById("lightBox");
    var ThelightBoxImage = document.getElementById("lightBoxImage");

    var prevImg = document.getElementById("prevImg");
    var nextImg = document.getElementById("nextImg");

    var numberOfImages = allLIs.length;
    var counter = 0;
    var currentImage = counter;

    function hasClass(el, className) {
        if (el.classList)
            return el.classList.contains(className)
        else
            return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'))
    }

    function addClass(el, className) {
        if (el.classList)
            el.classList.add(className)
        else if (!hasClass(el, className)) el.className += " " + className
    }

    function removeClass(el, className) {
        if (el.classList)
            el.classList.remove(className)
        else if (hasClass(el, className)) {
            var reg = new RegExp('(\\s|^)' + className + '(\\s|$)')
            el.className=el.className.replace(reg, ' ')
        }
    }

    ThelightBoxImage.setAttribute("src", (allImages[0].getAttribute("src")));

    function loadImageInLightBox(URL, callback){
        var url = URL;
        ThelightBoxImage.setAttribute("src", url);
        if(typeof callback == "function"){
            callback();
        }
    }

    function loadLightBox(){
        addClass(TheLightBox, "lightBox-active");
        addClass(ThelightBoxImage, "active-image");
    }

    function unloadLightBox(){
        removeClass(TheLightBox, "lightBox-active");
        removeClass(ThelightBoxImage, "active-image");
    }

    function prevImage(){
        if(counter <= 0){
            counter = numberOfImages;
        }
        counter--;
        loadImageInLightBox(allImages[counter].getAttribute("src"));
    }

    function nextImage(){
        counter++;
        if(counter == numberOfImages){
            counter = 0;
        }
        loadImageInLightBox(allImages[counter].getAttribute("src"));
    }

    document.getElementById("lightBox").addEventListener("click", function(e){
        switch (e.target.id) {
            case "prevImg":
                prevImage();
                break;
            case "nextImg":
                nextImage();
                break;
            case "lightBoxImage":
                break;
            default:
                unloadLightBox();
        }

    })

    for (var i=0; i < allImages.length; i++){
        allImages[i].setAttribute("id", "thumb_" + i);
        allImages[i].addEventListener("click",
            function (e){
                var theIndex =  e.target.id.match(/\d+/)[0];
                counter = theIndex;
                loadImageInLightBox(e.target.getAttribute("src"), function(){
                    loadLightBox(e.target.getAttribute("src"));
                });
            }
        );
    }

}