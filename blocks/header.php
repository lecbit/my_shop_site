<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a href="/" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Список</a>
                <div class="dropdown-menu">
                    <a href="/category.php?name=samsung" class="dropdown-item">Samsung</a>
                    <a href="/category.php?name=iphone" class="dropdown-item">Iphone</a>
                    <a href="/category.php?name=xiaomi" class="dropdown-item">Xiaomi</a>
                </div>
            </div>
        </div>
        <form method="GET" action="/search.php" class="form-inline">
            <div class="input-group">
                <input type="search" name="search" class="form-control" placeholder="Поиск">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="navbar-nav">
            <?php
            if (isset($_COOKIE['user']) == "admin") :
            ?>
                <a href="" class="nav-item nav-link">Личный кабинет</a>
                <a href="blocks/exit.php" class="nav-item nav-link active">Выйти</a>
            <?php
            else :
            ?>
                <a href="authorization.php" class="nav-item nav-link active">Войти</a>
                <a href="registration.php" class="nav-item nav-link">Регистрация</a>
            <?php
            endif;
            ?>
            <a href="store.php" class="nav-item nav-link">Корзина</a>
        </div>
    </div>
</nav>