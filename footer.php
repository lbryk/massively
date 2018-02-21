<?php 
    $twitter=author_form_and_social_media('twitter');
    $facebook=author_form_and_social_media('facebook');
    $instagram=author_form_and_social_media('instagram');
    $github=author_form_and_social_media('github');
?>							
								<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="field">
									<label for="name"><?php echo author_form_and_social_media('name_title_of_sender'); ?></label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="email"><?php echo author_form_and_social_media('email_title'); ?></label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message"><?php echo author_form_and_social_media('message_title_of_sender'); ?></label>
									<textarea name="message" id="message" rows="3"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit"  name="submit" value="<?php echo author_form_and_social_media('button_caption'); ?>" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<h3><?php echo author_form_and_social_media('address_title'); ?></h3>
								<p><?php echo author_form_and_social_media('street'); ?><br />
								<?php echo author_form_and_social_media('city'); ?>, <?php echo author_form_and_social_media('post'); ?></p>
							</section>
							<section>
								<h3><?php echo author_form_and_social_media('phone_title'); ?></h3>
								<p><?php echo author_form_and_social_media('phone'); ?></p>
								
							</section>
							<section>
								<h3><?php echo author_form_and_social_media('email_title'); ?></h3>
								<p><a href="mailto:<?php echo author_form_and_social_media('email_of_recipient'); ?>"><?php echo author_form_and_social_media('email_of_recipient'); ?></a></p>
							</section>
							<section>
							<?php  if(isset($twitter) && $twitter != '#' || isset($facebook) && $facebook != '#' || isset($instagram) && $instagram != '#' || isset($github) && $github != '#') {?>
								<h3><?php echo author_form_and_social_media('social'); ?></h3>
								<ul class="icons alt">
								<?php  if(isset($twitter) && $twitter != '#') {?>
									<li><a href="<?php echo author_form_and_social_media('twitter'); ?>" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<?php } ?>
								<?php  if(isset($facebook) && $facebook != '#') {?>
									<li><a href="<?php echo author_form_and_social_media('facebook'); ?>" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<?php } ?>
								<?php  if(isset($instagram) && $instagram != '#') {?>
									<li><a href="<?php echo author_form_and_social_media('instagram'); ?>" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<?php } ?>
								<?php  if(isset($github) && $github != '#') {?>
									<li><a href="<?php echo author_form_and_social_media('github'); ?>" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<?php } ?>
								</ul>
							<?php } ?>
							</section>
						</section>
					</footer>
<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>
</div>
<!-- Scripts -->
			<script src="<?php echo get_template_directory_uri().'/js/jquery.min.js'; ?>"></script>
			<script src="<?php echo get_template_directory_uri().'/js/jquery.scrollex.min.js'; ?>"></script>
			<script src="<?php echo get_template_directory_uri().'/js/jquery.scrolly.min.js'; ?>"></script>
			<script src="<?php echo get_template_directory_uri().'/js/skel.min.js'; ?>"></script>
			<script src="<?php echo get_template_directory_uri().'/js/util.js'; ?>"></script>
			<script src="<?php echo get_template_directory_uri().'/js/main.js'; ?>"></script>

<!-- Mail sending --->
<?php 
    if(isset($_POST['submit'])){
        $to = author_form_and_social_media('email_of_recipient');
        $subject = $_POST['name'];
        $email = $_POST['email'];
        $body = $_POST['message']." <br /> FROM: <b> ".$email."</b>";
        $headers = array('Content-Type: text/html; charset=UTF-8');   
        
        wp_mail( $to, $subject, $body, $headers );
    }
?>

<?php wp_footer(); ?>

</body>
</html>
