<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200321000854 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Cria a tabela triagem';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.resposta
        (
            id bigserial NOT NULL,
            triagem_id bigint,
            pergunta_id bigint,
            resposta boolean,
            CONSTRAINT reposta_pkey PRIMARY KEY (id),
            CONSTRAINT resposta_pergunta_id_fkey FOREIGN KEY (pergunta_id)
                REFERENCES public.pergunta (id) MATCH SIMPLE
                ON UPDATE NO ACTION
                ON DELETE NO ACTION,
            CONSTRAINT resposta_triagem_id_fkey FOREIGN KEY (triagem_id)
            REFERENCES public.triagem (id) MATCH SIMPLE
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
        $sql = 'DROP TABLE public.resposta CASCADE;';

        $this->addSql($sql);

    }
}