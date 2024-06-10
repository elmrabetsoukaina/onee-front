/*function deleteCookie(name) {
    setCookie(name, "", {
        expires : -1
    })
}
*/
function deleteCookie(name)  
{  
    document.cookie= name+";max-age=0";   
   // alert("Cookie1 is deleted");  
}  