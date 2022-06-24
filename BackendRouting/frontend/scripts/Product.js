const myTitle = document.getElementById('product-title-in-product-page');
const json_div = document.getElementById('json_single_product');
const json_data = json_div.textContent;
let data = JSON.parse(json_data);

const ingredients_content = document.getElementById('json_ingredients_list');
const ing = ingredients_content.textContent;
let ingredients = JSON.parse(ing);
// Parse json into data variable

const similar_content = document.getElementById('json_similar_products');
const sim = similar_content.textContent;
let similarities = JSON.parse(sim);

showProducts(data);
setSimilarProducts(similarities);

function showProducts(data) {
    myTitle.innerHTML = '';
    const {product_name} = data;
    var name = product_name.split(" ")[0];

    if(product_name.split(" ").length>1){
        name = name + " " + product_name.split(" ")[1];
    }
    myTitle.innerHTML = name;

    const {image_url,nutrition_data_per} = data;
    document.getElementById('product-image-in-product-page').src = image_url;
    document.getElementById('nutrition-data-per').innerHTML = nutrition_data_per;
    setTable(data);
    setAdditionalData(data);
    setOtherDetails(data);

}

function setTable(data){
    const myTable = document.getElementById('ingredients-val');
    var pos_vector = 0;
    for(var iter = 20; iter<55;iter+=2) {
        if (data[iter].length> 0) {
           const tableLine = document.createElement('tr');
           tableLine.innerHTML = `
                    <td>${ingredients[pos_vector]}</td>
                    <td>${data[iter]}${data[iter+1]}</td>
           `;
           myTable.appendChild(tableLine);
        }
        pos_vector++;
    }

}

function setAdditionalData(data){
    const dataRight = document.getElementById('additional-data-div');
    const {brands,quantity,serving_size,packaging,countries,nutriscore_grade} = data;
    var newChild;
    if(brands.localeCompare("")!==0){
        newChild = `<p>Brand</p> <p>${brands}</p>`;
        dataRight.insertAdjacentHTML('beforeend', newChild);
    }
    if(quantity.localeCompare("")!==0){
        newChild = `<p>Product quantity</p> <p>${quantity}</p>`;
        dataRight.insertAdjacentHTML('beforeend', newChild);
    }

    if(serving_size.localeCompare("")!==0){
        newChild = `<p>A portion</p> <p>${serving_size}</p>`;
        dataRight.insertAdjacentHTML('beforeend', newChild);
    }

    if(packaging.localeCompare("")!==0){
        const packs = packaging.split(' ').slice(0, 2).join(' ');
        newChild = `<p>Package</p> <p>${packs}</p>`;
        dataRight.insertAdjacentHTML('beforeend', newChild);
    }

    if(countries.localeCompare("")!==0){
        newChild = `<p>Countries where you can find it</p> <p>${countries}</p>`;
        dataRight.insertAdjacentHTML('beforeend', newChild);
    }

    if(nutriscore_grade.localeCompare("")!==0){
        var path = "frontend/images/grades/nutriscore-";
        path += nutriscore_grade;
        path += ".png";
        console.log(path);
        newChild = `<img class='grade-image' src=${path} alt='img'>`;
        dataRight.insertAdjacentHTML('beforeend', newChild);
    }
}

function setOtherDetails(data){
    const div = document.getElementById('bottom-middle-div');
    const {categories,labels,ingredients_text_en} = data;
    var newChild;

    if(categories.localeCompare("")!==0){
        newChild = `
        <div class="bottom-details other-categories">
            <h2>OTHER CATEGORIES TO WITCH IT BELONGS</h2>
            <p>${categories}</p>
        </div>
        `;
        div.insertAdjacentHTML('beforeend', newChild);
    }

    if(labels.localeCompare("")!==0){
        newChild = `
        <div class="bottom-details labels">
            <h2>LABELS</h2>
            <p>${labels}</p>
        </div>
        `;
        div.insertAdjacentHTML('beforeend', newChild);
    }

    if(ingredients_text_en.localeCompare("")!==0){
        newChild = `
        <div class="bottom-details text-ingredients">
            <h2>DETAILED INGREDIENTS</h2>
            <p>${ingredients_text_en}</p>
        </div>
        `;
        div.insertAdjacentHTML('beforeend', newChild);
    }
}

function setSimilarProducts(similarProducts){
    const div_with_list = document.getElementById('list-of-similar-products');
    similarProducts[0].forEach(product => {
        const {product_name, image_url, code, brands} = product;
        var modifiedName = configureNameAndBrand(product_name,brands);
        const product_name_minimal = modifiedName[0];
        const brands_minimal = modifiedName[1];
        const productEl = document.createElement('div');
        productEl.classList.add("product-cell");
        productEl.innerHTML = `
            <div onclick="window.location.href='/BackendRouting/product?code=${code}'">
                <img class="image-product" src="${image_url}" alt="${product_name_minimal}">
            </div>
            <div class="product-cell-bottom">
                <div class="product-cell-bottom-name">
                    <p class="product-name">${product_name_minimal}</p>
                    <p>${brands_minimal}</p>
                </div>
                <div id="add-to-list-icon">
                    <button>&#9734;</button>
                </div>
            </div>
        `;
        div_with_list.appendChild(productEl);
    });
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