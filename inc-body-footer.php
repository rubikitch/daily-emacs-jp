<!-- HnF after (before /article) -->
<?php if (is_single() && !in_category(array('るびきち塾メルマガ'))){ ?>
<div class="HnF after">
<p>
本サイトの内容を手元で検索できるよう文書全体をGitHubに置いています。
辞書代わりにしていただければ幸いです。
<pre class="example">
$ git clone --depth=1 git://github.com/rubikitch/daily-emacs-jp.git
</pre>
</p>
<p>
もし、うまく動作しないのならば pull-request を送信するか、コメントしてください。
</p>
</div>
<?php } ?>
