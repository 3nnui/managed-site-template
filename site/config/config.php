<?php

return [
  'debug' => true,
  'bnomei.securityheaders.headers' => [
    "X-Powered-By" => "", // unset
    "X-Frame-Options" => "SAMEORIGIN",
    "X-XSS-Protection" => "1; mode=block",
    "X-Content-Type-Options" => "nosniff",
    "strict-transport-security" => "max-age=31536000; includeSubdomains",
    "Referrer-Policy" => "no-referrer-when-downgrade",
    "Permissions-Policy" => 'interest-cohort=()', // flock-off,
    // ... FEATURE POLICIES
    // other options...
  ]
];