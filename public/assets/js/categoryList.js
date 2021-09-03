const categoryList = {
    init: function()
    {
        console.log('categoryList init !')
        categoryList.pictureCategory()
        
    },

    pictureCategory: function() {

        const h2Category = document.querySelectorAll('.category--list--h2');
        const divCategory = document.querySelector('category--list--unity')
        console.log(h2Category)

        let contentText= "";
        let result = "";

        for (let i = 0 ; i < h2Category.length ; i++ ) {

            contentText = h2Category[i].textContent
            console.log(contentText)

            if (h2Category[i].textContent == 'histoire') {

                result = divCategory[i].classList.add('history')

            } else if (h2Category[i].textContent == 'mythologie') {

                h2Category[i].classList.add('mythology')

            } else if (h2Category[i].textContent == 'philosophie') {

                h2Category[i].classList.add('philosophy')

            } else if (h2Category[i].textContent == 'geographie') {

                h2Category[i].classList.add('geography') 

            } else if (h2Category[i].textContent == 'politique') {

                h2Category[i].classList.add('politics')

            } else if (h2Category[i].textContent == 'litterature') {

                h2Category[i].classList.add('litterature')

            } else if (h2Category[i].textContent == 'documents') {

                h2Category[i].classList.add('documents') 
            
            } else {

                h2Category[i].classList.add('noCategoryClass')
            }

            console.log(h2Category[i].textContent)

        }
    
    }

}