import csv
import json
import requests
from bs4 import BeautifulSoup

url = 'https://world.openfoodfacts.org/cgi/search.pl?action=process&tagtype_0=categories&tag_contains_0=contains' \
      '&tag_0=beverages&tagtype_1=categories&tag_contains_1=contains&tag_1=dairy_drinks&page=4&json=true'

r = requests.get(url)

soup = BeautifulSoup(r.content, 'html.parser')

script = soup.get_text()

data = json.loads(script)
products = data['products']

with open('dairy_drinks_4.csv', 'w', newline='', encoding='utf-8') as f:
    # header
    header = ['code',
              'image_url',
              'product_name',
              'quantity',
              'serving_size',
              'packaging',
              'brands',
              'brands_tags',
              'brand_owner',
              'categories',
              'categories_tags',
              'labels',
              'labels_tags',
              'countries',
              'countries_tags',
              'ingredients_text_en',
              'allergens',
              'allergens_tags',
              'nutrition_data_per',
              'energy_kj_value',
              'enerkj_unit',
              'energy_kcal_value',
              'energy_kcal_unit',
              'fat_value',
              'fat_unit',
              'saturated_fat_value',
              'saturated_fat_unit',
              'carbohydrates_value',
              'carbohydrates_unit',
              'sugars_value',
              'sugars_unit',
              'fiber_value',
              'fiber_unit',
              'proteins_value',
              'proteins_unit',
              'salt_value',
              'salt_unit',
              'sodium_value',
              'sodium_unit',
              'energy_value',
              'energy_unit',
              'vitamin_c_value',
              'vitamin_c_unit',
              'vitamin_b6_value',
              'vitamin_b6_unit',
              'vitamin_b12_value',
              'vitamin_b12_unit',
              'potassium_value',
              'potassium_unit',
              'calcium_value',
              'calcium_unit',
              'caffeine_value',
              'caffeine_unit',
              'taurine_value',
              'taurine_unit',
              'food_groups_tags',
              'nutriscore_grade']

    mywriter = csv.writer(f, delimiter=';')
    mywriter.writerow(header)

    for product in products:
        strings = []
        if "_id" in product:
            strings.append(product['_id'])
        else:
            strings.append("NULL")

        if "image_url" in product:
            # TODO daca e null
            strings.append(product['image_url'])
        elif "image_small_url" in product:
            strings.append(product['image_small_url'])
        elif "image_thumb_url" in product:
            strings.append(product['image_thumb_url'])
        else:
            strings.append("NULL")

        if "product_name" in product:
            if not product['product_name'].strip():
                if "product_name_en" in product:
                    strings.append(product['product_name_en'])
                elif "abbreviated_product_name" in product:
                    strings.append(product['abbreviated_product_name'])
            else:
                strings.append(product['product_name'])
        else:
            strings.append("NULL")

        if "quantity" in product:
            strings.append(product['quantity'])
        else:
            strings.append("NULL")

        if "serving_size" in product:
            strings.append(product['serving_size'])
        else:
            strings.append("NULL")

        if "packaging" in product:
            strings.append(product['packaging'])
        else:
            strings.append("NULL")

        if "brands" in product:
            strings.append(product['brands'])
        else:
            strings.append("NULL")

        if "brands_tags" in product:
            strings.append(product['brands_tags'])
        else:
            strings.append("NULL")

        if "brand_owner" in product:
            strings.append(product['brand_owner'])
        else:
            strings.append("NULL")

        if "categories" in product:
            strings.append(product['categories'])
        else:
            strings.append("NULL")

        if "categories_tags" in product:
            strings.append(product['categories_tags'])
        else:
            strings.append("NULL")

        if "labels" in product:
            strings.append(product['labels'])
        else:
            strings.append("NULL")

        if "labels_tags" in product:
            strings.append(product['labels_tags'])
        else:
            strings.append("NULL")

        if "countries" in product:
            strings.append(product['countries'])
        else:
            strings.append("NULL")

        if "countries_tags" in product:
            strings.append(product['countries_tags'])
        else:
            strings.append("NULL")

        if "ingredients_text_en" in product:
            strings.append(product['ingredients_text_en'])
        else:
            strings.append("NULL")

        if "allergens" in product:
            strings.append(product['allergens'])
        else:
            strings.append("NULL")

        if "allergens_tags" in product:
            strings.append(product['allergens_tags'])
        else:
            strings.append("NULL")

        if "nutrition_data_per" in product:
            strings.append(product['nutrition_data_per'])
        else:
            strings.append("NULL")

        # nutriments ( 36 de campuri )
        if "nutriments" in product:
            nutriments = {
                "10energy_kj_value": "NULL",
                "11energy_kj_unit": "NULL",
                "12energy_kcal_value": "NULL",
                "13energy_kcal_unit": "NULL",
                "14fat_value": "NULL",
                "15fat_unit": "NULL",
                "16saturated_fat_value": "NULL",
                "17saturated_fat_unit": "NULL",
                "18carbohydrates_value": "NULL",
                "19carbohydrates_unit": "NULL",

                "20sugars_value": "NULL",
                "21sugars_unit": "NULL",
                "22fiber_value": "NULL",
                "23fiber_unit": "NULL",
                "24proteins_value": "NULL",
                "25proteins_unit": "NULL",
                "26salt_value": "NULL",
                "27salt_unit": "NULL",
                "28sodium_value": "NULL",
                "29sodium_unit": "NULL",

                "30energy_value": "NULL",
                "31energy_unit": "NULL",
                "32vitamin_c_value": "NULL",
                "33vitamin_c_unit": "NULL",
                "34vitamin_b6_value": "NULL",
                "35vitamin_b6_unit": "NULL",
                "36vitamin_b12_value": "NULL",
                "37vitamin_b12_unit": "NULL",
                "38potassium_value": "NULL",
                "39potassium_unit": "NULL",

                "40calcium_value": "NULL",
                "41calcium_unit": "NULL",
                "42caffeine_value": "NULL",
                "43caffeine_unit": "NULL",
                "44taurine_value": "NULL",
                "45taurine_unit": "NULL"
            }

            product_dictionary = product['nutriments']
            pairs = product_dictionary.items()

            # fiecare key, value
            for key, value in pairs:
                if "energy-kj_value" == key:
                    nutriments["10energy_kj_value"] = value
                elif "energy-kj_unit" == key:
                    nutriments["11energy_kj_unit"] = value
                elif "energy-kcal_value" == key:
                    nutriments["12energy_kcal_value"] = value
                elif "energy-kcal_unit" == key:
                    nutriments["13energy_kcal_unit"] = value
                elif "fat_value" == key:
                    nutriments["14fat_value"] = value
                elif "fat_unit" == key:
                    nutriments["15fat_unit"] = value
                elif "saturated-fat_value" == key:
                    nutriments["16saturated_fat_value"] = value
                elif "saturated-fat_unit" == key:
                    nutriments["17saturated_fat_unit"] = value
                elif "carbohydrates_value" == key:
                    nutriments["18carbohydrates_value"] = value
                elif "carbohydrates_unit" == key:
                    nutriments["19carbohydrates_unit"] = value
                elif "sugars_value" == key:
                    nutriments["20sugars_value"] = value
                elif "sugars_unit" == key:
                    nutriments["21sugars_unit"] = value
                elif "fiber_value" == key:
                    nutriments["22fiber_value"] = value
                elif "fiber_unit" == key:
                    nutriments["23fiber_unit"] = value
                elif "proteins_value" == key:
                    nutriments["24proteins_value"] = value
                elif "proteins_unit" == key:
                    nutriments["25proteins_unit"] = value
                elif "salt_value" == key:
                    nutriments["26salt_value"] = value
                elif "salt_unit" == key:
                    nutriments["27salt_unit"] = value
                elif "sodium_value" == key:
                    nutriments["28sodium_value"] = value
                elif "sodium_unit" == key:
                    nutriments["29sodium_unit"] = value
                elif "energy_value" == key:
                    nutriments["30energy_value"] = value
                elif "energy_unit" == key:
                    nutriments["31energy_unit"] = value
                elif "vitamin-c_value" == key:
                    nutriments["32vitamin_c_value"] = value
                elif "vitamin-c_unit" == key:
                    nutriments["33vitamin_c_unit"] = value
                elif "vitamin-b6_value" == key:
                    nutriments["34vitamin_b6_value"] = value
                elif "vitamin-b6_unit" == key:
                    nutriments["35vitamin_b6_unit"] = value
                elif "vitamin-b12_value" == key:
                    nutriments["36vitamin_b12_value"] = value
                elif "vitamin-b12_unit" == key:
                    nutriments["37vitamin_b12_unit"] = value
                elif "potassium_value" == key:
                    nutriments["38potassium_value"] = value
                elif "potassium_unit" == key:
                    nutriments["39potassium_unit"] = value
                elif "calcium_value" == key:
                    nutriments["40calcium_value"] = value
                elif "calcium_unit" == key:
                    nutriments["41calcium_unit"] = value
                elif "caffeine_value" == key:
                    nutriments["42caffeine_value"] = value
                elif "caffeine_unit" == key:
                    nutriments["43caffeine_unit"] = value
                elif "taurine_value" == key:
                    nutriments["44taurine_value"] = value
                elif "taurine_unit" == key:
                    nutriments["45taurine_unit"] = value

            for key in nutriments:
                strings.append(nutriments[key])
        else:
            for x in range(1, 36):
                # cazul in care 'nutriments' nu se gaseste in tot json-ul
                strings.append("NULL")

        if "food_groups_tags" in product:
            strings.append(product['food_groups_tags'])
        else:
            strings.append("NULL")

        if "nutriscore_grade" in product:
            strings.append(product['nutriscore_grade'])
        else:
            strings.append("NULL")

        mywriter = csv.writer(f, delimiter=';')
        mywriter.writerow(strings)
