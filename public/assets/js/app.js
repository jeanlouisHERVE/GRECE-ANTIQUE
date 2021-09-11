
const app = {

  init: function() {

    console.log("App Init !");
    navbar.init();
    home.init();
    
    console.log(window.location.href.indexOf('categorie')>-1)

    if (window.location.href.indexOf('categorie')>-1 === true) {
      categoryList.init();  
    }  
    if (window.location.href.indexOf('article/list')>-1 === true) {
      articleList.init()
    }
    if (window.location.href.indexOf('article')>-1 === true) {
      article.init()
    }
    
    
  },

  

}

document.addEventListener('DOMContentLoaded', app.init);
