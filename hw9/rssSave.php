<?php
/*4. Создать форму для добавления новости в базу данных. Форма должна содержать title, url,
description. Для сохранения новости воспользуйтесь классом News и методом saveNews.*/
?>
    <form action="" method="post">
        <input name="title" type="text" placeholder="title">--Title<br />
        <input name="url" type="text" placeholder="url">--Url<br />
        <textarea name="description" placeholder="description"></textarea>--Description<br />
        <input name="submit" type="submit" value="save">
    </form>
    <a href='rssTable.php'>go to ~rssTable~</a>
<?php
include "rssNews.php";
$news = new News();
$arr = $news->getNews('news');
$news->setNewsArr($arr);
if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['url']) && !empty($_POST['description'])){
    $news->saveNews('news', $_POST['title'], $_POST['url'], $_POST['description']);
    echo "Your values was be saved";
}
else{echo 'please WRITE FORM VALUES!!!';}

?>