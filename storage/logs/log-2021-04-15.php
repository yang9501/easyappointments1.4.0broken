<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-15 23:23:57 --> Email could not been sent. Mailer Error (Line 166): SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
ERROR - 2021-04-15 23:23:57 --> #0 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/application/libraries/Notifications.php(94): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/New_Yor...')
#1 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/application/controllers/Appointments.php(480): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/vendor/codeigniter/framework/system/core/CodeIgniter.php(532): Appointments->ajax_register_appointment()
#3 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/index.php(341): require_once('/home/customer/...')
#4 {main}
ERROR - 2021-04-15 23:55:02 --> Email could not been sent. Mailer Error (Line 166): SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
ERROR - 2021-04-15 23:55:02 --> #0 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/application/libraries/Notifications.php(94): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/New_Yor...')
#1 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/application/controllers/Appointments.php(480): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/vendor/codeigniter/framework/system/core/CodeIgniter.php(532): Appointments->ajax_register_appointment()
#3 /home/customer/www/thearmedminoritytraining.com/public_html/easyappointments/index.php(341): require_once('/home/customer/...')
#4 {main}
