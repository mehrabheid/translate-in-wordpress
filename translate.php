<?php
//add blew codes in functions.php in wordpress dashboard or your host
// شما میتوانید هر کلمه ای بجای قطعات یدکی و یا محصولات و ... قرار دهید
// کد های زیر را در بخش ویرایشگر پرونده پوسته قرار دهید


add_filter('gettext', 'rabi_translate_words_array');
add_filter('ngettext', 'rabi_translate_words_array');
function rabi_translate_words_array( $translated ) {
$words = array(
  'محصولات'=>'قطعات یدکی',
  'read more'=>'ادامه مطالب',
);
$translated = str_ireplace(  array_keys($words),  $words,  $translated );
return $translated;
}
