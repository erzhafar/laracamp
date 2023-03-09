@component('mail::message')
    # Welcome!

    Hi, {{ $user->name }}
    <br>
    Welcome to Laracamp, your account has been created successfully. Now you can choose your best camp match!

    @component('mail::button', ['url' => route('login')])
        Login Here
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
