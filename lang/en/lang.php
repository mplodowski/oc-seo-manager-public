<?php

return [
    'plugin' => [
        'name' => 'SEO Manager',
        'description' => 'Manage SEO tags for whole project with ease',
    ],
    'field' => [
        'meta_title' => 'SEO Title',
        'meta_description' => 'SEO Description',
        'meta_keywords' => 'Meta Keywords',
        'canonical_url' => 'Canonical URL',
        'redirect_url' => '301 Redirect URL',
        'robot_index' => 'Meta Robots Index',
        'robot_follow' => 'Meta Robots Follow',
        'robot_advanced' => 'Meta Robots Advanced',
        'og_title' => 'Og Title',
        'og_description' => 'Og Description',
        'og_type' => 'Og Type',
        'og_image' => 'Og Image',
    ],
    'robot' => [
        'follow' => 'Follow',
        'nofollow' => 'Nofollow',
        'index' => 'Index',
        'noindex' => 'Noindex',
        'index_comment' => 'Allow search engines robots to index the page.',
        'noindex_comment' => 'Disallow search engines from showing this page in their results.',
        'follow_comment' => 'Tells the search engines robots to follow the links on the page, whether it can index it or not.',
        'nofollow_comment' => 'Tells the search engines robots to not follow any links on the page at all.',
    ],
    'tab' => [
        'meta' => 'SEO',
        'og_tags' => 'Open Graph',
    ],
    'component' => [
        'name' => 'Seo Tags',
        'description' => 'Renders seo tags on the page.',
    ],
    'settings' => [
        'label' => 'SEO configuration',
        'category' => 'SEO',
        'description' => 'Manage SEO settings',
        'title_prefix' => 'Title prefix',
        'title_prefix_comment' => 'Fill this field to add prefix for all meta titles.',
        'title_suffix' => 'Title suffix',
        'title_suffix_comment' => 'Fill this field to add suffix for all meta titles.',
        'og_enabled' => 'Open Graph tags enabled',
        'og_enabled_comment' => 'Enable social media Open Graph tags.',
        'common_tags' => 'Common meta tags',
        'common_tags_comment' => 'Specify tags which are common for all sites, e.g. author, viewport.',
        'site_name' => 'Site name',
        'fb_app_id' => 'Facebook Application ID',
        'general' => 'General',
        'og' => 'Open Graph',
        'import' => 'Import',
        'site_name_comment' => 'Provide a site name, e.g. "My Favorite News".',
        'fb_app_id_comment' => 'A Facebook App ID that identifies your website to Facebook.',
        'robots' => 'robots.txt',
        'robots_comment' => 'System will allow access robots to all pages by default',
        'htaccess' => '.htaccess',
        'htaccess_comment' => 'Editing this content may break your site if not set up properly. Proceed with caution.',
    ],
    'permissions' => [
        'tab' => 'SEO',
        'settings' => 'Manage settings',
        'import' => 'Allow to use import',
    ],
    'comments' => [
        'meta_title' => 'Title display in search engines is limited to :limit characters, <span>:limit</span> chars left.',
        'meta_description' => 'Recommended description should be between 50–300 characters, <span>:limit</span> chars left.',
        'canonical_url' => 'The canonical URL that this page should point to, leave empty to default to permalink.',
        'redirect_url' => 'The URL that this page should redirect to.',
        'robot_advanced' => 'Add more robots meta comma separated values like: noarchive, noodp, noydir, etc.',
        'og_type' => 'The type of the object, such as "article". See <a target="_blank" href="https://developers.facebook.com/docs/reference/opengraph/">Facebook Docs.</a>',
        'og_title' => 'Leave empty to default to SEO Title.',
        'og_description' => 'Leave empty to default to SEO Description.',
        'og_image_comment' => 'Use images that are at least 1200 x 630 pixels for the best display on high resolution devices.',
    ],
    'import' => [
        'label' => 'Import SEO',
        'description' => 'Import default meta title and meta description from existing records.',
        'cms' => 'Import from CMS Pages',
        'static' => 'Import from Static Pages',
        'blog' => 'Import from Blog',
        'hint_import' => 'Import default meta title and meta description from existing records.',
        'success' => 'Import success!',
    ],
];