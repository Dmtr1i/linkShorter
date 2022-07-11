Перед началом работы необходимо из папки linkShorter в командной строке выполнить docker-compose up

Далее необходимо перейти по адресу http://localhost:8080/ и авторизироваться под данными:

Движок: PostgreSQL
Сервер: pgsql
Имя пользователя: postgres
Пароль: postgres
База данных: linkShortener

В используемой базе данных выполнить следующий SQL запрос:

CREATE TABLE "links" (
  "id" serial NOT NULL,
  PRIMARY KEY ("id"),
  "old_link" text NOT NULL,
  "short_link" text NOT NULL,
  "updated_at" timestamp NOT NULL,
  "created_at" timestamp NOT NULL
);

После этого проект находится в полной работоспособности по адресу http://localhost:8098
