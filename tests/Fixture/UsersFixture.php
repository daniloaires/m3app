<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'role_id' => 1,
                'created' => '2024-04-08 20:25:48',
                'modified' => '2024-04-08 20:25:48',
                'deleted' => '2024-04-08 20:25:48',
            ],
        ];
        parent::init();
    }
}
