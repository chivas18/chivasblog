<?php
use Migrations\AbstractMigration;

class CreatePosts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('posts');

        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => true,
            'collation'=>'utf8_general_ci'
        ]);

        $table->addColumn('content', 'text', [
            'default' => null,
            'null' => true,
            'collation'=>'utf8_general_ci'
        ]);

        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);

        $table->addColumn('is_public', 'integer', [
            'default' => 0,
            'limit' => 4,
            'null' => true,
        ]);

        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->create();
    }
}
