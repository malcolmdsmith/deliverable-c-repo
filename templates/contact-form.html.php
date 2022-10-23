         <section class="content">
         	<h2><?= $productHeading ?></h2>
         	<form class="contact-form" action="contact.php" method="post">
         		<fieldset>
         			<legend> Contact Details - * required fields</legend>
         			<p>
         				<label for="firstName">First name *</label>
         				<input type="text" name="firstName" id="firstName" value="<?= setValue('firstName') ?>">
         			</p>

         			<p>
         				<label for="lastName">Last name *</label>
         				<input type="text" name="lastName" id="lastName" value="<?= setValue('lastName') ?>">
         			</p>

         			<p>
         				<label for="email">Email *</label>
         				<input type="email" name="email" id="email" value="<?= setValue('email') ?>">
         			</p>

         			<p>
         				<label for="phone">Phone</label>
         				<input type="text" name="phone" id="phone" value="<?= setValue('phone') ?>">
         			</p>

         			<p>
         				<label for="comments">Any comments?</label>
         				<textarea name="comments" id="comments" rows="4" cols="60">
			<?= setValue("comments") ?>
			</textarea>
         			</p>

         		</fieldset>
         		<p>
         			<input type="submit" name="submitContact" id="submitContact" value="Send Details">
         		</p>

         	</form>
         </section>