<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320233628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Cria tabela policial';
    }

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE public.policial
        (
            id bigserial NOT NULL,
            rg character varying(10) COLLATE pg_catalog."default" NOT NULL,
            nome character varying(100) COLLATE pg_catalog."default" NOT NULL,
            tipo_rh_id character varying(30) COLLATE pg_catalog."default" NOT NULL,
            data_nascimento date NOT NULL,
            cargo_id character varying(60) COLLATE pg_catalog."default",
            quadro character varying(30) COLLATE pg_catalog."default",
            subquadro character varying(20) COLLATE pg_catalog."default",
            sexo_id character varying(30) COLLATE pg_catalog."default",
            opm_meta4_id character varying(30) COLLATE pg_catalog."default",
            opm_nome character varying(80) COLLATE pg_catalog."default",
            opm_abrev character varying(80) COLLATE pg_catalog."default",
            created_at timestamp with time zone,
            CONSTRAINT policial_pkey PRIMARY KEY (id),
            CONSTRAINT policial_cargo_id_fkey FOREIGN KEY (cargo_id)
        REFERENCES public.cargo (id) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
        CONSTRAINT policial_sexo_id_fkey FOREIGN KEY (sexo_id)
            REFERENCES public.sexo (id) MATCH SIMPLE
            ON UPDATE NO ACTION
            ON DELETE NO ACTION,
        CONSTRAINT policial_tipo_rh_id_fkey FOREIGN KEY (tipo_rh_id)
            REFERENCES public.tipo_rh (id) MATCH SIMPLE
            ON UPDATE NO ACTION
            ON DELETE NO ACTION
    )
    WITH (
        OIDS = FALSE
    )
    TABLESPACE pg_default;
    ';

        $this->addSql($sql);

    }

    public function down(Schema $schema) : void
    {
        $sql = 'DROP TABLE public.policial CASCADE;';

    }
}
