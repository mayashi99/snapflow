CREATE TABLE
    IF NOT EXISTS `user` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `email` varchar(100) NOT NULL UNIQUE,
        `password` varchar(100) NOT NULL DEFAULT '',
        `role` enum (
            'ADMIN',
            'MANAGER',
            'EDITOR',
            'PHOTOGRAPHER',
            'CUSTOMER'
        ) NOT NULL DEFAULT 'CUSTOMER',
        PRIMARY KEY (`id`)
    );


INSERT IGNORE INTO `user` (`email`, `password`, `role`)
VALUES
    (
        'admin@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'ADMIN'
    ),
    (
        'manager1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'manager5@gmail.com',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'MANAGER'
    ),
    (
        'editor1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'editor5@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'EDITOR'
    ),
    (
        'photography1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'photography5@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'PHOTOGRAPHER'
    ),
    (
        'custormer1@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer2@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer3@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer4@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    ),
    (
        'custormer5@localhost',
        '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5',
        'CUSTOMER'
    );

CREATE TABLE
    IF NOT EXISTS `admin` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date DEFAULT CURRENT_DATE,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

INSERT IGNORE INTO `admin` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('admin1', 'admin1', 1, '2024-01-01');

CREATE TABLE
    IF NOT EXISTS `manager` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date DEFAULT CURRENT_DATE,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

INSERT IGNORE INTO `manager` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('manager1', 'manager1', 2, '2024-01-01'),
    ('manager2', 'manager2', 3, '2024-01-02'),
    ('manager3', 'manager3', 4, '2024-01-03'),
    ('manager4', 'manager4', 5, '2024-01-04'),
    ('manager5', 'manager5', 6, '2024-01-05');

CREATE TABLE
    IF NOT EXISTS `organization` (
        `organi_id` int (11) NOT NULL AUTO_INCREMENT,
        `orname` varchar(100) UNIQUE NOT NULL DEFAULT '',
        `description` varchar(100) NOT NULL DEFAULT '',
        `img_url` varchar(100) NOT NULL DEFAULT '',
        `manager_id` int (11) NOT NULL UNIQUE,
        `accepted` boolean NOT NULL DEFAULT '0',
        PRIMARY KEY (`organi_id`),
        FOREIGN KEY (`manager_id`) REFERENCES `manager` (`id`)
    );

INSERT IGNORE INTO `organization` (`orname`, `description`, `img_url`, `manager_id`)
VALUES
    ('organi1', 'organi1', 'p1.png', 1),
    ('organi2', 'organi2', 'p2.png', 2),
    ('organi3', 'organi3', 'p3.png', 3),
    ('organi4', 'organi4', 'p4.png', 4),
    ('organi5', 'organi5', 'logo new.png', 5);

CREATE TABLE
    IF NOT EXISTS `editor` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date DEFAULT CURRENT_DATE,
        `organi_id` int (11) DEFAULT NULL,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
        FOREIGN KEY (`organi_id`) REFERENCES `organization` (`organi_id`)    
    );

INSERT IGNORE INTO `editor` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('editor1', 'editor1', 7, '2024-01-01'),
    ('editor2', 'editor2', 8, '2024-01-02'),
    ('editor3', 'editor3', 9, '2024-01-03'),
    ('editor4', 'editor4', 10, '2024-01-04'),
    ('editor5', 'editor5', 11, '2024-01-05');

CREATE TABLE
    IF NOT EXISTS `photographer` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date DEFAULT CURRENT_DATE,
        `organi_id` int (11) DEFAULT NULL,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
        FOREIGN KEY (`organi_id`) REFERENCES `organization` (`organi_id`)
    );

INSERT IGNORE INTO `photographer` (`first_name`, `last_name`, `user_id`, `reg_date`)
VALUES
    ('photography1', 'photography1', 12, '2024-01-01'),
    ('photography2', 'photography2', 13, '2024-01-02'),
    ('photography3', 'photography3', 14, '2024-01-03'),
    ('photography4', 'photography4', 15, '2024-01-04'),
    ('photography5', 'photography5', 16, '2024-01-05');

