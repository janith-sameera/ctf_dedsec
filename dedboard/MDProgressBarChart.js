var data;
var requestObj;
var startTime;

document.addEventListener('DOMContentLoaded', loadJSON, false);

function createRectangle(index, xCoord, yCoord, width, height, id) {
	var newRect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
	newRect.setAttributeNS(null, "id", "rect_" + id);
	newRect.setAttributeNS(null, "width", width);
	newRect.setAttributeNS(null, "height", height);
	newRect.setAttributeNS(null, "x", xCoord);
	newRect.setAttributeNS(null, "y", yCoord);
	newRect.setAttributeNS(null, "fill", data.barColors[index%data.barColors.length]);
	return newRect;
}

function createLabel(index, xCoord, yCoord, id) {
	var newText = document.createElementNS("http://www.w3.org/2000/svg", "text");
	newText.textContent = data.labelText[index] + " (" + data.values[index]+ ")";
	newText.setAttributeNS(null, "id", "label_" + id);
	newText.setAttributeNS(null, "fill", data.labelColors[index%data.labelColors.length]);
	newText.setAttributeNS(null, "font-family", data.labelFont);
	newText.setAttributeNS(null, "x", xCoord);
	newText.setAttributeNS(null, "y", yCoord + data.barHeight/2);
	newText.style.visibility = "hidden";
	return newText;
}

function initStopTab() {
	var stopTab = [];
	for(var i=0; i<data.values.length; ++i) {
		stopTab.push(0);
	}
	return stopTab;
}

function hasToStop(tab) {
	var sum = 0;
	for(var i=0; i<data.values.length; ++i) {
		sum = sum + tab[i]
	}
	return data.values.length == sum;
} 

function displayLabels() {
	for(var i=0; i<data.labelsObjects.length; ++i) {
		data.labelsObjects[i].style.visibility = "visible";
	}
}

function constructBars() {
	var rect;
	var label;
	var mainSVGObj = document.getElementById("mainSVG");
	
	for(var i=0; i<data.values.length; ++i) {
		rect = createRectangle(i,0,0+(data.barHeight+data.marginBetweenBars)*i,10,data.barHeight,"rect"+i);
		label = createLabel(i,data.values[i] + data.labelPaddingLeft,0+(data.barHeight+data.marginBetweenBars)*i,"label"+i);
		
		data.SVGBars.push(rect);
		data.labelsObjects.push(label);
		
		mainSVGObj.appendChild(rect);
		mainSVGObj.appendChild(label);
		
		bbox = label.getBBox();
		label.setAttributeNS(null, "y", bbox.y + bbox.height);	
	}
	extend();
}

function loadJSON() {
	requestObj = new XMLHttpRequest();
	requestObj.addEventListener("load", loadComplete, null);
	requestObj.open("GET", "data.json", true);
	requestObj.send(null); 
}

function loadComplete() {
	data = JSON.parse(requestObj.responseText).data;
	data.barHeight = (data.height - (data.values.length - 1) * data.marginBetweenBars) / data.values.length;
	data.SVGBars = [];
	data.labelsObjects = [];
	startTime = new Date().getTime();
	constructBars();
}


function extend() {
    var stopArray;
    batch();

    function batch() {
		stopArray = initStopTab();
		for(var i = 0; i<data.SVGBars.length; ++i) {
			var newWidth = parseInt(data.SVGBars[i].getAttributeNS(null, "width"));
			newWidth = newWidth + 2;
			
			if(newWidth > data.values[i]) {
				stop[i] = 1;
			}
			else {
				data.SVGBars[i].setAttributeNS(null, "width", newWidth);
			}
		}

		if(hasToStop(stop)) {
			displayLabels();
			var stopTime = new Date().getTime();
			console.log("Execution time : " + (stopTime-startTime) + "ms");
			return;
		}
			
        setTimeout(batch, 0);
    }
}  
