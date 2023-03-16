@component('mail::message')
    # Your Transaction Has Been Confirmed

    Hi, {{ $checkout->User->name }}

    Your transaction has been confirmed, now you can enjot benefits of <b>{{ $checkout->Camp->title }}</b> camp.
    @component('mail::button', ['url' => route('user.dashboard')])
        My Dashboard
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
