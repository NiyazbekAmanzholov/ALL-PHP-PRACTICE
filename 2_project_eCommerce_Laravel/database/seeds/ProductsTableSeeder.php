<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert( [
        [
            'title' => 'Телефон сотовый SAMSUNG SM A 715 Galaxy A51 FZKUS (black)',
            'category_id' => '1',
            'price' => '129890 ',
            'image' => 'Телефон сотовый SAMSUNG SM A 515 Galaxy A51 FZKUS (black).jpeg',
            'field' => 'new',            
            'description' => 'Процессор Модель процессора:Exynos 9611 Процессор, (МГц, количество ядер):2300/ 1700 МГц, 8 ядер Экран Диагональ экрана, дюйм:6,5 (16,5 см) Разрешение дисплея, пикс:2400х1080 FHD+ Технология изготовления дисплея:Super AMOLED Количество цветов дисплея:16 млн. Память Встроенная память, Гб:64 Объем оперативной памяти, Гб:4 Тип карты памяти:microSD Максимальная емкость карты памяти, Гб:512 Видеокарта Графический процессор:Mali-G72 MP3 SIM карта SIM-карта:две, Nano-SIM Стандарт Стандарты сети:2G, 3G, 4G LTE Операционная система Мобильная ОС:Android Типы передачи данных NFC:есть Поддержка 4G (LTE):есть USB:1 х USB Type-C Bluetooth:5.0 Wi-Fi:есть, 802.11a/b/g/n/ac 2.4+ 5ГГц, VHT80 GPS:есть, Glonass/ Galileo и BeiDou ANT+:есть Фотокамера Разрешение фотокамеры, Мпикс:48+12+5+5 Режим видеосъемки:UHD 4K (3840 x 2160) 30 кадров/ сек Фронтальная камера (для видеозвонков), Мпикс:32 Особенности фронтальной камеры: f/2.2/ Селфи фокус Особенности тыловой камеры:Четыре камеры/ Сверхширик/ Макро/ Сенсор глубины Питание Емкость аккумулятора, мАч:4000 Тип аккумулятора:Li-Pol (литий-полимерный) несъемный Беспроводная зарядка:нет Быстрая зарядка:есть Корпус Материал корпуса:пластик Функции Система стабилизации изображения:есть Встроенное оборудование и функции:Акселерометр/гироскоп/геомагнит.датч/датч.освещ Cканер отпечатка пальца:есть, встроен в экран Распознавание лица:есть Звук Встроенные динамики:есть, стереодинамик Интерфейсы Разъем для наушников:есть, 3,5 мм Цвет, размеры и вес Габариты устройства (ВхШхГ), см:15,8х7,3х0,8 Цвет:черный Вес без упаковки (нетто), кг:0,172 Разное Бренд:SAMSUNG Гарантия:1 год Модель:A',
        ],            
        [
        	'title' => 'Nokia',
        	'category_id' => '1',
        	'price' => '20000',
        	'image' => 'img',
            'field' => 'new',            
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum velit atque ad dolor voluptas, aliquam ape delectus placeat cupiditate alias illo pariatur ipsa aut natus voluptate, et dolorem magnam, amet officia laborum voluptate molestias, illo nesciunt ut repellendus perferendis. Quos culpa itaque placeat architecto aperiam aliquam rror reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.',
        ],
		[
        	'title' => 'Samsung',
        	'category_id' => '1',
        	'price' => '200000',
        	'image' => 'img',
            'field' => 'sale',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],
        [

        	'title' => 'iPhone',
        	'category_id' => '1',
        	'price' => '500000',
        	'image' => 'img',
            'field' => 'new',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],  
[
        	'title' => 'LG',
        	'category_id' => '1',
        	'price' => '100000',
        	'image' => 'img',
            'field' => 'sale',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum velit atque ad dolor voluptas, aliquam ape delectus placeat cupiditate alias illo pariatur ipsa aut natus voluptate, et dolorem magnam, amet officia laborum voluptate molestias, illo nesciunt ut repellendus perferendis. Quos culpa itaque placeat architecto aperiam aliquam rror reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],
		[
        	'title' => 'Lenovo',
        	'category_id' => '1',
        	'price' => '120000',
        	'image' => 'img',
            'field' => 'hit',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],
        [
        	'title' => 'Samsung',
        	'category_id' => '2',
        	'price' => '250000',
        	'image' => 'img',
            'field' => 'new',            
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],        
[
        	'title' => 'LG',
        	'category_id' => '2',
        	'price' => '220000',
        	'image' => 'img',
            'field' => 'hit',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum velit atque ad dolor voluptas, aliquam ape delectus placeat cupiditate alias illo pariatur ipsa aut natus voluptate, et dolorem magnam, amet officia laborum voluptate molestias, illo nesciunt ut repellendus perferendis. Quos culpa itaque placeat architecto aperiam aliquam rror reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],
		[
        	'title' => 'Simens',
        	'category_id' => '2',
        	'price' => '240000',
        	'image' => 'img',
            'field' => 'sale',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],
        [
        	'title' => 'Asus',
        	'category_id' => '2',
        	'price' => '180000',
        	'image' => 'img',
            'field' => 'new',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],  
[
        	'title' => 'Samsung',
        	'category_id' => '3',
        	'price' => '50000',
        	'image' => 'img',
            'field' => 'sale',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum velit atque ad dolor voluptas, aliquam ape delectus placeat cupiditate alias illo pariatur ipsa aut natus voluptate, et dolorem magnam, amet officia laborum voluptate molestias, illo nesciunt ut repellendus perferendis. Quos culpa itaque placeat architecto aperiam aliquam rror reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],
		[
        	'title' => 'LG',
        	'category_id' => '3',
        	'price' => '250000',
        	'image' => 'img',
            'field' => 'sale',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ],
        [
        	'title' => 'Lenovo',
        	'category_id' => '3',
        	'price' => '120000',
        	'image' => 'img',
            'field' => 'sale',             
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, explicabo, corporis. Explicabo ad molestiae pariatur sunt inventore, voluptatibus atque excepturi minima totam impedit praesentium nihil voluptate aliquam rem, et alias ratione earum facilis, omnis ut quas quae. Asperiores ut mollitia nemo atque impedit possimus natus reprehenderit eveniet unde optio est modi quis minus quisquam vero aut quaerat e ipsum  adipisci eaque quasi corporis illo fugit architecto aspernatur animi incidunt quo totam aut aperiam consequuntur error reiciendis dolor reprehenderit in, sunt ratione voluptates tenetur amet natus. Ab repellendus aliquid veritatis, perferendis illum iusto sequi omnis. Veritatis aspernatur quibusdam inventore repudiandae optio, adipisci facilis, harum expedita rerum neque doloribus ratione eaque. Ut quis iste odit ratione corporis laboriosam rem dignissimos. Officia, nobis. Alias, libero ullam tempora ducimus iusto! Itaque voluptatum harum natus ratione autem odit, magni officia delectus, reprehenderit dolore ducimus debitis nobis corrupti cum modi vero repellat doloremque ex hic iste sit aspernatur facere! Numquam aspernatur molestiae minima maiores natus, dolores officiis voluptas ipsam, expedita odit recusandae exercitationem odio autem nam quas eius quos iure ea culpa. Repellat omnis natus molestiae autem sint error obcaecati minima assumenda sunt nam consectetur exercitationem, minus distinctio inventore deserunt, pariatur saepe magni est architecto sed eaque. Sint sequi, est.'
        ]]);
    }
}
