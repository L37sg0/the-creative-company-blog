<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCommentsTable extends AbstractMigration
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
        $table = $this->table('comments');
        $table->addColumn('body', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addColumn('user_id', 'integer')
            ->addColumn('post_id', 'integer')
            ->addIndex('user_id')
            ->addIndex('post_id')
            ->addForeignKey('user_id', 'users', 'id', [
                'delete'    => 'CASCADE',
                'update'    => 'CASCADE'
            ])
            ->addForeignKey('post_id', 'posts', 'id', [
                'delete'    => 'CASCADE',
                'update'    => 'CASCADE'
            ])->create();
    }
}
