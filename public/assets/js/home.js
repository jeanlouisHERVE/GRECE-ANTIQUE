const home = {
    init: function()
    {
        console.log('home init !')
        home.cardTextLength()
    },

    cardTextLength: function() {
        
        
        const cardText = document.querySelectorAll('.home--card--text');
        let content = ""
        let result = "";
        let final = "";
        
        for ( let i = 0 ; i < cardText.length ; i++){
            
            
            content = cardText[i].textContent;

            console.log(content)
           
            if (content.length > 80) {  
            result = content.substring(0,60)
            final = result + '...'    
            }

            cardText[i].textContent = final;

            return final ;
        }     

    }       
        
}
