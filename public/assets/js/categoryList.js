const category = {
    init: function()
    {
        console.log('categoryList init !')
        category.colorCategory() 
        
        
    },

    colorCategory: function() {

        console.log('colorCategory !')
        const categoryName = document.querySelectorAll('.categoryBadge');
        let contentText= ' ';

        for (let i = 0 ; i < categoryName.length ; i++ ) {
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
    },
}