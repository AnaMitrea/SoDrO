DROP TABLE IF EXISTS "public"."sessions";
-- This script only contains the table creation statements and does not fully represent the table in database. It's still missing: indices, triggers. Do not use it as backup.

-- Table Definition
CREATE TABLE "public"."sessions" (
    "id" text NOT NULL,
    "last_updated" int8 NOT NULL,
    "expiry" int8 NOT NULL,
    "data" text NOT NULL
);

