<h1>Bu proje bir Admin Panelli Blog Sitesi projesidir.</h1>
<h2>Ücretsiz Bootstrap templateleri kullanılmıştır.</h2>

<h3>Gereklilikler</h3>
<hr>
<ol>
<li>PHP min v.8</li>
<li>DB server (tavsiye edilen:MySQL)</li>
<li>composer min v.2</li>
<li>nodejs min v.14</li>
</ol>

<h3>Projeyi localde ayağa kaldırmak için izlenmesi gereken yol</h3>
<hr>
<p>Lütfen codeları proje klasörü içersinde yazdığınızdan emin olun 8)</p>
<ol>
<li><code>npm install</code></li>
<li><code>composer install</code></li>
<li><code>cp .env.example .env</code></li>
<li>Yeni bir database oluşturun.</li>
<li>.env dosyası içersindeki database bilgilerini girin.</li>
<p>Not: 2 haftadır var olan bir bugdan ötürü AppServiceProvider.php dosyası içersindeki boot fonksiyonunun içindeki kodları yorum satırına almamız gerekiyor. Proje ayağa kalktıktan sonra bu işlemi eski haline getirmeniz gerekiyor.</p>
<li><code>php artisan migrate:fresh --seed</code></li>
<li><code>php artisan key:generate</code></li>
<li><code>php artisan serve</code></li>
</ol>
<br>
<p>Projede Seeder kullanılmıştır. 6. adım ile seederlarla gelen bütün fake dataları Database'e yüklemiş oluyoruz.</p>






<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

