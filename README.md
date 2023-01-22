## productfeedersystem
Product Feeder System

Aşağıdaki URL adresinde gösterilen 'platform' değiştirilerek (facebook,google vb..) ve format(xml,json) değiştirilerek istek oluşturulabilir.

public/index.php dosyası içerisinde bulunan 'productMapping' dizisi içerisine platform ve bu platform için belirlenen output eklenebilir.

app/sql/_productfeedersystem_.sql dosyasının import edilmesi gerekmektedir.

URL : /productfeedersystem/{format}/{platform}

Örnek facebook url: localhost/productfeedersystem/json/facebook

Örnek Response:
```json
[
    {
        "f_product_id": 1,
        "f_product_name": "Product 1",
        "f_product_price": "1.00",
        "f_product_category": "Electronic"
    },
    {
        "f_product_id": 2,
        "f_product_name": "Product 2",
        "f_product_price": "2.00",
        "f_product_category": "Fashion"
    },
    {
        "f_product_id": 3,
        "f_product_name": "Product 3",
        "f_product_price": "3.00",
        "f_product_category": "Home Decor"
    }
]
```

