const home = {
    init: function()
    {
        console.log('home init !')
        home.cardTextLength()
    },

    cardTextLength: function() {
        
        
        const cardText = document.querySelector('.home--card--text')
        
        const result = "";
        
        const content = cardText.textContent

        const addContent = result.push(content);

        if (addContent.length > 80) { 

            addContent.substring(0,79)

        } 

        cardText.textContent = result



        console.log(result)

    }

       
        
}
