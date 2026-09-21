<?php
// Language bootstrap - placed after session_start()
$curr_lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
if(isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'am'], true)) {
    $curr_lang = $_GET['lang'];
    $_SESSION['lang'] = $curr_lang;
}
$lang = ($curr_lang === 'am') ? 'am' : 'en';

$T = [
    'back_home' => ['Back to Home', 'ወደ መነሻ ተመለስ'],
    'login_title' => ['Welcome Back', 'እንኳን ደህና መጡ'],
    'login_subtitle' => ['Sign in to access your landlord dashboard.', 'ወደ የቤት አከራይ ዳሽቦርድዎ ለመግባት ይግቡ።'],
    'sign_in' => ['Sign In', 'ግባ'],
    'email_address' => ['Email Address', 'የኢሜይል አድራሻ'],
    'password' => ['Password', 'የይለፍ ቃል'],
    'pw_placeholder' => ['Enter your password', 'የይለፍ ቃልዎን ያስገቡ'],
    'pw_placeholder_signup' => ['Create a strong password', 'ጠንካራ የይለፍ ቃል ይፍጠሩ'],
    'remember_me' => ['Remember me', 'አስታውሰኝ'],
    'forgot_password' => ['Forgot password?', 'የይለፍ ቃል ረስተዋል?'],
    'or_continue' => ['or continue with', 'ወይም በሌላ ቀጥል'],
    'continue_google' => ['Continue with Google', 'በGoogle ቀጥል'],
    'no_account' => ['Don\'t have an account?', 'መለያ የለዎትም?'],
    'create_one' => ['Create one', 'አዲስ ይፍጠሩ'],
    'secure_note' => ['Your information is encrypted and never shared.', 'የእርስዎ መረጃ ተመስጥሮ ተጠብቆ ይቆያል፤ ከማንም ጋር አይጋራም።'],

    // Left panel (shared)
    'eyebrow' => ['Adama City\'s Rental Marketplace', 'የአዳማ ከተማ የኪራይ ገበያ'],
    'login_left_title1' => ['Welcome back, ', 'እንኳን ደህና መጡ፣ '],
    'login_left_title2' => ['your listings', 'ማስታወቂያዎችዎ'],
    'login_left_title3' => [' are waiting', ' ይጠብቁዎታል'],
    'login_left_desc' => ['Sign in to manage your properties, respond to tenant requests, and keep your rentals in front of the right people.', 'ንብረቶችዎን ለማስተዳደር፣ የተከራዮች ጥያቄዎችን ለመመለስ እና ኪራዩን ለትክክለኛዎቹ ሰዎች ለማሳየት ይግቡ።'],
    'feat_mng' => ['Manage your properties', 'ንብረቶችዎን ያስተዳድሩ'],
    'feat_mng_s' => ['Post, edit, and track listings in one place.', 'ማስታወቂያዎችን በአንድ ቦታ ይለጥፉ፣ ያርትዑና ይከታተሉ።'],
    'feat_reach' => ['Reach local tenants', 'በአካባቢው ያሉ ተከራዮችን ያግኙ'],
    'feat_reach_s' => ['Connect with people actively searching right now.', 'በአሁኑ ጊዜ እየፈለጉ ከሚገኙ ሰዎች ጋር ይገናኙ።'],
    'feat_secure' => ['Secure and private', 'ደህንነቱ የተጠበቀ እና የግል'],
    'feat_secure_s' => ['Your account data is always protected.', 'የመለያዎ መረጃ ሁልጊዜ የተጠበቀ ነው።'],
    'feat_free' => ['Free to get started', 'ለመጀመር ነፃ'],
    'feat_free_s' => ['No upfront listing fees, ever.', 'ምንም የማስታወቂያ ክፍያ የለም።'],
    'feat_unlimited' => ['List unlimited properties', 'ያልተገደበ ንብረት ይለጥፉ'],
    'feat_unlimited_s' => ['Showcase every home or space you manage.', 'የሚያስተዳድሯቸውን ቤቶች ሁሉ ያሳዩ።'],
    'quote_text' => ['"Found a reliable tenant within a week of posting. AdamaRent made everything simple."', '"ማስታወቂያ ከለጠፍኩ በአንድ ሳምንት ውስጥ አስተማማኝ ተከራይ አገኘሁ። AdamaRent ሁሉንም ነገር ቀላል አደረገ።"'],
    'quote_author' => ['— Verified landlord, Adama', '— የተረጋገጠ ቤት አከራይ፣ አዳማ'],

    // Register
    'register_title' => ['Create Account', 'መለያ ፍጠር'],
    'register_subtitle' => ['Join AdamaRent as a landlord. It takes less than a minute.', 'እንደ ቤት አከራይ AdamaRentን ይቀላቀሉ። ከአንድ ደቂቃ በታች ይወስዳል።'],
    'full_name' => ['Full Name', 'ሙሉ ስም'],
    'full_name_ph' => ['Your full name', 'ሙሉ ስምዎ'],
    'email_ph' => ['you@example.com', 'you@example.com'],
    'reg_btn' => ['Create Account', 'መለያ ፍጠር'],
    'admin_setup_key' => ['Admin Setup Key', 'የአስተዳዳሪ የማዋቀሪያ ቁልፍ'],
    'admin_key_ph' => ['Paste admin setup key here', 'የአስተዳዳሪ የማዋቀሪያ ቁልፍ እዚህ ያስቀምጡ'],
    'admin_key_hint' => ['Only needed if you want this account to become the first administrator.', 'ይህ መለያ የመጀመሪያው አስተዳዳሪ እንዲሆን ከፈለጉ ብቻ ያስፈልጋል።'],
    'im_admin' => ['I\'m the site administrator', 'እኔ የጣቢያው አስተዳዳሪ ነኝ'],
    'agree_terms' => ['I agree to the ', 'ከ'],
    'agree_terms2' => [' and ', ' እና ከ'],
    'terms_service' => ['Terms of Service', 'አገልግሎት ውሎች'],
    'privacy_policy' => ['Privacy Policy', 'ግላዊነት ፖሊሲ'],
    'agree_terms_suffix' => ['', ' ጋር እስማማለሁ'],
    'has_account' => ['Already have an account?', 'መለያ አለዎት?'],
    'sign_in_link' => ['Sign in', 'ይግቡ'],
    'register_left_title1' => ['Your property, ', 'ንብረትዎ፣ '],
    'register_left_title2' => ['seen by thousands', 'በሺዎች የሚታይ'],
    'register_left_title3' => [' of tenants', ' ተከራዮች'],
    'register_left_desc' => ['Create your free landlord account and start listing your properties to potential tenants across Adama City.', 'የነፃ የቤት አከራይ መለያዎን ይፍጠሩ እና በአዳማ ከተማ ላሉ ተከራዮች ንብረትዎን መለጠፍ ይጀምሩ።'],
    'secure_reg_note' => ['Your information is encrypted and never shared.', 'የእርስዎ መረጃ ተመስጥሮ ተጠብቆ ይቆያል፤ ከማንም ጋር አይጋራም።'],
];

