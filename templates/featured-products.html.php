         <section class="content featured-products">
             <h2><?= $productHeading ?></h2>
             <?php if (!$itemRows) : ?>
                 <div class="nil-results">No results match search text.</div>
             <?php endif; ?>
             <ul class="featured-products__items">
                 <?php foreach ($itemRows as $row) : ?>
                     <?php include "product-item.html.php"; ?>
                 <?php endforeach; ?>
             </ul>
         </section>