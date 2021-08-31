const navbar = {
    init: function()
    {

        console.log("navbar Init !");

        const title = document.querySelector('.nav-link--article');
   
        title.addEventListener('click', navbar.handleFormSubmit);
    },

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
    
    }
}