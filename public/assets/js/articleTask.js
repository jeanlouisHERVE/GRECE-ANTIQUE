const articleTask = {
    init: function()
    {
        console.log('ArticleList init')
        articleTask.limitTitleTextLength()
    },

    limitTitleTextLength: function ()
    {
        const windowsSize = window.innerWidth;
        console.log(windowsSize);
        let titleText = document.querySelectorAll('h2');
        let final = "";
        let result = "";
        console.log(titleText.length)

        //si le titre est 
        function substringElement(array) {
            array.forEach(element => { 
                if (element.innerHTML.length > 40) {  
                    result = element.innerHTML.substring(0,40);
                    console.log(result);
                    final = result + '...';
                    console.log(final)
                    element.innerHTML = final
                    return final; 
                } 
            });
        }

        if(windowsSize < 1300) {
            substringElement(titleText)
        }
    }
}