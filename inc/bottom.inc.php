<div id="footer">
    <!-- Нижняя часть страницы -->
    <?
    drawMenu($leftMenu, false);
    ?>
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?=$year?>
    <!-- Нижняя часть страницы -->
    <p>
        Powered by <?=$_SERVER["SERVER_SOFTWARE"]?>
<!--        /PHP--><?//=PHP_VERSION?>
        on <?=PHP_OS?>
    </p>
</div>
</body>

</html>