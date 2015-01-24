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
        'trackingId' => 'UA-XXXXXXXX-X',
    ]
) ?>
```