
const app = {

  bddRoute : "http://localhost/adminer/?username=explorateur&db=GreceAntique",

  init: function() {

    console.log("App Init !");
    home.init();
    navbar.init()
  

    if (window.location.href.indexOf('categorie')>-1 === true) {
      colorCategoryAll.init()  
    }  
   
    if (window.location.href.indexOf('articlelist')>-1 === true) {
      
      colorCategoryAll.init()
      articleTask.init()
      
    }

    if (window.location.href.indexOf('article/')>-1 === true) {
      colorCategory.init()
    }

    if (window.location.href.indexOf('contact')>-1 === true) {
      contactTask.init()
    }
       
  },

}

document.addEventListener('DOMContentLoaded', app.init);
