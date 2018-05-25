<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users');

        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 50,
            'signed' => false,
            'null' => false
        ]);

        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);

        $table->addColumn('email', 'string', [
            'default' => null,
            'signed' => false,
            'limit' => 50,
            'null' => false,
        ]);

        $table->addColumn('fullname', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
            'collation'=>'utf8_general_ci'
        ]);

        $table->addColumn('is_blog', 'integer', [
            'default' => 0,
            'limit' => 4,
            'null' => false
        ]);

        $table->addColumn('permision', 'integer', [
            'default' => 0,
            'limit' => 4,
            'null' => false
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
