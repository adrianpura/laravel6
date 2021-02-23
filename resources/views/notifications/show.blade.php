@extends('layouts.app')

@section('content')
<div class="container">
     <ul>
         @forelse($notifications as $notification)
            <li>
                @if($notification->type === 'App\Notifications\PaymentReceived')
                    we have received a payment of P{{ $notification->data['amount']/100 }} from you.
                @endif
            </li>
         @empty
            <li>you have no unread notifications</li>
         @endforelse
     </ul>
</div>
@endsection