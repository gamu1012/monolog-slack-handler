# monolog-slack-handler

monologを利用したSlackBotのサンプル

# 環境構築
```
composer install
cp .env.default .env

.envのSLACK_WEB_API_KEYにBotのWEB_API_KEYを設定する
```

# 実行
```
php src/SlackBot.php
```