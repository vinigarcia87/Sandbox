<style>
li{border: 1px solid; padding: 1em; display: inline-block}
</style>

<input type="file" id="fileElem" multiple accept="image/*">

<div id="fileList">
  <p id="fileName">No files selected!</p>
</div>

<script>
window.URL = window.URL || window.webkitURL;

var fileElem = document.getElementById("fileElem"),
    fileName = document.getElementById("fileName"),
    fileList = document.getElementById("fileList");

var setCookie = function (c_name,value,exdays){
  var exdate=new Date();
  exdate.setDate(exdate.getDate() + exdays);
  var c_value=escape(value) + 
    ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
  expires =+ exdate.toUTCString();
  document.cookie=c_name + "=" + c_value;
}

var getCookie = function (c_name){
  var i,x,y,ARRcookies=document.cookie.split(";");
  for (i=0;i<ARRcookies.length;i++){
    x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
    y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
    x=x.replace(/^\s+|\s+$/g,"");
    if (x==c_name){
      return unescape(y);
    }
  }
}    
console.log('A: '+getCookie('img0'));
    
var appendImg = function(f, el){
  var img = document.createElement("img");
      img.src = window.URL.createObjectURL(f);
        
      img.height = 60;
      img.onload = function(e) {
        window.URL.revokeObjectURL(this.src);
      }
        
      el.appendChild(img);
}
if(getCookie('img0')){
  appendImg(getCookie('img0'), fileList)
}
    
var handleFiles = function (files) {
  if (!files.length) {
    fileName.innerHTML = "No files selected!";
  } else {
    fileName.innerHTML = "";
    var list = document.createElement("ul");
    for (var i = 0; i < files.length; i++) {
        console.log('B: '+files[i]); 
      setCookie('img'+i , files[i] , 365); 
      console.log('C: '+getCookie('img'+i)); 
        
      var li = document.createElement("li");
      list.appendChild(li);
      
      appendImg(files[i], li);
      
      var info = document.createElement("span");
      info.innerHTML = "<br>" + files[i].name + "<br>" + 
                       files[i].size + " bytes";
      li.appendChild(info);
    }
    fileList.appendChild(list);
  }
}
    
fileElem.addEventListener("change", function (e) { 
  handleFiles(this.files);
}, false);
</script>




