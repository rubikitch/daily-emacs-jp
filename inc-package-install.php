<div id="outline-container-sec-2" class="outline-2">
<h2 id="sec-2">インストール</h2>
<div class="outline-text-2" id="text-2">
<p> パッケージシステムを初めて使う人は<br />以下の設定を ~/.emacs.d/init.el の<br />先頭に加えてください。</p>
<div class="org-src-container">
<pre class="src src-emacs-lisp">(package-initialize)
(setq package-archives
      '((<span style="font-style: italic;">"gnu"</span> . <span style="font-style: italic;">"http://elpa.gnu.org/packages/"</span>)
        (<span style="font-style: italic;">"melpa"</span> . <span style="font-style: italic;">"http://melpa.org/packages/"</span>)
        (<span style="font-style: italic;">"org"</span> . <span style="font-style: italic;">"http://orgmode.org/elpa/"</span>)))
</pre>
</div>
<p> 初めて<?=$attrs['name'] ?>を使う方は<br />以下のコマンドを実行します。</p>
<pre class="example">
M-x package-install <?=$attrs['name'] ?>
</pre>
<p> アップグレードする方は、<br />以下のコマンドでアップグレードしてください。<br  /> そのためにはpackage-utilsパッケージが必要です。<br  /> </p>
<pre class="example">
M-x package-install package-utils (初めてアップグレードする場合のみ)
M-x package-utils-upgrade-by-name <?=$attrs['name'] ?>
</pre>
</div>
</div>
