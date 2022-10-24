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
                             </article>
                         </a>
                     </li>