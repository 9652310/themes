<header>
  <div class="header">
    <div class="container">
      <?php print render($page['header']); ?>
      <?php if ($logo): print '<a href="' . $front_page . '" title="' . t('') . '"> <img src="' . check_url($logo) . '" alt="' . t('') . '" id="logo" /></a>'; endif;?>     
      <?php print render($page['top_menu']); ?>
    </div>
  </div>
</header>

<main>
  <div class="main">
    <div class="container">
      <div class="content">
        <div id="breadcrumb">
          <?php if (!empty($breadcrumb)): ?>
          <?php print $breadcrumb; ?>
          <?php endif; ?>
        </div> 
          <?php print render($title_prefix); ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs = render($tabs)): ?>
          <?php print $tabs; ?>
          <?php endif; ?>
        <div id="title">
          <?php if ($title): ?><h1 class="title" id="page-title">
		      <?php print $title; ?></h1>
          <?php endif; ?>
          <?php if ($action_links): ?>
            <ul><?php print render($action_links); ?></ul>
          <?php endif; ?>
        </div>
          <?php if ($messages): ?>
          <?php print $messages; ?>
          <?php endif; ?>
        <div class="text">
	        <?php print render($page['content']); ?>
        </div>
      </div>
      <div class="right">
        <?php if ($sidebar_second = render($page['sidebar_second'])): ?>
        <?php print $sidebar_second; ?>
        <?php endif; ?>
	    </div>
    </div>
  </div>
</main>

<footer>
  <div class="footer">
    <div class="container">
      <?php print render($page['footer']); ?>
    </div>
  </div>
</footer>