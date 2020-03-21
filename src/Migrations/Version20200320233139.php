<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320233139 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Cria tabela sexo';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.sexo
        (
            id character varying(20) COLLATE pg_catalog."default" NOT NULL,
            descricao character varying(80) COLLATE pg_catalog."default" NOT NULL,
            CONSTRAINT sexo_pkey PRIMARY KEY (id)
        )
        WITH (
            OIDS = FALSE
        )
        TABLESPACE pg_default;';

        $this->addSql($sql);

    }

    public function down(Schema $schema) : void
    {
        $sql = 'DROP TABLE public.sexo CASCADE;';

        $this->addSql($sql);

    }
}
