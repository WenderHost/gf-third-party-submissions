<?php
/**
 * Plugin Name:     GravityForms 3rd Party Submission Handler
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Sends GF form submissions to a third party.
 * Author:          Michael Wender
 * Author URI:      https://michaelwender.com
 * Text Domain:     gf-third-party-submissions
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Gf_Third_Party_Submissions
 */

if( defined( 'GF_3RD_PARTY_FORM' ) && is_integer( GF_3RD_PARTY_FORM ) )
  add_action( 'gform_after_submission_' . GF_3RD_PARTY_FORM, 'gf_third_party_submission_handler', 10, 2 );

function gf_third_party_submission_handler( $entry, $form ) {
  if( ! defined( 'GF_3RD_PARTY_FORM_ENDPOINT' ) || empty( GF_3RD_PARTY_FORM_ENDPOINT ) )
    return;

  $post_url = GF_3RD_PARTY_FORM_ENDPOINT;
  $body = array(
    'firstname' => rgar( $entry, '4.3' ),
    'lastname' => rgar( $entry, '4.6' ),
    'email' => rgar( $entry, '3' ),
  );

  $request = new WP_Http();
  $response = $request->post( $post_url, array( 'body' => $body ) );
}