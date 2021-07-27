<?php

/*
 *
 * 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.
 *
 */


class Product
{
    public string $id;
    public string $article;
    public string $category;
    public string $title;
    public string $description;
    public string $country;
    public string $count;
    public string $weight;
    public string $box_width;
    public string $box_height;

    function __constructor($id, $article, $category, $title, $description, $country, $count, $weight, $box_width, $box_height) {
        $this->id = $id;
        $this->id = $article;
        $this->id = $category;
        $this->id = $title;
        $this->id = $description;
        $this->id = $country;
        $this->id = $count;
        $this->id = $weight;
        $this->id = $box_width;
        $this->id = $box_height;
    }

    public function view() {

        echo "
            <h2>Карточка товара</h2><br>
            <h3>Имя: </h3> $this->title<br>
            <h3>Артикул: </h3> $this->article<br>
            <h3>Категория: </h3> $this->category<br>
            <h3>Количество: </h3> $this->count<br>
            <h3>Страна производитель: </h3> $this->country<br>
            <h3>Описание: </h3> $this->description<br>
            <h3>Описание: </h3> $this->country<br>
            <h3>Вес: </h3> $this->weight<br>
            <h3>Высота коробки: </h3> $this->box_height<br>
            <h3>Ширина коробки: </h3> $this->box_width<br>
        ";
    }
}


/*
 * 5. Дан код:
        class A {
            public function foo() {
                static $x = 0;
                echo ++$x;
            }
        }
        $a1 = new A();
        $a2 = new A();
        $a1->foo();         //  1
        $a2->foo();         //  2
        $a1->foo();         //  3
        $a2->foo();         //  4
 */

// Код выведет = 1234

/*
 * class A {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    class B extends A {
    }
    $a1 = new A();
    $b1 = new B();
    $a1->foo();             //  1
    $b1->foo();             //  1
    $a1->foo();             //  2
    $b1->foo();             //  2
 */

// Код выведет 1122. Потому что класс B это уже другой класс и соответсвенно вычислениния для него заного. Если я конечно правильно понял.

/*
 * class A {
        public function foo() {
            static $x = 0;
            echo ++$x;
        }
    }
    class B extends A {
    }
    $a1 = new A;
    $b1 = new B;
    $a1->foo();
    $b1->foo();
    $a1->foo();
    $b1->foo();
 */

//Если я правильно понял, то эти вызовы new A() и new A, связаны со статическими и не статическими методами, но ответ все равно 1122, а вот если статик 
