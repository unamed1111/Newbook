@component('mail::message')
# BookCreated by Admin

You are Crazy **{{$book->title}}** is title

@component('mail::button', ['url' => 'http://localhost:8000/book'])
Come back home
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
