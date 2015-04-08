<?php
/**
 * @var string  $trackingId
 * @var array   $trackingParams
 * @var array   $tackingPlugins
 */
?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?= $trackingId ?>', 'auto');
    ga('send', 'pageview');
    <?php foreach($trackingFields as $field => $value) : ?>
        ga('set', '<?= $field ?>', <?= $value ?>);
    <?php endforeach ?>
    <?php foreach($trackingPlugins as $plugin => $scriptFilename) : ?>
        ga('require', '<?= $plugin ?>', '<?= $scriptFilename ?>');
    <?php endforeach ?>
</script>
