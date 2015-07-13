 <?php

class Article
{
	public $id;
	public $title;
	public $content;
	protected $preview;
	
	
	protected function Article($id, $title, $content)
	{
		$this->id = $id;
		$this->title = $title;
		$this->content = $content;
		$this->preview = mb_substr($content, 0, 15, "UTF-8");
	}
	
	//  Функция для вывода стать
	protected function view()
	{
		echo "<p><h1>$this->title</h1><p>$this->content</p>
				<p>Короткое описание: $this->preview...</p>";
	}
}

class NewsArticle extends Article
{ 
	public $datetime;

	public function NewsArticle($id, $title, $content)
	{
		parent::Article($id, $title, $content);
		$this->datetime = time();
	}
	
	//  Функция для вывода статьи
	public function view()
	{
		echo "<h1>$this->title</h1><span style='color: red'>".
				strftime('%d.%m.%y', $this->datetime).
				" <b>Новость</b></span><p>$this->content</p>";
	}
}

class CrossArticle extends Article
{
	public  $source;
	
	public function CrossArticle($id, $title, $content, $source)
	{
		parent::Article($id, $title, $content);
		$this->source = $source;
	}

	public function view()
	{
		parent::view();
		echo '<small>'.$this->source.'</small>';
	}
}

class ArticleList
{
	protected $alist;
	
	public function add(Article $article)
	{
		$this->alist[$article->id] = $article;
	}
	
	//  Вывод статей
	public function view()
	{
		foreach($this->alist as $article)
		{
			$article->view();
			echo '<hr />';
		}
	}

	public function del($id)
	{
		unset($this->alist[$id]);
	}
}

class ImgArticle extends Article
{
	public $img;
	
	public function ImgArticle($id, $title, $content, $img)
	{
		parent::Article($id, $title, $content);
		$this->img = $img;
	}

	public function view()
	{
		parent::view();
		echo '<img src ="'.$this->img.'">';
	}
}


/**
* Вывод статей в обратном порядке
*/
class DescArticleList extends ArticleList
{
	
	public function view()
	{
		krsort($this->alist);
		foreach ($this->alist as $article) {
			$article->view();
			echo "<hr>";
		}
	}
}
?>