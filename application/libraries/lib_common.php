<?php

class lib_common {

    function retrieve($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_USERAGENT, 'facebook-php-2.0');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    function rand_str($length = 8, $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890') {
        // Length of character list
        $chars_length = (strlen($chars) - 1);

        // Start our string
        $string = $chars{rand(0, $chars_length)};

        // Generate random string
        for ($i = 1; $i < $length; $i = strlen($string)) {
            // Grab a random character from our list
            $r = $chars{rand(0, $chars_length)};

            // Make sure the same two characters don't appear next to each other
            if ($r != $string{$i - 1})
                $string .= $r;
        }

        // Return the string
        return $string;
    }

    function time_ago($date) {

        if (empty($date)) {

            return "No date provided";
        }

        $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");

        $lengths = array("60", "60", "24", "7", "4.35", "12", "10");

        $now = time();

        $unix_date = strtotime($date);

// check validity of date

        if (empty($unix_date)) {

            return "Bad date";
        }

// is it future date or past date

        if ($now > $unix_date) {

            $difference = $now - $unix_date;

            $tense = "ago";
        } else {

            $difference = $unix_date - $now;
            $tense = "from now";
        }

        for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {

            $difference /= $lengths[$j];
        }

        $difference = round($difference);

        if ($difference != 1) {

            $periods[$j].= "s";
        }

        return "$difference $periods[$j] {$tense}";
    }

    function strleft($s1, $s2) {
        return substr($s1, 0, strpos($s1, $s2));
    }

    function get_location_name($id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_location_name($id);
    }

    function get_city_name($id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_city_name($id);
    }
    
    function get_city_id($city_url) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_city_id($city_url);
    }
    
    function get_cuisine_name($id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_cuisine_name($id);
    }
    
    function total_city_restaurant($id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_total_city_restaurants($id);
    }
    function total_nv_restaurant($id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_nv_restaurants_count_by_city($id);
    }
    function total_home_delivery_restaurant($id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_home_delivery_restaurants_count_by_city($id);
    }
    function total_banquet_restaurant($id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_banquet_restaurants_count_by_city($id);
    }
    
    function total_favorites_restaurant($rest_id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->get_restaurants_favorite_count($rest_id);
    }
    
    function check_if_users_favorite($rest_id, $user_id) {
        $this->CI = &get_instance();
        $this->CI->load->model('mdl_desktop');
        return $this->CI->mdl_desktop->check_if_users_favorite($rest_id, $user_id);
    }

}

?>