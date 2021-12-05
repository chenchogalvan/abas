let carts = document.querySelectorAll('.addToCart');

let products = [{
    name: 'producto 1',
    tag: 'producto1',
    price: 15,
    inCart: 0
}, {
    name: 'producto 2',
    tag: 'producto2',
    price: 15,
    inCart: 0
}, {
    name: 'producto 3',
    tag: 'producto3',
    price: 15,
    inCart: 0
}]


for (let i = 0; i < carts.length; i++) {

    carts[i].addEventListener('click', () => {
        cartNumbers();
    })

}

//El n° total de productos en el carrito al cargar la pagina
function onLoadCartNumbers() {

    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.items_cart').textContent = productNumbers
    }
}



//El n° total de productos en el carrito al dar clic en "agregar al carrito"
function cartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    // console.log(productNumbers)
    // console.log(typeof productNumbers);

    productNumbers = parseInt(productNumbers);
    // console.log(typeof productNumbers);

    if (productNumbers) {

        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.items_cart').textContent = productNumbers + 1;

    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.items_cart').textContent = 1;

    }

}


onLoadCartNumbers()