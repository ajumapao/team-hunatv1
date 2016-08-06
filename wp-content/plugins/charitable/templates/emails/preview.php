<?php
/**
 * Email Preview
 *
 * @author  Studio 164a
 * @package Charitable/Templates/Emails
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! isset( $_GET[ 'email_id' ] ) ) {
    return;
}

$email = charitable_get_helper( 'emails' )->get_email( $_GET[ 'email_id' ] );
$email_object = new $email;

echo $email_object->preview();