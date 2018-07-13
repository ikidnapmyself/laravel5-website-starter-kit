### Laravel 5 Website Starter-Kit

This is a sample project to use when you make a static website. Basically prepare your template for blade template 
engine and put your template assets into `public` folder.

To run this sample project, please follow these steps.

install dependencies:

    composer install
    
create your own environment file: 

    php -r "file_exists('.env') || copy('.env.example', '.env');
    
    
generate an application key:

    php artisan key:generate
    

It contains some basics. Set up your environment variables in `.env` file to use YouTube and Captcha features.

- Language switcher
- An example component defined as breadcrumb
- YouTube API integration (Requires YouTube API Key, here you go https://developers.google.com/youtube/v3/getting-started)
- Contact form with form validation and e-mail
- Capcha Control for contact form (Obtain from https://www.google.com/recaptcha/admin)

    
Bob is your uncle! Enjoy.