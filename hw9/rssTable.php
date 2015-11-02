<?php
/*5. Создать html-станицу для отображения новостей. В начале файла создайте экземпляр
класса News и получите список новостей из БД. Затем создайте экземпляр класса RssNews,
сформируйте rss с помощью метода buildRss передав полученный список новостей. Затем
получите rssленту с помощью метода getRss.
Ниже постройте html с шапкой колонок: title, url, description, date. С помощью цикла foreach
сформируйте вывод новостной ленты.*/

include "rssNews.php";
$news = new News();
$news->setNewsArr($news->getNews('news'));
$rssnews = new RssNews();
$rssnews->buildRss($news);
$arr = $news->getNews('news');
$news->setNewsArr($arr);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>NEWS</title>
</head>
<body>
<h1>RSS-�����</h1>
<table border="1" width="100%">
    <tr>
        <th>title</th>
        <th>url</th>
        <th>description</th>
        <th>date</th>
    </tr>
    <?php
    $result = $rssnews->getRss();
    if (!empty($result)) {
        $items = $result['rss']['channel']['item'];
        foreach ($items as $k => $v) {
            if (is_string($v)) {
                if ($k == 'title') {
                    echo "<tr><td>" . $v . "</td>";
                } elseif ($k == 'url') {
                    echo "<td>" . $v . "</td>";
                } elseif ($k == 'description') {
                    echo "<td>" . $v . "</td>";
                } elseif ($k == 'create_at') {
                    echo "<td>" . $v . "</td></tr>";
                }
            } elseif(is_array($v)&&!empty($v['title'])) {
                echo "<tr><td>" . $v['title'] . "</td>";
                echo "<td>" . $v['url'] . "</td>";
                echo "<td>" . $v['description'] . "</td>";
                echo "<td>" . $v['create_at'] . "</td></tr>";
            }
        }
    }
    ?>
</table>
</body>
</html>