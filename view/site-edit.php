<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier site</title>
    <link rel="stylesheet" href="{{path}}css/style.css">
</head>
<body>
    <main>
    <h1>modifier </h1>
        <form action="{{path }}site/update" method="post">
            <input type="hidden" name="siteId" value="{{site.siteId}} ">
            <label>Nom de site
                <input type="text" name="nomSite" value="{{site.nomSite}}  ">
            </label>
            <label>prix
                <input type="numbre" name="prix" value="{{site.prix}}">
            </label>
            <label>Nom du projet
           
                <select name="siteProjetId">
                     {% for projet in projets %}
                    <option value="{{projet.projetId}}" {% if site.siteProjetId == projet.projetId %} selected {% endif %}>{{projet.titre}}</option>
                    {% endfor %}
                        
                    
                </select>
            </label>
           
            <input type="submit" value="modifier">
        </form>
        <form action="{{path }}site/delete" method="POST">
        <input type="hidden" name="siteId" value="{{site.siteId}}">
        
        <input type="submit" value="delete">
        </form>
    </main>
</body>
</html>