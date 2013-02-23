<?php include('includes/header.php'); ?>
		<div class="row contact-top">
			<div class="sixcol">
				<p class="heading large">Contact Us Today!</p>
				
				<p class="heading">Address:</p>
				<a id="address" href="https://maps.google.com/maps?q=3909+SANDIA+DRIVE+%09%09%09PLANO,+TEXAS+75023&hl=en&sll=40.07304,-74.724323&sspn=6.674385,10.316162&hnear=3909+Sandia+Dr,+Plano,+Collin,+Texas+75023&t=m&z=17" title="Little Angels Home Day Care - 3909 Sandia Drive, Plano, Texas 75023">
				    <span>Little Angels Home Daycare</span>
				    <span>3909 Sandia Drive</span>
				    <span>Plano, Texas 75023</span>
				</a>

				<p class="heading">Phone:</p>
				<a href="tel:1-972-519-0201" title="Call Us at 972.519.0201">972.519.0201</a>

				<p class="heading">Email:</p>
				<a href="mailto:Provider@childcareinplano.com" title="Provider@childcareinplano.com">Provider@childcareinplano.com</a>
			</div> <!-- /sixcol -->
			<div class="sixcol last">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=3909+Sandia+Dr,+Plano,+TX&amp;aq=0&amp;oq=3909+Sandia+Drive&amp;sll=37.7577,-122.4376&amp;sspn=0.215518,0.335426&amp;ie=UTF8&amp;hq=&amp;hnear=3909+Sandia+Dr,+Plano,+Collin,+Texas+75023&amp;t=m&amp;z=14&amp;ll=33.045272,-96.769186&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3909+Sandia+Dr,+Plano,+TX&amp;aq=0&amp;oq=3909+Sandia+Drive&amp;sll=37.7577,-122.4376&amp;sspn=0.215518,0.335426&amp;ie=UTF8&amp;hq=&amp;hnear=3909+Sandia+Dr,+Plano,+Collin,+Texas+75023&amp;t=m&amp;z=14&amp;ll=33.045272,-96.769186" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</div> <!-- /sixcol last -->
		</div> <!-- /row -->
		<div class="row">
			<div class="sixcol">
				<img class="no-mobile" src="images/contact.jpg">
			</div> <!-- /sixcol -->
			<div class="sixcol last">
				
				<form id="contact" action="http://app.websitetonight.com/wscoutils/wscoformmailer.asp" method="post">
					<input type="hidden" id="MailRequestSubject" name="MailRequestSubject" value="Request from Child Care in Plano Texas - Contact Us page." />
					<input type="hidden" id="MailRequestAddress" name="MailRequestAddress" value="Provider@childcareinplano.com" />
					<input type="hidden" id="MailRequestName" name="MailRequestName" value="Little Angels Home Daycare" />
					<input type="hidden" id="Redirect_URL" name="Redirect_URL" value="http://www.childcareinplano.com/ContactSent.php" />
					<label>Name:</label>
					<input id="MailFromName" maxlength="50" size="25" name="MailFromName" />
					<label>Address 1:</label>
					<input id="Address" maxlength="50" size="25" name="Address" />
					<label>Address 2:</label>
					<input id="Address 2" maxlength="50" size="25" name="Address (cont)" />
					<label>City:</label>
					<input id="City" maxlength="50" size="25" name="City" />
					<label>State:</label>
					<input id="State" maxlength="50" size="25" name="State" />
					<label>Zip / Postal Code:</label>
					<input id="Zip / Postal Code" maxlength="15" size="25" name="Zip / Postal Code" />
					<label>Country:</label>
					<input id="Country" maxlength="50" size="25" name="Country" />
					<label>Phone Number:</label>
					<input id="Phone" maxlength="15" size="25" name="Phone" />
					<label>Email Address:</label>
					<input id="MailFromAddress" maxlength="50" size="25" name="MailFromAddress" />
					<label>Web Address/URL:</label>
					<input id="WebAddress" maxlength="50" size="25" name="WebAddress" />
					<label>Comments/Questions:</label>
					<textarea id="Comments" name="Comments" rows="4" cols="25"></textarea>
					<input id="submitForm" type="submit" value="Submit" name="submitForm" />
				</form>
				
			</div> <!-- /sixcol -->
		</div> <!-- /row -->
	</section>
<?php include('includes/footer.php'); ?>