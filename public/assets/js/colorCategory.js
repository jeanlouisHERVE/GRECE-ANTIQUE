const colorCategory = {
    init: function()
    {
        console.log('article init !')
        colorCategory.color()
           
    },


    color: function() {

        console.log('colorCategory !')
        const categoryName = document.querySelector('.categoryBadge');
        let contentText= ' ';
        console.log(categoryName)
            if (categoryName.textContent == 'histoire') {
                contentText = categoryName.classList.add('bg-warning')
            } else if (categoryName.textContent == 'mythologie') {
                contentText = categoryName.classList.add('bg-info')
            } else if (categoryName.textContent == 'philosophie') {
                contentText = categoryName.classList.add('bg-light')
            } else if (categoryName.textContent == 'geographie') {
                contentText = categoryName.classList.add('bg-success')
            } else if (categoryName.textContent == 'politique') {
                contentText = categoryName.classList.add('bg-primary')
            } else if (categoryName.textContent == 'littérature') {
                contentText = categoryName.classList.add('bg-danger')
            } else if (categoryName.textContent == 'documents') {
                contentText = categoryName.classList.add('bg-dark')
            } else if (categoryName.textContent == 'art') {
                contentText = categoryName.classList.add('text-warning')
            } else {
                contentText = categoryName.classList.add('pink')
            }
   }

}