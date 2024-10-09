
<header class="<?= $tpl == "home" ? "home-header" : ""?>">
   
        <nav>
            <ul>
                <li>
                    <?php foreach ($data["menu"] as $key => $value):?>
                        <a href="<?=$value["path"] ?>"><?=$value["name"]?></a>
                    <?php endforeach; ?>
                </li>
            </ul>
             
             <a href="<?= HOST. '?page=shop'?>" class="bag"><img src="assets/images/bag.svg" alt="" ></a>

        </nav>

</header>

