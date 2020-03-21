<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320233306 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Cria tabela tipo_rh';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.tipo_rh
        (
            id character varying(30) COLLATE pg_catalog."default" NOT NULL,
            descricao character varying(80) COLLATE pg_catalog."default",
            CONSTRAINT tipo_rh_pkey PRIMARY KEY (id)
        )
        WITH (
            OIDS = FALSE
        )
        TABLESPACE pg_default;';

        $this->addSql($sql);

    }

    public function down(Schema $schema) : void
    {
        $sql = 'DROP TABLE public.tipo_rh CASCADE;';

        $this->addSql($sql);

    }
}
