<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Корпорация бодрости");
?>

<body>
  <div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
  </div>
  <div class="bg">
    <span>Секунду, сейчас загрузим :)</span>
  </div>
  <header class="header">
    <picture>
      <source srcset="assets/img/logo@2x.webp 2x, assets/img/logo.webp 1x" type="image/webp">
      <img class="logo index" src="assets/img/logo.png" srcset="assets/img/logo@2x.png 2x">
    </picture>
  </header>

  <div class="modal">
    <div class="modal__inner">
      <div class="contacts__item">
        <div class="modal__close"></div>
        <h2 class="contacts__item-title">Напиши нам</h2>
        <form class="contacts__form" action="" method="POST" id="ajax_modal">
          <div class="contacts__input-box">
            <input type="text" name="user_name" value="" size="40" class="contacts__input contacts__input-name"
              id="modal__input-name" aria-required="true" aria-invalid="false" placeholder=" " autocomplete="off">
            <label for="modal__input-name" class="contacts__input-label">ФИО</label>
          </div>
          <div class="contacts__input-box">
            <input type="tel" name="user_phone" value="" id="modal__input-phone"
              class="contacts__input contacts__input-phone" size="40" placeholder=" " data-mask="_ (___) ___-__-__"
              autocomplete="off">
            <label for="modal__input-phone" class="contacts__input-label">Телефон</label>
          </div>
          <div class="contacts__input-box">
            <input type="email" name="user_email" value="" size="40" class="contacts__input contacts__input-email"
              id="modal__input-email" aria-invalid="false" placeholder=" " autocomplete="off">
            <label for="modal__input-email" class="contacts__input-label">E-mail</label>
          </div>
          <div class="contacts__input-box">
            <textarea name="user_text" cols="40" rows="10" class="contacts__input contacts__input-textarea"
              id="modal__input-textarea" aria-required="true" aria-invalid="false" placeholder=" "
              autocomplete="off"></textarea>
            <label for="modal__input-textarea" class="contacts__input-label">Сообщение</label>
          </div>
          <button class="contacts__input-btn btn-black" id="btn-ajax-modal" type="button">отправить</button>
        </form>
      </div>
      <div class="modal__result">
        <h2 class="modal__result-title">Заявка отправлена</h2>
        <div class="modal__result-text">
          Наши менеджеры уже начали<br>состязаться за возможность<br>поработать с Вами!<br>Скоро они с Вами свяжутся :)
        </div>
      </div>
    </div>
  </div>

  <main id="fullpage" class="main">
    <section class="section slide-1">
      <div class="container">
        <div class="slide-1__line slide-1__line-1" data-speed="20"></div>
        <div class="slide-1__line slide-1__line-2" data-speed="40"></div>
        <h1 class="slide-1__line slide-1__line-3" data-speed="60">повысим прибыльность<br>твоего бизнеса</h1>
        <div class="slide-1__line slide-1__line-4" data-speed="80"></div>
        <div class="slide-1__line slide-1__line-5" data-speed="100"></div>
        <div class="slide-1__line slide-1__line-6" data-speed="120"></div>
        <div class="slide-1__line slide-1__line-7" data-speed="140"></div>
        <div class="arrow-down__container">
          <div class="arrow-down__text" title="Скролль страницу">как?</div>
          <div class="arrow-down__box" title="Скролль страницу">
            <div class="arrow-down__inner">
              <div class="arrow-down__dot-1"></div>
              <div class="arrow-down__dot-2"></div>
              <div class="arrow-down__dot-3"></div>
              <div class="arrow-down__arrow-1"></div>
              <div class="arrow-down__arrow-2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section slide-2">
      <div class="container">
        <div class="slide-2__content">
          <div class="slide-2__title slide__title">
            <div class="slide-2__title-box">
              <div class="slide-2__title--span slide-2__title--span-1">
                <span>Е</span><span>С</span><span>T</span><span>Ь</span><span>?</span>
              </div>
              <span class="slide-2__title--span slide-2__title--span-2">столовая</span>
              <span class="slide-2__title--span slide-2__title--span-3">гостиница</span>
              <span class="slide-2__title--span slide-2__title--span-4">автосалон</span>
              <span class="slide-2__title--span slide-2__title--span-5">придорожное кафе</span>
            </div>
          </div>
          <h2 class="slide-2__title2 slide__title">
            <span class="slide-2__title2--span slide-2__title2--span-1">Есть столовая,</span>
            <span class="slide-2__title2--span slide-2__title2--span-2">гостиница,</span>
            <span class="slide-2__title2--span slide-2__title2--span-3">автосалон,</span><br>
            <span class="slide-2__title2--span slide-2__title2--span-4">придорожное кафе?</span>
          </h2>
          <button class="slide-2__link btn-black open-form" type="button">есть</button>
          <div class="slide-2__text">Мы можем повысить прибыльность&nbsp-<br>
            <span>встроить небольшой, но высоко-маржинальный<br>
              бизнес в ваше предприятие.</span>
          </div>
        </div>
      </div>
    </section>
    <section class="section slide-3">
      <div class="container">
        <div class="slide-3__content">
          <div class="slide-3__title slide__title">
            <div class="slide-3__title-box">
              <div class="slide-3__title--span slide-3__title--span-1"><span>Есть</span></div>
              <div class="slide-3__title--span slide-3__title--span-2"><span>поток посетителей</span></div>
              <div class="slide-3__title--span slide-3__title--span-3"><span>и им приходится</span></div>
              <div class="slide-3__title--span slide-3__title--span-4"><span>проводить время</span></div>
              <div class="slide-3__title--span slide-3__title--span-5"><span>в ожидании</span></div>
              <div class="slide-3__title--span slide-3__title--span-6">?</div>
            </div>
          </div>
          <h2 class="slide-3__title2 slide__title">
            <span class="slide-3__title2--span slide-3__title2--span-1">есть поток</span>
            <span class="slide-3__title2--span slide-3__title2--span-2">посетителей</span><br>
            <span class="slide-3__title2--span slide-3__title2--span-3">и им</span>
            <div class="slide-3__title2--span slide-3__title2--span-4">приходится</div>
            <span class="slide-3__title2--span slide-3__title2--span-5">проводить</span>
            <span class="slide-3__title2--span slide-3__title2--span-6">время</span><br>
            <span class="slide-3__title2--span slide-3__title2--span-7">в ожидании?</span>
          </h2>
          <button class="slide-3__link btn-black open-form" type="button">есть</button>
          <div class="slide-3__text">Мы можем предоставить<br>
            <span>хороший сервис, который будет приносить прибыль.</span>
          </div>
        </div>
      </div>
    </section>
    <section class="section slide-4">
      <div class="container">
        <div class="slide-4__content">
          <h3 class="slide__title slide-4__title">
            почему&nbsp;мы?
          </h3>
          <div class="slide-4__rounds">
            <div class="slide-4__round slide-4__round-1">
              <div class="slide-4__round-inner">
                <div class="slide-4__round-box">
                  <span>8</span>
                  <p>лет</p>
                </div>
              </div>
            </div>
            <div class="slide-4__round slide-4__round-2">
              <div class="slide-4__round-inner">
                <div class="slide-4__round-box">
                  <span>200+</span>
                  <p>кофеен</p>
                </div>
              </div>
            </div>
            <div class="slide-4__round slide-4__round-3">
              <div class="slide-4__round-inner">
                <div class="slide-4__round-box">
                  <p>все<br>поставщики уже&nbsp;найдены</p>
                </div>
              </div>
            </div>
            <div class="slide-4__round slide-4__round-4">
              <div class="slide-4__round-inner">
                <div class="slide-4__round-box">
                  <p>оснащаем оборудованием и инвентарем</p>
                </div>
              </div>
            </div>
            <div class="slide-4__round slide-4__round-5">
              <div class="slide-4__round-inner">
                <div class="slide-4__round-box">
                  <p>снабжаем расходниками</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section slide-5">
      <div class="slide__title slide-5__title2">
        <div class="slide-5__title2--span slide-5__title2--span-1">
          Что
        </div>
        <div class="slide-5__title2--span slide-5__title2--span-2">
          потребуется?
        </div>
      </div>
      <div class="slide-5__desc2">
        <div class="slide-5__desc2-item slide-5__desc2-item--1">
          <span>1.</span>
          <p>мощность<br>от 3,5 кВт</p>
        </div>
        <div class="slide-5__desc2-item slide-5__desc2-item--2">
          <span>2.</span>
          <p>площадь<br>4-6 м2</p>
        </div>
        <div class="slide-5__desc2-item slide-5__desc2-item--3">
          <span>3.</span>
          <p>около<br>250 т.р.</p>
        </div>
        <div class="slide-5__desc2-item slide-5__desc2-item--4">
          и больше ничего
        </div>
      </div>
      <div class="slide-5__content">
        <div class=" slide-5__prompt">
          <div class="slide-5__prompt-1">и больше ничего</div>
          <div class="slide-5__prompt-2">и больше ничего</div>
          <div class="slide-5__prompt-3">и больше ничего</div>
          <div class="slide-5__prompt-4">и больше ничего</div>
        </div>
        <div class="slide-5__desc">
          <h3 class="slide__title slide-5__title">
            Что&nbsp;потребуется?
          </h3>

          <ul class="slide-5__desc-list">
            <li class="slide-5__desc-item">
              <span>1.</span>
              <p>мощность<br>от 3,5 кВт</p>
            </li>
            <li class="slide-5__desc-item">
              <span>2.</span>
              <p>площадь<br>4-6 м2</p>
            </li>
            <li class="slide-5__desc-item">
              <span>3.</span>
              <p>около<br>250 т.р.</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section id="section_calculator" class="section slide-6 section-calculator section-dark fp-auto-height">
      <div class="container">
        <div class="wrap-main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <h2 class="slide__title slide-6__title text-center">Рассчитай прибыль твоей&nbsp;кофейни</h2>
              </div>
            </div>
          </div>
          <div class="max-container-calculator">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 fp-no-scroll">
                  <div class="calculator-group calculator-group-place">
                    <div class="group-label">Место размещения</div>
                    <ul class="calculator-places list-inline">
                      <li>
                        <div class="radio">
                          <input type="radio" name="calculator-places" value="tc" id="calculator-place1"
                            checked="checked">
                          <label for="calculator-place1">Торговый центр</label>
                        </div>
                      </li>
                      <li>
                        <div class="radio">
                          <input type="radio" name="calculator-places" value="bc" id="calculator-place2"
                            checked="checked">
                          <label for="calculator-place2">Бизнес-центр</label>
                        </div>
                      </li>
                      <li>
                        <div class="radio">
                          <input type="radio" name="calculator-places" value="street" id="calculator-place3"
                            checked="checked">
                          <label for="calculator-place3">Улица </label>
                        </div>
                      </li>
                    </ul>
                    <div class="text-places">Средними значениями для торгового центра являются проходимость 6000 человек
                      в
                      день при аренде 51500 рублей.</div>
                  </div>
                  <div class="calculator-group calculator-group-slider">
                    <div class="group-label">Проходимость места, человек\день</div>
                    <div id="slider-passability"></div>
                    <div class="slider-group-label">
                      <div class="d-flex justify-content-between">
                        <div><span class="slider-label" id="passabilityMin">500</span></div>
                        <div><span class="slider-label" id="passabilityMax">10000</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="calculator-group calculator-group-slider">
                    <div class="group-label">Арендная ставка в месяц</div>
                    <div class="noulslider-second" id="slider-price"></div>
                    <div class="slider-group-label">
                      <div class="d-flex justify-content-between">
                        <div><span class="slider-label" id="priceMin">5000</span></div>
                        <div><span class="slider-label" id="priceMax">150000</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="calculator-group calculator-group-slider">
                    <div class="group-label">Конверсия</div>
                    <div id="slider-conversion"></div>
                    <div class="slider-group-label">
                      <div class="d-flex justify-content-between">
                        <div><span class="slider-label" id="conversionMin">1</span></div>
                        <div><span class="slider-label" id="conversionMax">10</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                  <div class="d-flex align-items-center h-100">
                    <div class="w-100 text-center">
                      <svg class="calculator-profit" width="300" height="300" viewBox="0 0 300 300" aria-labelledby=""
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <circle class="calculator-profit__circle" r="130" cx="150" cy="150"></circle>
                        <circle class="calculator-profit__glow" r="130" cx="150" cy="150"></circle>
                        <text class="calculator-profit__number" x="50%" y="50%">635520 руб</text>
                        <text class="calculator-profit__label" x="50%" y="60%">Чистая прибыль в месяц</text>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                  <div class="d-flex flex-column align-items-center h-100">
                    <table>
                      <thead>
                        <tr>
                          <td>Экономические показатели за месяц</td>
                          <td>руб</td>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Оборот кофейни</td>
                          <td id="total">34 000</td>
                        </tr>
                        <tr>
                          <td>Рентабельность по прибыли</td>
                          <td id="cost">34 000%</td>
                        </tr>
                        <tr>
                          <td>Себестоимость продукции</td>
                          <td id="raw">0</td>
                        </tr>
                        <tr>
                          <td>Налоговые ставки</td>
                          <td id="taxes">39 000</td>
                          <td>4500</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>УСН 6%</td>
                          <td>или Патент</td>
                        </tr>
                        <tr>
                          <td>Арендная ставка</td>
                          <td id="rent">45 000</td>
                        </tr>
                        <tr>
                          <td>Фонд оплаты труда</td>
                          <td>39 000</td>
                        </tr>
                        <tr>
                          <td>Средний чек</td>
                          <td>150</td>
                        </tr>
                        <tr>
                          <td>Конверсия</td>
                          <td id="conver">1%</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="button">
                      <button class="btn btn-black open-form" id="btnform32" data-fancybox data-type="ajax"
                        data-src="/ajax/nform32.php" data-touch="false" data-hideOnOverlayClick="false"
                        href="javascript:;" type="button">Оставить заявку</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section slide-7">
      <div class="container">

        <div class="slide-7__inner">
          <div class="slide-7__content">
            <div class="slide-7__img-box slide-7__img-box--1">
              <picture>
                <source srcset="assets/img/1.webp" type="image/webp">
                <img class="slide-7__img" src="assets/img/1.jpg" alt="img">
              </picture>
            </div>
            <div class="slide-7__img-box slide-7__img-box--2">
              <picture>
                <source srcset="assets/img/3.webp" type="image/webp">
                <img class="slide-7__img" src="assets/img/3.jpg" alt="img">
              </picture>
            </div>
            <div class="slide-7__img-box slide-7__img-box--3">
              <picture>
                <source srcset="assets/img/4.webp" type="image/webp">
                <img class="slide-7__img" src="assets/img/4.jpg" alt="img">
              </picture>
            </div>
          </div>
          <h3 class="slide__title slide-7__title">
            вот как можем
          </h3>
        </div>
      </div>
    </section>
    <section class="section slide-8 contacts fp-auto-height">
      <div class="slide-8__bg"></div>
      <div class="container">
        <div class="contacts__items">
          <div class="contacts__item">
            <h2 class="contacts__item-title">Контакты</h2>
            <div class="contacts__item-line">
              <picture>
                <source srcset="assets/img/contacts/mail-small@2x.webp 2x, assets/img/contacts/mail-small.webp 1x"
                  type="image/webp">
                <img class="contacts__item-img" src="assets/img/contacts/mail-small.png"
                  srcset="assets/img/contacts/mail-small@2x.png 2x" alt="mail">
              </picture>
              <a class="contacts__item-text" href="mailto:feedback@bodryi-den.ru">feedback@bodryi-den.ru</a>
            </div>
            <div class="contacts__item-line">
              <picture>
                <source srcset="assets/img/contacts/phone@2x.webp 2x, assets/img/contacts/phone.webp 1x"
                  type="image/webp">
                <img class="contacts__item-img" src="assets/img/contacts/phone.png"
                  srcset="assets/img/contacts/phone@2x.png 2x" alt="phone">
              </picture>
              <a class="contacts__item-text" href="tel:+7-383-375-00-24">+7-383-375-00-24</a>
            </div>
            <div class="contacts__item-line">
              <picture>
                <source srcset="assets/img/contacts/map@2x.webp 2x, assets/img/contacts/map.webp 1x" type="image/webp">
                <img class="contacts__item-img" src="assets/img/contacts/map.png"
                  srcset="assets/img/contacts/map@2x.png 2x" alt="map">
              </picture>
              <a class="contacts__item-text" href="https://go.2gis.com/jj61vf" target="_blank">г. Новосибирск<br>ул.
                Красный проспект,
                200,
                офис 820</a>
            </div>
          </div><!-- .contacts__item -->

          <div class="contacts__item">
            <h2 class="contacts__item-title">Напиши нам</h2>
            <form class="contacts__form" action="" method="POST" id="ajax_form">
              <div class="contacts__input-box">
                <input type="text" name="user_name" value="" size="40" class="contacts__input contacts__input-name"
                  id="contacts__input-name" aria-required="true" aria-invalid="false" placeholder=" "
                  autocomplete="off">
                <label for="contacts__input-name" class="contacts__input-label">ФИО</label>
              </div>
              <div class="contacts__input-box">
                <input type="tel" name="user_phone" value="" id="contacts__input-phone"
                  class="contacts__input contacts__input-phone" size="40" placeholder=" " data-mask="_ (___) ___-__-__"
                  autocomplete="off">
                <label for="contacts__input-phone" class="contacts__input-label">Телефон</label>
              </div>
              <div class="contacts__input-box">
                <input type="email" name="user_email" value="" size="40" class="contacts__input contacts__input-email"
                  id="contacts__input-email" aria-invalid="false" placeholder=" " autocomplete="off">
                <label for="contacts__input-email" class="contacts__input-label">E-mail</label>
              </div>
              <div class="contacts__input-box">
                <textarea name="user_text" cols="40" rows="10" class="contacts__input contacts__input-textarea"
                  id="contacts__input-textarea" aria-required="true" aria-invalid="false" placeholder=" "
                  autocomplete="off"></textarea>
                <label for="contacts__input-textarea" class="contacts__input-label">Сообщение</label>
              </div>
              <button class="contacts__input-btn btn-black" id="btn-ajax-form" type="button">отправить</button>
            </form>
          </div>

        </div><!-- .contacts__items -->
      </div>
    </section>
  </main>

</body>

<script type="text/javascript" src="assets/js/main.js"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>