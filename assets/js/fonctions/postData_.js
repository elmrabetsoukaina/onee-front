async function postData(url, formDatas = [], ) {

    let formData = new FormData()
    formDatas.map(result =>{
        formData.append(result.key, result.value)
    })
    

    //$(`#${btnLoad}`).attr('disabled', true);
		const response = await fetch(
			globalAPIURL + url, {
				method: 'POST',
				headers: {
					'Accept': 'application/json',
					'Content-Type': 'application/json',
					//'auth': $.cookie(_i_cookieDeConnexion),
				},
				body: JSON.stringify(Object.fromEntries(formData.entries()))
			}
		);
		var data = await response.text(); 
		try {
			
			data = JSON.parse(data)// Extracting data as a JSON Object from the response
			//$(`#${btnLoad}`).attr('disabled', false);
			!data.result && notifyMe(data.infos); 
			console.log(data)
			
			/*if(!data.is_auth)  {
				alert('Session expirée, Veuillez vous reconnecter')
				deconnectNow()
			}*/
		} catch (error) {
			console.log(data)
			console.log(error)
			notifyMe("Une erreur est survenue");
		}
		//if(globalLoad)
		//loader('end')
		
	    return data;
}