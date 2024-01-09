
#PHP-------------------------------------------------------------
# ベースとなるイメージを指定
FROM php:8.1.18-fpm

# 必要なパッケージやPHPの拡張モジュールをインストール
RUN apt-get update && apt-get install -y \
	git \
	curl \
	zip \
	unzip \
    && docker-php-ext-install pdo_mysql

# 独自のphp.iniファイルをコンテナ内にコピー
COPY ./docker/php/php.ini /usr/local/etc/php/
COPY ./src/php /var/www/html

# 作業ディレクトリを設定
WORKDIR /var/www/html


#NGINX----------------------------------------------------------------


# アプリケーションのソースコードをコンテナにコピー
#COPY ./src /var/www/html
