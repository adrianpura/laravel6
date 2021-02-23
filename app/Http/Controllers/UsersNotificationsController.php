<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersNotificationsController extends Controller
{
    public function show(){
//        $notifications = auth()->user()->unreadNotifications;
//        $notifications->markAsRead();
        return view('notifications.show',[
//            'notifications' => $notifications
            'notifications' => tap(auth()->user()->unreadNotifications)->markAsRead()
        ]);
    }
}
