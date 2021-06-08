<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormLogin;
use App\Pattern\AbstractFactory\AbstractFactory;
use App\Pattern\Builder\BuilderToDecorator;
use App\Pattern\Composit\CardItemCompososit;
use App\Pattern\Composit\TagOl;
use App\Pattern\Composit\TagP;
use App\Pattern\Decorator\P1Decorator;
use App\Pattern\Decorator\P2Decorator;
use App\Pattern\Decorator\P3Decorator;
use App\Pattern\DependencyInjection\DependencyClass;
use App\Pattern\Fluent\ClassFluent;
use App\Pattern\StaticFactory\StaticFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Pattern\Adapter\ItemTow;
use App\Pattern\Adapter\ItemOne;

class TestController extends Controller
{
    public function test()
    {
/*        $abstract_factory  = new AbstractFactory(15000,'One');
        Str::JSON_P(($abstract_factory->ItemTow()->off(5000)));*/

/*        $static_factory = StaticFactory::view('tow');
        echo $static_factory->name();*/
/*        $builder = new BuilderToDecorator();
        Str::JSON_P($builder->BuildHome());*/
/*        $adapter = new ItemOne();
        Str::JSON_P($adapter->viewName(new ItemTow));*/
/*        $composit = new CardItemCompososit();
        $composit->addEml(new TagP('User : 15'));
        $composit->addEml(new TagOl('Name : Sina'));
        $composit->addEml(new TagOl('Password : sina1010'));
        $composit->addEml(new TagOl('Email : Sina1010anis@gmail.com'));
        $composit->addEml(new TagOl('SEX : Man'));
        $composit_2 = new CardItemCompososit();
        $composit_2->addEml(new TagP('User : 28'));
        $composit_2->addEml(new TagOl('Name : Arash'));
        $composit_2->addEml(new TagOl('Password : Arash1010'));
        $composit_2->addEml(new TagOl('Email : Arash1010Arash@gmail.com'));
        $composit_2->addEml(new TagOl('SEX : Man'));
        $composit->addEml($composit_2);
        Str::JSON_P($composit->render());*/

/*        $decorator = new P3Decorator(new P2Decorator(new P1Decorator()));
        Str::JSON_P($decorator->price());*/

/*        $dependecy = new DependencyClass();
        Str::JSON_P($dependecy->send());
        echo PHP_EOL;
        Str::JSON_P($dependecy->upload());*/

/*        $fluent = new ClassFluent('sina' , 'sina1010anis@gmail.com' , 'test');
        $fluent->setName()->setEmail()->setPassword();
        Str::JSON_P($fluent->getUser());*/
        return view('Test.test');
    }
    public function test_form(FormLogin $request/* , \App\Validate\Form\FormLogin $formLogin*/)
    {
    }
}
