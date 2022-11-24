<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        
        <h1>{{site.nomSite}}</h1>
        <div class="detail">
            <p><strong>Nom de site : </strong>{{site.nomSite}}</p>
            <p><strong>prix : </strong>{{site.prix}} $</p>

            <p><strong>nom du
                    projet:
                </strong>{% for projet in projets %}

                    {% if site.siteProjetId == projet.projetId %}

                    {{projet.titre}}

                    {% endif %}

                    {% endfor %}
            </p>



        </div>
        <button> <a href="{{path}}site">page d'accueil</a></button>

    </main>
    

</body>
</html>