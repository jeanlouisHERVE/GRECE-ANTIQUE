
const app = {

  init: function() {

    console.log("App Init !");
    navbar.init();
    home.init();

    if (window.location.href.indexOf('categorie')>-1 === true) {
      categoryList.init();  
    }  
    if (window.location.href.indexOf('article/list')>-1 === true) {
      articleList.init()
      articleTask.init()
      
    }
    if (window.location.href.indexOf('article')>-1 === true) {
      article.init()
    }
    
    
  },

  

}

document.addEventListener('DOMContentLoaded', app.init);
