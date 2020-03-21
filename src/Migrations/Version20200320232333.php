<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320232333 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Cria tabela cargo';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.cargo
        (
            id character varying(60) COLLATE pg_catalog."default" NOT NULL,
            descricao character varying(80) COLLATE pg_catalog."default" NOT NULL,
            ordem integer NOT NULL,
            CONSTRAINT cargo_pkey PRIMARY KEY (id)
        )
        WITH (
            OIDS = FALSE
        )
        TABLESPACE pg_default;';

        $this->addSql($sql);

    }

    public function down(Schema $schema) : void
    {
        $sql = 'DROP TABLE public.cargo CASCADE;';

        $this->addSql($sql);

    }
}
