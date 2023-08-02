<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <?php
    $product = array(
        "most_prominent" => array(
            "sp1" => array(
                "image" => "https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_26536/dien-thoai-noki_main_532_1020.png.webp",
                "name" => "Nokia",
                "price" => "280.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9733; 9999"
            ),
            "sp2" => array(
                "image" => "https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/plp/phones/new-phones/series-products/p40-pro-plus-white.png",
                "name" => "Huawei",
                "price" => "3.990.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9734; 804"
            ),
            "sp3" => array(
                "image" => "https://msquangninh.vn/wp-content/uploads/2023/05/xiaomi_13_ultra_green.jpg",
                "name" => "Xiaomi",
                "price" => "5.960.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9734; 500"
            ),
            "sp4" => array(
                "image" => "https://cdn.tgdd.vn/Products/Images/42/214925/xiaomi-redmi-note-9-trang-600x600-200x200.jpg",
                "name" => "Xiaomi Redmi",
                "price" => "4.790.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9734; 400"
            ),
            "sp5" => array(
                "image" => "https://cdn.tgdd.vn/Products/Images/42/251896/itel-l6006-violet-600x600.jpg",
                "name" => "Itel",
                "price" => "1.600.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9733; 302"
            )
        ),
        "new_product" => array(
            "sp1" => array(
                "image" => "https://cdn11.dienmaycholon.vn/filewebdmclnew/DMCL21/Picture//Apro/Apro_product_26536/dien-thoai-noki_main_532_1020.png.webp",
                "name" => "Nokia",
                "price" => "280.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9733; 9999"
            ),
            "sp2" => array(
                "image" => "https://consumer.huawei.com/content/dam/huawei-cbg-site/common/mkt/plp/phones/new-phones/series-products/p40-pro-plus-white.png",
                "name" => "Huawei",
                "price" => "3.990.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9734; 804"
            ),
            "sp3" => array(
                "image" => "https://msquangninh.vn/wp-content/uploads/2023/05/xiaomi_13_ultra_green.jpg",
                "name" => "Xiaomi",
                "price" => "5.960.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9734; 500"
            ),
            "sp4" => array(
                "image" => "https://cdn.tgdd.vn/Products/Images/42/214925/xiaomi-redmi-note-9-trang-600x600-200x200.jpg",
                "name" => "Xiaomi Redmi",
                "price" => "4.790.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9734; 400"
            ),
            "sp5" => array(
                "image" => "https://cdn.tgdd.vn/Products/Images/42/251896/itel-l6006-violet-600x600.jpg",
                "name" => "Itel",
                "price" => "1.600.000",
                "review" => "&#9733;&#9733;&#9733;&#9733;&#9733; 302"
            )
        )
    )
    ?>

    <h1 class="tag-1">* NỔI BẬT NHẤT *</h1>
    <div class="show-1">

        <?php foreach ($product['most_prominent'] as $sp_key => $sp_value) { ?>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="<?php echo $sp_value['image'] ?>" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><?php echo $sp_value['name'] ?></div>
                    <p class="text-gray-700 text-base">
                        <?php echo $sp_value['review'] ?>
                    </p>
                </div>
            </div>
        <?php } ?>

    </div>
    <h1 class="tag-2">* SẢN PHẨM MỚI *</h1>
    <div class="show-2">

        <?php foreach ($product['new_product'] as $sp_key => $sp_value) { ?>
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="<?php echo $sp_value['image'] ?>" alt="">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><?php echo $sp_value['name'] ?></div>
                    <p class="text-gray-700 text-base">
                        <?php echo $sp_value['review'] ?>
                    </p>
                </div>
            </div>
        <?php } ?>

    </div>
</body>

</html>