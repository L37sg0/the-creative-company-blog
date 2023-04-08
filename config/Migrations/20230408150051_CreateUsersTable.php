<?php
declare(strict_types=1);

use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', ['limit' => 50])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex(['username'], ['unique' => true])
            ->addIndex(['email'], ['unique' => true])
            ->create();

        // Default user admin
        $hasher = new DefaultPasswordHasher();
        $data = [
            'username'  => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => $hasher->hash('password'),
            'created'   => date('Y-m-d H:i:s'),
            'modified'  => date('Y-m-d H:i:s')
        ];

        $table->insert($data)->saveData();
    }
}
