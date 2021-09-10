const categoryList = {
    init: function()
    {
        console.log('categoryList init !')
        categoryList.pictureCategory()
        
       
           
    },

    


    pictureCategory: function() {

        const h2Category = document.querySelectorAll('.category--list--name');
        const divCategory = document.querySelector('category--list--unity')

        let contentText= "";
        let result = "";

        for (let i = 0 ; i < h2Category.length ; i++ ) {

            contentText = h2Category[i].textContent

            if (h2Category[i].textContent === 'histoire') {

                result = h2Category[i].parentNode.parentNode.classList.add('history')

            } else if (h2Category[i].textContent == 'mythologie') {

                result =h2Category[i].parentNode.parentNode.classList.add('mythology')

            } else if (h2Category[i].textContent == 'philosophie') {

                result =h2Category[i].parentNode.parentNode.classList.add('philosophy')

            } else if (h2Category[i].textContent == 'geographie') {

                result =h2Category[i].parentNode.parentNode.classList.add('geography') 

            } else if (h2Category[i].textContent == 'politique') {

                result =h2Category[i].parentNode.parentNode.classList.add('politics')

            } else if (h2Category[i].textContent == 'littérature') {

                result =h2Category[i].parentNode.parentNode.classList.add('litterature')

            } else if (h2Category[i].textContent == 'documents') {

                result =h2Category[i].parentNode.parentNode.classList.add('documents') 
            
            } else {

                result =h2Category[i].classList.add('noCategoryClass')
            }

        }
    
    }

}