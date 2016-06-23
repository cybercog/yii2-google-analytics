# Yii2 Google Analytics Tracking

[![Gitter chat at https://gitter.im/cybercog/yii2-google-analytics](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/cybercog/yii2-google-analytics?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Latest Stable Version](https://poser.pugx.org/cybercog/yii2-google-analytics/version)](https://packagist.org/packages/cybercog/yii2-google-analytics)
[![License](https://poser.pugx.org/cybercog/yii2-google-analytics/license)](https://github.com/cybercog/yii2-google-analytics/blob/master/LICENSE)

This extension provides easy way to add Universal Analytics tracking in your Yii2 application.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Run in console

```bash
php composer.phar require cybercog/yii2-google-analytics
```

## Usage

In your `/views/layouts/main.php` add
 
```php
use cybercog\yii\googleanalytics\widgets\GATracking;
```

Then before `</head>` add following code

```php
<?= GATracking::widget([
    'trackingId' => 'UA-XXXXXXXX-X',
]) ?>
```

## Advanced usage

### Omit script tag

By default this script generated output:

```html
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-X', "auto");
ga('send', 'pageview');
ga('set', 'anonymizeIp', true);
</script>
```

But sometimes we need the output without `script` tag to combined with `registerJs` or `registerJsFile` as `renderPartial` to add dependency or positioning configuration, you can use *omitScriptTag* **true** to disable `script` tag, example:

```php
<?= $this->registerJs(
    GATracking::widget([
        'trackingId' => 'UA-XXXXXXXX-X',
        'omitScriptTag' => true,
    ]), \yii\web\View::POS_END
); ?>
```

### Example of advanced usage

You can configure tracking script for your needs:

```php
<?= GATracking::widget([
    'trackingId' => 'UA-XXXXXXXX-X',
    'trackingConfig' => [
        'name' => 'myTracker',
        'allowAnchor' => false,
    ],
    'omitScriptTag' => false,
    'debug' => true,
    'debugTrace' => true,
    'anonymizeIp' => true,
    'plugins' => [
        'linkid' => [
            'cookieName' => '_ccli',
            'duration' => 45,
            'levels' => 5,
        ],
    ],
]) ?>
```

## Available fields (parameters)

| Field Name | Value Type | Default Value |
| :--------- | :--------- | :------------ |
| anonymizeIp | boolean | true |
| debug | boolean | false |
| debugTrace | boolean | false |

### [Official field reference](https://developers.google.com/analytics/devguides/collection/analyticsjs/field-reference)

## Available plugins

### linkid (Enhanced Link Attribution)

| Option Name | Default Value | Description |
| :---------- | :------------ | :---------- |
| cookieName  | _gali         | Cookie name |
| duration    | 30            | Cookie duration (seconds) |
| levels      | 3             | Max DOM levels from link to look for element ID |

### [Creating your own plugins](https://developers.google.com/analytics/devguides/collection/analyticsjs/plugins)
