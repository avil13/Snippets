<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Snippets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
    <link rel="stylesheet" href="view/css/monokai_sublime.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body class="grey darken-4 white-text">
    <div class="row">
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