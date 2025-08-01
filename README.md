# Symfony Docker Loyiha

Bu loyiha [Symfony](https://symfony.com/) PHP frameworki va [Docker](https://www.docker.com/) konteyner texnologiyasi asosida ishlab chiqilgan. Docker yordamida loyihani tez va oson ishga tushirishingiz mumkin.

## Talablar

Quyidagi dasturlar kompyuteringizda o‘rnatilgan bo‘lishi kerak:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/)
- (Ixtiyoriy) [Make](https://www.gnu.org/software/make/) — foydalanuvchiga qulayroq buyruqlar uchun

## Loyihani ishga tushirish

1. Repozitoriyani klonlang:

```bash
git clone https://github.com/abbosbey2002/Symfony-Products-app.git
cd Symfony-Products-app
````

2. `.env` faylini sozlang (agar kerak bo‘lsa):

```bash
cp .env.example .env
```

3. Docker konteynerlarini ishga tushiring:

```bash
docker-compose up -d --build
```

4. Symfony server quyidagi manzilda mavjud bo‘ladi:

```bash
http://localhost:8000
```

5. Composer kutubxonalarini o‘rnating:

```bash
docker-compose exec php composer install
```

6. Baza yaratish va migratsiyalarni ishga tushirish:

```bash
docker-compose exec php bin/console doctrine:database:create
docker-compose exec php bin/console doctrine:migrations:migrate
```

## Foydali buyruqlar

```bash
# PHP konteyneriga kirish
docker-compose exec php bash

# Symfony cache tozalash
docker-compose exec php bin/console cache:clear


## Tuzilma

* `php`: Symfony uchun PHP 8.2 konteyner
* `nginx`: Veb server
* `db`: PostgreSQL
<!-- * `node`: Frontend -->

## Lisensiya

MIT

---

```
