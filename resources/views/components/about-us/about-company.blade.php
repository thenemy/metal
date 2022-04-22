<link href="css/pagination.css" rel="stylesheet">
{{--
    the counter will be always in the middle
    only exclusion will be that fact if it is the first or the last
    transition must not work when it is already selected
--}}
<section class="about-farm style-two">
    <div class="auto-container">
        <!--Section Title-->
        <div class="sec-title-one">
            <h2>{{$title}}</h2>
        </div>

        <div class="row clearfix">
            <!--Column-->
        {{--            <div class="column col-lg-4 pt-5 col-md-4 col-sm-12 col-xs-12">--}}
        {{--                <figure class="image-box pt-5 slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img--}}
        {{--                        src="{{$image}}" style="padding-top: 2rem" alt="">--}}
        {{--                </figure>--}}
        {{--            </div>--}}
        <!--Column-->
            <div class=">
                <div class=" tabs-box px-6 tabs-style-one
            ">
            <div class=" text-about-us px-6  clearfix">
                <div class="">
                    <!--Tabs Content-->
                    <div class="">

                        <!--Tab-->
                        @foreach($about_company as $company)
                            <div class="text-center" id="tab-{{$company->id}}">
                                <h2 class="subtitle">{{$company->title}}</h2>
                                <h2>{{$company->header}} </h2>
                                <div class="content">
                                    @php
                                        echo  $company->body;
                                    @endphp
                                </div>
                                <h5 class="author-name">{{$company->footer}}</h5>
                            </div>
                        @endforeach
                    </div>
                    <div>
                                 <span class="text-center">
                                     @switch(session("locale"))
                                         @case('uz')
                                         <p>
                                "Pandrol Fastclip" bog'lash shpallarida qo'llash, ruxsat etilmagan demontajdan himoya qilishni ta'minlaydigan, maxsus asbob yordamida (shu jumladan) Trail tugunini tez o'rnatish/demontaj qilish imkonini beradi;
                                shu bilan birga, shpalda va murvat va vintli birikmalarning ulanishlarida yo'qligi bf70 shpalini agressiv muhitlar, qumli cho'llar, sho'rlangan tuproqlar, shuningdek, yuqori qor va past haroratli hududlarda ajralmas holga keltiradi;<br>
BF70 shpallarini va ulanishlarni saqlash uchun deyarli hech qanday xarajatlar mavjud emasligi sababli, yo'lning joriy parvarishlash xarajatlarini minimallashtirish;<br>
BF70 shpallarini ishlab chiqarishning texnologik afzalliklari: beton tarkibiy qismlarining yuqori aniqlikdagi dozasi; har bir simning individual va nazorat ostida kuchlanishi; B45 dan kam bo'lmagan beton brendini ta'minlovchi maxsus qo'shimchalardan foydalanish; yuqori uzatish kuchi (40 MPa); betonga oldindan ishlov berishning silliq uzatilishi va boshqalar. <br>
                            </p>
                                         @break
                                         @case('ru')
                                         <p>
                                Применение в шпалах скрепления «Pandrol Fastclip» позволяет выполнять быстрый монтаж/демонтаж подрельсового узла при помощи специального инструмента (входит в комплект поставки), обеспечивая защищенность от несанкционированного демонтажа;
                                при этом отсутствие в шпале и в скреплениях болтовых и шурупных соединений делает шпалу BF70 незаменимой, в том числе в условиях агрессивных сред,  песчаных пустынь, засоленных почв, а также на участках с повышенным снегозаносом и низкими температурами;<br>
Минимизация расходов на текущее содержание пути, так как при эксплуатации практически отсутствуют затраты на обслуживание шпал BF70 и скреплений;<br>
Технологические преимущества изготовления шпал BF70: высокоточное дозирование компонентов бетона; индивидуальное и контролируемое натяжение каждой из проволок; использование специальных добавок, обеспечивающих марку бетона не ниже В45; высокая передаточная прочность (40 МПа); плавная передача преднапряжения на бетон и др. <br>
                            </p>
                                         @break
                                         @case('en')
                                         <p>
                               The use of the "Pandrol Fastclip" fastening in sleepers allows for quick installation/disassembly of the sub-rail assembly using a special tool (included in the delivery package), providing protection from unauthorized dismantling;
at the same time, the absence of bolted and screw connections in the sleeper and in the fasteners makes the BF70 sleeper indispensable, including in conditions of aggressive environments, sandy deserts, saline soils, as well as in areas with increased snow and low temperatures;<br>
Minimization of expenses for the current maintenance of the track, since there are practically no maintenance costs for BF70 sleepers and fasteners during operation;<br>
Technological advantages of manufacturing BF70 sleepers: high-precision dosing of concrete components; individual and controlled tension of each of the wires; the use of special additives that ensure the grade of concrete is not lower than B45; high transfer strength (40 MPa); smooth transfer of prestressing to concrete, etc. <br>
                            </p>
                                         @break
                                     @endswitch

                            </span>
                    </div>
                    <div class="">
                        <h4 class="text-center">
                            @switch(session("locale"))
                                @case('uz')
                                <p>
                                    BF70 SHPALLARINING ASOSIY XUSUSIYATLARI
                                    EVROPA STANDARTI EN 13230-1,2:2002
                                    (Uz DST EN 13230-1,2:2003)
                                </p>
                                @break
                                @case('ru')
                                <p>
                                    ОСНОВНЫЕ ХАРАКТЕРИСТИКИ ШПАЛ BF70
                                    EUROPEAN STANDARD EN 13230-1,2:2002
                                    (O'z DSt EN 13230-1,2:2003)
                                </p>
                                @break
                                @case('en')
                                <p>
                                    MAIN CHARACTERISTICS OF BF70 SLEEPERS
                                    EUROPEAN STANDARD EN 13230-1,2:2002
                                    (Uz DST EN 13230-1,2:2003)
                                </p>
                                @break
                            @endswitch

                        </h4>
                        <span class="">
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                               1 km uchun shpallar soni
                            </p>
                                                @break
                                                @case('ru')
                                                <p>
                                 Количество шпал на 1 км
                            </p>
                                                @break
                                                @case('en')
                                                <p>
                               Number of sleepers per 1 km
                            </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                           1720
                                        </div>
                                    </div>
                                        @switch(session("locale"))
                                @case('uz')
                                <p>
                               Shpalning dizayni uni ta'minlaydi
                                        epura 1720 ta/km (Sh1 - 1 uchun bu parametr 1840 ta / km;
                                        jamg'arma kamida 120 ta / km).<br>
                            </p>
                                @break
                                @case('ru')
                                <p>
                                  Конструкция шпалы предусматривает ее
                                        укладку на пути с эпюрой 1720 шт/км (для Ш1-1 этот параметр равен 1840 шт/км;
                                        экономия составляет не менее  120 шт/км).<br>
                            </p>
                                @break
                                @case('en')
                                <p>
                             The design of the sleeper provides for it
laying on the path with a plot of 1720 pcs/km (for W1-1, this parameter is equal to 1840 pcs/km;
the savings are at least 120 pcs/km).<br>
                            </p>
                                @break
                            @endswitch
                                    <br>
                                    <div class="flex justify-between">
                                        <div>
 @switch(session("locale"))
                                                @case('uz')
                                                <p>
                               BF70 shpallari uchun temir yo'lning kengligi
                            </p>
                                                @break
                                                @case('ru')
                                                <p>
                                Ширина рельсовой колеи для шпал BF70
                            </p>
                                                @break
                                                @case('en')
                                                <p>
                               Rail gauge width for sleepers BF70
                            </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                               1520 mm
                            </p>
                                                @break
                                                @case('ru')
                                                <p>
                               1520 мм
                            </p>
                                                @break
                                                @case('en')
                                                <p>
                                1520 mm
                            </p>
                                                @break
                                            @endswitch
                                        </div>
                                    </div>

                                    @switch(session("locale"))
                                @case('uz')
                                <p>
                                   MDH davlatlari uchun universal hisoblanadi. Mijozning iltimosiga ko'ra, bu parametr oshirish yo'nalishi bo'yicha o'zgartirilishi mumkin
                                    yoki kamaytirish, masalan, 1435 mm (Evropa, Xitoy va Eron mamlakatlarida standart yo'l kengligi).<br>
                                    BF70 shpallari eng keng tarqalgan relslar bilan ishlashi mumkin,
                                    misol uchun, P65 va R75 (MDH davlatlari) va UIC 60 (Evropa davlatlari)yoki boshqa 150 mm taglik kengligi bilan.<br>
                                </p>
                                @break
                                @case('ru')
                                <p>
                                     Является универсальной для стран СНГ. По желанию заказчика этот параметр может быть изменен в сторону увеличения
                                    или уменьшения, например 1435 мм (стандартная ширина колеи в странах Европы, Китая и Ирана).<br>
                                    Шпалы BF70 могут эксплуатироваться с наиболее распространенными типами рельсов,
                                    например, Р65 и Р75 (страны СНГ) и UIC 60 (страны Европы) или любыми другими с шириной подошвы 150 мм.<br>
                                </p>
                                @break
                                @case('en')
                                <p>
                                   It is universal for the CIS countries. At the request of the customer, this parameter can be changed in the direction of increase
                                    or reduction, for example 1435 mm (standard gauge in Europe, China and Iran).<br>
                                    BF70 sleepers can be operated with the most common types of rails,
                                    for example, P65 and P75 (CIS countries) and UIC 60 (European countries) or any other with a sole width of 150 mm.<br>
                                </p>
                                @break
                            @endswitch
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                   Temir yo'l turi
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                    Тип рельса
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                    Rail Type
                                </p>
                                                @break
                                            @endswitch
                                        </div>
                                        <div>
                                            Р65, Р75, UIC6
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                   Shpalning uzunligi
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                     Длина шпалы
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                    Sleeper length
                                </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                         @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                  2700 mm
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                    2700 мм
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                    2700 mm
                                </p>
                                                @break
                                            @endswitch
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                   Podrelskiy maydonlarining burchagi
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                      Уклон подрельсовых площадок
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                   Slope of sub-rail platforms
                                </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                            1:20
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                    BF70 shpallarining taxminiy xizmat muddati
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                    Расчетный срок службы шпал BF70
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                    Estimated service life of sleepers BF70
                                </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                   kamida 50 yil
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                      не менее 50 лет
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                   at least 50 years
                                </p>
                                                @break
                                            @endswitch

                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                  Qo'llab-quvvatlash maydoni
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                       Площадь опирания
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                   Support area
                                </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                           0,72 м2
                                        </div>
                                    </div>
                                      <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                   Beton sinf / beton sinf
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                    Класс бетона/марка бетона
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                    Concrete class/concrete grade
                                </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                   B45/M600 dan kam emas
                                </p>
                                                @break
                                                @case('ru')
                                                <p>
                                    не ниже В45/М600
                                </p>
                                                @break
                                                @case('en')
                                                <p>
                                   not lower than B45/M600
                                </p>
                                                @break
                                            @endswitch

                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                Betonning uzatish kuchi
                            </p>
                                                @break
                                                @case('ru')
                                                <p>
                                 Передаточная прочность бетона
                            </p>
                                                @break
                                                @case('en')
                                                <p>
                               Transfer strength of concrete
                            </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                               40 MPa dan kam emas
                            </p>
                                                @break
                                                @case('ru')
                                                <p>
                               не ниже 40 МПа
                            </p>
                                                @break
                                                @case('en')
                                                <p>
                                not lower than 40 MPa
                            </p>
                                                @break
                                            @endswitch

                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                               Sovuqqa chidamli beton
                            </p>
                                                @break
                                                @case('ru')
                                                <p>
                                 Марка бетона по морозостойкости
                            </p>
                                                @break
                                                @case('en')
                                                <p>
                              Concrete grade for frost resistance
                            </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                           F200
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div>
                                            @switch(session("locale"))
                                                @case('uz')
                                                <p>
                                Elastik bog'lamlar
                            </p>
                                                @break
                                                @case('ru')
                                                <p>
                                Эластичные скрепления
                            </p>
                                                @break
                                                @case('en')
                                                <p>
                                Elastic fasteners
                            </p>
                                                @break
                                            @endswitch

                                        </div>
                                        <div>
                                           Pandrol Fastclip
                                        </div>
                                    </div>
                                        @switch(session("locale"))
                                @case('uz')
                                <p>
                                Shpallar "Pandrol Fastclip" (buyuk Britaniya) turlarining elastik birikmalari bilan ishlab chiqariladi, rasmga qarang. 1. Ishlab chiqarish texnologiyasi imkon qadar qisqa vaqt ichida shpallarni ishlab chiqarish uchun ishlab chiqarish liniyasini boshqa turdagi bog'lamlar bilan o'zgartirishga imkon beradi.<br>
                                        </p>
                                @break
                                @case('ru')
                                <p>
                               Шпалы производятся с эластичными скреплениями типов «Pandrol Fastclip» (Великобритания), см. рис. 1. Технология изготовления позволяет в кратчайшие сроки модифицировать производственную линию для выпуска шпал с любыми другими типами скреплений.<br>
                                        </p>
                                @break
                                @case('en')
                                <p>
                               Sleepers are made with elastic fasteners of the "Pandrol Fastclip" type (Great Britain), see Fig. 1. The manufacturing technology allows to modify the production line in the shortest possible time for the production of sleepers with any other types of fasteners.<br>
                                        </p>
                                @break
                            @endswitch

                               </span>
                        <div class="text-center">

                            @switch(session("locale"))
                                @case('uz')
                                <p>
                                    Shakl. 1 shpal BF70 va "Pandrol Fastclip"
                                </p>
                                @break
                                @case('ru')
                                <p>
                                    Рис. 1 Шпала BF70 и узлел скрепления «Pandrol Fastclip»
                                </p>
                                @break
                                @case('en')
                                <p>
                                    Fig. 1 The BF70 sleeper and the "Pandrol Fastclip" fastening knot
                                </p>
                                @break
                            @endswitch


                            <img class="w-96" src="{{asset('images/img-1.png')}}" alt="img-1">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-center">
                            @switch(session("locale"))
                                @case('uz')
                                <p>
                                    ELASTIK TEMIR BOG'LASH
                                </p>
                                @break
                                @case('ru')
                                <p>
                                    ЭЛАСТИЧНЫЕ РЕЛЬСОВЫЕ СКРЕПЛЕНИЯ
                                </p>
                                @break
                                @case('en')
                                <p>
                                    ELASTIC RAIL FASTENERS
                                </p>
                                @break
                            @endswitch

                        </h3>
                        <div>
                            @switch(session("locale"))
                                @case('uz')
                                <p>
                                    Turli xil elastik temir yo'l bog'lamalarining uzoq muddatli ekspluatatsiyasi
                                    ma'lumotlarini tahlil qilish, ularni dunyoning turli yo'llarida qo'llashning
                                    umumiy tajribasi kb turini qattiq bog'lash bilan solishtirganda ularning
                                    afzalliklari haqida gapirish uchun asos yaratadi. Ular tizimli ravishda
                                    yanada mukammal, ishonchli va iqtisodiy, ishlatish uchun qulay, mavjud
                                    parvarishlash va ta'mirlash.<br>
                                    Dunyoning 400 dan ortiq temir yo'llarida ishlatiladigan temir yo'llarning
                                    eng keng tarqalgan turlari ingliz firmasi "Pandrol UK LTD"ning Pandrol
                                    tizimini birlashtirishdir. "Pandrol Fastclip FC", "Pandrol Fastclip FE" va
                                    "Pandrol e-clip" kabi aloqalar o'nlab yillar davomida xavfsizlik,
                                    ishonchlilik, chidamlilik va iqtisodiy samaradorlik mezonlari bo'yicha eng
                                    yaxshi tomonga aylandi.<br>
                                </p>
                                @break
                                @case('ru')
                                <p>
                                    Анализ данных многолетней эксплуатации различных типов эластичных рельсовых
                                    скреплений, обобщенный опыт их применения на различных дорогах мира дает
                                    основание говорить о преимуществе их по сравнению с жестким скреплением типа
                                    КБ. Они конструкционно более совершенны, надежны и экономичны, просты в
                                    эксплуатации, текущем содержании и ремонте.<br>
                                    Наиболее распространенными типами рельсовых скреплений, используемых более,
                                    чем на 400 железных дорогах в мире, является скрепления системы Pandrol
                                    английской фирмы «Pandrol UK LTD». Такие скрепления, как «Pandrol Fastclip
                                    FC», «Pandrol Fastclip FE» и «Pandrol е-clip» в течение многих десятилетий
                                    зарекомендовали себя с наилучшей стороны по критериям безопасности,
                                    надежности, долговечности и экономической эффективности.<br>

                                </p>
                                @break
                                @case('en')
                                <p>
                                    The analysis of the data of long-term operation of various types of elastic
                                    rail fasteners, the generalized experience of their application on various
                                    roads of the world gives reason to speak about their advantage in comparison
                                    with rigid fastening of the KB type. They are structurally more advanced,
                                    reliable and economical, easy to operate, maintain and repair.<br>
                                    The most common types of rail fasteners used on more than 400 railways in
                                    the world are the Pandrol system fasteners of the English company Pandrol UK
                                    LTD. Such fasteners as "Pandrol Fastclip FC", "Pandrol Fastclip FE" and
                                    "Pandrol e-clip" have proven themselves to be the best in terms of safety,
                                    reliability, durability and economic efficiency for many decades.<br>
                                </p>
                                @break
                            @endswitch

                            @switch(session("locale"))
                                @case('uz')
                                <p>
                                    BF70 shpallari elastik temir yo'l bilan bog'langan
                                    "Pandrol Fastclip" (rasm. 2). Bog'lanish elementlarining tarkibi va
                                    joylashuvi
                                    3 va 4 raqamlarida berilgan. Agar kerak bo'lsa, "Pandrol
                                    Fastclip"birikmalarini almashtirish mumkin
                                    har qanday turdagi - mijozning talablariga muvofiq.
                                </p>
                                @break
                                @case('ru')
                                <p>
                                    Шпалы BF70 укомплектованы эластичным рельсовым скреплением
                                    “Pandrol Fastclip” (рис. 2). Состав и позиционные положения элементов
                                    скрепления
                                    приведены на рисунках 3 и 4. При необходимости возможна замена скреплений
                                    “Pandrol Fastclip”
                                    на любой тип - в соответствии с требованиями заказчика.
                                </p>
                                @break
                                @case('en')
                                <p>
                                    The BF70 sleepers are equipped with an elastic rail fastening
                                    “Pandrol Fastclip" (Fig. 2). Composition and positional positions of the
                                    fastening elements
                                    shown in Figures 3 and 4. If necessary, it is possible to replace the
                                    “Pandrol Fastclip” fasteners
                                    for any type - according to the customer's requirements.
                                </p>
                                @break
                            @endswitch
                        </div>
                        <img class="w-96	" src="{{asset('images/img-2.png')}}" alt="img-2">
                        <p>
                        @switch(session("locale"))
                            @case('uz')
                            <p>
                                Shakl. 2 temir yo'l BF70 shpallari va "Pandrol Fastclip"
                            </p>
                            @break
                            @case('ru')

                            <p> Рис. 2 Железнодорожный путь со шпалами BF70 и скреплением «Pandrol Fastclip»</p>

                            @break
                            @case('en')

                            <p> Fig. 2 Railway track with BF70 sleepers and "Pandrol Fastclip" fastening Quality and
                                Excellence</p>
                            @break
                        @endswitch


                        <img class="w-96	" src="{{asset('images/img-4.png')}}" alt="img-3">
                        <img class="w-96	" src="{{asset('images/img-3.png')}}" alt="img-3">
                    </div>
                    <div class="text-center">
                        <h2 class="text-center text-3xl">
                            @switch(session("locale"))
                                @case('uz')
                                <p>
                                    "Pandrol Fastclip" ning asosiy afzalliklari:
                                </p>
                                @break
                                @case('ru')
                                <p>
                                    Основные преимущества скрепления «Pandrol Fastclip»:
                                @break
                                @case('en')
                                <p>
                                    Main advantages of the "Pandrol Fastclip" bonding:
                                </p>
                                @break
                            @endswitch

                        </h2>
                        <span>
                                    @switch(session("locale"))
                                @case('uz')
                                <p>
                                    Ulanish muddati davomida 10 kn miqdorida terminallarni bosishning barqaror kuchini saqlab qolish, yo'lni o'g'irlashning yo'qligi, bog'lashning barcha elementlarini, ishonchliligi va chidamliligini ruxsatsiz demontaj qilishdan himoya qilish orqali poezdlar harakati xavfsizligini ta'minlash; < br>
	"Pandrol Fastclip" birikmalari qumtoshli chiziqlar, cho'llar sharoitida, shuningdek, murvat va vintli birikmalar yo'qligi sababli agressiv muhitlar va sho'rlangan tuproqli joylarda ajralmas hisoblanadi; <br>
	bog'lanish dizayni past rentabellikga va past metallga chidamlilik tufayli eng tejamkor hisoblanadi. Pandrol FC bog'lash tugunida 9 ta element mavjud; taqqoslash uchun: kb birikmasida ulanish tugmasi 21dan iborat va Vossloh 11 ta elementdan iborat; <br>
	temir-beton shpal zavodidagi bog'lamalarning barcha elementlarini montaj qilish hisobiga yo'l mashina stansiyalari bazalarida yo'l panjarasini montaj qilish uchun mehnat sarfini kamaytirish; < br>
	ish jarayonida ulanishlarni saqlash uchun mehnat sarfining yo'qligi (bog'lanish "o'rnatilgan va unutilgan"tamoyiliga muvofiq ishlab chiqilgan);<br>
	maxsus asbob yordamida yo'l ishlarini bajarishda bog'lanish elementlarini tez montaj qilish va demontaj qilish;<br>
	ish jarayonida (shu jumladan metall anker) barcha bog'lanish elementlarini almashtirish qobiliyati;<br>
yuqori tezlikda va yuqori tezlikda chiziqlar, shu jumladan, har qanday toifadagi liniyalarda foydalanish. Fransiyada TGV elektr poezdi tomonidan 2007 yilda Parij-Strasburg yo'nalishi bo'yicha "Pandrol Fastclip" birikmalari bilan an'anaviy qurilishning temir yo'lida jahon rekordi (574,8 km/soat) o'rnatildi . "O'zbekiston temir yo'llari" AJda hozirgi vaqtda "Pandrol Fastclip" birikmalari Toshkent-Buxoro, Toshkent-qarshi, Toshkent-Samarqand va boshqa yo'nalishlarda 250 km/soatgacha bo'lgan tezlikda muvaffaqiyatli ishlatilmoqda.(Shakl. 5).<br>
                                </p>
                                @break
                                @case('ru')
                                <p>
                                    Гарантированное обеспечение безопасности движения поездов за счет сохранения стабильной силы прижатия клемм в размере 10 кН в течение всего срока службы скрепления, отсутствия угона пути, защищенности от несанкционированного демонтажа всех элементов скреплений,  надежности и долговечности; <br>
	скрепления «Pandrol Fastclip» незаменимы на пескозаносимых линиях, в условиях пустынь, а также на участках с агрессивными средами и засоленными почвами за счет отсутствия болтовых и шурупных соединений; <br>
	конструкция скрепления наиболее экономична за счет малодетальности и низкой металлоемкости. Узел скрепления Pandrol FC содержит 9 элементов; для сравнения: у скрепления КБ узел скрепления состоит из 21, а у Vossloh - из 11 элементов; <br>
	сокращение затрат труда на сборку путевой решетки на базах путевых машинных станций в 8-10 раз за счет монтажа всех элементов скреплений на заводе железобетонных шпал;<br>
	отсутствие затрат труда на обслуживание скреплений в процессе эксплуатации  (скрепления сконструированы по принципу «установил и забыл»);<br>
	быстрый монтаж и демонтаж элементов скреплений при проведении путевых работ с помощью специального инструмента;<br>
	возможность замены всех элементов скрепления в процессе эксплуатации (включая металлический анкер);<br>
использование на линиях любых категорий, включая скоростные и высокоскоростные линии. На железнодорожном пути традиционной конструкции со скреплениями «Pandrol Fastclip» электропоездом TGV  во Франции на направлении Париж-Страсбург в 2007 году был поставлен мировой рекорд скорости (574,8 км/ч) . На АО «Узбекистон Темир Йуллари» в настоящее время скрепления «Pandrol Fastclip» успешно эксплуатируются со скоростями до 250 км/ч на направлениях Ташкент-Бухара, Ташкент-Карши, Ташкент-Самарканд и др. (рис. 5).<br>

                                </p>
                                @break
                                @case('en')
                                <p>
                                    Guaranteed train traffic safety by maintaining a stable clamping force of 10 kN during the entire service life of the fastener, the absence of track theft, protection from unauthorized dismantling of all elements of fasteners, reliability and durability; <br>
	Pandrol Fastclip fasteners are irreplaceable on sand-bearing lines, in desert conditions, as well as in areas with aggressive environments and saline soils due to the absence of bolt and screw connections; <br>
	the bonding design is most economical due to low detail and low metal consumption. The Pandrol FC fastening unit contains 9 elements; for comparison: the KB fastening unit consists of 21, and Vossloh has 11 elements; <br>
	reduction of labor costs for the assembly of the track grid at the bases of track machine stations by 8-10 times due to the installation of all elements of fasteners at the reinforced concrete sleepers factory;<br>
no labor costs for the maintenance of fasteners during operation (fasteners are designed on the principle of "installed and forgotten");<br>
	quick installation and disassembly of fastening elements during track work using a special tool;<br>
	the possibility of replacing all fastening elements during operation (including a metal anchor);<br>
use on lines of any category, including high-speed and high-speed lines. A world speed record (574.8 km/h) was set by a TGV electric train in France on the Paris-Strasbourg route in 2007 on a railway track of a traditional design with "Pandrol Fastclip" fasteners. At Uzbekistan Temir Yullari JSC, Pandrol Fastclip fasteners are currently successfully operated at speeds up to 250 km/h on the Tashkent-Bukhara, Tashkent-Karshi, Tashkent-Samarkand, etc. routes. (fig. 5).<br>
                                </p>
                                @break
                            @endswitch
                                              </span>
                        <img class="" style="" src="{{asset('images/img-5.png')}}" alt="img-5">
                        <p>
                        @switch(session("locale"))
                            @case('uz')
                            <p>
                                Shakl. 5. Toshkent-Samarqand yo'nalishidagi "Afrosiyob" elektropoyezdi
                            </p>
                            @break
                            @case('ru')
                            <p>
                                Рис. 5. Электропоезд “Afrosiyob” на линии Ташкент-Самарканд
                            </p>
                            @break
                            @case('en')
                            <p>
                                Fig. 5. Afrosiyob electric train on the Tashkent-Samarkand line
                            </p>
                            @break
                        @endswitch
                    </div>
                    <div>
                        <h4>

                        </h4>
                        @switch(session("locale"))
                            @case('uz')
                            <p>
                                Qiyosiy tahlil bog'lash samaradorligini tavsiflovchi asosiy texnik va iqtisodiy
                                ko'rsatkichlar bo'yicha jadval shaklida amalga oshiriladi (qarang: jadval 1, bu
                                erda mos keladigan parametr denominatorda-ballar soni; ballarni taqsimlash :
                                optimal talablarga muvofiqligi-3 ball, qisman muvofiqlik-2 ball, nomuvofiqlik-1
                                ball). </p>
                            @break
                            @case('ru')
                            <p>
                                Сравнительный анализ выполнен в табличной форме по основным
                                технико-экономическим показателям, характеризующим эффективность применения
                                скреплений (см. таблицу 1, где в числителе указан соответствующий параметр, в
                                знаменателе - количество баллов; распределение баллов: соответствие оптимальным
                                требованиям - 3 балла, частичное соответствие - 2 балла, несоответствие - 1
                                балл).
                            </p>
                            @break
                            @case('en')
                            <p>
                                The comparative analysis was carried out in tabular form according to the main
                                technical and economic indicators characterizing the effectiveness of the use of
                                fasteners (see Table 1, where the corresponding parameter is indicated in the
                                numerator, the number of points in the denominator; the distribution of points:
                                compliance with optimal requirements - 3 points, partial compliance - 2 points,
                                discrepancy - 1 point).
                            </p>
                            @break
                        @endswitch
                        <div class="px-6">
                            @switch(session("locale"))
                                @case('uz')
                                <ol style="list-style: decimal !important;" class="">
                                    <li style="list-style: decimal">
                                        Bir bog'lash tuguniga elementlarning soni
                                    </li>
                                    <li style="list-style: decimal">
                                        Kg boshiga bir shpal metall aloqa vazn
                                    </li>
                                    <li style="list-style: decimal">
                                        Vintli va murvat ulanishlarining yo'qligi, maxsus asbob yordamida
                                        o'rnatish va demontaj qilish qulayligi
                                    </li>
                                    <li style="list-style: decimal">
                                        Inson omilining temir yo'l tagida terminallarni bosishning minimal
                                        kuchini ta'minlashga ta'siri
                                    </li>
                                    <li style="list-style: decimal">
                                        Foydalanish davrida bir yil davomida murvat va vintli birikmalarning
                                        davriy siqilishiga bo'lgan ehtiyoj
                                    </li>
                                    <li style="list-style: decimal">
                                        Terminallarni bosish kuchining barqarorligi, yo'lni o'g'irlashning
                                        yo'qligi
                                    </li>
                                    <li style="list-style: decimal">
                                        Cho'l sharoitida, qumloq va sho'rlangan hududlarda ishlashning
                                        ishonchliligi
                                    </li>
                                    <li style="list-style: decimal">
                                        Ruxsatsiz demontajdan himoya qilish
                                    </li>
                                    <li style="list-style: decimal">
                                        Tez-tez temir yo'lni to'ldirish va nuqsonli temir yo'lni almashtirishni
                                        ta'minlash
                                    </li>
                                    <li style="list-style: decimal">
                                        Zavodda ulanishlarni oldindan o'rnatish imkoniyati
                                    </li>
                                    <li style="list-style: decimal">
                                        Yo'l ishlab chiqarish bazasida panjarani yig'ishda mehnat xarajatlarini
                                        minimallashtirish
                                    </li>
                                    <li style="list-style: decimal">
                                        Ulanishlarni saqlash uchun mehnat xarajatlarini minimallashtirish
                                    </li>
                                    <li style="list-style: decimal">
                                        Ankraj elementlarini almashtirish
                                    </li>
                                    <li style="list-style: decimal">
                                        Kamroq epuradan foydalanish (1 km yo'lda shpallar soni)
                                    </li>
                                    <li style="list-style: decimal">
                                        Dinamik kuchlarni elastik qayta ishlash
                                    </li>
                                    <li style="list-style: decimal">
                                        140 km/soatdan ortiq tezlikda foydalanish imkoniyati (5.3.3-bandga
                                        muvofiq "tezyurar yo'lovchi poyezdlarining aylanish uchastkalarida
                                        inshootlar, qurilmalar, harakat tarkibi va harakatini texnik xizmat
                                        ko'rsatish va ulardan foydalanish bo'yicha ko'rsatmalar")
                                    </li>
                                    <li style="list-style: decimal">
                                        Inson omilining ta'sirini hisobga olgan holda terminallarni bosish
                                        kuchining barqarorligi tufayli tog ' erlarida foydalanish imkoniyati
                                    </li>
                                    <li style="list-style: decimal">
                                        Bog'lanish va relslarning ishlash muddati
                                    </li>
                                    <li style="list-style: decimal">
                                        Ku = 0,98 muhr koeffitsienti bilan tuproq bargini muhrlashda yangi
                                        qurilishda foydalanish imkoniyati
                                    </li>
                                    <li style="list-style: decimal">
                                        Bog'lanish dizayni-40 ° C dan + 55 ° C gacha bo'lgan muhit harorati
                                        oralig'ida barqaror ishlaydi
                                    </li>
                                    <li style="list-style: decimal">
                                        Temir yo'l zanjirlarining barqaror izolyatsiyasini ta'minlash
                                        talablariga javob beradi
                                    </li>
                                    <li style="list-style: decimal">
                                        Temir yo'lni ta'mirlashda yo'l mashinalaridan foydalanish
                                    </li>
                                    <li style="list-style: decimal">
                                        Shpalga turli xil relslar o'rnatish uchun yaroqliligi
                                    </li>
                                    <li style="list-style: decimal">
                                        Qurilish ta'mirlash
                                    </li>
                                    <li style="list-style: decimal">
                                        Mahalliy xom-ashyo resurslaridan foydalangan holda bog'lash imkoniyati
                                    </li>
                                </ol>
                                <div class="text-center">
                                    <h4 class="text-center">
                                        JAMI BALLAR SONI
                                    </h4>
                                    <p class="text-center">
                                        Xulosa: BF70 shpallari bilan jihozlangan "Pandrol Fastclip" elastik
                                        bog'lanishlari optimal talablarga javob beradigan maksimal balllarga
                                        ega.
                                    </p>
                                </div>
                                @break
                                @case('ru')

                                <ol style="list-style: decimal !important;" class="">
                                    <li style="list-style: decimal">
                                        Число элементов на один узел скрепления
                                    </li>
                                    <li style="list-style: decimal">
                                        Вес металла скрепления на одну шпалу в кг
                                    </li>
                                    <li style="list-style: decimal">
                                        Отсутствие шурупных и болтовых соединений, простота монтажа и демонтажа
                                        при помощи специального инструмента
                                    </li>
                                    <li style="list-style: decimal">
                                        Влияние человеческого фактора на обеспечение минимальной силы нажатия
                                        клемм на подошву рельса
                                    </li>
                                    <li style="list-style: decimal">
                                        Потребность периодической затяжки болтовых и шурупных соединений в
                                        течение года в период эксплуатации
                                    </li>
                                    <li style="list-style: decimal">
                                        Стабильность силы нажатия клемм, отсутствие угона пути
                                    </li>
                                    <li style="list-style: decimal">
                                        Надежность работы в условиях пустынь, на пескозаносимых и засоленных
                                        участках
                                    </li>
                                    <li style="list-style: decimal">
                                        Защищенность от несанкционированного демонтажа
                                    </li>
                                    <li style="list-style: decimal">
                                        Обеспечение быстрой разрядки бесстыковых рельсовых плетей и замены
                                        дефектного рельса
                                    </li>
                                    <li style="list-style: decimal">
                                        Возможность предварительного монтажа скреплений на заводе
                                    </li>
                                    <li style="list-style: decimal">
                                        Минимизация затрат труда при сборке решетки на путевой производственной
                                        базе
                                    </li>
                                    <li style="list-style: decimal">
                                        Минимизация затрат труда по содержанию скреплений
                                    </li>
                                    <li style="list-style: decimal">
                                        Заменяемость анкерных элементов
                                    </li>
                                    <li style="list-style: decimal">
                                        Использование меньшей эпюры (количества шпал на 1 км пути)
                                    </li>
                                    <li style="list-style: decimal">
                                        Упругая переработка динамических сил
                                    </li>
                                    <li style="list-style: decimal">
                                        Возможность применения при скоростях более 140 км/час (в соответствии с
                                        п. 5.3.3 «Инструкции по техническому обслуживанию и эксплуатации
                                        сооружений, устройств, подвижного состава и организации движения на
                                        участках обращения скоростных пассажирских поездов»)
                                    </li>
                                    <li style="list-style: decimal">
                                        Возможность применения в горном рельефе за счет стабильности силы
                                        нажатия клемм с учетом влияния человеческого фактора
                                    </li>
                                    <li style="list-style: decimal">
                                        Соответствие срока службы скреплений и рельсов
                                    </li>
                                    <li style="list-style: decimal">
                                        Возможность применения в новом строительстве при обеспечении уплотнения
                                        земляного полотна с коэффициентом уплотнения ку = 0,98
                                    </li>
                                    <li style="list-style: decimal">
                                        Конструкция скрепления устойчиво функционирует в диапазоне температуры
                                        окружающей среды от -40oС до+55oС
                                    </li>
                                    <li style="list-style: decimal">
                                        Удовлетворяет требованиям обеспечения устойчивой изоляции рельсовых
                                        цепей
                                    </li>
                                    <li style="list-style: decimal">
                                        Использование путевых машин в ремонтах железнодорожного пути
                                    </li>
                                    <li style="list-style: decimal">
                                        Пригодность для крепления различных типов рельсов к шпале
                                    </li>
                                    <li style="list-style: decimal">
                                        Ремонтопригодность конструкции
                                    </li>
                                    <li style="list-style: decimal">
                                        Возможность производства скрепления с использованием местных сырьевых
                                        ресурсов
                                    </li>
                                </ol>
                                <div class="text-center">
                                    <h4 class="text-center">
                                        СУММАРНОЕ КОЛИЧЕСТВО БАЛЛОВ
                                    </h4>
                                    <p class="text-center">
                                        Вывод: максимальное количество баллов соответствия оптимальным
                                        требованиям имеют эластичные скрепления «Pandrol Fastclip», которыми в
                                        настоящее время комплектуются шпалы BF70.
                                    </p>
                                </div>
                                <img src="{{asset('images/img-6.png')}}" alt="img-6">

                                @break
                                @case('en')
                                <ol style="list-style: decimal !important;" class="">
                                    <li style="list-style: decimal">
                                        The number of elements per fastening node
                                    </li>
                                    <li style="list-style: decimal">
                                        The weight of the fastening metal per sleeper in kg
                                    </li>
                                    <li style="list-style: decimal">
                                        No screw and bolt connections, easy installation and disassembly with a
                                        special tool
                                    </li>
                                    <li style="list-style: decimal">
                                        The influence of the human factor on ensuring the minimum force of
                                        pressing the terminals on the sole of the rail
                                    </li>
                                    <li style="list-style: decimal">
                                        The need for periodic tightening of bolted and screw connections during
                                        the year during operation
                                    </li>
                                    <li style="list-style: decimal">
                                        Stability of the pressing force of the terminals, no hijacking of the
                                        path
                                    </li>
                                    <li style="list-style: decimal">
                                        Reliability of operation in desert conditions, in sand-bearing and
                                        saline areas
                                    </li>
                                    <li style="list-style: decimal">
                                        Protection against unauthorized dismantling
                                    </li>
                                    <li style="list-style: decimal">
                                        Provision of fast discharge of jointless rail lashes and replacement of
                                        defective rail
                                    </li>
                                    <li style="list-style: decimal">
                                        Possibility of pre-installation of fasteners at the factory
                                    </li>
                                    <li style="list-style: decimal">
                                        Minimization of labor costs when assembling the grid on the track
                                        production base
                                    </li>
                                    <li style="list-style: decimal">
                                        Minimization of labor costs for the maintenance of fasteners
                                    </li>
                                    <li style="list-style: decimal">
                                        Replaceable anchor elements
                                    </li>
                                    <li style="list-style: decimal">
                                        Using a smaller plot (the number of sleepers per 1 km of track)
                                    </li>
                                    <li style="list-style: decimal">
                                        Elastic processing of dynamic forces
                                    </li>
                                    <li style="list-style: decimal">
                                        The possibility of application at speeds of more than 140 km/h (in
                                        accordance with clause 5.3.3 "Instructions for maintenance and operation
                                        of structures, devices, rolling stock and organization of traffic on the
                                        circulation sections of high-speed passenger trains")
                                    </li>
                                    <li style="list-style: decimal">
                                        The possibility of application in mountainous terrain due to the
                                        stability of the pressing force of the terminals, taking into account
                                        the influence of the human factor
                                    </li>
                                    <li style="list-style: decimal">
                                        Matching the service life of fasteners and rails
                                    </li>
                                    <li style="list-style: decimal">
                                        The possibility of application in new construction when providing
                                        compaction of the roadbed with a compaction coefficient ku = 0.98
                                    </li>
                                    <li style="list-style: decimal">
                                        The bonding structure functions stably in the ambient temperature range
                                        from -40oC to +55oC
                                    </li>
                                    <li style="list-style: decimal">
                                        Meets the requirements of ensuring stable insulation of rail circuits
                                    </li>
                                    <li style="list-style: decimal">
                                        Use of track machines in railway track repairs
                                    </li>
                                    <li style="list-style: decimal">
                                        Suitable for attaching various types of rails to a sleeper
                                    </li>
                                    <li style="list-style: decimal">
                                        Maintainability of the structure
                                    </li>
                                    <li style="list-style: decimal">
                                        The possibility of bonding production using local raw materials
                                    </li>
                                </ol>
                                <div class="text-center">
                                    <h4 class="text-center">
                                        TOTAL NUMBER OF POINTS
                                    </h4>
                                    <p class="text-center">
                                        Conclusion: the maximum number of points of compliance with optimal
                                        requirements have elastic fasteners "Pandrol Fastclip", which are
                                        currently equipped with sleepers BF70.
                                    </p>
                                </div>
                                @break
                            @endswitch
                            <img src="{{asset('images/img-6.png')}}" alt="img-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/jquery.js"></script>
<script src="js/pagination_js/pagination.js"></script>
