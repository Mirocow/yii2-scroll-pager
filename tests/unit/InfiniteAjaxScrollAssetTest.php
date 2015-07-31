<?php

namespace mirocow\y2sp\tests\unit;

use Codeception\TestCase\Test;
use mirocow\y2sp\assets\InfiniteAjaxScrollAsset;

/**
 * This is InfiniteAjaxScrollAssetTest unit test.
 *
 * @see       \mirocow\y2sp\assets\InfiniteAjaxScrollAsset
 * @link      http://mirocow.github.io/yii2-scroll-pager Y2SP project page.
 * @license   https://github.com/mirocow/yii2-scroll-pager/blob/master/LICENSE.md MIT
 *
 * @author    Ivan Koptiev <ivan.koptiev@codex.systems>
 */
class InfiniteAjaxScrollAssetTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \mirocow\y2sp\assets\InfiniteAjaxScrollAsset
     */
    protected $instance;

    /**
     * @inheritdoc
     */
    protected function _before()
    {
        $this->instance = new InfiniteAjaxScrollAsset();
    }

    /**
     * @inheritdoc
     */
    protected function _after()
    {
        $this->instance = null;
    }
}