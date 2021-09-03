
const app = {

  init: function() {

    console.log("App Init !");
    navbar.init();
    home.init();
    categoryList.init();
    
    
       
  },

}

document.addEventListener('DOMContentLoaded', app.init);
