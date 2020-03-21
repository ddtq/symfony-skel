<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320235743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Acrescenta coluna tal a tabela resposta';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.pergunta
        (
            id bigserial NOT NULL,
            pergunta text COLLATE pg_catalog."default",
            informacao text COLLATE pg_catalog."default",
            ordem integer,
            dt_ini timestamp with time zone,
            dt_fim timestamp with time zone,
            CONSTRAINT pergunta_pkey PRIMARY KEY (id)
        )
        WITH (
            OIDS = FALSE
        )
        TABLESPACE pg_default;';

        $this->addSql($sql);

    }

    public function down(Schema $schema) : void
    {
        $sql = 'DROP TABLE public.pergunta CASCADE;';

        $this->addSql($sql);

    }
}
