const navbar = {
  init: function()
  {
      console.log('navbar init !')
      const searchInput = document.querySelector('.form--input')
      const searchButton = document.querySelector('.form--button')
      searchButton.addEventListener('click', navbar.handlesearchSubmit)

  },

  handlesearchSubmit: function(event)
  {
    
    
    event.preventDefault();
    console.log('click search !')
    const searchInput = document.querySelector('.form--input')
    console.log(searchInput.innerHTML)


  },

}