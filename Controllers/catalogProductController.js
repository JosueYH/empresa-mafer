  // Datos de ejemplo para el catálogo de productos
  const products = [
    { name: 'Producto 1', price: 100, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
    { name: 'Producto 2', price: 150, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
    { name: 'Producto 3', price: 200, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
    { name: 'Producto 4', price: 250, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
    { name: 'Producto 5', price: 300, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
    { name: 'Producto 6', price: 350, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
    { name: 'Producto 7', price: 100, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
    { name: 'Producto 8', price: 120, imageUrl: '../Assets/Imagenes/yogurt.jpg'},
];

// Función para mostrar los productos en el catálogo
function displayProducts(products) {
    const catalog = document.getElementById('productCatalog');
    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.className = 'product';
        productElement.innerHTML = `
            <img src="${product.imageUrl}" alt="${product.name}"/>
            <h3>${product.name}</h3>
            <p>Precio: $${product.price.toFixed(2)}</p>
        `;
        catalog.appendChild(productElement);
    });
}

// Llamada a la función para mostrar los productos cuando se carga la página
document.addEventListener('DOMContentLoaded', () => {
    displayProducts(products);
});
