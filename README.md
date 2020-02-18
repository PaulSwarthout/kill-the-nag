# kill-the-nag
Kills the WordPress nag message when your WordPress version needs to be updated.

When the currently installed version of WordPress is out of date, WordPress puts a message at the top of your dashboard that is there until such time as you decide to upgrade.

That can be a pain. I have a website that is running on an IIS server. The back end is written in Classic ASP. The front-end is running WordPress 4.9.6 because the installed version of 
PHP is 5.4.45. Later versions of PHP do not run on that server. I cannot upgrade without moving to a new server, which will crash the backend.

Now you can do something about it. Download this plugin. Activate it. And goodbye nag message.

In a later version, I'll add some code so that it will write the message to the error_log, and/or display the message once a week, and then go away.
