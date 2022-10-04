         <section class="content product-details">
             <h3><?= $productHeading ?></h3>
             <a class="back-button" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">&lt; Back</a>
             <div class="product-details__container">
                 <div class="product-details__photoframe">
                     <img src="./assets/images/products/<?= $itemRow["photo"] ?>" alt="<?= $itemRow["itemName"] ?>" width="171" height="171" />
                 </div>
                 <div class="product-details__info">
                     <ul class="product-details__items">
                         <li class="product-details__itemName">
                             <?= $itemRow["itemName"] ?>
                         </li>
                         <li class="product-details__price">
                             <?php if (is_null($itemRow["salePrice"]) || $itemRow["salePrice"] == 0) : ?>
                                 <div>
                                     <?= "$" . $itemRow["price"] ?>
                                 </div>
                             <?php else : ?>
                                 <span class="product__discounted"><?= "$" . $itemRow["salePrice"] ?></span>
                                 <span class="product__was">was</span>
                                 <span class="product__original-price-discounted"><?= "$" . $itemRow["price"] ?></span>
                             <?php endif; ?>
                         </li>
                         <li class="product-details__description">
                             <?= $itemRow["description"] ?>
                         </li>
                     </ul>
                     <a href="#">Add to Cart</a>
                 </div>
             </div>
         </section>