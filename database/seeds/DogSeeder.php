<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createDogs();
        $this->addImageToDogs();
    }

    public function createDogs()
    {
        DB::table('dogs')->truncate();
        $data = [
            [
                'name' => 'Кики',
                'gender' => '2',
                'age' => '4.5',
                'height' => '38',
                'wool' => 'Короткая',
                'color' => 'Лесной',
                'character' => 'Игривая, активная, ласковая',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Собака-целовака-улыбака',
                'slug' => str_slug('Кики')
            ],
            [
                'name' => 'Люся',
                'gender' => '2',
                'age' => '7',
                'height' => '48',
                'wool' => 'Средней длины',
                'color' => 'Подпалый',
                'character' => 'Спокойная, ласковая со «своими», осторожная с чужими',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Долго привыкает к новым людям, но после длительного общения очень нежная',
                'slug' => str_slug('Люся')
            ],
            [
                'name' => 'Полкан',
                'gender' => '1',
                'age' => '4',
                'height' => '43',
                'wool' => 'Короткая',
                'color' => 'Белый с пятнышками',
                'character' => 'Активный, добрый, любопытный',
                'vet' => 'Нет 1 лапы, привит, обработан от паразитов, кастрирован',
                'information' => 'Отсутствие одной лапы никак не сказывается на жизнерадостности Полкана',
                'slug' => str_slug('Полкан')

            ],
            [
                'name' => 'Бари',
                'gender' => '1',
                'age' => '6',
                'height' => '60',
                'wool' => 'Средней длины',
                'color' => 'Белый',
                'character' => 'Нежный, капризный, спокойный',
                'vet' => 'Здоров, привит, обработан от паразитов, кастрирован',
                'information' => 'С предостережением относится к новым людям, однако выбрав «своего» человека, будет самым верным псом на свете',
                'slug' => str_slug('Бари')

            ],
            [
                'name' => 'Слива',
                'gender' => '1',
                'age' => '6',
                'height' => '48',
                'wool' => 'Короткая',
                'color' => 'Черная с белым пятнышком на груди',
                'character' => 'Самостоятельная, ласковая, добрая',
                'vet' => 'Небольшие проблемы с желудком, привита, обработана от паразитов, стерилизована',
                'information' => 'Любитель искать мышей',
                'slug' => str_slug('Слива')

            ],
            [
                'name' => 'Гарси',
                'gender' => '2',
                'age' => '8',
                'height' => '55',
                'wool' => 'Короткая',
                'color' => 'Трехцветный',
                'character' => 'Флегматичная, трогательная, человеколюбивая',
                'vet' => 'Нет 1 глазика, в остальном здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Любитель полежать на диване, в обнимку с человеком',
                'slug' => str_slug('Гарси')

            ],
            [
                'name' => 'Веда',
                'gender' => '2',
                'age' => '7',
                'height' => '48',
                'wool' => 'Средней длины',
                'color' => 'Черный с белой грудкой',
                'character' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'vet' => '',
                'information' => 'С подозрением относится к людям, при правильном подходе любит чтобы гладили',
                'slug' => str_slug('Веда')

            ],
            [
                'name' => 'Кеша',
                'gender' => '1',
                'age' => '12',
                'height' => '40',
                'wool' => 'Средней длины',
                'color' => 'Чепрачный',
                'character' => 'Капризный, в меру активный, харизматичный',
                'vet' => 'Небольшие проблемы с сердцем, привит, обработан от паразитов, не кастрирован',
                'information' => 'Сильно пострадал от рук людей, иногда проявляет характер, может огрызнуться, но и ненавязчивые поглаживания тоже признаёт',
                'slug' => str_slug('Кеша')

            ],
            [
                'name' => 'Чернушка',
                'gender' => '2',
                'age' => '4',
                'height' => '44',
                'wool' => 'Средней длины',
                'color' => 'Шоколадный',
                'character' => 'Контактная, ненавязчивая, трогательная',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Плюшевая девочка, предпочитает спокойные прогулки',
                'slug' => str_slug('Чернушка')

            ],
            [
                'name' => 'Росинка',
                'gender' => '2',
                'age' => '3',
                'height' => '40',
                'wool' => 'Короткая',
                'color' => 'Серый',
                'character' => 'В меру активная, человеко-ориентированная, ласковая',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Умеет подстраиваться под характер человека, может быть активной, но и с удовольствием полежит на диване',
                'slug' => str_slug('Росинка')

            ],
            [
                'name' => 'Сильва',
                'gender' => '2',
                'age' => '2.5',
                'height' => '65',
                'wool' => 'Средней длины',
                'color' => 'Трёхцветный',
                'character' => 'Аактивная, человеко-любящая, уверенная',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Всегда просит внимания, собака-целовака',
                'slug' => str_slug('Сильва')

            ],
            [
                'name' => 'Бархат',
                'gender' => '1',
                'age' => '4',
                'height' => '55',
                'wool' => 'Средней длины',
                'color' => 'Чепрачный',
                'character' => 'Преданный, ласковый, харизматичный',
                'vet' => 'Нет одного глаза, здоров, привит, обработан от паразитов, кастрирован',
                'information' => 'Настоящий защитник, ласковый со своими, но может проявлять характер',
                'slug' => str_slug('Бархат')

            ],
            [
                'name' => 'Чара',
                'gender' => '2',
                'age' => '1.5',
                'height' => '60',
                'wool' => 'Средней длины',
                'color' => 'Серая',
                'character' => 'Активная, игривая, весёлая',
                'vet' => 'Здорова, привита, обработана от паразитов, не стерилизована',
                'information' => 'Молодая, активная девочка отличный компаньон для человека',
                'slug' => str_slug('Чара')
            ],
            [
                'name' => 'Бона',
                'gender' => '2',
                'age' => '1.5',
                'height' => '58',
                'wool' => 'Короткая',
                'color' => 'Белая',
                'character' => 'Уютная, терпеливая, немного пугливая',
                'vet' => 'Здорова, привита, обработана от паразитов',
                'information' => 'Бона учится доверять людям, никакой агрессии не проявляет, но иногда вздрагивает от резких движений',
                'slug' => str_slug('Бона')

            ],
            [
                'name' => 'Рита',
                'gender' => '2',
                'age' => '2',
                'height' => '58',
                'wool' => 'Средней длины',
                'color' => 'Рыжий',
                'character' => 'Активная, жизнерадостная, дружелюбная',
                'vet' => 'Перенесла операцию на ножке, сейчас полностью здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Активно идёт на контакт с человеком, но осторожничает, легко сходится с другими собаками',
                'slug' => str_slug('Рита')
            ],
            [
                'name' => 'Альма',
                'gender' => '2',
                'age' => '4',
                'height' => '42',
                'wool' => 'Средней длины',
                'color' => 'Бело-чёрная',
                'character' => 'Осторожная, пугливая, адаптирующаяся',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Альма только учится доверять людям, может прятаться в углу, однако быстро адаптируется и делает большие успехи',
                'slug' => str_slug('Альма')

            ],
            [
                'name' => 'Шерри',
                'gender' => '2',
                'age' => '2',
                'height' => '45',
                'wool' => 'Короткая',
                'color' => 'Серая',
                'character' => 'Кроткая, тихая, нежная',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Немного пугливая девочка, не проявляет агрессии, на прогулке раскрывается и становится активнее и веселее',
                'slug' => str_slug('Шерри')

            ],
            [
                'name' => 'Молли',
                'gender' => '2',
                'age' => '2',
                'height' => '48',
                'wool' => 'Средней длины',
                'color' => 'Черепашка',
                'character' => 'Робкая, деликатная, ласковая',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Попадая в незнакомую среду, немного осторожничает, однако потом активно идёт на контакт и просит внимания',
                'slug' => str_slug('Молли')

            ],
            [
                'name' => 'Поночка',
                'gender' => '2',
                'age' => '3',
                'height' => '50',
                'wool' => 'Средней длины',
                'color' => 'Чепрачный',
                'character' => 'Добродушная, немного пугливая, нежная',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Поночке требуется немного времени, чтобы привыкнуть к человеку, а после она становится преданной собакой',
                'slug' => str_slug('Поночка')

            ],
            [
                'name' => 'Шами',
                'gender' => '2',
                'age' => '6',
                'height' => '55',
                'wool' => 'Средней длины',
                'color' => 'Рыжая',
                'character' => 'Преданная, игривая, человеко-ориентированная',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Шами живёт на передержке, однако очень хочет найти настоящих хозяев',
                'slug' => str_slug('Шами')

            ],
            [
                'name' => 'Соня',
                'gender' => '2',
                'age' => '3',
                'height' => '50',
                'wool' => 'Короткая',
                'color' => 'Мраморный',
                'character' => 'Умная, упрямая, недоверчивая',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Соня всё ещё адаптируется и учится доверять человеку. На терпение ответит безграничной любовью и преданностью',
                'slug' => str_slug('Соня')

            ],
            [
                'name' => 'Лиза',
                'gender' => '2',
                'age' => '2',
                'height' => '40',
                'wool' => 'Средней длины',
                'color' => 'Трёхцветный',
                'character' => 'Игривая, ревнивая, человеко-обожающая',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Лиза будет помогать вам в любом деле, ни на секунду не даст загрустить',
                'slug' => str_slug('Лиза')

            ],
            [
                'name' => 'Ася',
                'gender' => '2',
                'age' => '3',
                'height' => '45',
                'wool' => 'Короткая',
                'color' => 'Рыжий',
                'character' => 'Человеко-ориентированная, скромная, любопытная',
                'vet' => 'Здорова, привита, обработана от паразитов, стерилизована',
                'information' => 'Ася только приучается к ходьбе на поводке, очень хочет общения с человеком, но иногда стесняется',
                'slug' => str_slug('Ася')

            ],
            [
                'name' => 'Форест',
                'gender' => '2',
                'age' => '4',
                'height' => '55',
                'wool' => 'Короткая',
                'color' => 'Палевый',
                'character' => 'Своенравный, ласковый, игривый',
                'vet' => 'Здоров, привит, обработан от паразитов, кастрирован',
                'information' => 'Форест живёт на передержке, сильный, активный пёс с защитными качествами, отлично ладит с детьми',
                'slug' => str_slug('Форест')
            ],
        ];
        DB::table('dogs')->insert($data);
    }

    private function addImageToDogs()
    {
        DB::table('dogs_img')->truncate();
        $images = [
            ['dog_id' => '1', 'path' => '/img/dogs/kiki/img1.jpg'],
            ['dog_id' => '1', 'path' => '/img/dogs/kiki/img2.jpg'],
            ['dog_id' => '1', 'path' => '/img/dogs/kiki/img3.jpg'],
            ['dog_id' => '1', 'path' => '/img/dogs/kiki/img4.jpg'],
            ['dog_id' => '1', 'path' => '/img/dogs/kiki/img5.jpg'],
            ['dog_id' => '1', 'path' => '/img/dogs/kiki/img6.jpg'],
            ['dog_id' => '1', 'path' => '/img/dogs/kiki/img7.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img1.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img2.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img3.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img4.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img5.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img6.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img7.jpg'],
            ['dog_id' => '2', 'path' => '/img/dogs/lysia/img8.jpg'],
            ['dog_id' => '3', 'path' => '/img/dogs/polkan/img1.jpg'],
            ['dog_id' => '3', 'path' => '/img/dogs/polkan/img2.jpg'],
            ['dog_id' => '3', 'path' => '/img/dogs/polkan/img3.jpg'],
            ['dog_id' => '3', 'path' => '/img/dogs/polkan/img4.jpg'],
            ['dog_id' => '3', 'path' => '/img/dogs/polkan/img5.jpg'],
            ['dog_id' => '3', 'path' => '/img/dogs/polkan/img6.jpg'],
            ['dog_id' => '3', 'path' => '/img/dogs/polkan/img7.jpg'],
            ['dog_id' => '4', 'path' => '/img/dogs/bary/img1.jpg'],
            ['dog_id' => '4', 'path' => '/img/dogs/bary/img2.jpg'],
            ['dog_id' => '4', 'path' => '/img/dogs/bary/img3.jpg'],
            ['dog_id' => '4', 'path' => '/img/dogs/bary/img4.jpg'],
            ['dog_id' => '4', 'path' => '/img/dogs/bary/img5.jpg'],
            ['dog_id' => '4', 'path' => '/img/dogs/bary/img6.jpg'],
            ['dog_id' => '4', 'path' => '/img/dogs/bary/img7.jpg'],
            ['dog_id' => '5', 'path' => '/img/dogs/sliva/img1.jpg'],
            ['dog_id' => '5', 'path' => '/img/dogs/sliva/img2.jpg'],
            ['dog_id' => '5', 'path' => '/img/dogs/sliva/img3.jpg'],
            ['dog_id' => '5', 'path' => '/img/dogs/sliva/img4.jpg'],
            ['dog_id' => '5', 'path' => '/img/dogs/sliva/img5.jpg'],
            ['dog_id' => '6', 'path' => '/img/dogs/garsy/img1.jpg'],
            ['dog_id' => '6', 'path' => '/img/dogs/garsy/img2.jpg'],
            ['dog_id' => '6', 'path' => '/img/dogs/garsy/img3.jpg'],
            ['dog_id' => '6', 'path' => '/img/dogs/garsy/img4.jpg'],
            ['dog_id' => '6', 'path' => '/img/dogs/garsy/img5.jpg'],
            ['dog_id' => '7', 'path' => '/img/dogs/veda/img1.jpg'],
            ['dog_id' => '7', 'path' => '/img/dogs/veda/img2.jpg'],
            ['dog_id' => '7', 'path' => '/img/dogs/veda/img3.jpg'],
            ['dog_id' => '7', 'path' => '/img/dogs/veda/img4.jpg'],
            ['dog_id' => '7', 'path' => '/img/dogs/veda/img5.jpg'],
            ['dog_id' => '8', 'path' => '/img/dogs/kesha/img1.jpg'],
            ['dog_id' => '8', 'path' => '/img/dogs/kesha/img2.jpg'],
            ['dog_id' => '8', 'path' => '/img/dogs/kesha/img3.jpg'],
            ['dog_id' => '8', 'path' => '/img/dogs/kesha/img4.jpg'],
            ['dog_id' => '8', 'path' => '/img/dogs/kesha/img5.jpg'],
            ['dog_id' => '8', 'path' => '/img/dogs/kesha/img6.jpg'],
            ['dog_id' => '8', 'path' => '/img/dogs/kesha/img7.jpg'],
            ['dog_id' => '9', 'path' => '/img/dogs/chernushka/img1.jpg'],
            ['dog_id' => '9', 'path' => '/img/dogs/chernushka/img2.jpg'],
            ['dog_id' => '9', 'path' => '/img/dogs/chernushka/img3.jpg'],
            ['dog_id' => '9', 'path' => '/img/dogs/chernushka/img4.jpg'],
            ['dog_id' => '9', 'path' => '/img/dogs/chernushka/img5.jpg'],
            ['dog_id' => '9', 'path' => '/img/dogs/chernushka/img6.jpg'],
            ['dog_id' => '10', 'path' => '/img/dogs/rosinka/img1.jpg'],
            ['dog_id' => '10', 'path' => '/img/dogs/rosinka/img2.jpg'],
            ['dog_id' => '10', 'path' => '/img/dogs/rosinka/img3.jpg'],
            ['dog_id' => '10', 'path' => '/img/dogs/rosinka/img4.jpg'],
            ['dog_id' => '10', 'path' => '/img/dogs/rosinka/img5.jpg'],
            ['dog_id' => '11', 'path' => '/img/dogs/silva/img1.jpg'],
            ['dog_id' => '11', 'path' => '/img/dogs/silva/img2.jpg'],
            ['dog_id' => '11', 'path' => '/img/dogs/silva/img3.jpg'],
            ['dog_id' => '11', 'path' => '/img/dogs/silva/img4.jpg'],
            ['dog_id' => '11', 'path' => '/img/dogs/silva/img5.jpg'],
            ['dog_id' => '12', 'path' => '/img/dogs/barhat/img1.jpg'],
            ['dog_id' => '12', 'path' => '/img/dogs/barhat/img2.jpg'],
            ['dog_id' => '12', 'path' => '/img/dogs/barhat/img3.jpg'],
            ['dog_id' => '12', 'path' => '/img/dogs/barhat/img4.jpg'],
            ['dog_id' => '12', 'path' => '/img/dogs/barhat/img5.jpg'],
            ['dog_id' => '12', 'path' => '/img/dogs/barhat/img6.jpg'],
            ['dog_id' => '12', 'path' => '/img/dogs/barhat/img7.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img1.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img2.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img3.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img4.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img5.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img6.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img7.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img8.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img9.jpg'],
            ['dog_id' => '13', 'path' => '/img/dogs/chara/img10.jpg'],
            ['dog_id' => '14', 'path' => '/img/dogs/bona/img1.jpg'],
            ['dog_id' => '14', 'path' => '/img/dogs/bona/img2.jpg'],
            ['dog_id' => '14', 'path' => '/img/dogs/bona/img3.jpg'],
            ['dog_id' => '14', 'path' => '/img/dogs/bona/img4.jpg'],
            ['dog_id' => '15', 'path' => '/img/dogs/rita/img1.jpg'],
            ['dog_id' => '15', 'path' => '/img/dogs/rita/img2.jpg'],
            ['dog_id' => '15', 'path' => '/img/dogs/rita/img3.jpg'],
            ['dog_id' => '15', 'path' => '/img/dogs/rita/img4.jpg'],
            ['dog_id' => '15', 'path' => '/img/dogs/rita/img5.jpg'],
            ['dog_id' => '15', 'path' => '/img/dogs/rita/img6.jpg'],
            ['dog_id' => '16', 'path' => '/img/dogs/alma/img1.jpg'],
            ['dog_id' => '16', 'path' => '/img/dogs/alma/img2.jpg'],
            ['dog_id' => '16', 'path' => '/img/dogs/alma/img3.jpg'],
            ['dog_id' => '16', 'path' => '/img/dogs/alma/img4.jpg'],
            ['dog_id' => '17', 'path' => '/img/dogs/sherry/img1.jpg'],
            ['dog_id' => '17', 'path' => '/img/dogs/sherry/img2.jpg'],
            ['dog_id' => '17', 'path' => '/img/dogs/sherry/img3.jpg'],
            ['dog_id' => '17', 'path' => '/img/dogs/sherry/img4.jpg'],
            ['dog_id' => '17', 'path' => '/img/dogs/sherry/img5.jpg'],
            ['dog_id' => '17', 'path' => '/img/dogs/sherry/img6.jpg'],
            ['dog_id' => '18', 'path' => '/img/dogs/molly/img1.jpg'],
            ['dog_id' => '18', 'path' => '/img/dogs/molly/img2.jpg'],
            ['dog_id' => '18', 'path' => '/img/dogs/molly/img3.jpg'],
            ['dog_id' => '18', 'path' => '/img/dogs/molly/img4.jpg'],
            ['dog_id' => '18', 'path' => '/img/dogs/molly/img5.jpg'],
            ['dog_id' => '18', 'path' => '/img/dogs/molly/img6.jpg'],
            ['dog_id' => '19', 'path' => '/img/dogs/ponochka/img1.jpg'],
            ['dog_id' => '19', 'path' => '/img/dogs/ponochka/img2.jpg'],
            ['dog_id' => '19', 'path' => '/img/dogs/ponochka/img3.jpg'],
            ['dog_id' => '19', 'path' => '/img/dogs/ponochka/img4.jpg'],
            ['dog_id' => '19', 'path' => '/img/dogs/ponochka/img5.jpg'],
            ['dog_id' => '19', 'path' => '/img/dogs/ponochka/img6.jpg'],
            ['dog_id' => '19', 'path' => '/img/dogs/ponochka/img7.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img1.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img2.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img3.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img4.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img5.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img6.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img7.jpg'],
            ['dog_id' => '20', 'path' => '/img/dogs/shamy/img8.jpg'],
            ['dog_id' => '21', 'path' => '/img/dogs/sonia/img1.jpg'],
            ['dog_id' => '21', 'path' => '/img/dogs/sonia/img2.jpg'],
            ['dog_id' => '21', 'path' => '/img/dogs/sonia/img3.jpg'],
            ['dog_id' => '21', 'path' => '/img/dogs/sonia/img4.jpg'],
            ['dog_id' => '21', 'path' => '/img/dogs/sonia/img5.jpg'],
            ['dog_id' => '22', 'path' => '/img/dogs/liza/img1.jpg'],
            ['dog_id' => '22', 'path' => '/img/dogs/liza/img2.jpg'],
            ['dog_id' => '22', 'path' => '/img/dogs/liza/img3.jpg'],
            ['dog_id' => '22', 'path' => '/img/dogs/liza/img4.jpg'],
            ['dog_id' => '22', 'path' => '/img/dogs/liza/img5.jpg'],
            ['dog_id' => '22', 'path' => '/img/dogs/liza/img6.jpg'],
            ['dog_id' => '22', 'path' => '/img/dogs/liza/img7.jpg'],
            ['dog_id' => '23', 'path' => '/img/dogs/asia/img1.jpg'],
            ['dog_id' => '23', 'path' => '/img/dogs/asia/img2.jpg'],
            ['dog_id' => '23', 'path' => '/img/dogs/asia/img3.jpg'],
            ['dog_id' => '23', 'path' => '/img/dogs/asia/img4.jpg'],
            ['dog_id' => '23', 'path' => '/img/dogs/asia/img5.jpg'],
            ['dog_id' => '23', 'path' => '/img/dogs/asia/img6.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img1.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img2.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img3.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img4.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img5.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img6.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img7.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img8.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img9.jpg'],
            ['dog_id' => '24', 'path' => '/img/dogs/forest/img10.jpg'],




        ];
        DB::table('dogs_img')->insert($images);
    }
}
