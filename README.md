yii2-scroll-pager
=============

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

### Add github repository


```json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/mirocow/yii2-scroll-pager.git"
        }
    ]
```

and then

```
php composer.phar require --prefer-dist "mirocow/yii2-scroll-pager" "*"
```

or add

```json
"mirocow/yii2-scroll-pager" : "*"
```

to the require section of your application's `composer.json` file.

Using
=====

```php
use \mirocow\y2sp\ScrollPager;

    <?= ListView::widget(
        [
            'dataProvider' => $dataProvider,
            'itemOptions' => [
                'class' => 'item',
                'delay' => 600,
            ],
            'emptyText' => '<p class="bg-warning">Ничего не найдено.</p>',
            'pager' => [
                'class' => ScrollPager::className(),
                'triggerOffset' => 100,
                'noneLeftText' => 'Больше анкет не найдено',
                'linkOptions' => ['rel' => 'nofollow'],
                'enabledExtensions' => [
                    //ScrollPager::EXTENSION_TRIGGER,
                    ScrollPager::EXTENSION_SPINNER,
                    ScrollPager::EXTENSION_NONE_LEFT,
                    ScrollPager::EXTENSION_PAGING,
                    //ScrollPager::EXTENSION_HISTORY
                ],
            ],
            'layout' => "{items}\n<noindex>{pager}</noindex>",
        ]
    ); ?> 
```
