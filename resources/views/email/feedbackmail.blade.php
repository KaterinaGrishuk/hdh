
@component('mail::message')

    <html lang="en">
    <body style="text-align: left">
        <h1>Обратная связь</h1>

        @if($data['theme'] == 1)
            Тема: Вопросы по оказанию финансовой помощи<br>
        @endif
        @if($data['theme'] == 2)
            Тема: Могу помочь временной передержкой<br>
        @endif
        @if($data['theme'] == 3)
            Тема: Могу подвезти<br>
        @endif
        @if($data['theme'] == 4)
            Тема: Есть возможность помочь с фотографиями<br>
        @endif
        @if($data['theme'] == 5)
            Тема: Могу помочь с рекламой<br>
        @endif
        @if($data['theme'] == 6)
            Тема: Могу принять участие в мероприятиях<br>
        @endif
        @if($data['theme'] == 7)
            Тема: Вопросы по работе сайта<br>
        @endif
        @if($data['theme'] == 8)
            Тема: Другие вопросы<br>
        @endif
        Имя: {{$data['name']}}<br>
        Контакты: {{$data['contacts']}}<br>
        Сообщение: {{$data['message']}}<br>
    </body>
    </html>
@endcomponent

