<h1 align="center">Product CRUD</h1>

## 🔖 About
Product registration system, with the possibility of creating, reading, updating and deleting.

## 🚀 Technologies used
The project was developed using the following technologies
<ul>
    <li>
        <a href="https://laravel.com/docs/10.x">Laravel</a>
    </li>
    <li>
        <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">Bootstrap</a>
    </li>
    <li>
        MySQL
    </li>
</ul>

## 💻 How to compile the project
    # Clonar o repositório
    $ git clone https://github.com/DudaFranca/products

    # Enter directory
    $ cd products

    # Install the dependencies
    $ npm install

    # Start the
    $ php artisan serve 

## 💻 Test database
    # Create Tables
    CREATE TABLE `products` (
        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
        `cost` decimal(19,2) NOT NULL,
        `price` decimal(19,2) NOT NULL,
        `quantity` int NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci


    