CREATE TABLE
    IF NOT EXISTS `customer` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(100) NOT NULL DEFAULT '',
        `last_name` varchar(100) NOT NULL DEFAULT '',
        `user_id` int (11) NOT NULL UNIQUE,
        `reg_date` date DEFAULT CURRENT_DATE,
        PRIMARY KEY (`id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

INSERT IGNORE INTO `customer` (`first_name`, `last_name`, `user_id`)
VALUES
    ('custormer1', 'custormer1', 17),
    ('custormer2', 'custormer2', 18),
    ('custormer3', 'custormer3', 19),
    ('custormer4', 'custormer4', 20),
    ('custormer5', 'custormer5', 21);

CREATE TABLE
    IF NOT EXISTS `package` (
        `pack_code` int (11) NOT NULL AUTO_INCREMENT,
        `pack_name` varchar(100) NOT NULL DEFAULT '',
        `soft_copy_price` int (11) NOT NULL DEFAULT '0',
        `hard_copy_price` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`pack_code`)
    );

INSERT IGNORE INTO `package` (
    `pack_code`,
    `pack_name`,
    `soft_copy_price`,
    `hard_copy_price`
)
VALUES
    (100, 'wedding', 200000, 600000),
    (101, 'birthday', 50000, 200000),
    (102, 'shoot', 40000, 100000);

CREATE TABLE
    IF NOT EXISTS `booking` (
        `book_id` int (11) NOT NULL AUTO_INCREMENT,
        `event_type` varchar(100) NOT NULL DEFAULT '',
        `book_date` date DEFAULT CURRENT_DATE,
        `event_date` date,
        `event_id` int (11) NOT NULL UNIQUE,
        `pack_code` int (11) NOT NULL,
        `organi_id` int (11) NOT NULL,
        PRIMARY KEY (`book_id`),
        FOREIGN KEY (`pack_code`) REFERENCES `package` (`pack_code`),
        FOREIGN KEY (`organi_id`) REFERENCES `organization` (`organi_id`)
    );

INSERT IGNORE INTO `booking` (`event_type`, `event_date`, `event_id`, `pack_code`, `organi_id`)
VALUES
    ('wedding', '2024-01-01', 1, 100, 1),
    ('birthday', '2024-01-02', 2, 101, 2),
    ('shoot', '2024-01-03', 3, 102, 3),
    ('wedding', '2024-01-04', 4, 100, 4),
    ('birthday', '2024-01-05', 5, 101, 5);

CREATE TABLE
    IF NOT EXISTS `payment` (
        `payment_id` int (11) NOT NULL AUTO_INCREMENT,
        `amount` int (11) NOT NULL DEFAULT '0',
        `payment_date` date,
        `book_id` int (11) NOT NULL UNIQUE,
        PRIMARY KEY (`payment_id`),
        FOREIGN KEY (`book_id`) REFERENCES `booking` (`book_id`)
    );

INSERT IGNORE INTO `payment` (`amount`, `payment_date`, `book_id`)
VALUES
    ( 100000, '2024-01-01', 1),
    ( 200000, '2024-01-02', 2),
    ( 300000, '2024-01-03', 3),
    ( 400000, '2024-01-04', 4),
    ( 500000, '2024-01-05', 5);

CREATE TABLE
    IF NOT EXISTS `photo` (
        `photo_code` int (11) NOT NULL AUTO_INCREMENT,
        `p_size` varchar(100),
        `url` varchar(100) NOT NULL DEFAULT '',
        `date` date DEFAULT CURRENT_DATE,
        `album_code` int (11) NOT NULL DEFAULT '0',
        `editor_id` int (11) NOT NULL ,
        `book_id` int (11) NOT NULL ,
        `file_name` varchar(100) NOT NULL DEFAULT '',
        PRIMARY KEY (`photo_code`),
        FOREIGN KEY (`editor_id`) REFERENCES `editor` (`id`),
        FOREIGN KEY (`book_id`) REFERENCES `booking` (`book_id`)
    );

INSERT IGNORE INTO `photo` (`photo_code`, `url`, `date`, `album_code`, `editor_id`, `book_id`)
VALUES
    (1, 'photo1', 2024, 1, 1, 1),
    (2, 'photo2', 2024, 2, 2, 2),
    (3, 'photo3', 2024, 3, 1, 1),
    (4, 'photo4', 2024, 4, 4, 4),
    (5, 'photo5', 2024, 5, 5, 5);



CREATE TABLE
    IF NOT EXISTS `organization_photographer` (
        `organi_id` int (11) NOT NULL,
        `photographer_id` int (11) NOT NULL,
        PRIMARY KEY (`organi_id`, `photographer_id`),
        FOREIGN KEY (`organi_id`) REFERENCES `organization` (`organi_id`),
        FOREIGN KEY (`photographer_id`) REFERENCES `photographer` (`id`)
    );

INSERT IGNORE INTO `organization_photographer` (`organi_id`, `photographer_id`)
VALUES
    (1, 2),
    (2, 3),
    (3, 1);

CREATE TABLE
    IF NOT EXISTS `organization_editor` (
        `organi_id` int (11) NOT NULL DEFAULT '0',
        `editor_id` int (11) NOT NULL DEFAULT '0',
        PRIMARY KEY (`organi_id`, `editor_id`),
        FOREIGN KEY (`organi_id`) REFERENCES `organization` (`organi_id`),
        FOREIGN KEY (`editor_id`) REFERENCES `editor` (`id`)
    );

INSERT IGNORE INTO `organization_editor` (`organi_id`, `editor_id`)
VALUES
    (1, 1),
    (2, 2),
    (3, 3);



CREATE TABLE
    IF NOT EXISTS `feedback` (
        `comment` varchar(100) DEFAULT NULL,
        `rate` int (11) NOT NULL,
        `organi_id` int (11) NOT NULL,
        `user_id` int (11) NOT NULL,
        PRIMARY KEY (`organi_id`, `user_id`),
        FOREIGN KEY (`organi_id`) REFERENCES `organization` (`organi_id`),
        FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
    );

INSERT IGNORE INTO `feedback` (`comment`, `rate`, `organi_id`, `user_id`)
VALUES
    ('good', 5, 1, 1),
    ('bad', 1, 2, 2),
    ('good', 4, 3, 3);