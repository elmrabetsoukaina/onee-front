function getCookie(name) {
    // Récupère tous les cookies sous forme de chaîne de caractères
    const cookies = document.cookie;
    
    // Sépare les cookies en un tableau de cookies individuels
    const cookiesArray = cookies.split(';');
    //console.log(cookiesArray)
    // Parcourt chaque cookie pour trouver celui avec le nom spécifié
    for (let i = 0; i < cookiesArray.length; i++) {
        // Supprime les espaces avant et après chaque cookie
        const cookie = cookiesArray[i].trim();
        //console.log(cookie)
        // Vérifie si le cookie actuel commence par le nom du cookie recherché
        if (cookie.startsWith(name)) {
            // Retourne vrai si le cookie est trouvé
            return true;
            //console.log(name)
        }
    }
    
    // Retourne faux si le cookie n'est pas trouvé
    //return false;
}

