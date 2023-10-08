<section class="bg-primary">
<div class="wrap size-50">
<ul class="text-cols">
<?php Theme::plugins('siteSidebar') ?> 
<?php foreach (Theme::socialNetworks() as $key=>$label): ?><dt>
<a href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?>.</a></dt><?php endforeach; ?>
<?php if (Theme::rssUrl()): ?><dt class="mt-4 font-semibold text-white"><a href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a></dt><?php endif; ?>
</ul>
</div>
</section>
<section class="fullscreen bg-black">
<div class="wrap aligncenter fadeInUp size-50" style="opacity: 0.9;">
<h3><strong><a href="<?php echo $site->url(); ?>"><?php echo $site->footer(); ?></a></a></strong></h3>
<p><small>Bludit SLIS by <a href="https://www.fiverr.com/creativitas/design-a-website-blog-with-our-cool-template-flat-file-cms">Creativitas</a></small></p>
</div>
</section>