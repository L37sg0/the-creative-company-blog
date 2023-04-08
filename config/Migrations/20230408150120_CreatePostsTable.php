<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePostsTable extends AbstractMigration
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
        $table = $this->table('posts');
        $table->addColumn('title', 'string', ['limit' => 255])
            ->addColumn('body', 'text')
            ->addColumn('user_id', 'integer')
            ->addColumn('category_id', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('user_id')
            ->addIndex('category_id')
            ->addForeignKey('user_id', 'users', 'id', [
                'delete'    => 'CASCADE',
                'update'    => 'CASCADE'
            ])
            ->addForeignKey('category_id', 'categories', 'id', [
                'delete'    => 'CASCADE',
                'update'    => 'CASCADE'
            ])->create();
    }
}
