@component('mail::message')
# Анкета волонтёра

    Имя: {{$data['name']}}
    Возраст: {{$data['age']}}
    Город: {{$data['city']}}
    Телефон: {{$data['phone']}}
    E-mail: {{$data['mail']}}
    Сфера деятельности: {{$data['activities']}}
    О себе: {{$data['about']}}


@endcomponent
