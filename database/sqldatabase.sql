/* Users Table */
CREATE TABLE communicationstategic.users (
	id BIGINT UNSIGNED auto_increment NOT NULL,
	names varchar(255) NULL COMMENT 'user names',
	last_names varchar(255) NULL COMMENT 'last names user',
	email varchar(255) NULL COMMENT 'email user',
	phone varchar(20) NULL COMMENT 'phone''s user',
	created_at TIMESTAMP NULL,
	updated_at TIMESTAMP NULL,
	CONSTRAINT users_pk PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;
/* Users Table End */

