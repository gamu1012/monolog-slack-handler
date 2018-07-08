<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = new \Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

$logger = new \Monolog\Logger('slack');
$logger->pushHandler(
    new \Monolog\Handler\SlackWebhookHandler(
        $_ENV['SLACK_WEB_API_KEY'],
        null,
        null,
        true,
        '',
        true,
        true,
        \Monolog\Logger::INFO
    )
);

// You will receive a message on your Slack
$logger->info("first message\nEmoji :thumbsup: ");
