<?php include("header.php");?>
	<!-- Contact
	================================================== -->
	<section id="contact" class="section page">
		<div class="container">

			<div class="desktop-6 tablet-12 columns">

				<h2 class="border-top">Contact</h2>
				<!-- <p class="title-desc"></p> -->

				<div id="form-messages"></div>
				<form name="contactForm" id=" contactForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
					<fieldset>
					
						<label for="contactName">Name <span class="required">*</span></label>
						<input name="contactName" type="text" name="contactName" id="contactName" size="30" value="" />
						
						<br />
						<label for="contactEmail">Email <span class="required">*</span></label>
						<input name="contactEmail" type="text" name="contactEmail" id="contactEmail" size="30" value="" />
                        
                        <br />
						<label for="contactMessage">Message <span class="required">*</span></label>
						<textarea name="contactMessage" name="contactMessage" id="contactMessage" rows="6" cols="7"></textarea>
                        
                        <br />
						<label for="contactCaptcha"><strong>10</strong> + <strong>6</strong> = <span class="required">*</span></label>
						<input name="contactCaptcha" type="text" class="contactCaptcha" id="contactCaptcha" size="30" value="" />

						<input name="contactCaptchaAnswer" type="hidden" id="contactCaptchaAnswer" value="16" />

						<br />
						<label class="placeholder">&nbsp;</label>
						<input type="submit" class="button full" value="Submit"/>
					</fieldset>
				</form>
				
				<div class="clear"></div>

			</div><!-- // .desktop-6 -->

			
			<div class="desktop-6 tablet-12 nested columns">
				
				<div class="desktop-6 tablet-12 columns">
					<h2 class="border-top">Location</h2>
					<!-- <p class="title-desc"></p> -->

					<div id="map"></div>
				</div><!-- // .desktop-6 -->

				<div class="clear"></div>

				<div class="desktop-3 tablet-6 mobile-half columns">
					
					<div class="box-contact">
						<!-- <h3 class="font-color-primary"><span class="underline">Address</span></h3> -->

						<!-- <p>
							66 Turners Falls Rd <br />
							Turners Falls, MA 01376<br />
							(413) 863-1324
						</p> -->
					</div><!-- // .box-contact -->

				</div><!-- // .desktop-3 -->

				<div class="desktop-3 tablet-6 mobile-half columns">
					
					<div class="box-contact">
						<!-- <h3 class="font-color-primary"><span class="underline">Email</span></h3> -->

						<!-- <p>
							<a href="mailto:info@mirkoviviano.it">info@mirkoviviano.it</a>
						</p> -->
					</div><!-- // .box-contact -->

				</div><!-- // .desktop-3 -->

				<div class="clear"></div>

			</div><!-- // .desktop-6 -->

		</div><!-- // .container -->
	</section><!-- // section#contact -->

	


<?php include("footer.php");

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
       $messageSuccess = '';

       echo '<script>getFormMessage("success");</script>';

       /* $name = strip_tags(trim($_POST["contactName"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["contactEmail"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["contactMessage"]);


        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "info@mirkoviviano.it";

        // Set the email subject.
        $subject = "New contact from $name";

        // Build the email content.
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo '<script>document.getElementById("form-messages")append(\'Success!\');</script>';
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
             echo '<script>document.getElementById("form-messages")append(\'No way!!\');</script>';
        }*/

    }

?>