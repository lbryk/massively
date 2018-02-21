<?php  
function author_form_and_social_media($index_social = null)
    {
	    $recipient_info = array(
            'name_title_of_sender'         => 'name',
            'email_title'                  => 'email',
            'message_title_of_sender'      => 'message',
            'address_title'                => 'address',
            'city'                         => 'Nashville',
            'street'                       => '1234 Somewhere Road #87257',
            'post'                         => 'TN 00000-0000',
            'phone_title'                  => 'phone',
            'phone'                        => '(000) 000-0000',
            'email_of_recipient'           =>  get_bloginfo( 'admin_email' ),
            'social'                       => 'social',
            'twitter'                      => '##',
            'facebook'                     => '##',
            'instagram'                    => '##',
            'github'                       => '##',
            'button_caption'               => 'Send Message'
        ); 
	       return $recipient_info[$index_social];
    }

?>