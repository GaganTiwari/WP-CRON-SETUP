<?php 
/*
* Gagan Tiwari
*/

//code to create custom time period.
add_filter('cron_schedules','my_cron_schedules');
function my_cron_schedules($schedules){
    if(!isset($schedules["15min"])){
        $schedules["15min"] = array(
            'interval' => 15*60,
            'display' => __('Once every 15 minutes'));
    }
    return $schedules;
}


//schedule event here.
wp_schedule_event( time(), '15min', 'my_custom_function_action' );


//here your function with code.
add_action( 'my_custom_function_action', 'my_custom_function_code' );
function amy_custom_function_code(){ 
	
  //here your magic code you want runs.
  
}
