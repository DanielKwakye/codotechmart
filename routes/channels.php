<?php

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
use App\Courier;

Broadcast::channel('App.Courier.{id}', function ($courier, $id) {
    return $courier->id === Courier::findOrNew($id);
});
