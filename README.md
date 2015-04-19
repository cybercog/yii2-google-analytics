# Google Analytics for Yii2

This extension provides easy way to add Universal Analytics tracking in your Yii2 application.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require cybercog/yii2-google-analytics "~0.2"
```

or add

```json
"cybercog/yii2-google-analytics": "~0.2"
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
        'trackingConfig' => [
            'name' => 'myTracker',
            'allowAnchor' => false
        ],
        'debug' => true,
        'debugTrace' => true,
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
| :--------- | :--------- | :------------ |
| anonymizeIp | boolean | true |

### [Official field reference](https://developers.google.com/analytics/devguides/collection/analyticsjs/field-reference)

## Available plugins

### linkid (Enhanced Link Attribution)

| Option Name | Default Value | Description |
| :---------- | :------------ | :---------- |
| cookieName  | _gali         | Cookie name |
| duration    | 30            | Cookie duration (seconds) |
| levels      | 3             | Max DOM levels from link to look for element ID |

### [Creating your own plugins](https://developers.google.com/analytics/devguides/collection/analyticsjs/plugins)