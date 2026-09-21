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

    // Home page
    'nav_home' => ['Home', 'መነሻ'],
    'nav_property_types' => ['Property types', 'የንብረት ዓይነቶች'],
    'nav_how_it_works' => ['How it works', 'እንዴት እንደሚሰራ'],
    'nav_contact' => ['Contact', 'አግኙን'],
    'nav_login' => ['Login', 'ግባ'],
    'nav_post_house' => ['Post a Property', 'ንብረት ይለጥፉ'],
    'nav_dashboard' => ['Dashboard', 'ዳሽቦርድ'],
    'nav_profile' => ['My Profile', 'መገለጫዬ'],
    'nav_signout' => ['Sign Out', 'ውጣ'],
    'hero_title1' => ['Find Your Perfect ', 'በአዳማ ፍጹሙን '],
    'hero_title2' => ['Rental Home', 'የኪራይ ቤት'],
    'hero_title3' => [' in Adama', ' ያግኙ'],
    'hero_desc' => ['The trusted digital marketplace connecting landlords and tenants across Adama City. Search, compare, and secure your next property.', 'በአዳማ ከተማ ቤት አከራዮችን እና ተከራዮችን የሚያገናኝ ታማኝ ዲጂታል ገበያ። ቀጣዩን ንብረትዎን ይፈልጉ፣ ያወዳድሩ እና ያስጠብቁ።'],
    'btn_get_started' => ['Get Started', 'እንጀምር'],
    'btn_list_property' => ['List Your Property', 'ንብረትዎን ይዘርዝሩ'],
    'stat_properties' => ['Properties Listed', 'የተዘረዘሩ ንብረቶች'],
    'stat_landlords' => ['Verified Landlords', 'የተረጋገጡ ቤት አከራዮች'],
    'stat_kebeles' => ['Kebeles Covered', 'የተሸፈኑ ቀበሌዎች'],
    'stat_tenants' => ['Happy Tenants', 'ደስተኛ ተከራዮች'],
    'cat_tag' => ['Property Types', 'የንብረት ዓይነቶች'],
    'cat_heading' => ['Browse by Category', 'በምድብ ይፈልጉ'],
    'cat_sub' => ['From cozy rooms to commercial spaces, find exactly what you need.', 'ከምቹ ክፍሎች እስከ የንግድ ቦታዎች፣ የሚፈልጉትን በትክክል ያግኙ።'],
    'cat_single' => ['Single Homes', 'የግል ቤቶች'],
    'cat_single_desc' => ['Cozy rooms and traditional houses perfect for students and working professionals.', 'ለተማሪዎች እና ባለሙያዎች ተስማሚ የሆኑ ምቹ ክፍሎች እና ባህላዊ ቤቶች።'],
    'cat_apt' => ['Apartments & Villas', 'አፓርትመንቶች እና ቪላዎች'],
    'cat_apt_desc' => ['Modern apartments and luxury villas in prime locations across Adama.', 'በአዳማ ውስጥ በምርጥ ቦታዎች የሚገኙ ዘመናዊ አፓርትመንቶች እና የቅንጦት ቪላዎች።'],
    'cat_com' => ['Commercial Spaces', 'የንግድ ቦታዎች'],
    'cat_com_desc' => ['Offices, shops, and warehouses for businesses of all sizes.', 'ለሁሉም መጠን የንግድ ድርጅቶች ቢሮዎች፣ ሱቆች እና መጋዘኖች።'],
    'hiw_tag' => ['How It Works', 'እንዴት እንደሚሰራ'],
    'hiw_heading' => ['Simple as 1-2-3', 'ቀላል እንደ 1-2-3'],
    'step1_t' => ['Get Started', 'ይጀምሩ'],
    'step1_d' => ['Browse listings by category, location, and price range to find your ideal property.', 'ተስማሚውን ንብረት ለማግኘት በምድብ፣ በቦታ እና በዋጋ ይፈልጉ።'],
    'step2_t' => ['Contact Landlord', 'ቤት አከራዩን ያግኙ'],
    'step2_d' => ['Get the landlord\'s contact details and reach out directly to schedule a visit.', 'የቤት አከራዩን የመገናኛ አድራሻ ያግኙ እና የጉብኝት ቀን ለማስያዝ በቀጥታ ያነጋግሩ።'],
    'step3_t' => ['Move In', 'ወደ ቤት ይግቡ'],
    'step3_d' => ['Finalize your agreement and move into your new home or business space.', 'ስምምነትዎን ይደመድሙ እና ወደ አዲሱ ቤትዎ ወይም የንግድ ቦታዎ ይግቡ።'],
    'footer_tagline' => ['The first digital marketplace for property rentals in Adama City. Connecting landlords and tenants directly, saving you time and money.', 'በአዳማ ከተማ ለንብረት ኪራይ የመጀመሪያው ዲጂታል ገበያ። ቤት አከራዮችን እና ተከራዮችን በቀጥታ ያገናኛል፣ ጊዜዎን እና ገንዘብዎን ይቆጥብልዎታል።'],
    'footer_quick' => ['Quick Links', 'ፈጣን አገናኞች'],
    'footer_browse' => ['Browse Properties', 'ንብረቶችን ይፈልጉ'],
    'footer_signin' => ['Sign In', 'ይግቡ'],
    'footer_categories' => ['Categories', 'ምድቦች'],
    'footer_apartments' => ['Apartments', 'አፓርትመንቶች'],
    'footer_villas' => ['Villas', 'ቪላዎች'],
    'footer_shops' => ['Shops', 'ሱቆች'],
    'footer_contact' => ['Contact', 'አግኙን'],
    'footer_rights' => ['All rights reserved.', 'ሁሉም መብቶች የተጠበቁ ናቸው።'],

    // Browse / index page
    'find_properties' => ['Find Properties in Adama', 'በአዳማ ውስጥ ንብረቶችን ያግኙ'],
    'listings_count' => ['listings', 'ማስታወቂያዎች'],
    'all_categories' => ['All Categories', 'ሁሉም ምድቦች'],
    'residential' => ['Residential', 'የመኖሪያ'],
    'single_home' => ['Single Home', 'የግል ቤት'],
    'apartment' => ['Apartment', 'አፓርትመንት'],
    'villa' => ['Villa', 'ቪላ'],
    'commercial' => ['Commercial', 'የንግድ'],
    'office' => ['Office', 'ቢሮ'],
    'shop' => ['Shop', 'ሱቅ'],
    'warehouse' => ['Warehouse', 'መጋዘን'],
    'search_kebele' => ['Search by Kebele...', 'በቀበሌ ይፈልጉ...'],
    'max_price' => ['Max Price (ETB)', 'ከፍተኛ ዋጋ (ብር)'],
    'newest_first' => ['Newest First', 'አዲስ መጀመሪያ'],
    'price_low' => ['Price: Low to High', 'ዋጋ፡ ከዝቅተኛ ወደ ከፍተኛ'],
    'price_high' => ['Price: High to Low', 'ዋጋ፡ ከከፍተኛ ወደ ዝቅተኛ'],
    'search_btn' => ['Search', 'ፈልግ'],
    'reset_btn' => ['Reset', 'ሰርዝ'],
    'no_properties' => ['No properties found', 'ምንም ንብረት አልተገኘም'],
    'try_adjust' => ['Try adjusting your search filters or check back later.', 'የፍለጋዎን ማጣሪያ ያስተካክሉ ወይም በኋላ ይመልሱ።'],
    'load_more' => ['Load More', 'ተጨማሪ ይጫኑ'],
    'etb_month' => ['ETB/month', 'ብር/በወር'],
    'notifications' => ['Notifications', 'ማሳወቂያዎች'],
    'unread' => ['unread', 'ያልተነበቡ'],
    'no_notifications' => ['No notifications yet', 'እስካሁን ማሳወቂያ የለም'],
    'mark_all_read' => ['Mark all as read', 'ሁሉንም እንደተነበቡ ምልክት ያድርጉ'],
    'new_posts' => ['New Posts', 'አዲስ ልጥፎች'],
    'role_landlord' => ['Landlord', 'ቤት አከራይ'],
    'role_admin' => ['Admin', 'አስተዳዳሪ'],
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