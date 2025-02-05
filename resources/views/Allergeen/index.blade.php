<!DOCTYPE html>
<html>
<head>
    <title>Overzicht Allergenen</title>
</head>
<body>
    <h1>Overzicht Allergenen</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ProductNaam</th>
                <th>AllergeenNaam</th>
                <th>Omschrijving</th>
                <th>AantalAanwezig</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->ProductNaam }}</td>
                    <td>{{ $row->AllergeenNaam }}</td>
                    <td>{{ $row->Omschrijving }}</td>
                    <td>{{ $row->AantalAanwezig }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>