<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## 88823764 SE Camp - Laravel

### 1. ครั้งแรกที่รันให้ทำการ build ก่อน ด้วยคำสั่ง (ทำแค่ครั้งแรก หรือ มีการแก้ Dockerfile)

```sh
docker compose build app
```

### 2. หลังจาก build แล้วให้ทำการรัน app ด้วยคำสั่ง

```sh
docker compose up -d
```

### 3. หลังจากนั้นให้ลองรันคำสั่งใน docker ว่าสามารถรันได้ปกติหรือไม่ ด้วยคำสั่ง

```sh
docker compose exec app ls -la
```

> หมายเหตุ สามารถรันคำสั่งอื่นๆ ได้โดยการเปลี่ยน  ls -la เป็น command อื่น ๆ

```sh
docker compose exec app <command>
```

### 4. ในครั้งแรกต้องทำการติดตั้ง package ของ laravel ก่อน ด้วยคำสั่ง composer install

```sh
docker compose exec app composer install
```
