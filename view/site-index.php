<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{path}}css/style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>list de sites</title>
</head>

<body>
    <header>
        <h1>{{site_list}}</h1>
    </header>
    <main>
        <h2> <a href="site/create"><i class="fi fi-rr-add"></i>Nouveau</a></h2>
        <table id="affichage">
            <thead>
                <tr>
                    <th>Nom de site</th>
                    <th>prix($)</th>
                    <th>nom du projet</th>

                    <th>action</th>
                </tr>
            </thead>
            <tbody>

                {% for site in sites %}

                <tr>
                    <td> {{site.nomSite}}</td>
                    <td> {{site.prix}}</td>
                    <td>
                        {% for projet in projets %}

                        {% if site.siteProjetId == projet.projetId %}

                        {{projet.titre}}

                        {% endif %}

                        {% endfor %}
                    </td>


                    <td><a href="site/show/{{site.siteId}}"><i class="fi fi-ss-eye"></i></a>
                        <a href="{{path}}site/edit/{{site.siteId}}"><i class="fi fi-rr-edit"></i></a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>

    </main>
    <footer>
        <p></p>
    </footer>
</body>

</html>