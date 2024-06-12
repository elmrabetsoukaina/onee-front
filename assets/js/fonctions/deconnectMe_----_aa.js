const deconnectMe = () =>{
    if(confirm("Êtes-vous sûr?")){
        deconnectNow()
    }
}

const deconnectNow = () => {
    deleteCookie(_i_cookieDeConnexion);
    deleteCookie(_i_cookieUtilisateur);
    //$.removeCookie(_i_cookieDeConnexion, { path: '/' });
    //$.removeCookie(_i_cookieUtilisateur, { path: '/' });
    //$.localStorage(_i_storageMenu, null);
    window.location.replace(_i_loginPage);
}

const connectNow = (rep) => {
    //var menu = (rep.data.menu )

    try {
       // $.localStorage(_i_storageMenu,  menu );
        setCookie(_i_cookieDeConnexion, rep.data.token, {expires: rep.data.duree || 12 , path: '/',});
        setCookie(_i_cookieUtilisateur, rep.data.user, {expires: rep.data.duree || 12 , path: '/',})
        window.location.replace(_i_homePage) ; 
       } catch (error) {
         console.log(error)
         notifyMe('Erreur de base de donnée')
       }
}