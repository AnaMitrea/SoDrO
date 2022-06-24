const json_div = document.getElementById('json_favorite_list');
const product_fav = json_div.textContent;
let list_of_favorites = JSON.parse(product_fav);

const json_div1 = document.getElementById('json_category_favorite_1');
const category_fav1 = json_div1.textContent;
let list_category_favorites_1 = JSON.parse(category_fav1);

const json_div2 = document.getElementById('json_category_favorite_2');
const category_fav2 = json_div2.textContent;
let list_category_favorites_2 = JSON.parse(category_fav2);

const json_div3 = document.getElementById('json_category_favorite_3');
const category_fav3 = json_div3.textContent;
let list_category_favorites_3 = JSON.parse(category_fav3);

showFavorites(list_of_favorites);
const recommended_div = document.getElementById('recommended-div');
showRecommended(list_category_favorites_1);
showRecommended(list_category_favorites_2);
showRecommended(list_category_favorites_3);

function showFavorites(list_of_favorites) {
    const div_with_fav = document.getElementById('your-favorites-products-div');
    if(list_of_favorites[0].length===0){
        var newChild = `<p class='error-message'>There are no products in your favorite list.</p>`;
        div_with_fav.insertAdjacentHTML('beforeend', newChild);
    }else{
        list_of_favorites[0].forEach(product =>{
                const {product_name, image_url, code, brands} = product;
                // Get the Split Name And Brand to fit into div
                let details = configureNameAndBrand(product_name, brands);
                const productEl = document.createElement('div');
                productEl.classList.add("product-cell");
                productEl.innerHTML = `
            <div onclick="window.location.href='/BackendRouting/product?code=${code}'">
                <img class="image-product" src="${image_url}" alt="${details[0]}">
            </div>
            <div class="product-cell-bottom">
                <div class="product-cell-bottom-name">
                    <p class="product-name">${details[0]}</p>
                    <p>${details[1]}</p>
                </div>
                <div id="add-to-list-icon">
                    <button>&#9734;</button>
                </div>
            </div>
        `;
                div_with_fav.appendChild(productEl);
            }
        );
    }
}

function showRecommended(list_category_favorites) {

    let split_category = list_category_favorites[0][0][11].split(":").slice(2,3).join("");
    split_category = split_category.substring(0, split_category.length - 6);
    recommended_div.insertAdjacentHTML('beforeend',`<h2>Category ${split_category}</h2>`);
    const div_for_a_category = document.createElement('div');
    div_for_a_category.classList.add("favorite-category");
    var contor = 0;
    list_category_favorites[0].forEach(product =>{
            const {product_name, image_url, code, brands,categories} = product;
            // Get the Split Name And Brand to fit into div
            let details = configureNameAndBrand(product_name, brands);
            if(contor === 0){
                const cover_div =document.createElement('div');
                cover_div.classList.add("large-div");
                const productEl = document.createElement('div');
                productEl.classList.add("product-cell");
                productEl.innerHTML = `
                <div onclick="window.location.href='/BackendRouting/product?code=${code}'">
                    <img class="image-product" src="${image_url}" alt="${details[0]}">
                </div>
                <div class="product-cell-bottom">
                    <div class="product-cell-bottom-name">
                        <p class="product-name">${details[0]}</p>
                        <p>${details[1]}</p>
                    </div>
                    <div id="add-to-list-icon">
                        <button>&#9734;</button>
                    </div>
                </div>
                <div class="additional-info-in-large-div">
                  <p>${categories}</p>
                </div>            `;
                cover_div.appendChild(productEl);
                div_for_a_category.appendChild(cover_div);
            }else{
                const cover_div =document.createElement('div');
                cover_div.classList.add("small-div");
                cover_div.classList.add("small-div-"+contor);
                const productEl = document.createElement('div');
                productEl.classList.add("product-cell");
                productEl.innerHTML = `
                <div onclick="window.location.href='/BackendRouting/product?code=${code}'">
                    <img class="image-product" src="${image_url}" alt="${details[0]}">
                </div>
                <div class="product-cell-bottom">
                    <div class="product-cell-bottom-name">
                        <p class="product-name">${details[0]}</p>
                        <p>${details[1]}</p>
                    </div>
                    <div id="add-to-list-icon">
                        <button>&#9734;</button>
                    </div>
                </div>
            `;
                cover_div.appendChild(productEl);
                div_for_a_category.appendChild(cover_div);

            }
        contor++;
        }

    );
    recommended_div.appendChild(div_for_a_category);


}

function configureNameAndBrand(product_name, brands) {
    // Configure Name
    let split_product_name = product_name.split(" ");
    let product_name_minimal = split_product_name.slice(0,2).join(" ");

    // Configure Brand
    let split_brands;
    let brands_minimal = " ";
    if(product_name_minimal.length < 15) {
        split_brands = brands.split(",");
        brands_minimal = split_brands[0];
    }
    return [product_name_minimal, brands_minimal];
}