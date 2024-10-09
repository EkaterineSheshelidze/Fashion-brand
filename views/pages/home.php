<main>
    <section class="section-1">
        <div class="left" style="background-image: url('assets/images/20.jpg');">
        
    </div>
        <div class="right">
            <div class="content">
                <h1>New Summer Collection</h1>
                <span></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur adipisicin. Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur adipisicin. Lorem ipsum dolor sit amet consectetur adipisicing elit. sit amet consectetur adipisicin. </p>
            <a href="" class="btn-default">Shop now</a>
            </div>
        </div>
        
    </section>

    <section class="section-4">
        <div class="container">
            <div class="home-categories">
                <div class="item" style="background-image: url('assets/images/25.jpg'); background-position: center;" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service">feminine</a>
                </div>
                <div class="item" style="background-image: url('assets/images/g.jpg');" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service">masculine</a>
                </div>
                <div class="item" style="background-image: url('assets/images/23.jpg');" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service">androgynous</a>
                </div>
                <div class="item" style="background-image: url('assets/images/30.jpg');" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service" class="link-service">swimsuits</a>
                </div>
                <div class="item" style="background-image: url('assets/images/2.png');" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service" class="link-service">dresses</a>
                </div>
                <div class="item" style="background-image: url('assets/images/14.jpg'); background-position-y: -56px;" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service" class="link-service">denim</a>
                </div>
                <div class="item" style="background-image: url('assets/images/8.jpg');" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service" class="link-service">bottoms</a>
                </div>
                <div class="item" style="background-image: url('assets/images/17.png'); background-position: center;" >
                    <div class="shadow"></div>
                        <a href="<?= HOST. '?page=shop'?>" class="link-service" class="link-service">accessories</a>
                </div>
                
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="container">
            <div class="home-services">
            <?php foreach ($data["services"] as $key => $value) { ?>
                        <div class="service-item"  >
                            
                        <div class="bag">
                            
                            <img src="assets/images/bag.svg" alt="">
                        </div>
                        <h1><?= $value["name"]?></h1>
                           <p><?= $value["text"]?></p>
                            
                        </div>

                    <?php }?>
            </div>
        </div>
    </section>
        
    <section class="section-3">
        <div class="container">
            <div class="content">
                <h3>Get all type of Solutions</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venea</p>
                <a href="<?= HOST. '?page=contact'?>" class="link-default">Contact Us</a>
            </div>
        </div>
    </section>

   
</main>