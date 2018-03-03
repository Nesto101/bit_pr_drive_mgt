CREATE TABLE users (
    user_id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    username VARCHAR(20),
    password VARCHAR(50),
    email VARCHAR(40),
    phone_number VARCHAR(15),
    date_added DATE,
    user_type VARCHAR(10),
    address TEXT,
    CONSTRAINT pk_user PRIMARY KEY (user_id)
);

CREATE TABLE driver_type (
    driver_type_id INT NOT NULL AUTO_INCREMENT,
    type VARCHAR(15),
    CONSTRAINT pk_driver_type_id PRIMARY KEY (driver_type_id)
);

CREATE TABLE driver (
    driver_user_id INT,
    driver_type_id INT,
    portfolio TEXT,
    DOB DATE,
    CONSTRAINT fk_driver_user_id FOREIGN KEY (driver_user_id) REFERENCES users (user_id),
    CONSTRAINT fk_driver_type_id FOREIGN KEY (driver_type_id) REFERENCES driver_type (driver_type_id)
);

CREATE TABLE vehicle_types (
    type_id INT NOT NULL AUTO_INCREMENT,
    vehicle_type VARCHAR(20),
    CONSTRAINT pk_type_id PRIMARY KEY (type_id)
);

CREATE TABLE vehicles (
    vehicle_id INT NOT NULL AUTO_INCREMENT,
    registration_number VARCHAR(10),
    type_id INT,
    color VARCHAR(20),
    date_bought DATE,
    description TEXT,
    CONSTRAINT pk_vehicle_id PRIMARY KEY (vehicle_id),
    CONSTRAINT fk_type_id FOREIGN KEY (type_id) REFERENCES vehicle_types (type_id)
);

CREATE TABLE job_type (
    job_type_id INT NOT NULL AUTO_INCREMENT,
    job_type VARCHAR(20),
    CONSTRAINT pk_job_type_id PRIMARY KEY (job_type_id)
);

CREATE TABLE employer (
    employer_user_id INT,
    location VARCHAR(20),
    company_description TEXT,
    CONSTRAINT fk_employer_user_id FOREIGN KEY (employer_user_id) REFERENCES users (user_id)
);

CREATE TABLE job (
    job_id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(20),
    description TEXT,
    expiry_date DATE,
    trip_allowance INT,
    trip_bonus INT,
    route VARCHAR(20),
    job_distance INT,
    cargo_weight INT,
    fuel INT,
    employer_user_id INT,
    job_type_id INT,
    CONSTRAINT pk_job_id PRIMARY KEY (job_id),
    CONSTRAINT fk_employer_user_id FOREIGN KEY (employer_user_id) REFERENCES vehicle_types (employer_user_id),
    CONSTRAINT fk_job_type_id FOREIGN KEY (job_type_id) REFERENCES job_type (job_type_id)
);

CREATE TABLE driver_on_job (
    driver_user_id INT NOT NULL,
    job_id INT NOT NULL,
    PRIMARY KEY (driver_user_id, job_id),
    FOREIGN KEY (driver_user_id) REFERENCES driver (driver_user_id),
    FOREIGN KEY (job_id) REFERENCES job (job_id)
);

CREATE TABLE driver_on_vehicle (
    vehicle_id INT NOT NULL,
    driver_user_id INT NOT NULL,
    PRIMARY KEY (vehicle_id, driver_user_id),
    FOREIGN KEY (vehicle_id) REFERENCES vehicles (vehicle_id),
    FOREIGN KEY (driver_user_id) REFERENCES driver (driver_user_id)
);

CREATE TABLE images (
    image_id INT NOT NULL AUTO_INCREMENT,
    url TEXT,
    description VARCHAR(15),
    user_id INT,
    CONSTRAINT pk_image_id PRIMARY KEY (image_id),
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (user_id)
);

CREATE TABLE sms (
    sms_id INT NOT NULL AUTO_INCREMENT,
    recepient_id INT,
    date_sent DATE,
    time DATE,
    user_id INT,
    CONSTRAINT pk_sms_id PRIMARY KEY (sms_id),
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (user_id)
);

CREATE TABLE vacancy_type (
    vacancy_type_id INT NOT NULL AUTO_INCREMENT,
    vacancy_type VARCHAR(20),
    CONSTRAINT pk_vacancy_type_id PRIMARY KEY (vacancy_type_id)
);

CREATE TABLE vacancy (
    vacancy_id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(25),
    vacancy_type_id INT,
    description TEXT,
    date_added DATE,
    closing_date DATE,
    employer_user_id INT,
    CONSTRAINT vacancy_id PRIMARY KEY (vacancy_id),
    CONSTRAINT fk_vacancy_type_id FOREIGN KEY (vacancy_type_id) REFERENCES vacancy_types (vacancy_type_id),
     CONSTRAINT fk_employer_user_id FOREIGN KEY (employer_user_id) REFERENCES employer (employer_user_id)
);

CREATE TABLE vacancy_applicants (
    driver_user_id INT NOT NULL,
    vacancy_id INT NOT NULL,
    CONSTRAINT pk_driver_user_id PRIMARY KEY (driver_user_id),
    CONSTRAINT fk_driver_user_id FOREIGN KEY (driver_user_id) REFERENCES driver (driver_user_id),
    CONSTRAINT fk_vacancy_id FOREIGN KEY (vacancy_id) REFERENCES vacancy (vacancy_id)
);

CREATE TABLE documents (
    document_id INT NOT NULL AUTO_INCREMENT,
    url TEXT,
    description TEXT,
    user_id INT,
    CONSTRAINT pk_document_id PRIMARY KEY (document_id),
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (user_id)
);

CREATE TABLE login_attempts (
    id INT NOT NULL AUTO_INCREMENT,
    login_date DATE,
    login_time TIME,
    user_id INT,
    CONSTRAINT pk_id PRIMARY KEY (id),
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (user_id)
);