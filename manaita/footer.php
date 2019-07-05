<footer>
  <nav>
    <ul>
      <li><a href="<?php echo home_url();?>">TOP</a></li>
      <li><a href="<?php echo home_url("picky");?>">私達のこだわり</a></li>
      <li><a href="<?php echo home_url("food");?>">フードメニュー</a></li>
      <li><a href="<?php echo home_url("drink");?>">ドリンクメニュー</a></li>
    </ul>
  </nav>
  <div class="copy">
    <small>&copy; 2018 Yusyokudaining Manaita ALL RIGHTS RESEARVED.</small>
  </div>
  <div id="top_scroll">
    <a href="#" id="page-top1"><img src="<?php echo get_template_directory_uri();?>/image/image_return.png" alt="ページトップスクロール"></a>
  </div>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>
