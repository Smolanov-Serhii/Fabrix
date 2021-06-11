<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}
?>

</main>
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__top">
            <div class="footer__logo">
                <img src="<?= SITE_TEMPLATE_PATH; ?>/images/logo_footer.svg" alt="Логотип footer">
            </div>
            <form class="footer__subscribe">
                <div class="footer__subscribe-desc">
                    Подпишитесь на новости, чтобы не пропустить новые акции и спецпредложения
                </div>
                <?$APPLICATION->IncludeComponent("bitrix:subscribe.form","",Array(
                        "USE_PERSONALIZATION" => "Y",
                        "PAGE" => "#SITE_DIR#personal/subscribe/subscr_edit.php",
                        "SHOW_HIDDEN" => "Y",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600"
                    )
                );?>
            </form>
        </div>
        <div class="footer__nav">
            <nav>
                <ul>
                    <li>Покупателям</li>
                    <li><a href="#">Как сделать заказ</a></li>
                    <li><a href="#">Возврат денежных средств</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Правила пользования площадкой</a></li>
                    <li><a href="#">Возврат товара</a></li>
                    <li><a href="#">Вопросы и ответы</a></li>
                </ul>
                <ul>
                    <li>Компания</li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Реквизиты</a></li>
                </ul>
                <ul>
                    <li>Каталог</li>
                    <li><a href="#">Костюмные ткани</a></li>
                    <li><a href="#">Трикотаж</a></li>
                    <li><a href="#">Курточные ткани с мембраной</a></li>
                    <li><a href="#">Трикотаж хлопковый</a></li>
                    <li><a href="#">Трикотаж спортивный</a></li>
                    <li><a href="#">Сорочечные ткани</a></li>
                    <li><a href="#">Курточные ткани</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="footer__copyright">
        Copyright © <?php echo date('Y'); ?>  bonzago.ru. All rights reserved.
    </div>
</footer>

<?php

use \Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/common.js");
?>

</body>
</html>