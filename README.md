<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

Laravel APP to remove background from an image

## How to setup ( requires PHP version > 8 && Python )

- composer install
- cp .env.example .env ( enter your DB credentials )
- open cmd
- run pip install rembg

------------- There is no frontend implementation so need to build assets -------------

## How to use

- Just post an image with the key image to the endpoint <strong>/api/remove</strong>

You will get a url to the image. There is no model trained for removing the images, so the results won't perfect.

## Contribution

Thank you for considering contributing to the Repo to improve removal quality! Fork and submit a PR
