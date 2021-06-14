<?php include('inc/doc.php'); ?>
<body id="contact-us">
<?php include('inc/header.php'); ?>
      <img src="img/contact-img.jpg" alt="" />
      <h3>Contact Us</h3>
      <div>
        <form method="post" id="contact_form" action="mailer.php">
          <fieldset>
          <p>
            <label for="first_name">First Name <span class="required">*</span></label>
            <br />
            <input name="first_name" type="text" id="first_name"  />
            <script type="text/javascript">
	            var first_name = new LiveValidation('first_name');
	            first_name.add(Validate.Presence, {failureMessage: "Please Provide Your First Name."});
	        </script>
          </p>
          <p>
            <label for="last_name">Last Name <span class="required">*</span></label>
            <br />
            <input name="last_name" id="last_name" type="text" />
            <script type="text/javascript">
	            var last_name = new LiveValidation('last_name');
	            last_name.add(Validate.Presence, {failureMessage: "Please Provide Your Last Name."});
	        </script>
          </p>
          <p>
            <label for="your_company">Your Company</label>
            <br />
            <input name="your_company" id="your_company" type="text" />
          </p>
          <p>
            <label for="phone">Phone <span class="required">*</span></label>
            <br />
            <input name="phone" id="phone" type="text" />
            <script type="text/javascript">
	            var phone = new LiveValidation('phone');
	            phone.add(Validate.Presence, {failureMessage: "Please Provide Your Phone Number."});
	        </script>
          </p>
          <p>
            <label for="email">Email <span class="required">*</span></label>
            <br />
            <input name="email" id="email" type="text" />
            <script type="text/javascript">
	            var email = new LiveValidation('email');
	            email.add(Validate.Presence, {failureMessage: "Please Provide Your Email Address."});
	            email.add( Validate.Email );
	        </script>
          </p>
          <p>
            <label for="comments">Comments</label>
            <br />
            <textarea name="comments" id="comments" cols="25" rows="3"></textarea>
          </p>
          <br class="clear" />
          <p>
            <input id="submit" type="submit" class="submit" value="Send" />
          </p>
          </fieldset>
        </form>
      </div>
    </div>
    <div id="sidebar">
      <p><strong>Bond Plywood, Inc.</strong><br />
        988 E Saratoga<br />
        Ferndale MI, 48220<br />
        (800) 247-5966 (phone)<br />
        or (248) 548-3150 (phone)<br />
        (248) 548-0265 (fax)<br />
        Email: <a href="mailto:bondply@sbcglobal.net">bondply@sbcglobal.net</a> <br />
        <br />
        <a href="http://bit.ly/dctzfb" onClick="window.open(this.href); return false;">Find us on the Map &raquo;</a> </p>
    </div>
    <div class="clear"></div>
    <?php include('inc/footer.php'); ?>
