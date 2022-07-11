Перед началом работы необходимо в используемой базе данных выполнить следующий SQL запрос:

CREATE TABLE "links" (
  "id" serial NOT NULL,
  PRIMARY KEY ("id"),
  "old_link" text NOT NULL,
  "short_link" text NOT NULL,
  "updated_at" timestamp NOT NULL,
  "created_at" timestamp NOT NULL
);