
const app = {

  

  init: function() {

    console.log("App Init !");
    home.init();
    category.init();

    if (window.location.href.indexOf('categorie')>-1 === true) {
      category.init();  
    }  
   
    if (window.location.href.indexOf('articlelist')>-1 === true) {
      articleList.init()
      articleTask.init()
    }

    if (window.location.href.indexOf('article/')>-1 === true) {
      article.init()
    }
       
  },

}

document.addEventListener('DOMContentLoaded', app.init);
