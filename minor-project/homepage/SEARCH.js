const searchInput = document.getElementById('search-input');
const dataList = document.getElementById('product-parent');
const listItems = dataList.getElementsByClassName('product-card');

searchInput.addEventListener('keyup', function(event) {
    const searchTerm = event.target.value.toLowerCase();

    for (let i = 0; i < listItems.length; i++) {
        const listItem = listItems[i];
        const text = listItem.textContent.toLowerCase();

        if (text.includes(searchTerm)) {
            listItem.style.display = 'block';
        } else {
            listItem.style.display = 'none';
        }
    }
});
