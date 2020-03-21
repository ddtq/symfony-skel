<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320233521 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Cria tabela triagem_situacao';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.triagem_situacao
        (
            id character varying(30) COLLATE pg_catalog."default" NOT NULL,
            descricao character varying(80) COLLATE pg_catalog."default",
            dt_ini timestamp with time zone,
            dt_fim timestamp with time zone,
            CONSTRAINT triagem_situacao_pkey PRIMARY KEY (id)
        )
        WITH (
            OIDS = FALSE
        )
        TABLESPACE pg_default;';

        $this->addSql($sql);

    }

    public function down(Schema $schema) : void
    {
        $sql = 'DROP TABLE public.triagem_situacao CASCADE;';

        $this->addSql($sql);

    }
}
