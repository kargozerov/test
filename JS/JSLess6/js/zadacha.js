(function(){
'use strict';

console.log('Лекция 6 JS');

  let goods = {
        piano: {
            title: "Пианино",
            price: 3000,
            count: 25
        },
        guitar: {
            title: "Гитара",
            price: 1200,
            count: 40
        },
        drum: {
            title: "Барабаны",
            price: 2700,
            count: 12
        },
        flute: {
            title: "Флейта",
            price: 900,
            count: 50
        },
        harp: {
            title: "Арфа",
            price: 3400,
            count: 5
        }
    };



// задчакка 1 и из дз 5
function getGoods(obj, from, to) {
        let resObj = {};
        for (let key in obj) {
            console.log("key", key); // ключи: piano, guitar и тд
            console.log(obj[key]); // объекты
            console.log(obj[key]["price"]); // значения свойства price

            if (obj[key]["price"] >= from
                && obj[key]["price"] <= to){
                // добавляем подходящие товары в результирующий объект
                resObj[key] = obj[key];
            }
        }

        console.log(resObj);
        return resObj;
    }
    getGoods(goods, 2000, 3000);
















}());

