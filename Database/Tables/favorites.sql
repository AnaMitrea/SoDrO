DROP TABLE IF EXISTS "public"."favorites";
-- This script only contains the table creation statements and does not fully represent the table in database. It's still missing: indices, triggers. Do not use it as backup.

-- Squences
CREATE SEQUENCE IF NOT EXISTS favorites_id_seq

-- Table Definition
CREATE TABLE "public"."favorites" (
    "id" int4 NOT NULL DEFAULT nextval('favorites_id_seq'::regclass),
    "id_user" int4,
    "id_product" int4,
    CONSTRAINT "fk_user" FOREIGN KEY ("id_user") REFERENCES "public"."users"("id"),
    CONSTRAINT "fk_product" FOREIGN KEY ("id_product") REFERENCES "public"."products"("id_product"),
    PRIMARY KEY ("id")
);

