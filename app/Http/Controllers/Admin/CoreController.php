<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CoreController extends Controller
{
    protected static $articles;

    public function __construct(){
        //$this->middleware('mymiddle');
    }

    public static function addArticles($array){
        return self::$articles[] = $array;
    }

    public function getArticles(){


        /*$country = Country::find(1);
        $user = User::find(2);

        $country->user()->associate($user);
        $country->save();*/

        /*$articles = Article::where('user_id','=',1)->get();
        $user = User::find(2);

        foreach ($articles as $article) {
            $article->user()->associate($user);
            $article->save();
        }
        dump($articles);*/

        /*$user = User::find(2);
        $role_id = Role::find(2)->id;

        //$user->roles()->attach($role_id);
        $user->roles()->detach($role_id);*/

        $article = Article::find(60);
        $article->text = ['test'=>'123','hello'=>['hello_id'=>'bobo']];
        $article->save();
        $article = Article::find(60);
        //$article->name = 'ChangeName';
        dump($article->toJson());
        dump($article->toArray());

        return;



        //$user = User::find(1);
        //$articles = Article::find(1);

       // $country = Country::find(1);

        //$article = $user->articles()->where('id','=',1)->get();

        //$role = Role::find(1);

        //Жадная загрузка
        /*$articles = Article::with('user')->get();
        */

        /*$articles = Article::all();

        $articles->load('user');
       */

       /* $users = User::with('articles','roles')->get();

        */

       //Выбрать юзеров у которы 3+ записей
       /*
        $users = User::has('articles', ">=", '3')->get();

        foreach ($users as $user){
            dump($user->articles);
        }
       */

        /*$user = User::find(1);

        $user->articles()->where('id',60)->update(['name'=>'Updated by user 1']);
        */
//        $article = new Article([
//            'name'=>'Article of User1',
//            'text'=> 'some text'
//        ]);
//
//        $role = new Role(['name'=>'tester']);
//        $user->roles()->save($role);

        /*$user->articles()->saveMany([
            new Article([
                'name'=>'Article of User2',
                'text'=> 'some text'
            ]),
            new Article([
                'name'=>'Article of User3',
                'text'=> 'some text'
            ])
        ]);*/

        //$user->articles()->save($article);

       /* $user->articles()->create([
            'name'=>'Article of User111',
            'text'=> 'some text222'
        ]);
*/
       /*
        $article = Article::find(60);
        dump($article);

        return;
       */


        //SELECT!!!!!!!!!!!!1

       //$articles = DB::table('articles')->get();
       //$articles = DB::table('articles')->first();
       //$articles = DB::table('articles')->value('name');
        /*DB::table('articles')->chunk(2, function($articles){
            foreach($articles as $article) {
                CoreController::addArticles($article);
            }
        });*/

        //$articles = DB::table('articles')->pluck('name');
        //$articles = DB::table('articles')->count();
        //$articles = DB::table('articles')->max('id');

        //$articles = DB::table('articles')->distinct()->select('name')->get();

        //WHERE, AND WHERE
        //$query = DB::table('articles');
        /*
        $articles = $query->select()
                                    ->where('id','>',1)
                                    ->where('name','=','Blog post 4')
                                        ->get();
        */
        //OR WHERE
        /*
        $query = DB::table('articles');
        $articles = $query->select()->where([
                ['id','>',2],
                ['name','like','%post 3']
            ])->orWhere([
            ['id','=',1]
        ])->get();
        */

        //BETWEEN
        //$articles = DB::table('articles')->whereNotBetween('id',[2,4])->get();
        //$articles = DB::table('articles')->whereIn('id',[2,4])->groupBy('name')->get();
        //$articles = DB::table('articles')->take(2)->get();

        //INSERT !!!!!!!!!!!!!!!!!!!!!

        /*DB::table('articles')->insert([
            ['name'=>'insert1','text'=>'insert1'],
            ['name'=>'insert2','text'=>'insert2']
        ]);*/

        //UPDATE !!!!!!!!!!!!!!!!!!!!!
        //DB::table('articles')->where('id',2)->update(['name'=>'hello world1']);


        //DELETE !!!!!!!!!!!!!!!!!!!!!!!!!
        //DB::table('articles')->where('id',2)->delete();

        //LEFT JOIN
        /*$articles = DB::table('articles')
            ->leftJoin('articles','user.id','=','articles.user_id')
            ->select('user.*','articles.name')
            ->get();
        */

       /* $articles = DB::table('articles')->get();
        dump($articles);*/

        //$articles = Article::where('id','>',2)->get();
        //$articles = Article::all();
        //$articles = Article::where('id',3)->first();
        //$articles = Article::find([1,2,3]);

        //Article::findOrFail(2);

        /*$article = new Article();
        $article->name = 'testAdd';
        $article->text = 'TEXT HERE';
        $article->img = 'no_img.png';



        $article->save();
        */

        /*$article = Article::find(6);
        $article->name = 'via Update Name';
        $article->text = 'via Update Text';
        $article->save();*/

        /*Article::create([
            'name'=>'hello',
            'text'=>'sote text'
        ]);*/

        /*Article::firstOrCreate([
            'name'=>'hello',
            'text'=>'sote text'
        ]);*/

        //$article = Article::find(58);
        //$article->delete();

        //Article::destroy(5);
        //Article::destroy([1,2]);



        //$articles = Article::withTrashed()->get();
        /*$articles = Article::all();
        dump($articles);
        return;*/
        //dump(self::$articles);
    }

    public  function getArticle($id){
        echo $id;
    }
}
