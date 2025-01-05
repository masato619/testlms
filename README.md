# testlms

環境構築

Docker ビルド
1.got clone git@github.com:masato619/testlms.git
2.docker-compose up -d --build

＊MySQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。

Laravel 環境構築
1.docker-compose exec php bash
2.composer install
3..env.example ファイルから.env を作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

(4 以降が出来上がっていません)

使用技術
・PHP 8.0
・Laravel 10.0
・MySQL 8.0

URL
・開発環境：http://localhost/
・phpMyAdmin：http://localhost.8080/
