const categoryList = {
    init: function()
    {
        console.log('categoryList init !')
        categoryList.pictureCategory()  
        categoryList.colorCategory()          
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
    
    },

    colorCategory: function() {

        console.log('colorCategory !')
        const categoryName = document.querySelectorAll('.categoryBadge');
        let contentText= ' ';

        for (let i = 0 ; i < categoryName.length ; i++ ) {
            
            console.log()
            if (categoryName[i].textContent == 'histoire') {
                contentText = categoryName[i].classList.add('bg-warning')
            } else if (categoryName[i].textContent == 'mythologie') {
                contentText = categoryName[i].classList.add('bg-info')
            } else if (categoryName[i].textContent == 'philosophie') {
                contentText = categoryName[i].classList.add('bg-light')
            } else if (categoryName[i].textContent == 'geographie') {
                contentText = categoryName[i].classList.add('bg-success')
            } else if (categoryName[i].textContent == 'politique') {
                contentText = categoryName[i].classList.add('bg-primary')
            } else if (categoryName[i].textContent == 'littérature') {
                contentText = categoryName[i].classList.add('bg-danger')
            } else if (categoryName[i].textContent == 'documents') {
                contentText = categoryName[i].classList.add('bg-dark')
            } else {
                contentText = categoryName[i].classList.add('pink')
            }
        }
    }
}