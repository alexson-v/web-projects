<?php
    /**
     * Lost password confirmation text.
     *
     *
     * @see     https://docs.woocommerce.com/document/template-structure/
     * @package WooCommerce\Templates
     * @version 3.9.0
     */

    defined( 'ABSPATH' ) || exit;

	wc_get_template( 'myaccount/form-login-single.php' );
?>

<script>
    window.setTimeout( function() {
        window.location.href = "https://trainssy.com/my-account/";
    }, 2000);
</script>