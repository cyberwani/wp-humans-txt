<h2><?php _e('Introduction', WPHumansTxt::TEXT_DOMAIN); ?></h2>
<?php _e(
    "
Having a humans.txt file is an initiative for knowing the people behind a website. It's the file that contains information about the different people who have contributed to building the website.
",
    WPHumansTxt::TEXT_DOMAIN
); ?>

<h2><?php _e('Who to mention', WPHumansTxt::TEXT_DOMAIN); ?></h2>
<?php _e(
    "
Whoever you want to, provided they wish you to do so. You can mention the developer, the designer, the copywriter, the webmaster, the SEO, SEM or SMO...
As you can see, the number of people who may take part of the creation of a site can be big, so the list is almost endless.
",
    WPHumansTxt::TEXT_DOMAIN
); ?>

<h2><?php _e('Learn more', WPHumansTxt::TEXT_DOMAIN); ?></h2>
<?php printf(
    __(
        "
Visit %s to read more about what to include and how to treat the humans.txt file.
",
        WPHumansTxt::TEXT_DOMAIN
    ),
    "<a href='http://humanstxt.org/'>humanstxt.org</a>"
);
