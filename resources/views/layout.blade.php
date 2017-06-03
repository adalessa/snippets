<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Snippet</title>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <section class="hero is-medium is-primary is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        <a href="/">Snippets</a>
                    </h1>
                    <h2 class="subtitle">
                        A page where to store your usefull snippets
                    </h2>
                    <p>
                        <a href="/snippets/create" class="button">Create Snippet</a>
                    </p>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                {{ $slot }}
            </div>
        </section>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
