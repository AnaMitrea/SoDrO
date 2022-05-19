import csv
import json
import requests
from bs4 import BeautifulSoup

url = 'https://world.openfoodfacts.org/cgi/search.pl?action=process&tagtype_0=categories&tag_contains_0=contains' \
      '&tag_0=beverages&tagtype_1=categories&tag_contains_1=contains&tag_1=coffee_drinks&page=1&json=true'

r = requests.get(url)

soup = BeautifulSoup(r.content, 'html.parser')

script = soup.get_text()

data = json.loads(script)
products = data['products']

with open('testare.csv', 'w', encoding='utf-8') as f:
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
                "energy_kj_value": "NULL",
                "energy_kj_unit": "NULL",
                "energy_kcal_value": "NULL",

                # de completat
            }

            product_dictionary = product['nutriments']
            pairs = product_dictionary.items()

            # fiecare key, value
            for key, value in pairs:
                if "energy_kj_value" == key:
                    nutriments["energy_kj_value"] = value
                elif "energy_kj_unit" == key:
                    nutriments["energy_kj_unit"] = value
                elif "energy_kcal_value" == key:
                    nutriments["energy_kcal_value"] = value
                elif "energy_kcal_unit" == key:
                    strings.append(value)
                elif "fat_value" == key:
                    strings.append(value)
                elif "fat_unit" == key:
                    strings.append(value)
                elif "saturated_fat_value" == key:
                    strings.append(value)
                elif "saturated_fat_unit" == key:
                    strings.append(value)
                elif "carbohydrates_value" == key:
                    strings.append(value)
                elif "carbohydrates_unit" == key:
                    strings.append(value)
                elif "sugars_value" == key:
                    strings.append(value)
                elif "sugars_unit" == key:
                    strings.append(value)
                elif "fiber_value" == key:
                    strings.append(value)
                elif "fiber_unit" == key:
                    strings.append(value)
                elif "proteins_value" == key:
                    strings.append(value)
                elif "proteins_unit" == key:
                    strings.append(value)
                elif "salt_value" == key:
                    strings.append(value)
                elif "salt_unit" == key:
                    strings.append(value)
                elif "sodium_value" == key:
                    strings.append(value)
                elif "sodium_unit" == key:
                    strings.append(value)
                elif "energy_value" == key:
                    strings.append(value)
                elif "energy_unit" == key:
                    strings.append(value)
                elif "vitamin_c_value" == key:
                    strings.append(value)
                elif "vitamin_c_unit" == key:
                    strings.append(value)
                elif "vitamin_b6_value" == key:
                    strings.append(value)
                elif "vitamin_b6_unit" == key:
                    strings.append(value)
                elif "vitamin_b12_value" == key:
                    strings.append(value)
                elif "vitamin_b12_unit" == key:
                    strings.append(value)
                elif "potassium_value" == key:
                    strings.append(value)
                elif "potassium_unit" == key:
                    strings.append(value)
                elif "calcium_value" == key:
                    strings.append(value)
                elif "calcium_unit" == key:
                    strings.append(value)
                elif "caffeine_value" == key:
                    strings.append(value)
                elif "caffeine_unit" == key:
                    strings.append(value)
                elif "taurine_value" == key:
                    strings.append(value)
                elif "taurine_unit" == key:
                    strings.append(value)

            # trebuie facut append la string folosind valorile din dictionarul nutriments facut anterior in for
            # de continuat...
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
