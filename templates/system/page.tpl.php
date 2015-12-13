<div id="page-wrapper">
  <div id="page">
    <header>
      <div class="container clearfix">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <div id="name-and-slogan">
            <?php if ($site_name): ?>
              <?php if ($title): ?>
                <div id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                    <span><?php print $site_name; ?></span>
                  </a>
                </div>

              <?php else: ?>
                <h1 id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                    <span><?php print $site_name; ?></span>
                  </a>
                </h1>
              <?php endif; ?>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <div id="site-slogan">
                <?php print $site_slogan; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php print render($page['header']); ?>
      </div>
    </header>

    <?php if ($main_menu || $secondary_menu || $page['navigation']): ?>
    <div class="navigation">
      <div class="container">
      <?php if ($main_menu || $secondary_menu): ?>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
      <?php endif; ?>
      <?php if ($main_menu || $secondary_menu): ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      <?php endif; ?>
      <?php if (!empty($page['navigation'])): ?>
        <?php print $page['navigation']; ?>
      <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if ($breadcrumb): ?>
    <div id="breadcrumb">
      <div class="container">
        <?php print $breadcrumb; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if ($messages): ?>
    <div class="container-wrapper">
      <div class="container">
        <?php print $messages; ?>
      </div>
    </div>
    <?php endif; ?>

    <div class="main-wrapper column clearfix">
      <div class="container">

        <?php if (isset($page['highlighted'])): ?>
        <div id="highlighted">
          <?php print render($page['highlighted']); ?>
        </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
        <?php endif; ?>

        <?php print render($page['help']); ?>

        <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>

        <?php if (isset($feed_icons)): ?>
        <?php print $feed_icons; ?>
        <?php endif; ?>
      </div>

    </div>

    <footer>
      <div class="container">
        <?php print render($page['footer']); ?>
      </div>
    </footer>
  </div>
</div>
