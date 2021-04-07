let selectedCurrency = 'BOB';

function changeBase(currenciesObject, newBaseCode) {
    let divider = currenciesObject.rates[newBaseCode];
    let rates = {...currenciesObject.rates};
    for (const code in rates) {
        rates[code] /= divider;
    }
    return rates;
}
let access_key = "";
refreshButton.addEventListener("click", () => {
    access_key = accessKey.value;
    console.log("Gracias por presionar el button");
    fetch('http://data.fixer.io/api/latest?access_key=' + access_key)
        .then(response => response.json())
        .then(data => changeBase(data, selectedCurrency))
        .then(newRates => JSON.stringify(newRates))
        .then(stringNewRates => newCurrenciesField.value = stringNewRates)
        .then(whatever => refreshButton.form.submit())
        .catch(err => alert("Tu API Key es incorrecta, por favor introduce otra"));
})

// Another part -----------------------------

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
