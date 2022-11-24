<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}css/style.css">
    <title>Nouveau Site</title>
    
</head>
<body>
    <main>
        <h1>Nouveau Site</h1>
        <form action="{{path}}site/store" method="post">
        <label>Nom de site
                <input type="text" name="nomSite">
            </label>
            <label>prix($)
                <input type="numbre" name="prix">
            </label>
            <label> projet


                <select name="siteProjetId">
                {% for projet in projets %}
                    <option value="{{projet.projetId}}">{{projet.titre}}</option>
                    {% endfor %}
                </select>

            </label>
            <input type="submit" value="Ajouter">
        </form>
    </main>
</body>
</html>