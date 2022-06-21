const myTitle = document.getElementById('product-title-in-product-page');
console.log('sad');

const json_div = document.getElementById('json_single_product');
const json_data = json_div.textContent;
// Parse json into data variable
let data = JSON.parse(json_data);

showProducts(data);

function showProducts(data) {
    console.log(data);
    console.log("asfasfas");
    myTitle.innerHtml = "the new text";
    data.forEach(product => {
        const {product_name} = product;
        console.log(product_name);
        console.log("asfasfas");
    })
}