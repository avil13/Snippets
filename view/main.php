<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAANCAYAAACgu+4kAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAARZJREFUKJGN078rxlEUBvCPQuTnQCxSiiST0WLAZDUYUBb/gEEZrLKYlR/FwmBQSski6i1CGUiZJANJKdl4Dd/z8qXvG0/dbuee8zz3nKd7STCDB7xiDdWyUYYRjGKwcDiO9xCZwCOWM8iV2EUet+goJNaQSxXORUEatTgM8jVa0skpvGEIPVFwkso34izI5xH/QDk2oiCPj9gXUIL9iI9QlzHaF5rRjl48B2kVbVgMD/6NMYmxm9iKLv9EK7rQh5fo4DX2PVQVI1Zg27cHhTUvcfsq4hzqswSm46YBdOMSx6l8A05D5AJNvwXW/f0OanAQIjcx7hcKhs1iEk9YKjLqTojcofP3GPcS81YU/wulGJb8h374BOKiSBwu6vICAAAAAElFTkSuQmCC" rel="icon" type="image/x-icon">
    <title>Snippets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
    <link rel="stylesheet" href="view/css/monokai_sublime.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body class="grey darken-4 white-text">
    <div class="row">
        <div class="navbar-fixed">
            <nav class="teal darken-2">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Snippets</a>
                </div>
            </nav>
        </div>
        <!--  -->
        <div class="col s2">
            <div class="collection">
                <?php foreach($names as $k=> $v): ?>
                <a href="#" data-action="<?=$k?>" class="action blue-grey darken-4 collection-item">
                    <?=$v?> <i class="mdi-file-folder secondary-content"></i></a>
                <?php endforeach; ?>
            </div>
        </div>
        <!--  -->
        <div class="col s4">
            <div class="collection file-list">
            </div>
        </div>
        <!--  -->
        <div class="col s6">
            <div class="card-panel teal">
                <h5 id="snippet-title"></h5>
                <span class="white-text" id="snippet-description"></span>
            </div>
            <pre class="html doc pre" id="html"></pre>
            <pre class="css doc pre" id="css"></pre>
            <pre class="js doc pre" id="js"></pre>
        </div>
    </div>
    <!--  -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="view/js/highlight.pack.js"></script>
    <script src="view/js/script.js"></script>
</body>

</html>