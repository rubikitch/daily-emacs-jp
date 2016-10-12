<?php
  /* wptexturize関数（特定の記号などを変換）を無効にする */
  // 記事タイトル
  remove_filter('the_title', 'wptexturize');
  // 本文
  remove_filter('the_content', 'wptexturize');
  // コメント欄
  remove_filter('comment_text', 'wptexturize');
  // 抜粋
  remove_filter('the_excerpt', 'wptexturize');
?>
