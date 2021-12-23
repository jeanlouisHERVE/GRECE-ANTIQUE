const navbar = {
  init: function()
  {
      console.log('navbar init !')
      const searchInput = document.querySelector('.form--input')
      const searchButton = document.querySelector('.form--button')
      searchButton.addEventListener('click', navbar.handlesearchSubmit)

  },

  handlesearchSubmit: function(event)
  {
    
    
    event.preventDefault();
    console.log('click search !')
    
    const searchInput = document.querySelector('.form--input')
    searchInput.value = ""
    console.log(searchInput.value)

    

    
    const config = {
        method: 'GET',
        mode: 'cors',
        cache: 'no-cache'
    };
        
        // On déclenche la requête HTTP (via le moteur sous-jacent Ajax)
    fetch(app.bddRoute, config) 
          .then(function(response) {
            return response.json();
          })
        console.log(response.json())
  },

}