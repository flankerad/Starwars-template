<?php include 'header.php';?>

<div id="wrapper" class="clearfix">
	
<div id="info">
	<i>"Never tell me the odds!"
	<br>―Han Solo<br></i><br>
    <a name="han"><h3>Han Solo</h3></a>	
    	Corellia 29 BBY<br>
    	Millenium Falcon
		<p>Marketing &amp; Business opportunities<br>
		  <a class="link" href="hansolo@republic">
			hansolo@republic
		  </a>
		</p>
	<a name="leia"><h3>Princess Leia</h3></a>	
    	Alderaan (born on Polis Massa)
		<p>Customer care<br>
		  <a class="link" href="leia@republic">
			leia@republic
		  </a>
		</p>
	<a name="leia"><h3>Luke Skywalker</h3></a>	
    	Tatooine; born on Polis Massa
		<p>Technical help<br>
		  <a class="link" href="luke@republic">
			luke@republic
		  </a>
		</p>

</div>
<div id="contact-form">
<form id="contact" method="post" action="process.php" >
<div id="response"></div>
<fieldset>	
<label for="name">Name</label>
<input type="text" name="name" id="name" placeholder="Your Name Here" title="Name" required class="required">

<label for="email">Email</label>
<input type="email" name="email" placeholder="yourname@domain.com" title="E-mail Address" required="required" class="required email">

<label for="website">Institution</label>
<input type="text" name="institution" title="Institution name" placeholder="Rebel or Alliance">
<span class="formfield">
<label for="message" title="your Message or Enquiry">Message<br/> or <br/>Enquiry</label>
<textarea id="message" name="message" placeholder="Write Here ! your Message or Query for Us." ></textarea>
</span>  
</fieldset>

<input type="submit" name="submit" class="button" id="submit" value=" SEND IT!!" />

</form>	
</div>
<script src="js/html5form.min.js"></script> 
<script>
    $(document).ready(function(){
        $('#contact').html5form({
		allBrowsers: true,
		responseDiv : '#response',
        colorOn: '#0D85A5',
		messages : 'en',
        emailMessage : 'This email address is not correct, please try again',
      	method : 'POST',
	    action : 'process.php'
		  }); 
		
    });
</script>
</div>
<small>Text Source: StarWars Wikia</small>
<?php include 'footer.php'; ?> 
</body>
</html>