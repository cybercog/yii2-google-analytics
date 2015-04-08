# Google Analytics for Yii2

This extension provides easy way to add Universal Analytics tracking in your Yii2 application.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require cybercog/yii2-google-analytics "*"
```

or add

```json
"cybercog/yii2-google-analytics": "*"
```

to the require section of your `composer.json` file.

## Usage

In your `/views/layouts/main.php` add
 
```php
use cybercog\yii\googleanalytics\widgets\GATracking;
```

Then before `</head>` add following code

```php
<?= GATracking::widget(
    [
        'trackingId' => 'UA-XXXXXXXX-X'
    ]
) ?>
```

## Advanced usage

```php
<?= GATracking::widget(
    [
        'trackingId' => 'UA-XXXXXXXX-X',
        'anonymizeIp' => true,
        'plugins' => [
            'linkid' => [
                'cookieName' => '_ccli',
                'duration' => 45,
                'levels' => 5
            ]
        ]
    ]
) ?>
```

## Available fields (parameters)


| Field Name | Value Type | Default Value |
| :--------: | :--------: | :-----------: |
| anonymizeIp | boolean | true |

### [Official field reference](https://developers.google.com/analytics/devguides/collection/analyticsjs/field-reference)

## Available plugins

### linkid

Options list

```
cookieName // Cookie name. _gali by default.
duration   // Cookie duration. 30 seconds by default.
levels     // Max DOM levels from link to look for element ID. 3 by default.
```

### [Creating your own plugins](https://developers.google.com/analytics/devguides/collection/analyticsjs/plugins)