<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-04-08 20:25:18',
                'modified' => '2024-04-08 20:25:18',
                'deleted' => '2024-04-08 20:25:18',
            ],
        ];
        parent::init();
    }
}
