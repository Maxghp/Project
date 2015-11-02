
<?php
//2. Создать класс News с методами: saveNews сохранение новости в БД getNews получение новостей из БД
//и сохранение результата в файл getRss загрузка списка новостей из файла и возврат результата.
//Структура класса News должна быть следующая:
//⁃ метод saveNews сохраняет новость в БД и возвращает true или false. Если false, то перед
//возвратом необходимо сохранить ошибку в отдельную сущность error. Для сохранения ошибки с сущность error создайте методам setError;
//3. Создать класс RssNews с методами: buildRss построение dom структуры
//⁃ метод getNews получает список новостей из БД, формирует массив с записями и возвращает массив.
//Структура класса RssNews должна быть следующая:
//метод buildRss в качестве параметра получает массив новостей. Если список не пустой, с
//помощью цикла и массива с новостями сформируйте domструктуру новостей. Результат
//сохраните в файл. метод getRss проверяет файл на наличие, загружает содержимое файла и возвращает результат.

class News
{
    public $news;
    public $error;

    public function saveNews($table, $title, $url, $description)
    {
        $link = mysqli_connect('localhost', 'root', '','rssnews');
        $title = $title;
        $url = $url;
        $description = $description;
        $query = mysqli_query($link, "INSERT INTO $table (`title`, `url`, `description`, `create_at`) VALUES ('$title', '$url', '$description', NOW())");
        if ($query) {
            return 'the news has bin create';
        } else {
            return $this->setError();
        }
    }
    public function getNews($tableName){
        $query = "SELECT * FROM $tableName";
        $link = mysqli_connect('localhost', 'root', '','rssnews');
        $result = mysqli_query($link, $query);
        if (!$result) {
            return false;
        } else {
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $rows;
        }
    }
    public function setError(){
        $link = mysqli_connect('localhost','root','','rssnews') or die ($error = mysqli_error($link));
        $this->error = mysqli_error($link) . "The news can't be created";}

    public function setNewsArr($arr){
        $this->news = $arr;
    }
    public function getNewsArr(){
        return $this->news;
    }
}
class RssNews
{
    public function buildRss(News $news)
    {
            $rssName = 'rss.xml';
            $rssTitle = "rssNewsCreater";
            $rssLink = "http://localhost/hw9/rssNews.php";

            $dom = new DOMDocument('1.0', 'utf-8');
            $rss = $dom->createElement('rss');
            $rss->setAttribute('version', '2.0');
            $dom->appendChild($rss);
            $channel = $dom->createElement('channel');
            $rss->appendChild($channel);
            $title = $dom->createElement('title', $rssTitle);
            $link = $dom->createElement('link', $rssLink);
            $channel->appendChild($title);
            $channel->appendChild($link);

            foreach ($news->getNewsArr() as $val) {
                $element = $dom->createElement('item');
                $title = $dom->createElement('title', $val['title']);
                $Link = $dom->createElement('url', $val['url']);
                $Description = $dom->createElement('description', $val['description']);
                $createAt = $dom->createElement('create_at', $val['create_at']);
                $element->appendChild($title);
                $element->appendChild($Link);
                $element->appendChild($Description);
                $element->appendChild($createAt);
                $channel->appendChild($element);
            }
            $dom->save($rssName);
        }
    function domToArray($root)
    {
        $result = array();
        if ($root->hasAttributes()) {
            $attrs = $root->attributes;
            foreach ($attrs as $i => $attr) {
                $result[$attr->name] = $attr->value;
            }
        }
        $children = $root->childNodes;
        if (!empty($children)) {
            if ($children->length == 1) {
                $child = $children->item(0);
                if ($child->nodeType == XML_TEXT_NODE) {
                    $result['_value'] = $child->nodeValue;
                    if (count($result) == 1) {
                        return $result['_value'];
                    } else {
                        return $result;
                    }
                }
            }
            $group = array();
            for ($i = 0; $i < $children->length; $i++) {
                $child = $children->item($i);
                if (!isset($result[$child->nodeName])) {
                    $result[$child->nodeName] = $this->domToArray($child);
                } else {
                    if (!isset($group[$child->nodeName])) {
                        $tmp = $result[$child->nodeName];
                        $result[$child->nodeName] = array($tmp);
                        $group[$child->nodeName] = 1;
                    }
                    $result[$child->nodeName][] = $this->domToArray($child);
                }
            }
        }
        return $result;
    }
    public function getRss()
    {
        if (file_exists('rss.xml')) {
            $dom = new DOMDocument();
            $dom->load('rss.xml');
            return $this->domToArray($dom);
        } else {
            return array();
        }
    }
}