<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        $user = User::factory()->create([
            'name'=>'Fe Zorzo'
        ]);
        Post::factory(5)->create();
        // $user=User::factory()->create();

        
        // $family=Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);

        // $work=Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);

        // $personal=Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My Family Post',
        //     'slug'=>'my-first-post',
        //     'excerpt'=>'<p>lorem ipsum dolar sit amet.</p>',
        //     'body'=>'<p>lorem fakdkfansdflkasnfoasndofajssflkdnsafasdbnflaksdnflaskdbnflasdkfasdmkflnsadlkflçajsdflaskndfasbdnflasdflskncvasobgvlsdfjdsalkfnasdfbnasldkfjalkdf<\p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=>'My Work Post',
        //     'slug'=>'my-second-post',
        //     'excerpt'=>'<p>lorem ipsum dolar sit amet.</p>',
        //     'body'=>'<p>lorem fakdkfansdflkasnfoasndofajssflkdnsafasdbnflaksdnflaskdbnflasdkfasdmkflnsadlkflçajsdflaskndfasbdnflasdflskncvasobgvlsdfjdsalkfnasdfbnasldkfjalkdf<\p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$personal->id,
        //     'title'=>'My Personal Post',
        //     'slug'=>'my-third-post',
        //     'excerpt'=>'lorem ipsum dolar sit amet.</p>',
        //     'body'=>'<p>lorem fakdkfansdflkasnfoasndofajssflkdnsafasdbnflaksdnflaskdbnflasdkfasdmkflnsadlkflçajsdflaskndfasbdnflasdflskncvasobgvlsdfjdsalkfnasdfbnasldkfjalkdf<\p>'
        // ]);

    }   
}
