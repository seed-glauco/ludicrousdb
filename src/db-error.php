<?php

status_header( 500 ); // Error
nocache_headers();    // No cache

// Set content type & charset to be generic & friendly
header( 'Content-Type: text/html; charset=utf-8' );

// Output (probably should match site)
die( 'DB error' );
