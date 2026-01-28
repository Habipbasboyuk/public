<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Habip Portfolio</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <nav class="header__nav">
            <p class="header__logo"><span class="header__logo-bracket">&lt;</span>HB<span class="header__logo-slash">/&gt;</span></p>
            <ul class="header__menu">
                <li class="header__menu-item"><a href="#about" class="header__menu-link">About</a></li>
                <li class="header__menu-item"><a href="#skills" class="header__menu-link">Skills</a></li>
                <li class="header__menu-item"><a href="#projects" class="header__menu-link">Projects</a></li>
                <li class="header__menu-item"><a href="#contact" class="header__menu-link">Contact</a></li>
                <li class="header__menu-item"><a href="#hire-me" class="header__menu-link header__menu-link--hire btn-hire">Hire me</a></li>
            </ul>
        </nav>
</header>