let selectedCurrency = 'BOB';

tableItems = document.querySelectorAll(".x-table__item")

tableItems.forEach(item => {
    item.addEventListener("click", () => {
        tableItems.forEach(otherItemsAndMe => {
            otherItemsAndMe.classList.remove('x-table__item-selected');
        })
        item.classList.add('x-table__item-selected')
        refreshButton.innerHTML = "Actualizar Monedas en Base a: " + item.id;
        selectedCurrency = item.id;
    })
});
