
<h1>Accueil</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collecte et Classement des Maladies</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
}

header {
    background-color: #007bff;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}

header p {
    margin: 10px 0 0;
    font-size: 1.2em;
}

/* Main Content */
main {
    padding: 20px;
}

.search-section,
.stats-section {
    margin-bottom: 30px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.search-section h2,
.stats-section h2 {
    font-size: 1.8em;
    margin-bottom: 15px;
    color: #007bff;
}

form {
    display: flex;
    gap: 10px;
}

form input[type="text"] {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1em;
}

form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1em;
}

form button:hover {
    background-color: #0056b3;
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

table th,
table td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

table th {
    background-color: #f7f7f7;
    color: #007bff;
}

table tr:hover {
    background-color: #f1f1f1;
}

/* Footer */
footer {
    text-align: center;
    background: #333;
    color: #fff;
    padding: 10px 0;
    margin-top: 20px;
    font-size: 0.9em;
}

</style>
<body>
    <header>
        <h1>Collecte et Classement des Maladies</h1>
        <p>Une plateforme pour analyser et organiser les maladies observées chez les patients.</p>
    </header>
    <main>
        <section class="search-section">
            <h2>Rechercher une maladie</h2>
            <form>
                <input type="text" placeholder="Nom de la maladie..." name="search" />
                <button type="submit">Rechercher</button>
            </form>
        </section>

        <section class="stats-section">
            <h2>Statistiques générales</h2>
            <table>
                <thead>
                    <tr>
                        <th>Maladie</th>
                        <th>Cas Observés</th>
                        <th>Dernière Mise à Jour</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Grippe</td>
                        <td>120</td>
                        <td>2025-01-01</td>
                    </tr>
                    <tr>
                        <td>Diabète</td>
                        <td>85</td>
                        <td>2025-01-03</td>
                    </tr>
                    <tr>
                        <td>Hypertension</td>
                        <td>150</td>
                        <td>2025-01-04</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Collecte et Classement des Maladies. Tous droits réservés.</p>
    </footer>
</body>
</html>

