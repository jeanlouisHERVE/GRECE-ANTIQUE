const navbar = {
  init: function()
  {
      console.log('navbar init !')
      const searchInput = document.querySelector('.nav-item-btn')
      const searchButton = document.querySelector('.form--button')
      
      //lancer le menu déroulant à partir du premier prototype de navbar
      // searchInput.addEventListener('click', navbar.handleFormSubmit)

      //lancer la recherche à partir du deuxième prototype de navbar
      // searchButton.addEventListener('click', navbar.handlesearchSubmit)

  },

  //faire apparaitre un sous-menu en deça de la barre de navigation
  handleFormSubmit: function(evt) {
    evt.preventDefault();

    const parent = document.querySelector('.navbar--container');
    const contenu = document.querySelector('.contenu');

    if (contenu.classList.contains('d-none')) {
     
      contenu.classList.replace ('d-none','d-flex');
      parent.classList.add('open');

    } else if (contenu.classList.contains('d-flex')) {
      
      parent.classList.remove('open');
      contenu.classList.replace ('d-flex','d-none');

    }
  },

  //faire fonctionner la barre de recherche
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