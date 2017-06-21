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
