<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/


Broadcast::channel('newTask', function(){
    return true;
});

Broadcast::channel('taskRemoved', function(){
    return true;
});

Broadcast::channel('taskUpdated', function(){
    return true;
});

