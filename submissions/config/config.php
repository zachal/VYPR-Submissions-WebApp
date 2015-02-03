<?php

/**
 * Configuration for: Database Connection
 * This is the place where your database login constants are saved
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 *          by the way, it's bad style to use "root", but for development it will work.
 * DB_PASS: the password of the above user
 */
define("DB_HOST", "sql203.byethost8.com");
define("DB_NAME", "b8_15801210_VYPR");
define("DB_USER", "b8_15801210");
define("DB_PASS", "Catfish99");

/**
 * Configuration for: Cookies
 * Please note: The COOKIE_DOMAIN needs the domain where your app is,
 * in a format like this: .mydomain.com
 * Note the . in front of the domain. No www, no http, no slash here!
 * For local development .127.0.0.1 or .localhost is fine, but when deploying you should
 * change this to your real domain, like '.mydomain.com' ! The leading dot makes the cookie available for
 * sub-domains too.
 * @see http://stackoverflow.com/q/9618217/1114320
 * @see http://www.php.net/manual/en/function.setcookie.php
 *
 * COOKIE_RUNTIME: How long should a cookie be valid ? 1209600 seconds = 2 weeks
 * COOKIE_DOMAIN: The domain where the cookie is valid for, like '.mydomain.com'
 * COOKIE_SECRET_KEY: Put a random value here to make your app more secure. When changed, all cookies are reset.
 */
define("COOKIE_RUNTIME", 1209600);
define("COOKIE_DOMAIN", ".vypr.byethost8.com");
define("COOKIE_SECRET_KEY", "1gp@TMPS{+$78sfpMJFe-92s");


 define("EMAIL_USE_SMTP", true);
 define("EMAIL_SMTP_HOST", "ssl://smtp.gmail.com");
 define("EMAIL_SMTP_AUTH", true);
 define("EMAIL_SMTP_USERNAME", "zatipnis@gmail.com");
 define("EMAIL_SMTP_PASSWORD", "Dogfish123445793427900zt00110");
 define("EMAIL_SMTP_PORT", 465);
 define("EMAIL_SMTP_ENCRYPTION", "ssl");


/**
 * Configuration for: password reset email data
 * Set the absolute URL to password_reset.php, necessary for email password reset links
 */
define("EMAIL_PASSWORDRESET_URL", "http://vypr.byethost8.com/submissions/password_reset.php");
define("EMAIL_PASSWORDRESET_FROM", "VYRPstaff@vypr.com");
define("EMAIL_PASSWORDRESET_FROM_NAME", "VYPR Project Submissions' Staff");
define("EMAIL_PASSWORDRESET_SUBJECT", "Password Reset for VYPR");
define("EMAIL_PASSWORDRESET_CONTENT", "Please click on this link to reset your VYPR Project Submissions Page Admin password:");

/**
 * Configuration for: verification email data
 * Set the absolute URL to register.php, necessary for email verification links
 */
define("EMAIL_VERIFICATION_URL", "http://vypr.byethost8.com/submissions/register.php");
define("EMAIL_VERIFICATION_FROM", "VYRPstaff@vypr.com");
define("EMAIL_VERIFICATION_FROM_NAME", "VYPR Project Submissions Staff");
define("EMAIL_VERIFICATION_SUBJECT", "Account activation for VYPR Project Submissions");
define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");

/**
 * Configuration for: Hashing strength
 * This is the place where you define the strength of your password hashing/salting
 *
 * To make password encryption very safe and future-proof, the PHP 5.5 hashing/salting functions
 * come with a clever so called COST FACTOR. This number defines the base-2 logarithm of the rounds of hashing,
 * something like 2^12 if your cost factor is 12. By the way, 2^12 would be 4096 rounds of hashing, doubling the
 * round with each increase of the cost factor and therefore doubling the CPU power it needs.
 * Currently, in 2013, the developers of this functions have chosen a cost factor of 10, which fits most standard
 * server setups. When time goes by and server power becomes much more powerful, it might be useful to increase
 * the cost factor, to make the password hashing one step more secure. Have a look here
 * (@see https://github.com/panique/php-login/wiki/Which-hashing-&-salting-algorithm-should-be-used-%3F)
 * in the BLOWFISH benchmark table to get an idea how this factor behaves. For most people this is irrelevant,
 * but after some years this might be very very useful to keep the encryption of your database up to date.
 *
 * Remember: Every time a user registers or tries to log in (!) this calculation will be done.
 * Don't change this if you don't know what you do.
 *
 * To get more information about the best cost factor please have a look here
 * @see http://stackoverflow.com/q/4443476/1114320
 *
 * This constant will be used in the login and the registration class.
 */
define("HASH_COST_FACTOR", "10");
