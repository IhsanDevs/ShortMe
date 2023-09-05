# Url Shortener Laravel
> **Shorten. Share. Simplify.**

_Discover the future of URL shortening with our dynamic subdomain-based application! Say goodbye to lengthy web addresses as our innovative solution empowers you to effortlessly transform any URL into a concise and memorable subdomain. Experience the convenience of on-the-fly subdomain generation, making sharing links simpler and more engaging than ever before. Embrace the future of web navigation with our URL shortening app and elevate your online experience._

## Features
- [x] Shorten any URL
- [x] Share links with ease
- [x] Shorten links using subdomains
- [x] FREE to use
- [x] No registration required
- [x] No ads
- [x] No tracking
- [x] SQLite database. No configuration required

## Requirements
- PHP >= 8.1
- Composer
- Node.js
- For Windows:
  - [Laragon](https://laragon.org/download/)
- For Mac:
  - [Valet](https://laravel.com/docs/10.x/valet#installation)
- For Linux:
  - [Valet Linux](https://cpriego.github.io/valet-linux/)
## Installation
1. Clone the repository
    ```shell
   git clone https://github.com/IhsanDevs/Short.me.git
    ```
2. Run this commands:
    ```shell
    cd ShortMe
    ```
    ```shell
    composer install
    ```
    ```shell
    npm install
    ```
    ```shell
    cp .env.example .env
    ```
    ```shell
    php artisan key:generate
    ```
    ```shell
    php artisan migrate
    ```
   **For MacOS and Linux:**
    ```shell
    valet link
    ```
   **For Windows:** You can use [Laragon](https://laragon.org/download/) for like Valet.
3. Open http://shortme.test in your browser.
4. Enjoy!

## Demo
>_Coming soon..._

## License
> Copyright 2023 by Ihsan Devs. All rights reserved. 
> 
> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
>
>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
>
>THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

