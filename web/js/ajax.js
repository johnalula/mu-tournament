var xmlHttp;
var requestType = "";
function createXMLHttpRequest() {
if (window.ActiveXObject) {
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
else if (window.XMLHttpRequest) {
xmlHttp = new XMLHttpRequest();
}
}
function doHeadRequest(request, url) {
requestType = request;
createXMLHttpRequest();
xmlHttp.onreadystatechange = handleStateChange;
xmlHttp.open("HEAD", url, true);
xmlHttp.send(null);
}
function handleStateChange() {
if(xmlHttp.readyState == 4) {
if(requestType == "allResponseHeaders") {
getAllResponseHeaders();
}
else if(requestType == "lastModified") {
getLastModified();
}
else if(requestType == "isResourceAvailable") {
getIsResourceAvailable();
}
}
}
function getAllResponseHeaders() {
alert(xmlHttp.getAllResponseHeaders());
}
function getLastModified() {
alert("Last Modified: " + xmlHttp.getResponseHeader("Last-Modified"));
}
