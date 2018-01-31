<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notifications')->delete();
        
        \DB::table('notifications')->insert(array (
            0 => 
            array (
                'id' => '642bb8fe-304e-48c8-858f-51b658bd908b',
                'type' => 'App\\Notifications\\ReceivedComment',
                'notifiable_id' => 12,
                'notifiable_type' => 'App\\User',
                'data' => '{"id":52,"user_id":13,"commentable_id":21,"commentable_type":"articles","content":"{\\"raw\\":\\"## \\\\u633a\\\\u5b9e\\\\u7528\\",\\"html\\":\\"<h2>\\\\u633a\\\\u5b9e\\\\u7528<\\\\\\/h2>\\"}","created_at":"2018-01-23 03:57:53","updated_at":"2018-01-23 03:57:53","deleted_at":null}',
                'read_at' => '2018-01-23 04:00:10',
                'created_at' => '2018-01-23 03:57:53',
                'updated_at' => '2018-01-23 04:00:10',
            ),
            1 => 
            array (
                'id' => '925bf196-e345-4852-996b-244b9b4faedb',
                'type' => 'App\\Notifications\\ReceivedComment',
                'notifiable_id' => 7,
                'notifiable_type' => 'App\\User',
                'data' => '{"id":51,"user_id":12,"commentable_id":18,"commentable_type":"articles","content":"{\\"raw\\":\\"\\\\u54c8\\\\u54c8\\",\\"html\\":\\"<p>\\\\u54c8\\\\u54c8<\\\\\\/p>\\"}","created_at":"2018-01-21 14:42:40","updated_at":"2018-01-21 14:42:40","deleted_at":null}',
                'read_at' => NULL,
                'created_at' => '2018-01-21 14:42:40',
                'updated_at' => '2018-01-21 14:42:40',
            ),
            2 => 
            array (
                'id' => '9a98cc30-31bd-4af8-b88a-6bea9af9b16c',
                'type' => 'App\\Notifications\\MentionedUser',
                'notifiable_id' => 13,
                'notifiable_type' => 'App\\User',
            'data' => '{"id":54,"user_id":12,"commentable_id":21,"commentable_type":"articles","content":"{\\"raw\\":\\"[@laitingyou](http:\\\\\\/\\\\\\/blog.cc360.shop\\\\\\/user\\\\\\/laitingyou) \\\\u54c8\\\\u54c8\\",\\"html\\":\\"<p><a href=\\\\\\"http:\\\\\\/\\\\\\/blog.cc360.shop\\\\\\/user\\\\\\/laitingyou\\\\\\">@laitingyou<\\\\\\/a> \\\\u54c8\\\\u54c8<\\\\\\/p>\\"}","created_at":"2018-01-23 04:34:19","updated_at":"2018-01-23 04:34:19","deleted_at":null}',
                'read_at' => NULL,
                'created_at' => '2018-01-23 04:34:19',
                'updated_at' => '2018-01-23 04:34:19',
            ),
            3 => 
            array (
                'id' => 'a63e02ef-b308-4ab5-b3f9-814f7ebdb481',
                'type' => 'App\\Notifications\\ReceivedComment',
                'notifiable_id' => 12,
                'notifiable_type' => 'App\\User',
            'data' => '{"id":54,"user_id":12,"commentable_id":21,"commentable_type":"articles","content":"{\\"raw\\":\\"[@laitingyou](http:\\\\\\/\\\\\\/blog.cc360.shop\\\\\\/user\\\\\\/laitingyou) \\\\u54c8\\\\u54c8\\",\\"html\\":\\"<p><a href=\\\\\\"http:\\\\\\/\\\\\\/blog.cc360.shop\\\\\\/user\\\\\\/laitingyou\\\\\\">@laitingyou<\\\\\\/a> \\\\u54c8\\\\u54c8<\\\\\\/p>\\"}","created_at":"2018-01-23 04:34:19","updated_at":"2018-01-23 04:34:19","deleted_at":null}',
                'read_at' => '2018-01-23 05:02:55',
                'created_at' => '2018-01-23 04:34:19',
                'updated_at' => '2018-01-23 05:02:55',
            ),
            4 => 
            array (
                'id' => 'f33593f1-6546-4929-901a-9f29bd9aa5f3',
                'type' => 'App\\Notifications\\ReceivedComment',
                'notifiable_id' => 12,
                'notifiable_type' => 'App\\User',
            'data' => '{"id":53,"user_id":13,"commentable_id":21,"commentable_type":"articles","content":"{\\"raw\\":\\"```\\\\n            init(type,page){\\\\n                this.$dialog.loading.open(this.$t(\'component.loading\'));\\\\n                api.get(this.apiAction[type],{page:page}).then(res=>{\\\\n                    this.$dialog.loading.close();\\\\n                    this.$set(this.data,type,res.data);\\\\n                }).catch(err=>{\\\\n                })\\\\n            },\\\\n            onSearch(val){\\\\n                this.$dialog.loading.open();\\\\n                api.post(\'api\\\\\\/audit\\\\\\/search\\\\\\/save\',{searchName:val}).then(res=>{\\\\n                    this.$dialog.loading.close();\\\\n                }).catch(err=>{\\\\n                    console.log(err)\\\\n                    this.$dialog.loading.close();\\\\n                })\\\\n            },\\\\n            changeTab(val,type){\\\\n                this.current=type;\\\\n                if(this.loading===0){\\\\n                    this.init(\'done\',1);\\\\n                }\\\\n                this.loading++;\\\\n            }\\\\n```\\",\\"html\\":\\"<pre><code>            init(type,page){\\\\n                this.$dialog.loading.open(this.$t(\'component.loading\'));\\\\n                api.get(this.apiAction[type],{page:page}).then(res=&gt;{\\\\n                    this.$dialog.loading.close();\\\\n                    this.$set(this.data,type,res.data);\\\\n                }).catch(err=&gt;{\\\\n                })\\\\n            },\\\\n            onSearch(val){\\\\n                this.$dialog.loading.open();\\\\n                api.post(\'api\\\\\\/audit\\\\\\/search\\\\\\/save\',{searchName:val}).then(res=&gt;{\\\\n                    this.$dialog.loading.close();\\\\n                }).catch(err=&gt;{\\\\n                    console.log(err)\\\\n                    this.$dialog.loading.close();\\\\n                })\\\\n            },\\\\n            changeTab(val,type){\\\\n                this.current=type;\\\\n                if(this.loading===0){\\\\n                    this.init(\'done\',1);\\\\n                }\\\\n                this.loading++;\\\\n            }<\\\\\\/code><\\\\\\/pre>\\"}","created_at":"2018-01-23 03:58:51","updated_at":"2018-01-23 03:58:51","deleted_at":null}',
                'read_at' => '2018-01-23 04:00:10',
                'created_at' => '2018-01-23 03:58:51',
                'updated_at' => '2018-01-23 04:00:10',
            ),
        ));
        
        
    }
}