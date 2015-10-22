<?php
/*15. Сделайте класс, который добавляет тег мета на сайт (кодировка, description,keywords).*/

class meta{

    public function metaCreate($charset,$content,$name){
        echo "<meta charset=$charset content=$content name=$name>";
    }
}

$meta1 = new meta();
$meta1->metaCreate('utf-8', 'Microsoft FrontPage 4.0','HelloWorld');

?>