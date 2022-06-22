const json_div = document.getElementById('json_favorite_list');
const product_fav = json_div.textContent;
let list_of_favorites = JSON.parse(product_fav);

const json_div2 = document.getElementById('json_category_favorite');
const category_fav = json_div2.textContent;
let list_category_favorites = JSON.parse(category_fav);

showProducts(list_of_favorites,list_category_favorites);

function showProducts(list_of_favorites,list_category_favorites) {
    console.log(list_of_favorites);
    console.log(list_category_favorites);

}
