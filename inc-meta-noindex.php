<meta name="google-site-verification" content="Vn7rfEyySOsYKA9uUrfPhB6zXojKjHAlUq50tAgp_CY" />
<?php //指定ページにnoindexタグを出力
if (in_category(array('記事更新情報','るびきち塾メルマガ'))) {
    echo '<!-- HnF noindex (category) --><meta name="robots" content="noindex" />';
} elseif (has_tag(array('too_short'))) {
    echo '<!-- HnF noindex (tag) --><meta name="robots" content="noindex" />';
} elseif (strstr(get_the_content(), '<!-- noindex -->')) {
    echo '<!-- HnF noindex (content) --><meta name="robots" content="noindex" />';
};
?>
