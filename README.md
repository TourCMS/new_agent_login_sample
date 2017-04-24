# Implementation sample for "new agent login" process
A little sample for new agent login process using php wrapper

## Steps

1. Config your credentials in config.php file

  $channel_id = 1234;                                                             // Your channel_id (TourCMS admin panel > Configuration & setup > API)
  $private_key = "XXXXXXXXXXX";                                                   // Your private_api_key associated to the channel (TourCMS admin panel > Configuration & setup > API)
  $final_url = "http://WEBSITE.com/destination_url";                              // Your destination_url here (destination page to return once logged in - step2.php in this sample project -)
  $cancel_page_url = "http://WEBSITE.com/cancel_page";                            // Your cancel page url here (cancel page to return when press button 'Cancel' and has not logged in - cancel_page.html in this sample project -)

2. Go to step1.html and click in start_login button. You will be redirected to login page.

3. Log in with your agent credentials and you will obtain your agent_booking_key if you are login successfully else redirected to the cancel_page.

## Installation NOTES

### For testing locally

#### Download tourcms projects

* Download next projects: admin, core, api and new_agent_login_sample.

General (actual branchs with this functionality):

    *    admin -> https://github.com/TourCMS/admin.tourcms.com/tree/feature/TOURCMS-464_US_login_screen_for_agents_to_log_in_to_their_website_to_book
    *    new_agent_login_sample -> https://github.com/TourCMS/new_agent_login_sample/tree/feature/TOURCMS-475-Implementation_sample_new_agent_login_process

For testing endpoint 1 (create new entry into mp_partner_api_login):

    *    core -> https://github.com/TourCMS/tourcms_core/tree/feature/TOUCMS-468_Add_start_agent_login_endpoint
    api -> https://github.com/TourCMS/api.tourcms.com/tree/feature/TOUCMS-468_Add_start_agent_login_endpoint

For testing endpoint 2 (check for status and retrieve booking key)

    *    core -> https://github.com/TourCMS/tourcms_core/tree/feature/TOURCMS-472_retrieve_agent_booking_key
    *    api -> https://github.com/TourCMS/api.tourcms.com/tree/feature/TOURCMS-472_retrieve_agent_booking_key


#### LOCALHOST CONFIGURATION

* Need an agent and supplier site (operator) user set up

* Change login url to localhost in tourcms-core:
    lib/api_calls/start_agent_login.php -> $login_page_url = "https://admin.tourcms.com/partner/agent_connect_login.php";
    EG. "http://192.1.1.1/admin.tourcms.com/partner/agent_connect_login.php"

* Configure new_agent_login_sample: config.php
