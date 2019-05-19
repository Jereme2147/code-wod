 <?php 
 $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }
  //response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";
 
//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];
 
//php mailer variables
$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {
 
    //validate email
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  my_contact_form_generate_response("error", $email_invalid);
else //email is valid
{
  //validate presence of name and message
   if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
}
  }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
 get_header('contact'); 

    ?>
  page-contact.php
  <div id="full-form">
      <div id="contact-text">
          <h3>Get in touch!</h3>
          <p>I appreciate all feed back, good and bad. If you'd like to 
              contribute, let me know. You can use the direct email link, the 
              quick contact form or any of the provided social links. 
          </p>
          <p><a href="mailto:jereme@jeremedaniels.com">Email me here</a></p>
          
      </div>
        <form action="<?php the_permalink();?>" id="contact-form" method="POST">
            <input type="text" name="message_name" placeholder="Your name here" value="<?php echo esc_attr($_POST['message_name']); ?>">
            <!-- <input type="text" class="inputs" id="last" name="last" placeholder="last name*" required alt="last name field"> -->
            <!-- <input type="email" class="inputs" id="email" name="email" placeholder="you@gmail.com*" required alt="email field"> -->
            <input type="text" name="message_email" placeholder="you@email.com"value="<?php echo esc_attr($_POST['message_email']); ?>">
            <input type="text" style="width: 60%" placeholder="Humans know the answer" name="message_human"> + 3 = 5</label></p>
            <input type="hidden" name="submitted" value="1">
            <div id="user-info">
                <div id="comment">
                    <!-- <textarea id="comments"name="comments" 
                    placeholder="Questions or comments"></textarea> -->
                    <textarea type="text" name="message_text" placeholder="Questions and comments."><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                </div>
                <div id="contact-submit">
                    <button type="submit" name="sumbit" alt="send button">send</button>
                </div>
            </div>
        </form>
    </div>
<?php get_footer();?>