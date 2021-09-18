const contactTask = {
    init: function()
    {
        console.log('contactTask init !')

        const formSubmitButton = document.querySelector('.form--button--contact')
        formSubmitButton.addEventListener('submit', contactTask.ControlDataBeforeSending())

        
    },

    ControlDataBeforeSending: function() {

        console.log('ControlDataBeforeSending !')
        const contactImput = document.querySelector('.contact--imput')
        console.log(contactImput.textContent)
        if (contactImput.textContent = "") {
            alert("Vous devez saisir votre nom")
        }





    }

}