        <ul class="product-category-menu__items">
            <?php foreach ($categoryRows as $row) : ?>
                <li class="<?= $activeCategory == $row["categoryId"] ? "product-category-menu__item-active"  : "product-category-menu__item" ?>">
                    <a class="product-category-menu__link" href="browse-products.php?categoryId=<?= $row["categoryId"] ?>#content">
                        <span class="product-category-menu__link-name"><?= $row["categoryName"] ?></span>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>