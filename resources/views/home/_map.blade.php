<section class="map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href=""><h3>Мы находимся здесь</h3></a>
            </div>

            <div class="col-md-12">
                <div class="map_block">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75288.85005613818!2d27.500401073354716!3d53.86462098190584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbd11f5e1f6de3%3A0x6edcbf794ac47ecd!2z0K7QsdC40LvQtdC50L3Ri9C5IDIyMzA1Ng!5e0!3m2!1sru!2sby!4v1502981346588" width="950" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            {{--<div class="col-md-4">--}}
                {{--<div id="vk_groups"></div>--}}
                {{--<iframe src="/libs/inwidget/index.php?toolbar=false&width=300" scrolling='no' frameborder='no' style='border:none;width:300px;height:320px;overflow:hidden;margin-top: 30px;'></iframe>--}}
            {{--</div>--}}

        </div>
    </div>
</section>
<!-- Preload -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #95D0A1 url(http://hello-site.ru//main/images/preloads/oval.svg) center center no-repeat;background-size:92px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- Preload -->
@section('css')
    @parent
    <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
@endsection