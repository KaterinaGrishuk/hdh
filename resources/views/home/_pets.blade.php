<section class="pets">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('pet-list') }}"><h3>Они ищут хозяев</h3></a>
            </div>
            <div class="col-md-12">
                <div class="slide_pets">
                    <ul class="bxslider2">
                        @foreach($dogs as $dog)
                            <a href="{{ route('pet', ['pet' => $dog->slug]) }}">
                                <div class="slide">
                                    <img src="{{$dog->images->first()->path}}" alt="">
                                </div>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="r_more">
                    <a href="{{ route('pet-list') }}">Подробнее <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>