<section>
    <div class="container">
        <div class="shop">
        <?php foreach ($data["shop"] as $key => $value) {?>
            <div class="shop-item">
                <div class="content">
                    <div class="shop-img" style="background-image: url('assets/images/shop/<?= $value["image"] ?>');"></div>
                    <p class="title"><?= $value["title"]?></p>
                    <p><?= "$ ".$value["price"]?></p>
                </div>
            </div>
        <?php } ?>
            
        </div>
    </div>
</section>