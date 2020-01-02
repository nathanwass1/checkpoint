#!/usr/share/php
<?php

require __DIR__.'/vendor/autoload.php';
//use Symfony\Component\EventDispatcher\EventDispatcher;
//use Symfony\Component\EventDispatcher\Event;

$dispatcher = new EventDispatcher;

$dispatcher->addListener('UserSubscribed', function(Event $event){
    
    die('handle it');
    
});

$dispatcher->dispatch('UserSubscribed');