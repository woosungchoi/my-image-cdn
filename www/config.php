<?php
/**
 * my-image-cdn (https://github.com/laelbe/my-image-cdn)
 * configuration file.
 */
if (!defined('_MYCDN_')) {
    exit();
}

// original resource host
$original_host = '<origin_host>';

// allowed extensions
$allowed_extension = array();
$allowed_extension[] = 'png';
$allowed_extension[] = 'jpg';
$allowed_extension[] = 'jpeg';
$allowed_extension[] = 'gif';
$allowed_extension[] = 'mp4';
$allowed_extension[] = 'webm';
