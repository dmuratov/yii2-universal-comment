CommentBehaviour for Yii2
==============================
That library include `Comment` model and `CommentBehaviour`.
It is simple and fast way to provide easy adding comments for others models.


Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require dmuratov/yii2-universal-comment:~1.0
```
or add

```json
"dmuratov/yii2-universal-comment" : "~1.0"
```

to the require section of your application's `composer.json` file.


Usage
-----
Adding behaviour for model:

```
public function behaviors()
{
    return [
        ...
        'comment' => [
            'class' => \dmuratov\comment\CommentBehaviour::className()
        ]
    ];
}
```
Adding comment for model

```

$model->addComment('Comment text');
```
Getting comments

```

$model->getComments()->all();
```