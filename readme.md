<!-- <p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p> -->

<!-- <p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

## What is SaucySong ?

SaucySong is a community-based web app allowing friends to share their music discoveries from YouTube and SoundCloud. Every new entry is sorted in its respective music genre/style, making the process of finding music you like easier. 

- Ranking system
- Points system preventing users from posting crappy commercial music (the community decides)
- Subscribing feature, a-la-SoundCloud, putting your friends' discoveries ahead in your feed
- No single bit of music is stored on our servers, it is a simple relay to SoundCloud/YouTube

## How can I help ?

We mostly need designers and front-end coders (gosh do I hate that part), but any idea that could enhance the app is more than welcome to be shared !

## Development environment

In order to contribute to the code, you'll need to set up a few things ...

- [Laravel Framework]https://laravel.com/docs/5.4/installation
- A MySQL database following the exemple .env.exemple file configuration
- A proper .env file (follow the .env.exemple file structure)

Once you've installed the framework and its dependencies, in the project's folder run:

-> php artisan migrate (to create the database tables, assuming you created a database and configured your .env file)

Then, you should be able to tinker around with the web app. You'll probably want to use *php artisan tinker* to add content in a faster and more convenient fashion.


## What about copyrights and stuff ?

Well I don't know, wait and see.


## Contact

Don't hesitate to contact me at <theo.morales.fr@gmail.com> for any question.