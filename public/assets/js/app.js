
const app = {

  init: function() {

    console.log("App Init !");
    navbar.init();
    home.init();
    categoryList.init();   
    task.init()
     
    
  },

  

}

document.addEventListener('DOMContentLoaded', app.init);
