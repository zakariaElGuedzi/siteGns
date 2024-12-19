<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./assets/WhatsApp Image 2024-01-25 à 21.22.33_058732ec.jpg">
    <style>
        *{
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body >
    
    <header class="w-100 bg-primary  py-3 px-md-5 d-flex justify-content-around fw-bold">
        <a href="homePageAdministration.php"><button class="btn btn-secondary border border-1"><span>< </span>Acceuil</button></a>
        <p class="d-inline ">Genius Center prive</p>
        <p class="d-inline">Liste etudiants</p>
    </header>
    <!-- <div class="w-100 d-flex justify-content-center bg-dark w-100  h-100"> -->
        <div class="col-6 bg-black text-white p-2 position-relative p-md-3 m-0 w-100 ">
            <table class="table table-striped-columns table-bordered  container-md w-100 w-md-100">
                <thead>
                    <tr class="bg-secondary">
                        <th class="col" class="text-end">Id</th>
                        <th class="col">Nom Complet</th>
                        <th class="col">N.Telephone</th>
                        <th class="col">ville</th>
                        <th class="col">Formation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>ahmad</td>
                        <td>07 66  55 5 555</td>
                        <td>Fes</td>
                        <td>Clark</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <!-- </div> -->

</body>
</html>