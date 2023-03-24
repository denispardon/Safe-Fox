<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="icon" href="assets/img/logo.png">
    <title>Безопасный Лис</title>
</head>
<body style="opacity:0;transition:.5s;">
    
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header__inner">
            <div class="header__logo">
                    <img class="header__img" src="assets/img/logo.png" alt=""  data-aos="flip-left" data-aos-delay="600">
                    <p class="header__suptitle" data-aos="fade-up" data-aos-delay="500">Безопасный Лис</p>
                    <p class="header__subtitle" data-aos="fade-up" data-aos-delay="500">безопасность - это процесс, а не результат</p>    
                </div>
                
                <nav class="nav">
                    <img class= "user__img" src="assets/img/user.png">
                    <a href="#" class="nav__link_pa"><?= $_SESSION['user']['login'] ?></a>
                    <div class="drop__down"><a href="vendor/exit1.php" class="exit">Выход</a></div>  
                </nav>

            </div>
        </div><!-- ./Container -->
    </header><!-- ./Header -->

    <div class="btn-up btn-up_hide"></div>

    <!-- Intro -->
    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <div class="intro__img">
                <img class="intro__images" src="assets/img/images.png" alt="" data-aos="flip-left" data-aos-delay="200">
                </div>
                <div class="intro__suptitle">Информационная</div>
                <div class="intro__subtitle">Платформа безопасности<br>В Интернете</div>
                <div class="intro__line"></div>
                <div class="intro__text">Рассказываем <b class="intro__textes">“цифровым туземцам”<br>об особенностях цифрового мира<br>и правилах безопасности</b></div>
                
                <div class="intro__btn" data-aos="zoom-in">
                <a class="btn" href="test.php" >А ты интернет-зависим? Проверь!</a> 
                </div>
            </div>
            <div class="intro__kartinka">
                <img class="images" src="assets/img/1.png" alt="" data-aos="slide-left">
            </div>
        </div><!-- ./Container -->
    </div><!-- ./Intro -->

  <!-- Information -->
  <div class="information">
        <div class="container">
            <div class="info">

                <div class="info__item">
                    <a class="info__link" href="#slider_5-7">
                        <div class="info__img">
                            <img class="info__images" src="assets/img/info_1.svg" alt="">
                        </div>
                        <div class="info__text">Школьникам<br>5 - 7 классов</div>
                    </a>
                </div>

                <div class="info__item">
                    <a class="info__link" href="#slider_8-9">
                        <div class="info__img">
                            <img class="info__images" src="assets/img/info_2.svg" alt="">
                        </div>
                        <div class="info__text">Школьникам<br>8 - 9 классов</div>
                    </a>
                </div>

                <div class="info__item">
                    <a class="info__link" href="#slider_10-11">
                        <div class="info__img">
                            <img class="info__images" src="assets/img/info_3.svg" alt="">
                        </div>
                        <div class="info__text">Школьникам<br>10 - 11 классов</div>
                    </a>
                </div>

                <div class="info__item">
                    <a class="info__link" href="#Defend">
                        <div class="info__img">
                            <img class="info__images" src="assets/img/info_4.svg" alt="">
                        </div>
                        <div class="info__text">Защита данных<br>в интернете</div>
                    </a>
                </div>

                <div class="info__item">
                    <a class="info__link" href="#kiber">
                        <div class="info__img">
                            <img class="info__images" src="assets/img/info_5.svg" alt="">
                        </div>
                        <div class="info__text">Продвинутая<br>кибербезопасность</div>
                    </a>
                </div>
            </div>
        </div><!-- ./Container -->
    </div><!-- ./Information -->

    <!-- Project -->
    <div class="project">
        <div class="container">
            <div class="project__suptitle" data-aos="fade-up">Проект <b class="project__text">«безопасный лис»</b></div>
            <div class="project__item">
                <div class="project__img" data-aos="fade-in">
                    <img class="project__img" src="assets/img/Vector.png" alt="">
                </div>
                <div class="project__subtitle" data-aos="fade-in">Фундаментальные <b class="project__title">основы безопасности в сети</b></div>
            </div>

            <div class="project__item">
                <div class="project__img" data-aos="fade-in">
                    <img class="project__img" src="assets/img/Vector.png" alt="">
                </div>
                <div class="project__subtitle" data-aos="fade-in"><b>«Компьютерные» зависимости:</b> как распознать и что делать</div>
            </div>

            <div class="project__item">
                <div class="project__img" data-aos="fade-in">
                    <img class="project__img" src="assets/img/Vector.png" alt="">
                </div>
                <div class="project__subtitle" data-aos="fade-in">Защита <b>цифровых данных</b></div>
            </div>

            <div class="project__item">
                <div class="project__img" data-aos="fade-in">
                    <img class="project__img" src="assets/img/Vector.png" alt="">
                </div>
                <div class="project__subtitle" data-aos="fade-in"><b>Опасности цифрового мира:</b> главные правила безопасности в сети,<br>инструменты</div>
            </div>

            <div class="project__item">
                <div class="project__img" data-aos="fade-in">
                    <img class="project__img" src="assets/img/Vector.png" alt="">
                </div>
                <div class="project__subtitle" data-aos="fade-in"><b>Социльные сети:</b> какую информацию используют владельцы ВКонтакте,<br>могут ли передать ее посторонним, просматривают ли переписки и<br>голосовые сообщения</div>
            </div>

            <div class="project__border" data-aos="fade-in"></div>
            <div class="project__immun">
                <div class="project__titles" data-aos="fade-in">
                    <b class="immun">Цифровой иммунитет</b> <b class="immun__textes">- формирования психологической устойчивости</b><br><b class="immun__text">к новым опасностям виртуальной среды</b>
                </div>
            </div>
            <div class="project__borders" data-aos="fade-in"></div>
            
        </div>
    </div>

    <!-- Slider_5-7 -->
    <a name="slider_5-7"></a>
    <div class="slider_5-7">
        <div class="grade_5-7">5-7 <span class="grade__text_5-7">Класс</span>
        <div class="container">
            <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                <div class="itc-slider__wrapper">
                  <div class="itc-slider__items">
                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-1.png" alt="">
                                </div>
                                <div class="grade__suptitle">Вау-эффект, или молнии над вулканом. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>Казалось бы, кому-кому, а каналу «Би-би-си» точно можно доверять. Но не тут-то было! Тысячи, да что там, миллионы людей во всём мире наблюдали за якобы документальной съемкой извержения чилийского вулкана Кальбуко.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__effect" data-path="grade_one">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-2.png" alt="">
                                </div>
                                <div class="grade__suptitle">Русские – жители «московских болот»<div class=""></div> <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>Арабский историк Х века Ибн Русте описывает «русов» именно как болотных жителей: «русы живут на полуострове, окруженном болотами.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn  grade__boloto" data-path="grade_two">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-3.png" alt="">
                                </div>
                                <div class="grade__suptitle">Слово «Москва» происходит от имени народа мокша.</div>
                                <div class="grade__text">
                                    <br><span class="grade__textes">Фейк фрика Голденкова.</span></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__moksha" data-path="grade_three">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-1_1.png" alt="">
                                </div>
                                <div class="grade__suptitle">Снимок с места убийства Джона Кеннеди как недопустимое фото. <br> <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade_snimok" data-path="grade_ten">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-1_2.png" alt="">
                                </div>
                                <div class="grade__suptitle">Снимок Че Гевары, который якобы играет на гитаре вместе с Джоном Ленноном. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__gavara" data-path="grade_eleven">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-1_3.png" alt="">
                                </div>
                                <div class="grade__suptitle">Основателей марки мотоциклов Harley-Davidson считали Русскими иммигрантами. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__harley" data-path="grade_twelve">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="itc-slider__btn itc-slider__btn_prev"></button>
                <button class="itc-slider__btn itc-slider__btn_next"></button>
              </div>
            </div> <!-- ./Grade_5-7 -->
        </div> <!-- ./Container -->
    </div> <!-- ./Slider_5-7 -->

    <!-- Slider_8-9 -->
    <a name="slider_8-9"></a>
    <div class="slider_8-9">
        <div class="grade_8-9">8-9 <span class="grade__text_8-9">Класс</span>
        <div class="container">
            <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                <div class="itc-slider__wrapper">
                  <div class="itc-slider__items">
                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-4.png" alt="">
                                </div>
                                <div class="grade__suptitle">Москвы до 1272 года не было. <br> <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>Потому что она упоминается только в «третьей переписи» Золотой Орды.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__moscowfake" data-path="grade_four">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-5.png" alt="">
                                </div>
                                <div class="grade__suptitle">Москву основал хан Менгу-Тимур. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>Выдумка фрика Белинского. Ни в русских, ни в татарских источниках ничего подобного нет.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__moscow" data-path="grade_five">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-6.png" alt="">
                                </div>
                                <div class="grade__suptitle">Русские при встрече говорили друг другу по-арабски «салам» <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>Извращение то ли Деружинским то ли Бычковым фразы из описания России Г.Шлейссингера.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__salam" data-path="grade_six">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-2_1.png" alt="">
                                </div>
                                <div class="grade__suptitle">Ученый Альберт Эйнштейн, на фоне ядерного взрыва прокатился на велосипеде. <br> <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__albert" data-path="grade_thirteen">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-2_2.png" alt="">
                                </div>
                                <div class="grade__suptitle">Известна фотография туриста, который попал на фото буквально за секунду до того, как в небоскреб врезался самолет. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__travel" data-path="grade_fourteen">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-2_3.png" alt="">
                                </div>
                                <div class="grade__suptitle">В 2013 году и, что символично, в пятницу 13-го, на север Египта обрушился снегопад, после которого в соцсетях стал вирусным снимок покрытого снегом Сфинкса с подписью: «Впервые за 112 лет». <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__sficks" data-path="grade_fifteen">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="itc-slider__btn itc-slider__btn_prev"></button>
                <button class="itc-slider__btn itc-slider__btn_next"></button>
              </div>
            </div> <!-- ./Grade_8-9 -->
        </div> <!-- ./Container -->
    </div> <!-- ./Slider_8-9 -->

    <!-- Slider_10-11 -->
    <a name="slider_10-11"></a>
    <div class="slider_10-11">
        <div class="grade_10-11">10-11 <span class="grade__text_10-11">Класс</span>
        <div class="container">
            <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                <div class="itc-slider__wrapper">
                  <div class="itc-slider__items">
                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-7.png" alt="">
                                </div>
                                <div class="grade__suptitle">Иван Калита - это татарский хан Кулхан. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>Выдумка лжеца Белинского. Никакого хана «Кулхана» никогда не было.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__ivan" data-path="grade_seven">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-8.png" alt="">
                                </div>
                                <div class="grade__suptitle">Иван Грозный по приказу крымского хана отрекся от царского титула. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>Фейк лжеца Белинского.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__ivanzloy" data-path="grade_eight">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-9.png" alt="">
                                </div>
                                <div class="grade__suptitle">Книга про Оссиан. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br>В 1760 году в Эдинбурге вышла книга «Отрывки старинных стихотворений, собранные в горной Шотландии и переведенные с гэльского или эрского языка» — уникальная коллекция древних кельтских эпических сказаний, считавшихся утерянными.</div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__ossian" data-path="grade_nine">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-3_1.png" alt="">
                                </div>
                                <div class="grade__suptitle">Никита Хрущев пугал мировое сообщество не только кузькиной матерью (водородной бомбой), но и собственным ботинком, которым грозно стучал по трибуне во время выступления в ООН. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__xryshev" data-path="grade_sixteen">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-3_2.png" alt="">
                                </div>
                                <div class="grade__suptitle">Джон Кеннеди, еще живой и, по многочисленным слухам, крутившим бурный роман с Мэрилин Монро. <br> <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__merlin" data-path="grade_seventeen">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="itc-slider__item">
                        <div class="grade__item">
                            <div class="grade__inner">
                                <div class="grade__img">
                                    <img src="assets/img/slider-3_3.png" alt="">
                                </div>
                                <div class="grade__suptitle">Обед на небоскребе» Долгое время считалось, что автор фото неизвестен, просто какому-то фотографу посчастливилось снять, как 11 рабочих бесстрашно закусывают и читают газеты на 69-м этаже. <span class="grade__textes">Это Фейк.</span></div>
                                <div class="grade__text">
                                    <br></div>
                                <div class="grade__button" data-aos="zoom-in">
                                    <button class="grade__btn grade__obed" data-path="grade_eighteen">Читать далее</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <button class="itc-slider__btn itc-slider__btn_prev"></button>
                <button class="itc-slider__btn itc-slider__btn_next"></button>
              </div>
            </div> <!-- ./Grade_10-11 -->
        </div> <!-- ./Container -->
    </div> <!-- ./Slider_10-11 -->

    <!-- Defend -->
    <a name="Defend"></a>
    <div class="Defend">
        <div class="container">
            <div class="defend__suptitle" data-aos="fade-up">Защита данных <span class="defend__subtitle">В интернете</span></div>

            <div class="defend__item">
                <div class="defend__img">
                    <img class="defend__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="defend__text" data-aos="fade-in">Создавать сложные <b>логины и пароли</b></div>
            </div>

            <div class="defend__item">
                <div class="defend__img">
                    <img class="defend__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="defend__text" data-aos="fade-in">Стараться не пользоваться <b>общественными сетями Wi-Fi</b></div>
            </div>

            <div class="defend__item">
                <div class="defend__img">
                    <img class="defend__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="defend__text" data-aos="fade-in">Защита <b>цифровых данных</b></div>
            </div>

            <div class="defend__item">
                <div class="defend__img">
                    <img class="defend__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="defend__text" data-aos="fade-in">Не доверять <b>ссылкам в письмах,</b> не нажимать на <b>непонятные кнопки.</b></div>
            </div>

            <div class="defend__item">
                <div class="defend__img">
                    <img class="defend__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="defend__text" data-aos="fade-in">Следить за тем, какую информацию оставляете <b>профилях соцсетей.</b></div>
            </div>

            <div class="defend__border"></div>
            <div class="defend__info">
                <div class="defend__titles" data-aos="fade-in">
                    <b class="defend__information">Информационная безопасность</b> <b class="defend__textes">- совокупность условий и факторов,</b>
                    <br><b class="defend__texti">обеспечивающих состояние отстутсвия угроз.</b>
                </div>
            </div>
            <div class="defend__borders"></div>

        </div>
    </div>

    <!-- Kiber -->
    <a name="kiber"></a>
    <div class="kiber">
        <div class="container">
            <div class="kiber__suptitle" data-aos="fade-up">Продвинутая <span class="kiber__subtitle">Кибербезопасность</span></div>

            <div class="kiber__item">
                <div class="kiber__img">
                    <img class="kiber__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="kiber__text" data-aos="fade-in"><b>Фишинг</b> - это рассылка фальшивых писем от якобы надёжного
                <br>источника.</div>
            </div>

            <div class="kiber__item">
                <div class="kiber__img">
                    <img class="kiber__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="kiber__text" data-aos="fade-in"><b>DDoS-атака</b> - это попытка мошенников нарушить работоспособность
                <br>сервисов компании.</div>
            </div>

            <div class="kiber__item">
                <div class="kiber__img">
                    <img class="kiber__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="kiber__text" data-aos="fade-in"><b>Программы-вымогатели</b> могут попасть к вам на компьютер с
                <br>подозрительного сайта, из спам-письма или сообщения.</div>
            </div>

            <div class="kiber__item">
                <div class="kiber__img">
                    <img class="kiber__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="kiber__text" data-aos="fade-in"><b>Трояны</b> - вредоносное ПО, которое маскируется под легитимную
                <br>программу и используется для слежки и хищения данных.</div>
            </div>

            <div class="kiber__item">
                <div class="kiber__img">
                    <img class="kiber__img" src="assets/img/Vector.png" data-aos="fade-in" alt="">
                </div>
                <div class="kiber__text" data-aos="fade-in"><b>Социальная имженерия</b> - особый вид цифровой атаки, при которой
                <br>мошенники используют не только технологии, но и психологические
                <br>приёмы.</div>
            </div>

            <div class="kiber__border"></div>
            <div class="kiber__info" data-aos="fade-in">
                <div class="kiber__titles">
                    <b class="kiber__information">Кибербезопасность</b> <b class="kiber__textes">- совокупность действий по защите систем от</b>
                    <br><b class="kiber__texti">цифровых угроз.</b>
                </div>
            </div>
            <div class="kiber__borders"></div>
        </div>
    </div>

        <!-- Modal -->
    <div class="modals">
        <div class="modal-overlay">
            <div class="modal modal--1" data-target="grade_one">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Как позже признались на телеканале, молнии специально добавили при монтаже, 
                        <br>чтобы получилось эффектнее. Этот глупый инцидент стал одним из самых громких 
                        <br>скандалов вокруг научного канала этой известной корпорации.
                    </div>
                </div>
            </div>
            
            <div class="modal modal--2" data-target="grade_two">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Про Москву он не писал ни слова.</div>
                </div>
            </div>

            <div class="modal modal--3" data-target="grade_three">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">От имени народа Мокша происходит река, на которой этот 
                        <br>народ и живет – Мокша. Каким образом одна «Мокша» 
                        <br>превратилась в «Москву».
                    </div>
                </div>
            </div>

            <div class="modal modal--4" data-target="grade_four">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Материалы татарских переписей не сохранились. 
                        <br>Никаких документов татарских переписей «без Москвы» и 
                        <br>«с Москвой» нет, их выдумал лгун и фальсификатор Белинский.
                    </div>
                </div>
            </div>

            <div class="modal modal--5" data-target="grade_five">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Москва впервые упоминается в Ипатьевской летописи 
                        <br>под 1147 годом и потом неоднократно в Лаврентьевской и 
                        <br>Первой Новгородской летописях.
                    </div>
                </div>
            </div>

            <div class="modal modal--6" data-target="grade_six">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">На самом деле, русские приветствовали друг друга словом 
                            <br>«челом!» (бью). В польском языке такое приветствие «сzolem!» сохранилось до сих пор.
                    </div>
                </div>
            </div>

            <div class="modal modal--7" data-target="grade_seven">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Был хан Кульпа, который жил 20 лет спустя после смерти 
                        <br>московского князя Ивана Даниловича. 
                        <br>Прозвище «Калита» было прикреплено к Ивану Даниловичу 
                        <br>только в конце XV века.
                    </div>
                </div>
            </div>

            <div class="modal modal--8" data-target="grade_eight">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Иван Васильевич в 1574 году по своим внутренним причинам объявил фиктивным правителем Руси крещенного хана Симеона Бекбулатовича, ровно через год снял его с этой должности и почему-то все тот же крымский хан никак на это не прореагировал.</div>
                </div>
            </div>

            <div class="modal modal--9" data-target="grade_nine">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">В том 1827 году мы… задумали путешествие по Италии. 
                        <br>…Кошельки были пусты… Я предложил описать наше путешествие, продать 
                        <br>книгопродавцу и вырученные деньги употребить на то, 
                        <br>чтобы проверить, во многом мы ошиблись.
                    </div>
                </div>
            </div>

            <div class="modal modal--10" data-target="grade_ten">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Это всего лишь кадр из фильма об убийстве 35-го президента США под названием "Суд над Ли Харви Освальдом" Подобных примеров в интернете много. Несмотря на то, что многие принимают его за документальный фильм, это не реальная картина.</div>
                </div>
            </div>

            <div class="modal modal--11" data-target="grade_eleven">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Че Гевара якобы играл на гитаре с Джоном Ленноном в 1972 году. Джон Леннон сидел напротив американского гитариста Уэйна Гэбриэла из Elephant's Memory. Два музыканта вообще никогда не встречались и вообще никогда не играли дуэтом. Первоначальная версия этой фотографии была опубликована в 1970-х годах.
                    </div>
                </div>
            </div>

            <div class="modal modal--12" data-target="grade_twelve">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Ни Харли, ни Дэвидсон не имеют русских корней, да и на фото их нет вообще. На снимке двое обычных парней из Миннесоты, которые просто не упустили возможности сфотографироваться на популярных мотоциклах. Фотография была сделана в конце дня в Миннеаполисе, штат Миннесота
                    </div>
                </div>
            </div>

            <div class="modal modal--13" data-target="grade_thirteen">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Оригинальное фото Эйнштейна на велосипеде было сделано фотографом Марком Хоумом в 1933 году в Санта-Барбаре. Фотография взрыва была сделана во время испытаний в Неваде в 1962 году, а изображения были объединены в 2011 году. Изображение Эйнштейна и испытания бомбы вообще было сделано уже после смерти физика
                    </div>
                </div>
            </div>

            <div class="modal modal--14" data-target="grade_fourteen">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Венгерский турист сфотографировался на фоне Нью-Йорка еще в 1997 году. По легенде, кадр был снят с фотоаппарата, найденного среди обломков здания. Фото, конечно, впечатляет, но, как вы уже поняли, оно фейковое.
                    </div>
                </div>
            </div>

            <div class="modal modal--15" data-target="grade_fifteen">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Фотография заснеженного Сфинкса с подписью: «Впервые за 112 лет» стала вирусной в социальных сетях. Однако фото оказалось мистификацией. Заснеженный Сфинкс — настоящий, не египетский, а его уменьшенная копия.
                    </div>
                </div>
            </div>

            <div class="modal modal--16" data-target="grade_sixteen">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Генсека СССР Никиту Хрущева действительно сняли с обуви, только не на трибуне, а за столом. По словам сына генсека, ботинок тогда просто слетел с него в толпе, а позже его принесли охранники.
                    </div>
                </div>
            </div>

            <div class="modal modal--17" data-target="grade_seventeen">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">На снимках изображены реальные люди, но не Кеннеди и Монро, а их двойники. Подделка была создана фотографом Элисон Джексон, известной созданием провокационных фотопостановок с использованием двойников знаменитостей. Самые известные фейковые фотографии, которые ошибочно принимают за настоящие исторические кадры, не являются даже монтажом.
                    </div>
                </div>
            </div>

            <div class="modal modal--18" data-target="grade_eighteen">
                <div class="modal__item">
                    <div class="modal__suptitle">Правда.</div>
                    <div class="modal__subtitle">Автор фото действительно долгое время был неизвестен, нам даже пришлось нанять детективов для его установки. Им оказался профи Чарльз С. Эббетс, создавший эту постановку в 1932 году. Несмотря на то, что на картине присутствуют настоящие строители, фото постановочное.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="footer__logo">
                <img src="assets/img/logo.png" data-aos="flip-left" data-aos-delay="600" alt="">
            </div>
            <div class="footer__text" data-aos="fade-up" data-aos-delay="500">Безопасный лис</div>
                <nav class="footer__nav">
                    <a href="#slider_5-7" class="footer__link">5-7 классам</a>
                    <a href="#slider_8-9" class="footer__link">8-9 классам</a>
                    <a href="#slider_10-11" class="footer__link">10-11 классам</a>
                </nav>
            <div class="footer__copyright">© БЕЗОПАСНЫЙ ЛИС, 2023 “БЕЗОПАСНОТЬ В ИНТЕРНЕТЕ”</div>
            <div class="footer__test">
                <a class="btn footer-btn" href="test.php">А ты интернет-зависим? Проверь!</a>
            </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/window.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/script.js"></script>

</body>
</html>