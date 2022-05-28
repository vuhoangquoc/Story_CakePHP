<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChaptersFixture
 */
class ChaptersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'article_id' => 1,
                'chap' => 'Lorem ipsum dolor sit amet',
                'recap' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'contentimage' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-05-28 11:34:38',
                'modified' => '2022-05-28 11:34:38',
            ],
        ];
        parent::init();
    }
}
