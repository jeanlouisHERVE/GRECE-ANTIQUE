const article = {
    init: function()
    {
        console.log('article init !')
        article.colorCategory()
           
    },


    colorCategory: function() {

        
        const categoryName = document.querySelector('.article--badge');
        let contentText= ' ';
        contentText = categoryName[i].style.background
        console.log(contentText)

            if (categoryName.textContent == 'histoire') {

               contentText = "#6c757d"

            } else if (categoryName.textContent == 'mythologie') {

                contentText = "#007bff"

            } else if (categoryName.textContent == 'philosophie') {

                contentText = "#f8f9f
            } else if (categoryName.textContent == 'geographie') {

                contentText = "#ffc107"

            } else if (categoryName.textContent == 'politique') {

                contentText = "#28a745"

            } else if (categoryName.textContent == 'littérature') {

                contentText = "#dc3545"

            } else if (categoryName.textContent == 'documents') {

                contentText = "#343a40"
            
            } else {

                
            }

    
    }

}