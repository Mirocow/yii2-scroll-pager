<?php

namespace mirocow\y2sp\tests\unit;

use Codeception\TestCase\Test;
use mirocow\y2sp\ScrollPager;

/**
 * This is ScrollPagerTest unit test.
 *
 * @see       \mirocow\y2sp\ScrollPager
 * @link      http://mirocow.github.io/yii2-scroll-pager Y2SP project page.
 * @license   https://github.com/mirocow/yii2-scroll-pager/blob/master/LICENSE.md MIT
 *
 * @author    Ivan Koptiev <ivan.koptiev@codex.systems>
 */
class ScrollPagerTest extends Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \mirocow\y2sp\ScrollPager
     */
    protected $instance;

    /**
     * @inheritdoc
     */
    protected function _before()
    {
        $this->instance = new ScrollPager();
    }

    /**
     * @inheritdoc
     */
    protected function _after()
    {
        $this->instance = null;
    }
}