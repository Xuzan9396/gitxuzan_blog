<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('discussions')->delete();
        
        \DB::table('discussions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 5,
                'last_user_id' => 5,
                'title' => 'Dolores quos accusamus reprehenderit.',
                'content' => '{"raw":"Sunt commodi quis quae aut possimus. Alias sequi perspiciatis maiores distinctio aut. Voluptates impedit aliquam tenetur.","html":"<p>Sunt commodi quis quae aut possimus. Alias sequi perspiciatis maiores distinctio aut. Voluptates impedit aliquam tenetur.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:01:13',
                'deleted_at' => '2018-01-22 16:01:13',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'last_user_id' => 1,
                'title' => 'Maiores odit quo et autem.',
                'content' => '{"raw":"Ut eos libero quod accusamus aut omnis non. Exercitationem illum enim et ut reiciendis incidunt et. Aut est nihil et harum. Minus autem quia totam totam impedit et.","html":"<p>Ut eos libero quod accusamus aut omnis non. Exercitationem illum enim et ut reiciendis incidunt et. Aut est nihil et harum. Minus autem quia totam totam impedit et.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:01:31',
                'deleted_at' => '2018-01-22 16:01:31',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 11,
                'last_user_id' => 11,
                'title' => 'Deserunt rerum facere molestiae aliquam voluptatem maiores tempore.',
                'content' => '{"raw":"Quidem inventore aut quia recusandae dolorem nostrum temporibus. Beatae debitis nihil consequatur consequatur repellat repudiandae.","html":"<p>Quidem inventore aut quia recusandae dolorem nostrum temporibus. Beatae debitis nihil consequatur consequatur repellat repudiandae.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:33',
                'deleted_at' => '2018-01-22 16:04:33',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 11,
                'last_user_id' => 11,
                'title' => 'Deserunt eaque voluptas rerum est nihil explicabo occaecati officiis.',
                'content' => '{"raw":"Est ex expedita eum reiciendis. Voluptatibus dolores repudiandae ut debitis ea. Aut quasi repellat dolorem voluptatem quos aut minus saepe. Et enim eos molestiae nostrum illo. Nostrum quis ea quia porro rerum quam.","html":"<p>Est ex expedita eum reiciendis. Voluptatibus dolores repudiandae ut debitis ea. Aut quasi repellat dolorem voluptatem quos aut minus saepe. Et enim eos molestiae nostrum illo. Nostrum quis ea quia porro rerum quam.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:02:00',
                'deleted_at' => '2018-01-22 16:02:00',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'last_user_id' => 2,
                'title' => 'Sed ea autem minus molestiae quis.',
                'content' => '{"raw":"Molestiae sed voluptatum qui illo corporis placeat. Et voluptas aspernatur quia. Autem et dolorem odio ut non esse omnis ut.","html":"<p>Molestiae sed voluptatum qui illo corporis placeat. Et voluptas aspernatur quia. Autem et dolorem odio ut non esse omnis ut.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:02:06',
                'deleted_at' => '2018-01-22 16:02:06',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 11,
                'last_user_id' => 11,
                'title' => 'Sit similique mollitia nostrum placeat.',
                'content' => '{"raw":"Quaerat qui qui illo ut mollitia non quae. Aut quia quidem officia nobis et enim culpa. Qui dolores vero sequi sunt voluptas. Dolores distinctio autem aut asperiores animi et.","html":"<p>Quaerat qui qui illo ut mollitia non quae. Aut quia quidem officia nobis et enim culpa. Qui dolores vero sequi sunt voluptas. Dolores distinctio autem aut asperiores animi et.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:34',
                'deleted_at' => '2018-01-22 16:04:34',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 8,
                'last_user_id' => 8,
                'title' => 'Deleniti nulla sed officia voluptatum.',
                'content' => '{"raw":"Suscipit architecto qui dolor autem id eos repudiandae aperiam. A ea nisi sit voluptates quam dolores rerum hic. Ipsam dolorum eos aut possimus.","html":"<p>Suscipit architecto qui dolor autem id eos repudiandae aperiam. A ea nisi sit voluptates quam dolores rerum hic. Ipsam dolorum eos aut possimus.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:35',
                'deleted_at' => '2018-01-22 16:04:35',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'last_user_id' => 1,
                'title' => 'Sit officia sunt tempora non dolor molestias.',
                'content' => '{"raw":"Ea ut aut nobis delectus nam rerum. Fugiat maiores quia natus suscipit repellat aut et perspiciatis. Omnis dolorum aut asperiores ut ut. Enim accusantium harum dolores quo aut neque.","html":"<p>Ea ut aut nobis delectus nam rerum. Fugiat maiores quia natus suscipit repellat aut et perspiciatis. Omnis dolorum aut asperiores ut ut. Enim accusantium harum dolores quo aut neque.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:36',
                'deleted_at' => '2018-01-22 16:04:36',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 5,
                'last_user_id' => 5,
                'title' => 'Dolorem et voluptatem nihil tempora.',
                'content' => '{"raw":"Debitis sit quod aut. Et illum vitae molestias. Quo ut vitae doloribus sit occaecati commodi. Error quod dolores dolores exercitationem ut.","html":"<p>Debitis sit quod aut. Et illum vitae molestias. Quo ut vitae doloribus sit occaecati commodi. Error quod dolores dolores exercitationem ut.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:00:50',
                'deleted_at' => '2018-01-22 16:00:50',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 10,
                'last_user_id' => 10,
                'title' => 'Dolorem et ea iste a vero corporis.',
                'content' => '{"raw":"Quia et et eligendi labore ut ut tenetur. Distinctio quasi doloribus libero non voluptas et et. Pariatur laborum sunt expedita qui laborum. Beatae qui est aut quidem et.","html":"<p>Quia et et eligendi labore ut ut tenetur. Distinctio quasi doloribus libero non voluptas et et. Pariatur laborum sunt expedita qui laborum. Beatae qui est aut quidem et.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:00:45',
                'deleted_at' => '2018-01-22 16:00:45',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 8,
                'last_user_id' => 8,
                'title' => 'Est modi omnis laudantium est.',
                'content' => '{"raw":"Corrupti quo corrupti accusamus fugiat. Provident repellat eum aut minus et corrupti. Possimus consequatur qui vitae accusamus inventore maiores iusto.","html":"<p>Corrupti quo corrupti accusamus fugiat. Provident repellat eum aut minus et corrupti. Possimus consequatur qui vitae accusamus inventore maiores iusto.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:00:47',
                'deleted_at' => '2018-01-22 16:00:47',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 8,
                'last_user_id' => 8,
                'title' => 'Incidunt cupiditate sed debitis.',
                'content' => '{"raw":"Architecto ut molestiae aut laudantium. Est molestiae consectetur minima voluptatum. Molestias dolores mollitia laboriosam et.","html":"<p>Architecto ut molestiae aut laudantium. Est molestiae consectetur minima voluptatum. Molestias dolores mollitia laboriosam et.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:00:53',
                'deleted_at' => '2018-01-22 16:00:53',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 4,
                'last_user_id' => 4,
                'title' => 'Occaecati esse ea quis ut odit.',
                'content' => '{"raw":"Voluptates voluptatibus nulla quisquam voluptate. Illum unde illo vitae repellendus impedit eveniet porro. Eos accusamus voluptatem et. Architecto est aut dolorum est consequatur quas quibusdam.","html":"<p>Voluptates voluptatibus nulla quisquam voluptate. Illum unde illo vitae repellendus impedit eveniet porro. Eos accusamus voluptatem et. Architecto est aut dolorum est consequatur quas quibusdam.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:00:55',
                'deleted_at' => '2018-01-22 16:00:55',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 6,
                'last_user_id' => 6,
                'title' => 'Blanditiis vel est et nemo quia beatae ea.',
                'content' => '{"raw":"Aut aut eos hic fugiat nisi eligendi unde est. Ullam deserunt et tenetur. Possimus omnis ad quod et in quia occaecati.","html":"<p>Aut aut eos hic fugiat nisi eligendi unde est. Ullam deserunt et tenetur. Possimus omnis ad quod et in quia occaecati.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:01:04',
                'deleted_at' => '2018-01-22 16:01:04',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 9,
                'last_user_id' => 9,
                'title' => 'Et sequi tempora voluptate dolores aut magnam ut.',
                'content' => '{"raw":"Laborum et molestiae magnam aliquam nihil ut. Quidem rerum soluta temporibus qui et sunt. Qui corporis aut suscipit aliquid nam aut. Atque pariatur ea quos laborum vitae ut. Illo eveniet enim facilis incidunt omnis.","html":"<p>Laborum et molestiae magnam aliquam nihil ut. Quidem rerum soluta temporibus qui et sunt. Qui corporis aut suscipit aliquid nam aut. Atque pariatur ea quos laborum vitae ut. Illo eveniet enim facilis incidunt omnis.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:38',
                'deleted_at' => '2018-01-22 16:04:38',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 7,
                'last_user_id' => 7,
                'title' => 'Et maxime et neque dignissimos expedita cupiditate.',
                'content' => '{"raw":"Ullam velit sunt ea aut mollitia ipsam tempora. Qui qui at et sequi perspiciatis velit.","html":"<p>Ullam velit sunt ea aut mollitia ipsam tempora. Qui qui at et sequi perspiciatis velit.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:40',
                'deleted_at' => '2018-01-22 16:04:40',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 10,
                'last_user_id' => 10,
                'title' => 'In voluptatum ut aut nihil.',
                'content' => '{"raw":"Velit et voluptatem blanditiis sunt. Nulla totam nihil minus aut id perspiciatis et eum. Voluptas aut similique ut reiciendis. Cumque odit et ea natus aperiam odit.","html":"<p>Velit et voluptatem blanditiis sunt. Nulla totam nihil minus aut id perspiciatis et eum. Voluptas aut similique ut reiciendis. Cumque odit et ea natus aperiam odit.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:41',
                'deleted_at' => '2018-01-22 16:04:41',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 3,
                'last_user_id' => 3,
                'title' => 'Vero cum dolores in asperiores totam veniam fugiat quibusdam.',
                'content' => '{"raw":"Accusantium corporis deserunt perspiciatis soluta qui. Ut ab praesentium blanditiis. Fuga iure ipsa odio. Ipsam odio unde optio vero quo.","html":"<p>Accusantium corporis deserunt perspiciatis soluta qui. Ut ab praesentium blanditiis. Fuga iure ipsa odio. Ipsam odio unde optio vero quo.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:42',
                'deleted_at' => '2018-01-22 16:04:42',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 10,
                'last_user_id' => 10,
                'title' => 'Est neque error rerum ipsa velit.',
                'content' => '{"raw":"Provident molestiae sed quia consequatur. Dolores maxime sunt qui et voluptatem. Deleniti nihil sapiente cum laborum ab est. Et veritatis et exercitationem pariatur fugit dolores.","html":"<p>Provident molestiae sed quia consequatur. Dolores maxime sunt qui et voluptatem. Deleniti nihil sapiente cum laborum ab est. Et veritatis et exercitationem pariatur fugit dolores.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-22 16:04:45',
                'deleted_at' => '2018-01-22 16:04:45',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 9,
                'last_user_id' => 9,
                'title' => 'Illo dolorem alias illo minima voluptatem.',
                'content' => '{"raw":"Accusantium ipsum omnis earum sunt quo. Nesciunt assumenda perspiciatis ut. Quod voluptatem temporibus totam dignissimos ea sed.","html":"<p>Accusantium ipsum omnis earum sunt quo. Nesciunt assumenda perspiciatis ut. Quod voluptatem temporibus totam dignissimos ea sed.<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-21 13:40:46',
                'updated_at' => '2018-01-23 03:19:41',
                'deleted_at' => '2018-01-23 03:19:41',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 12,
                'last_user_id' => 12,
                'title' => 'laravel 模型查询压入字段，怎么自定义？急',
                'content' => '{"raw":"\\u6a21\\u578b\\u52a0\\u5165 $append \\u5c5e\\u6027","html":"<p>\\u6a21\\u578b\\u52a0\\u5165 $append \\u5c5e\\u6027<\\/p>"}',
                'status' => 1,
                'created_at' => '2018-01-22 16:22:47',
                'updated_at' => '2018-01-22 16:22:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}