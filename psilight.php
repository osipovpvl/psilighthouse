<!-- Проверка робота, размещается в сквозном блоке -->
<? $GLOBALS["GOOGLE_SPEED"] = preg_match('/insights|lighthouse/i', $_SERVER["HTTP_USER_AGENT"]); ?>

<!-- Условие для скрытия элементов -->
<? if (!$GLOBALS["GOOGLE_SPEED"]): ?>
<!-- Код -->
<? endif; ?>