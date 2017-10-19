<?php
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '20M');
@ini_set( 'max_execution_time', '300' );

add_theme_support('post-thumbnails');

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length',50 );

/*Contact functions */
function cleanPosUrl($str) {
  return stripslashes($str);
}
function check_email_address($email) {
  return preg_match('/^[^@]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/', $email);
}
/* 
  return an integer as status result fi mail send 
  0   : Null email
  1 : Success
  2   : Fail on send php function
  3   : invalid email
*/
  function do_contact(){
    $name_field="clientname";
    $email_field="email";
    $asunto_field="asunto";
    $phone_field="phone";
    $email_subject = 'Contacto desde http://hotelcolibribeach.com';
    $referring_page = "http://hotelcolibribeach.com";
    $contact_email = 'info@hotelcolibribeach.com';
  //$contact_email = 'contacto@lamaceta.mx';
    $recipient_name = '';
    $result = 4;
    $text = '';
    foreach ($_POST as $key => $value){
      $value = cleanPosUrl($value);
      if($key != 'submit'){
        if($key != 'sendContactEmail')
          $text = $text."\n".$key.": ".$value;
      }
    }
    if(isset($_POST[$email_field])){
      if(check_email_address($_POST[$email_field])){
        $to = $contact_email;
        $subject = $email_subject.': '.$_POST[$name_field];
        $subject = utf8_decode($subject);       
        $headers = 'From:'.$_POST[$email_field];
        $mailit = wp_mail($to,$subject,$text,$phone_field,$headers);
        if(@$mailit){
          $result = 1;
        }else{
          $result = 2;
        }
      }else
      $result = 3;
    }
    return $result;
  };

?>