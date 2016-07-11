<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation for table `libro_table`.
 */
class m160711_202122_create_libro_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $options = null;
        if ($this->db->driverName === 'mysql') {
            $options = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=innodb';
        }
        $this->createTable('{{libro}}',[
            'id'        => $this->primaryKey(),
            'autores'   => $this->string(255)->notNull(),
            'titulo'    => $this->string(155)->notNull(),
            'anio'      => $this->integer(),
            'lugar'     => $this->string(155)->notNull(),
            'editorial'    => $this->string(85)->notNull(),
            'resumen'   => $this->text()->notNull(),
            'keywords'  => $this->text()->notNull(),
            'idioma'    => $this->string(55)->notNull(),
            'portada'   => $this->string(55)->notNull(),
            'libro'     => $this->string(55)->notNull(),
            'usuario_id'   => $this->integer(),
        ],$options);

        //$this->addForeignKey('usuariolibro','libro','usuario_id','usuario','id','no action','no action');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        //$this->dropForeignKey('usuariolibro','libro');
        $this->dropTable('{{libro}}');
    }
}
