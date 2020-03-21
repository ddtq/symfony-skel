<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200321000519 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Cria a tabela triagem';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.triagem
        (
            id bigserial NOT NULL,
            policial_id bigint,
            datahora timestamp with time zone,
            ip character varying(40) COLLATE pg_catalog."default",
            triagem_situacao_id character varying(30) COLLATE pg_catalog."default",
            observacao text COLLATE pg_catalog."default",
            telefone_celular character varying(14) COLLATE pg_catalog."default",
            telefone_fixo character varying(13) COLLATE pg_catalog."default",
            CONSTRAINT triagem_pkey PRIMARY KEY (id),
            CONSTRAINT triagem_policial_id_fkey FOREIGN KEY (policial_id)
            REFERENCES public.policial (id) MATCH SIMPLE
            ON UPDATE NO ACTION
            ON DELETE NO ACTION,
        CONSTRAINT triagem_triagem_situacao_id_fkey FOREIGN KEY (triagem_situacao_id)
            REFERENCES public.triagem_situacao (id) MATCH SIMPLE
            ON UPDATE NO ACTION
            ON DELETE NO ACTION
        )
        WITH (
            OIDS = FALSE
        )
        TABLESPACE pg_default;';

        $this->addSql($sql);

    }

    public function down(Schema $schema) : void
    {
        $sql = 'DROP TABLE public.triagem CASCADE;';

        $this->addSql($sql);

    }
}
