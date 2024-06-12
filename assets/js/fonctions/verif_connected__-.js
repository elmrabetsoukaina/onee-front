const verifConnected = () =>{
    getcookie(is_connected)
    let isAuth = false;
    if(getcookie(_i_cookieDeConnexion)){
        isAuth = true;
    }

  //  if(must){
        // auth requise
        if(!isAuth){
            deconnectNow()
           return;
        }else{
            // deja auth 
            if(isAuth){
            window.location.replace(_i_homePage);
            return; 
            }
        }
}