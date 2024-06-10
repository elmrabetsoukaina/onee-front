function setCookie(name, value, attributes = {}) {
  attributes = {
      path: '/',  // Valeur par défaut
      ...attributes  // Fusionner avec les attributs passés
  };

  if (typeof attributes.expires === 'number') {
      const days = attributes.expires;
      const t = attributes.expires = new Date();
      t.setTime(+t + days * 864e+5);  // Convertir en millisecondes
  }

  let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

  for (const [key, attributeValue] of Object.entries(attributes)) {
      updatedCookie += "; " + key;
      if (attributeValue !== true) {
          updatedCookie += "=" + attributeValue;
      }
  }

  document.cookie = updatedCookie;
}


function deleteCookie(name) {
    setCookie(name, "", {
        expires: -1
    });
}