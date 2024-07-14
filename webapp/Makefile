SERVICE_NAME = ''

build: # 前サービスをビルド
	docker compose build

build_select: #特定のサービスをビルド
	docker compose build $(SERVICE_NAME)

build_nocache: #キャッシュ無視してビルド
	docker compose build --no-cache

env: #.env.exampleから.envをコピー & key生成まですること。
	cp .env.example .env
key: # make key
	docker compose exec apache bash -c "php artisan key:generate"

migration: #table migrate
	docker compose exec apache bash -c "php artisan migrate"

php: #web serverにアクセス
	docker compose exec apache bash

db: #db serverにアクセス
	docker compose exec db bash

up:
	docker compose up -d

down:
	docker compose down

downv:
	docker compose down -v