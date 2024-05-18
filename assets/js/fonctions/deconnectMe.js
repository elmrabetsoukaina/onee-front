const deconnectMe = () =>{
    if(confirm("Êtes-vous sûr?")){
        deconnectNow()
    }
}

const deconnectNow = () => {
   /* $.removeCookie(_i_cookieDeConnexion, { path: '/' });
    $.removeCookie(_i_cookieUtilisateur, { path: '/' });
    $.removeCookie(_i_cookieDroits, { path: '/' });*/
    window.location.replace('login');
}

const connectNow = (rep) => {
    var menu = (rep.data.menu ),
        societes  = rep.data.societes

    try {
        $.localStorage(_i_storageMenu,  menu );
        $.localStorage('_DassiSocieties',  societes );
        $.cookie(_i_cookieDeConnexion,  (rep.data.token), {expires: rep.data.duree || 12,  path: '/' });
        $.cookie(_i_cookieUtilisateur, JSON.stringify(rep.data.user) , {expires: rep.data.duree || 12,  path: '/' });
        $.cookie(_i_cookieDroits, JSON.stringify(rep.data.droits) , {expires: rep.data.duree || 12,  path: '/' });
        $.cookie('_DassiMyHolding',  rep.data.holding , {expires: rep.data.duree || 12,  path: '/' });
        $.cookie('_DassiSocietiesVue', JSON.stringify(societes) , {expires: rep.data.duree || 12,  path: '/' });
        window.location.replace( _i_homePage) ; 
       } catch (error) {
         console.log(error)
         notifyMy('Erreur de base de donnée')
       }
}