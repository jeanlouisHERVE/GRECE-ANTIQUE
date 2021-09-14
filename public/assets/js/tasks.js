const tasks = {
  init: function()
  {
      const arrowElements = document.querySelectorAll('.category--list--unity');
      console.log(arrowElements)
      arrowElements.addEventListener("mouseover", tasks.turnArrowToWhite());
      
  },

  turnArrowToWhite: function(){
    console.log('white arrow init !')
    
        const categoryNameElement = document.querySelector('.category--list--name')
        console.log(categoryNameElement)
        const categoryUnityElement = document.querySelector('.category--list--unity')
        console.log(categoryUnityElement )
        const categoryArrowElement = document.querySelector('category--list--arrow')      
        console.log(categoryArrowElement)
       

    
        

  }

}