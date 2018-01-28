<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 52,
                'user_id' => 13,
                'commentable_id' => 21,
                'commentable_type' => 'articles',
                'content' => '{"raw":"## \\u633a\\u5b9e\\u7528","html":"<h2>\\u633a\\u5b9e\\u7528<\\/h2>"}',
                'created_at' => '2018-01-23 03:57:53',
                'updated_at' => '2018-01-23 03:57:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 53,
                'user_id' => 13,
                'commentable_id' => 21,
                'commentable_type' => 'articles',
            'content' => '{"raw":"```\\n            init(type,page){\\n                this.$dialog.loading.open(this.$t(\'component.loading\'));\\n                api.get(this.apiAction[type],{page:page}).then(res=>{\\n                    this.$dialog.loading.close();\\n                    this.$set(this.data,type,res.data);\\n                }).catch(err=>{\\n                })\\n            },\\n            onSearch(val){\\n                this.$dialog.loading.open();\\n                api.post(\'api\\/audit\\/search\\/save\',{searchName:val}).then(res=>{\\n                    this.$dialog.loading.close();\\n                }).catch(err=>{\\n                    console.log(err)\\n                    this.$dialog.loading.close();\\n                })\\n            },\\n            changeTab(val,type){\\n                this.current=type;\\n                if(this.loading===0){\\n                    this.init(\'done\',1);\\n                }\\n                this.loading++;\\n            }\\n```","html":"<pre><code>            init(type,page){\\n                this.$dialog.loading.open(this.$t(\'component.loading\'));\\n                api.get(this.apiAction[type],{page:page}).then(res=&gt;{\\n                    this.$dialog.loading.close();\\n                    this.$set(this.data,type,res.data);\\n                }).catch(err=&gt;{\\n                })\\n            },\\n            onSearch(val){\\n                this.$dialog.loading.open();\\n                api.post(\'api\\/audit\\/search\\/save\',{searchName:val}).then(res=&gt;{\\n                    this.$dialog.loading.close();\\n                }).catch(err=&gt;{\\n                    console.log(err)\\n                    this.$dialog.loading.close();\\n                })\\n            },\\n            changeTab(val,type){\\n                this.current=type;\\n                if(this.loading===0){\\n                    this.init(\'done\',1);\\n                }\\n                this.loading++;\\n            }<\\/code><\\/pre>"}',
                'created_at' => '2018-01-23 03:58:51',
                'updated_at' => '2018-01-23 03:59:55',
                'deleted_at' => '2018-01-23 03:59:55',
            ),
            2 => 
            array (
                'id' => 54,
                'user_id' => 12,
                'commentable_id' => 21,
                'commentable_type' => 'articles',
            'content' => '{"raw":"[@laitingyou](http:\\/\\/blog.cc360.shop\\/user\\/laitingyou) \\u54c8\\u54c8","html":"<p><a href=\\"http:\\/\\/blog.cc360.shop\\/user\\/laitingyou\\">@laitingyou<\\/a> \\u54c8\\u54c8<\\/p>"}',
                'created_at' => '2018-01-23 04:34:19',
                'updated_at' => '2018-01-23 04:34:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}