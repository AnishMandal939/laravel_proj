> #1 - installed project using composer

> composer create-project laravel/laravel tracker

<detail>
    tracker is a project name you can name any
</detail>

> Created Route in web.php


> `used Google map API, Pusher(signup for broadcast)` used broadcast which is generally known as websockets to analyze all the changes that is changed and update location

> created event to update location using laravel cmd - `php artisan make:event CarMoved`

> event will get created inside app/Event

<p>CarMoved - is my eventName you can name any , this will make a class </p>

> after signing to pusher create a project and copy the key and use it in env file as shown below


> set `BROADCAST_DRIVER=log` to - `BROADCAST_DRIVER=pusher` in env file

> pass below in env file

> PUSHER_APP_ID=1354663
> PUSHER_APP_KEY=af68b786417c3794710e
> PUSHER_APP_SECRET=96078b73a70721938196
> PUSHER_APP_CLUSTER=us2



## Routes made
<details>

    Route::get('/app', function () {
    return view('app');
});
Route::get('/move', function () {
    //  event(new CarMoved(26.516049, 86.763895));
        // event(new CarMoved(26.652368,87.013838));
    // event(new CarMoved(26.66667, 87.28333));
});
    <summary>
    <span>Code for routes in web.php</span>
    </summary>
</details>

> `npm install` -- will install dependencies if not installed

> `npm run build` after creating event to mix all bootstrap that is being made inside resources js app.js && bootstrap.js

> `php artisan serve `to run project

> all the map work is done inside `app.blade.php` and pusher is working from carmoved event handler