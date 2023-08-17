const searchInput = document.getElementById('search-input');
const dataLists = document.getElementsByClassName('product-parent');

searchInput.addEventListener('keyup', function(event) {
    const searchTerm = event.target.value.toLowerCase();

    for (let j = 0; j < dataLists.length; j++) {
        const dataList = dataLists[j];
        const listItems = dataList.getElementsByClassName('product-card');

        for (let i = 0; i < listItems.length; i++) {
            const listItem = listItems[i];
            const text = listItem.textContent.toLowerCase();

            if (text.includes(searchTerm)) {
                listItem.style.display = 'block';
            } else {
                listItem.style.display = 'none';
            }
        }
    }
});