         <section class="content featured-products">
             <h2><?= $productHeading ?></h2>
             <?php
                $i = 0;
                while ($i < $rowCount) : ?>
                 <?php $category = $itemRows[$i]["categoryName"]; ?>
                 <div class="products-list">
                     <h4><?= $category ?></h4>
                     <ul class="featured-products__items">
                         <?php while ($i < $rowCount && $category === $itemRows[$i]["categoryName"]) : ?>
                             <?php
                                $row = $itemRows[$i];
                                include "product-item.html.php";
                                $category = $itemRows[$i]["categoryName"];
                                $i++;
                                if ($i == $rowCount) break; ?>
                         <?php endwhile; ?>
                     </ul>

                 </div>
             <?php endwhile; ?>
         </section>