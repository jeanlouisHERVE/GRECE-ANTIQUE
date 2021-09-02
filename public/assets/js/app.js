
const app = {

  init: function() {

    console.log("App Init !");
    home.init();
    navbar.init();
    categoryList.init();
       
  },

}

document.addEventListener('DOMContentLoaded', app.init);
