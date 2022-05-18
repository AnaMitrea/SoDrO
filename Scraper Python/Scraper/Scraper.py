import csv
import json
import requests
from bs4 import BeautifulSoup

url = 'https://world.openfoodfacts.org/cgi/search.pl?action=process&tagtype_0=categories&tag_contains_0=contains' \
      '&tag_0=beverages&tagtype_1=categories&tag_contains_1=contains&tag_1=coffee_drinks&json=true '

r = requests.get(url)

soup = BeautifulSoup(r.content, 'html.parser')

script = soup.get_text()

data = json.loads(script)
products = data['products']

with open('sample.csv', 'w', encoding='utf-8') as f:
    #header
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

    for i in products:
        strings = []
        if "_id" in i:
            strings.append(i['_id'])
        else:
            strings.append("NULL")

        if "image_url" in i:
            # TODO daca e null
            strings.append(i['image_url'])
        elif "image_small_url" in i:
            strings.append(i['image_small_url'])
        elif "image_thumb_url" in i:
            strings.append(i['image_thumb_url'])
        else:
            strings.append("NULL")

        if "product_name" in i:
            if not i['product_name'].strip():
                strings.append(i['abbreviated_product_name'])
            else:
                strings.append(i['product_name'])
        else:
            strings.append("NULL")

        if "quantity" in i:
            strings.append(i['quantity'])
        else:
            strings.append("NULL")

        if "serving_size" in i:
            strings.append(i['serving_size'])
        else:
            strings.append("NULL")

        if "packaging" in i:
            strings.append(i['packaging'])
        else:
            strings.append("NULL")

        if "brands" in i:
            strings.append(i['brands'])
        else:
            strings.append("NULL")

        if "brands_tags" in i:
            strings.append(i['brands_tags'])
        else:
            strings.append("NULL")

        if "brand_owner" in i:
            strings.append(i['brand_owner'])
        else:
            strings.append("NULL")

        if "categories" in i:
            strings.append(i['categories'])
        else:
            strings.append("NULL")

        if "categories_tags" in i:
            strings.append(i['categories_tags'])
        else:
            strings.append("NULL")

        if "labels" in i:
            strings.append(i['labels'])
        else:
            strings.append("NULL")

        if "labels_tags" in i:
            strings.append(i['labels_tags'])
        else:
            strings.append("NULL")

        # nu era
        if "countries" in i:
            strings.append(i['countries'])
        else:
            strings.append("NULL")

        if "countries_tags" in i:
            strings.append(i['countries_tags'])
        else:
            strings.append("NULL")

        if "ingredients_text_en" in i:
            strings.append(i['ingredients_text_en'])
        else:
            strings.append("NULL")

        if "allergens" in i:
            strings.append(i['allergens'])
        else:
            strings.append("NULL")

        if "allergens_tags" in i:
            strings.append(i['allergens_tags'])
        else:
            strings.append("NULL")

        if "nutrition_data_per" in i:
            strings.append(i['nutrition_data_per'])
        else:
            strings.append("NULL")

        if "energy_kj_value" in i:
            strings.append(i['energy_kj_value'])
        else:
            strings.append("NULL")

        if "enerkj_unit" in i:
            strings.append(i['enerkj_unit'])
        else:
            strings.append("NULL")

        if "energy_kcal_value" in i:
            strings.append(i['energy_kcal_value'])
        else:
            strings.append("NULL")

        if "energy_kcal_unit" in i:
            strings.append(i['energy_kcal_unit'])
        else:
            strings.append("NULL")

        if "fat_value" in i:
            strings.append(i['fat_value'])
        else:
            strings.append("NULL")

        if "fat_unit" in i:
            strings.append(i['fat_unit'])
        else:
            strings.append("NULL")

        if "saturated_fat_value" in i:
            strings.append(i['saturated_fat_value'])
        else:
            strings.append("NULL")

        if "saturated_fat_unit" in i:
            strings.append(i['saturated_fat_unit'])
        else:
            strings.append("NULL")

        if "carbohydrates_value" in i:
            strings.append(i['carbohydrates_value'])
        else:
            strings.append("NULL")

        if "carbohydrates_unit" in i:
            strings.append(i['carbohydrates_unit'])
        else:
            strings.append("NULL")

        if "sugars_value" in i:
            strings.append(i['sugars_value'])
        else:
            strings.append("NULL")

        if "sugars_unit" in i:
            strings.append(i['sugars_unit'])
        else:
            strings.append("NULL")

        if "fiber_value" in i:
            strings.append(i['fiber_value'])
        else:
            strings.append("NULL")

        if "fiber_unit" in i:
            strings.append(i['fiber_unit'])
        else:
            strings.append("NULL")

        if "proteins_value" in i:
            strings.append(i['proteins_value'])
        else:
            strings.append("NULL")

        if "proteins_unit" in i:
            strings.append(i['proteins_unit'])
        else:
            strings.append("NULL")

        if "salt_value" in i:
            strings.append(i['salt_value'])
        else:
            strings.append("NULL")

        if "salt_unit" in i:
            strings.append(i['salt_unit'])
        else:
            strings.append("NULL")

        if "sodium_value" in i:
            strings.append(i['sodium_value'])
        else:
            strings.append("NULL")

        if "sodium_unit" in i:
            strings.append(i['sodium_unit'])
        else:
            strings.append("NULL")

        if "energy_value" in i:
            strings.append(i['energy_value'])
        else:
            strings.append("NULL")

        if "energy_unit" in i:
            strings.append(i['energy_unit'])
        else:
            strings.append("NULL")

        if "vitamin_c_value" in i:
            strings.append(i['vitamin_c_value'])
        else:
            strings.append("NULL")

        if "vitamin_c_unit" in i:
            strings.append(i['vitamin_c_unit'])
        else:
            strings.append("NULL")

        if "vitamin_b6_value" in i:
            strings.append(i['vitamin_b6_value'])
        else:
            strings.append("NULL")

        if "vitamin_b6_unit" in i:
            strings.append(i['vitamin_b6_unit'])
        else:
            strings.append("NULL")

        if "vitamin_b12_value" in i:
            strings.append(i['vitamin_b12_value'])
        else:
            strings.append("NULL")

        if "vitamin_b12_unit" in i:
            strings.append(i['vitamin_b12_unit'])
        else:
            strings.append("NULL")

        if "potassium_value" in i:
            strings.append(i['potassium_value'])
        else:
            strings.append("NULL")

        if "potassium_unit" in i:
            strings.append(i['potassium_unit'])
        else:
            strings.append("NULL")

        if "calcium_value" in i:
            strings.append(i['calcium_value'])
        else:
            strings.append("NULL")

        if "calcium_unit" in i:
            strings.append(i['calcium_unit'])
        else:
            strings.append("NULL")

        if "caffeine_value" in i:
            strings.append(i['caffeine_value'])
        else:
            strings.append("NULL")

        if "caffeine_unit" in i:
            strings.append(i['caffeine_unit'])
        else:
            strings.append("NULL")

        if "taurine_value" in i:
            strings.append(i['taurine_value'])
        else:
            strings.append("NULL")

        if "taurine_unit" in i:
            strings.append(i['taurine_unit'])
        else:
            strings.append("NULL")

        if "food_groups_tags" in i:
            strings.append(i['food_groups_tags'])
        else:
            strings.append("NULL")

        if "nutriscore_grade" in i:
            strings.append(i['nutriscore_grade'])
        else:
            strings.append("NULL")

        mywriter = csv.writer(f, delimiter=';')
        mywriter.writerow(strings)