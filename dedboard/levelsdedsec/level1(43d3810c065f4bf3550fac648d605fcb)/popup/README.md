# FullScreen  Popup
![](https://travis-ci.org/nurislamov/jquery-fullscreen-popup.svg)

#### How to use
Include the script to your document:

    <script src="../dist/jquery.fullscreen-popup.js"></script>
    
Set markup like this:

    <a class="open-popup" href="#popup">Open popup</a>
    <button class="open-popup" data-popup="#popup2">Open popup 2</button>
    <div id="popup" style="display: none; width: 640px">...</div>
    <div id="popup2" style="display: none; width: 640px">...</div>
    
And init plugin:

    $(".open-popup").fullScreenPopup();
    
#### With options:

    $(".open-popup").fullScreenPopup({
        bgColor: "#fff",
	    inlineStyles: true,
	    lockDocumentScroll: true,
	    mainWrapperClass: "fsp-wrapper",
	    contentWrapperClass: "fsp-content",
	    closePopupClass: "fsp-close",
	    animationSpeed: 200, //ms
	});
