const home = {
    init: function()
    {
        console.log('home init !')
        home.cardTextLength()
    },

    cardTextLength: function() {
        
        
        const cardText = document.querySelectorAll('.home--card--text')
        
        const result = []

        for (let i = 0 ; i < cardText.lenght ; i++){
        
        result.push(cardText[i].textContent);
        console.log(result)
        }

        return result;
        
    }
}