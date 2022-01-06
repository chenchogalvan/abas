let carts = document.querySelectorAll('.addToCart');

let datos = JSON.parse(document.getElementById('datos').value);


let products = datos;

console.log(products)



for (let i = 0; i < carts.length; i++) {

    // console.log('hola')

    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
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
function cartNumbers(product) {
    // console.log("the product clicked is ", product);
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

    setItems(product);

}

function setItems(product) {
    // console.log("inside of setItem function");
    console.log("My product is", product)

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems)
    console.log("my cartitems are", cartItems)

    cartItems = {
        ...cartItems,
        [product.Codigo]: product
    }
    cartItems[product.Codigo].inCart += 1;




    // if (cartItems != null) {


    //     console.log('IF - Cart Item', cartItems[product.Codigo])


    //     if (cartItems[product.Codigo] == undefined) {
    //         cartItems = {
    //             ...cartItems,
    //             [product.Codigo]: product
    //         }

    //     }
    //     cartItems[product.Codigo].inCart += 1;

    //     // let textMsj = "El producto " + product.Descripcion + " se añadio correctamente";
    //     // addProductNotice('Producto añadido al carrito', '', textMsj, 'danger');

    // } else {

    //     console.log('Else - Cart Item', cartItems)
    //     product.inCart = 1;
    //     cartItems = {
    //         [product.Codigo]: product
    //     }
    // }

    // if (cartItems[product.IdClase] == undefined) {
    //         cartItems = {
    //             ...cartItems,
    //             [product.IdClase]: product
    //         }

    //     }
    //     cartItems[product.IdClase].inCart += 1;

    // } else {

    //     // console.log('Else - Cart Item', cartItems[product.Codigo])
    //     product.inCart = 1;
    //     cartItems = {
    //         [product.IdClase]: product
    //     }
    // }


    localStorage.setItem("productsInCart", JSON.stringify(cartItems))
}


function totalCost(product) {

}

function consola(palabra) {
    console.log(palabra)
}



function addProductNotice(title, thumb, text, type) {
    $.jGrowl.defaults.closer = false;
    //Stop jGrowl
    //$.jGrowl.defaults.sticky = true;
    var tpl = thumb + '<h3>' + text + '</h3>';
    $.jGrowl(tpl, {
        life: 4000,
        header: title,
        speed: 'slow',
        theme: type
    });
}



onLoadCartNumbers()