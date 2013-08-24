
 <?php include 'header.php';?>
<div id = "wrapper" class="clearfix">
<div id="pics">
		<img src="img/banner-1.jpg" alt="Skyline 1" >
		<img src="img/banner-2.jpg" alt="Skyline 2">
		<img src="img/banner-3.jpg" alt="Skyline 3">
		<img src="img/banner-4.jpg" alt="Skyline 4">
</div>
<span class="other">
 StarWars themed HTML/CSS basic website with PHP/MySql backend to get you started. It's fairly responsive with social icons in a CSS sprite to reduce image lookups.
 A fully functional PHP/MySql contact form is also available with complete backend. 
 There are seprate header and footer file so if you want to add new pages to your site just include header and footer php files 
 and all styles will be same as the home page. For slide show Cycle.js plugin for jquery is used its fairly simple free and easy to use.

 Template compatible across browsers. If you want more customization, you will have to tinker around. <i>Do read README </i>thats why its named so. Cheers  <br>
</span>
  
	<div class="grid">
                    <div class="grid-cell">
                        <h3>Features</h3>
							<span class="star">&#187;</span>HTML CSS template with PHP MySql backend<br> 
							<span class="star">&#187;</span>Modular Code:  Seprate header and footer for increased modularity.<br>
							<span class="star">&#187;</span>Cross Browser Compatibility: IE included :P.<br>
							<span class="star">&#187;</span>Optimized code and CSS: With minimized CSS.<br>
							<span class="star">&#187;</span>Footer: Sitemap CSS sprite social icons.<br><p/>
                    </div>

                    <div class="grid-cell">
                        <h3>How to Use</h3>                         
                        	<span class="star">&#187;</span>Download complete website.<br> 
							<span class="star">&#187;</span>Change text and images according to your needs.<br>
							<span class="star">&#187;</span>If you don't want any module delete it from code.<br>
							<span class="star">&#187;</span>Add new page by including header and footer.<br>
							<span class="star">&#187;</span>Change color scheme in CSS file.<br><p/>
                    </div>
	</div> 
</div>
<?php include 'footer.php'; ?> 

  <script src="js/cycle.js"></script>
  <script type="text/javascript">$('#pics').cycle('fade');</script>
  
</body>
</html>