// Map known English messages -> Amharic
$ERR_MAP = [
    'Invalid password. Please try again.' => 'የይለፍ ቃሉ የተሳሳተ ነው። እባክዎ እንደገና ይሞክሩ።',
    'No account found with this email address.' => 'በዚህ ኢሜይል አድራሻ መለያ አልተገኘም።',
    'Sign-in with Google was cancelled.' => 'በGoogle መግባት ተሰርዟል።',
    'Google sign-in failed. Please try again, or use email &amp; password.' => 'የGoogle መግቢያ አልተሳካም። እባክዎ እንደገና ይሞክሩ፣ ወይም በኢሜይል እና በይለፍ ቃል ይግቡ።',
    'This email is already verified — sign in below.' => 'ይህ ኢሜይል አስቀድሞ ተረጋግጧል — ከዚህ በታች ይግቡ።',
    'Password must be at least 6 characters.' => 'የይለፍ ቃል ቢያንስ 6 ቁምፊዎች መሆን አለበት።',
    'That email address is not valid or its domain can\'t receive mail. Please double-check it and try again.' => 'ያ ኢሜይል አድራሻ የተሳሳተ ነው ወይም ጎራው ደብዳቤ መቀበል አይችልም። እባክዎ አጣርተው እንደገና ይሞክሩ።',
    'An account with this email already exists.' => 'በዚህ ኢሜይል መለያ ቀድሞ አለ።',
    'An admin account already exists. The setup key is no longer valid.' => 'የአስተዳዳሪ መለያ ቀድሞ አለ። የማዋቀሪያ ቁልፉ ከአሁን በኋላ የሚሰራ አይደለም።',
    'Invalid admin setup key. Please check and try again.' => 'የተሳሳተ የአስተዳዳሪ የማዋቀሪያ ቁልፍ። እባክዎ አጣርተው እንደገና ይሞክሩ።',
    'Registration failed. Please try again.' => 'ምዝገባ አልተሳካም። እባክዎ እንደገና ይሞክሩ።',
];

function t($key) {
    global $T, $lang;
    if(!isset($T[$key])) return $key;
    return $lang === 'am' ? $T[$key][1] : $T[$key][0];
}

function tout($text) {
    global $ERR_MAP, $lang;
    if($lang === 'am' && isset($ERR_MAP[$text])) return $ERR_MAP[$text];
    return $text;
}

function lang_switch_url($target) {
    $p = $_GET;
    $p['lang'] = $target;
    $qs = http_build_query($p);
    return basename($_SERVER['SCRIPT_NAME']) . ($qs ? '?' . $qs : '');
}