<style>
    .intro-section .inner-part .content-box .inner-box:before {
        background: url({{$information->left_image_path}}) center top no-repeat
    }

    .intro-section .inner-part .content-box .inner-box:after {
        background: url({{$information->right_image_path}}) center top no-repeat
    }
</style>
<!--Intro Section-->
<section class="intro-section">
    <div class="inner-part">
        <div class="auto-container">
            <div class="content-box">
                <div class="inner-box">
                    <!--Section Title-->
                    <div class="sec-title-one">
                        <h2>{{$information->title}}</h2>
                    </div>

                    <div class="row clearfix">
                        <!--Content Column-->
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="inner text-left wow fadeInLeft" data-wow-delay="0ms"
                                 data-wow-duration="1500ms">
                                <div class="text ">
                                    {{$information->more_info_section->all()[0]->body}}
                                </div>
                                @if($information->more_info_section->all()[0]->name_button)
                                    <a href="       {{$information->more_info_section->all()[0]->link}}"
                                       class="theme-btn btn-style-two"> {{$information->more_info_section->all()[0]->name_button}}</a>
                                @endif
                            </div>
                        </div>
                        <!--Content Column-->
                        <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            <div class="inner text-right wow fadeInRight" data-wow-delay="0ms"
                                 data-wow-duration="1500ms">
                                <div class="text ">
                                    {{$information->more_info_section->all()[1]->body}}
                                </div>
                                @if($information->more_info_section->all()[1]->name_button)
                                    <a href="       {{$information->more_info_section->all()[1]->link}}"
                                       class="theme-btn btn-style-two"> {{$information->more_info_section->all()[1]->name_button}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="text-main text-center">

                            @switch(session("locale"))
                                @case('uz')
                            <p class="">
                                2004 yil oktyabr oyida Toshkentda "RWS Optimum" DP zavodining qurilishi yakunlandi va
                                birinchi 20 ming
                                shpal BF70 ishlab chiqarildi, ayni paytda "FLEKS International Manufacturing and Trading
                                LTD" Osiyo
                                taraqqiyot banki tomonidan moliyalashtiriladigan O'zbekistonda temir yo'llarni
                                modernizatsiya qilish
                                bo'yicha xalqaro tenderda g'olib deb topildi. <br>
                                2005-yilning may oyidan boshlab jahonning yetakchi ishlab chiqaruvchilarining zamonaviy
                                uskunalarida
                                "Pandrol Fastclip" turini bog'lash bilan BF70 temir-beton shpallarini ommaviy ishlab
                                chiqarish
                                boshlandi. <br>
                                2006 yilning noyabr oyida "FLEKS International Manufacturing and Trading LTD" yetkazib
                                berish jadvaliga
                                qat'iy muvofiq O'zbekistonning temir yo'llari uchun birinchi 612 ming BF70 shpalini yetkazib
                                berish
                                shartnomasining barcha shartlarini muvaffaqiyatli bajardi.<br>
                                2007 yildan hozirgi kungacha "RWS Optimum" DP ishlab chiqarish hajmi "O'zbekiston temir
                                yo'llari" AJning
                                temir yo'llarni modernizatsiya qilish va yangi liniyalar qurish ehtiyojlarini to'liq qamrab
                                oladi. <br>
                                2010 yildan boshlab "Pandrol Fastclip" ulab turgan BF70 shpallari yuqori tezlikdagi (250
                                km/s gacha)
                                uchastkalarda muvaffaqiyatli ishlatilmoqda.<br>
                                2010da BF70 shpallari Afg'oniston Respublikasida (Hayrobod Mozori Sharif uchastkasi) 200
                                mingga yaqin.
                                <br>
                                2011 yilning avgust oyidan 2012 yilning oktyabr oyigacha zavod modernizatsiya qilinib,
                                ishlab chiqarish
                                quvvatlarini ko'paytirish ishlari amalga oshirildi.<br>
                                2014, shpal BF70 uchun 2011 yildan boshlab temir yo'l 400 dan ortiq km uchun Turkmaniston
                                Respublikasida
                                qo'ydi. Shu bilan birga, 2013-2014-yillarda Qozog'iston-Turkmaniston-Eron transport koridori
                                uchun eng
                                qisqa vaqt ichida 750 mingdan ortiq shpal jo'natildi. Bundan tashqari, BF70 shpallari
                                Turkmaniston neft
                                va gaz vazirligining Janubiy Yeloten uglevodorod konlarini ishlab chiqarish korxonalarining
                                kirish
                                yo'llarida yotqizildi va muvaffaqiyatli ishlatildi.<br>
                                Bugungi kunga kelib, BF70 ning 5,5 milliondan ortiq shpallari ishlab chiqarildi, ular
                                "Pandrol Fastclip"
                                elastik birikmalariga ega bo'lib, ular O'zbekiston Respublikasi va bir qator xorijiy
                                mamlakatlarning
                                kirish, asosiy magistral, yuqori tezlik va yuqori tezlikdagi temir yo'l liniyalarida
                                muvaffaqiyatli
                                ishlatilmoqda.<br>
                                BF70 tipidagi shpallar O'zbekiston Respublikasi hududida Iso 9001 sifat menejmenti tizimidan
                                foydalangan
                                holda uyg'unlashtirilgan en 13230-1,2 Yevropa standartlariga muvofiq ishlab chiqariladi. Bu
                                jahon
                                bozorining eng yuqori talablariga javob beradigan kafolatlangan ishlab chiqarish
                                barqarorligi va BF70
                                shpallarining yuqori sifatini ta'minlaydi.
                                @break
                                @case('ru')
                            <p class="md:text-md">
                                В октябре 2004 г года было завершено строительство завода ДП «RWS Optimum» в Ташкенте и
                                изготовлены
                                первые 20 тыс. шпал BF70, в это же время «FLEKS International Manufacturing and Trading LTD»
                                признан
                                победителем международного тендера по модернизации железных дорог в Узбекистане,
                                финансируемого
                                Азиатским Банком Развития. <br>
                                С мая 2005 года было начато массовое производство железобетонных шпал BF70 со скреплением
                                типа «Pandrol
                                Fastclip» на современном оборудовании ведущих мировых производителей. <br>
                                В ноябре 2006 года «FLEKS International Manufacturing and Trading LTD» в строгом
                                соответствии с графиком
                                поставок успешно выполнил все условия контракта на поставку первых 612 тыс. шпал BF70 для
                                железного
                                дорог Узбекистана.<br>
                                С 2007 года по настоящее время объемы производства ДП «RWS Optimum» полностью покрывают
                                потребности АО
                                «Узбекистон темир йуллари» по модернизации железнодорожных путей и строительству новых
                                линий. <br>
                                С 2010 года шпалы BF70 со скреплениями «Pandrol Fastclip» успешно эксплуатируются на
                                высокоскоростных
                                участках (до 250 км/ч).<br>
                                В 2010 году около 200 тыс. шпал BF70 были уложены в Республике Афганистан (участок Хайрабад
                                - Мазари
                                Шариф).<br>
                                С августа 2011 г. по октябрь 2012 г. осуществлена модернизация завода с увеличением
                                производственных
                                мощностей, составляющих на сегодня свыше 1 млн. шпал в год.<br>
                                С 2011 года по 2014 год шпалы BF70 уложены в Республике Туркменистан на протяжении более 400
                                км
                                железнодорожных путей. При этом в период с 2013 по 2014 годы в кратчайшие сроки отгружены
                                более 750 тыс.
                                шпал для транспортного коридора Казахстан-Туркменистан-Иран. Кроме того шпалы BF70 были
                                уложены и
                                успешно эксплуатируются на подъездных путях предприятий по разработке углеводородных
                                месторождений Южный
                                Елотен Министерства нефти и газа Туркменистана.<br>
                                К настоящему времени произведено более 5,5 млн. шпал BF70 с эластичными скреплениями
                                «Pandrol Fastclip»,
                                которые укладываются и успешно эксплуатируются на подъездных, главных магистральных,
                                скоростных и
                                высокоскоростных железнодорожных линиях Республики Узбекистан и ряда зарубежных стран.<br>
                                Шпалы типа BF70 производятся в соответствии с Евростандартом EN 13230-1,2, гармонизированном
                                на
                                территории Республики Узбекистан с использованием системы менеджмента качества согласно ISO
                                9001. Это
                                обеспечивает гарантированную стабильность производства и высокое качество шпал BF70,
                                соответствующее
                                самым высоким требованиям мирового рынка.
                        @break
                        @case('en')
                            <p class="md:text-md">
                                In October 2004, the construction of the DP "RWS Optimum" plant in Tashkent was completed
                            and the first 20 thousand BF70 sleepers were manufactured, at the same time FLEKS
                            International Manufacturing and Trading LTD was recognized as the winner of the
                            international tender for the modernization of railways in Uzbekistan, funded by the
                            Asian Development Bank. <br>
                            Since May 2005, mass production of reinforced concrete sleepers BF70 with a bond of the
                            "Pandrol Fastclip" type has been started on modern equipment from leading world
                            manufacturers. <br>
                            In November 2006, FLEKS International Manufacturing and Trading LTD, in strict
                            accordance with the delivery schedule, successfully fulfilled all the terms of the
                            contract for the supply of the first 612 thousand BF70 sleepers for the railways of
                            Uzbekistan.<br>
                            From 2007 to the present, the production volumes of DP "RWS Optimum" fully cover the
                            needs of JSC "Uzbekistan Temir Yullari" for the modernization of railway tracks and the
                            construction of new lines. <br>
                            Since 2010, BF70 sleepers with "Pandrol Fastclip" fasteners have been successfully
                            operated on high-speed sections (up to 250 km/h).<br>
                            In 2010, about 200 thousand BF70 sleepers were laid in the Republic of Afghanistan
                            (Khayrabad-Mazar-I-Sharif section).<br>
                            From August 2011 to October 2012, the modernization of the plant was carried out with an
                            increase in production capacity, which currently amounts to over 1 million sleepers per
                            year.<br>
                            From 2011 to 2014, the BF70 sleepers were laid in the Republic of Turkmenistan over more
                            than 400 km of railway tracks. At the same time, in the period from 2013 to 2014, more
                            than 750 thousand sleepers for the Kazakhstan-Turkmenistan-Iran transport corridor were
                            shipped in the shortest possible time. In addition, the BF70 sleepers have been laid and
                            are being successfully operated on the access roads of the enterprises for the
                            development of the Southern Eloten hydrocarbon fields of the Ministry of Oil and Gas of
                            Turkmenistan.<br>
                            To date, more than 5.5 million BF70 sleepers with elastic bonds "Pandrol Fastclip" have
                            been produced, which are laid and successfully operated on access, main trunk,
                            high-speed and high-speed railway lines of the Republic of Uzbekistan and a number of
                            foreign countries.<br>
                            Sleepers of type BF70 are manufactured in accordance with the European Standard EN
                            13230-1,2, harmonized in the territory of the Republic of Uzbekistan using a quality
                            management system according to ISO 9001. This ensures guaranteed production stability
                            and high quality of the BF70 sleepers, meeting the highest requirements of the world
                            market.
                            @break
                            @endswitch
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

