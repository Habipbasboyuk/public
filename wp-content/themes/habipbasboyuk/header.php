<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Habip Portfolio</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo about_url(); ?>">About</a>
                </li>
                <li>
                    <a href="<?php echo skills_url(); ?>">Skills</a>
                </li>
                <li>
                    <a href="<?php echo projects_url(); ?>">Projects</a>
                </li>
                <li>
                    <a href="<?php echo contact_url(); ?>">Contact</a>
                </li>
                <li>
                    <a href="<?php echo hire_me_url(); ?>">Hire me</a>
                </li>
            </ul>
        </nav>
    </header>