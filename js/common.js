/*LOADS LINKS IN A BLANK WINDOW*/
function externalLinks() { 
 if (!document.getElementsByTagName) return; 
 var anchors = document.getElementsByTagName("a"); 
 for (var n=0; n<anchors.length; n++) { 
   var anchor = anchors[n]; 
   if (anchor.getAttribute("href") && 
       anchor.getAttribute("rel") == "external") 
     anchor.target = "_blank"; 
 } 
} 
window.onload = externalLinks;
/*LOADS LINKS IN A BLANK WINDOW*/