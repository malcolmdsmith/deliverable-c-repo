         <section class="featured-products">
             <h3><?= $productHeading ?></h3>
             <?php if (!$itemRows) : ?>
                 <div class="nil-results">No results match search text.</div>
             <?php endif; ?>
             <ul class="featured-products__items">
                 <?php foreach ($itemRows as $row) : ?>
                     <li class="featured-products__item">
                         <a class="featured-products__link" href="product-details.php?itemId=<?= $row["itemId"] ?>">
                             <article class="featured-products__article product">
                                 <div class="product__photoframe">
                                     <img src="./assets/images/products/<?= $row["photo"] ?>" alt="<?= $row["itemName"] ?>" width="171" height="171" />
                                 </div>
                                 <div class="product__price">
                                     <?php if (is_null($row["salePrice"]) || $row["salePrice"] == 0) : ?>
                                         <div>
                                             <?= "$" . $row["price"] ?>
                                         </div>
                                     <?php else : ?>
                                         <div class="product__discounted"><?= "$" . $row["salePrice"] ?></div>
                                         <div>
                                             <span class="product__was">was</span>
                                             <span class="product__original-price-discounted"><?= "$" . $row["price"] ?></span>
                                         </div>
                                     <?php endif; ?>
                                 </div>
                                 <div class="product__description">
                                     <?= $row["itemName"] ?>
                                 </div>
                                 <div class="product__viewdetail">
                                     View Detail
                                 </div>
                             </article>
                         </a>
                     </li>
                 <?php endforeach; ?>
             </ul>
         </section>