const task = {
    init: function()
    {
        console.log('task init !')
        const categoryElement = document.querySelectorAll('.category--list--unity');
        console.log(categoryElement)
            for (let i = 0 ; i < categoryElement.length ; i++){
                categoryElement[i].addEventListener('click', task.handleAddLink)
            }

          
    },

    handleAddLink: function(event) {
        console.log('click')
        console.log(event.target)
    
    
    }

}