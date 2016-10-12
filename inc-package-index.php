<?php
$packages1 = array("helm","ido","org","dired","ace-jump","EWW");
$packages2 = array("crux", "thing-at-point","imenu","anything","yasnippet","magit","recentf","elscreen","ddskk","eshell","ibuffer","quickrun","term","shell");
?>
<form method="get" id="searchform" action="http://emacs.rubikitch.com/">
           <div class="search-box">
           <input class="search" type="text" value="" name="s" id="s"><button id="searchsubmit" class="btn-search"><img alt="検索" width="32" height="20" src="http://emacs.rubikitch.com/wp-content/themes/keni70_wp_cool_red_201609171027/images/icon/icon-btn-search.png"></button>
</div></form>
<ul>
<li><span style="font-size:large; font-weight:bolder;"><a href="http://emacs.rubikitch.com/category/books/sd-emacs-rensai/">★初心者はまずコレ読んで！★</a></span></li>
          <li><a href="http://emacs.rubikitch.com/tag/recommended-packages/">★おすすめパッケージ★</a></li>
          <li><a href="http://emacs.rubikitch.com/tag/packages-for-beginner/">★初心者安心パッケージ★</a></li>
          <li><a href="http://emacs.rubikitch.com/tag/%e3%82%bd%e3%83%bc%e3%82%b9%e8%a7%a3%e8%aa%ad%e6%8e%a8%e5%a5%a8/">ソース解読推奨パッケージ</a></li>
          <li><a href="http://emacs.rubikitch.com/tag/%e6%a8%99%e6%ba%96%e3%82%b3%e3%83%9e%e3%83%b3%e3%83%89%e5%bc%b7%e5%8c%96/">標準コマンド強化パッケージ</a></li>
</ul>
<span style="font-size:large; font-weight:bolder;">
<?php foreach($packages1 as $pkg) { ?>
    <a href="http://emacs.rubikitch.com/tag/<?=$pkg ?>/"><?=$pkg ?></a>
<?php }; ?>
</span>
<?php foreach($packages2 as $pkg) { ?>
    <a href="http://emacs.rubikitch.com/tag/<?=$pkg ?>/"><?=$pkg ?></a>
<?php }; ?>
