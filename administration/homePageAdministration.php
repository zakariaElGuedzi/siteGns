<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listeEtuditans</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./assets/WhatsApp Image 2024-01-25 à 21.22.33_058732ec.jpg">

</head>
<style>
     *{
            /* border: 1px solid red !important; */
            padding: 0 !important;
            margin: 0 !important;
            box-sizing: border-box !important;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        body {
            padding: 0 !important;
            margin: 0 !important;
        }
        .menuAdmi1 {
            /* width:200px; */
            
            height: 100vh !important;
        }
        /* .menuClass2 {
            width: 220px;
        } */

         .dsss {
            display: none;
         }
         .showMenu2 {
            display: flex !important;
            /* width: 880px !important; */
            width: 220px;
        }
        
         .div1Menu1adAwesome {
            width: 60px;
            border-right: 1px solid black;
         }
         /* .rttI {
            transform: rotate(30deg);
         } */
        
           
</style>
<body>
        <div class="w-100 text-center  vh-100">
            <h1>Genius Center Prive !</h1>
        </div>
    <div class="d-flex position-absolute top-0">
        <div id="menu1Admin" class="menuAdmi1 bg-transparent h-100 m-0 d-flex d-inline">
            <div class="div1Menu1adAwesome bg-dark  m-0 p-1 row text-center  ">
                <i id="showmenu" class="fa-solid fa-gear col-12 m-0 p-1 fs-3 text-start  text-secondary text-center"></i>
                <!-- <div>
                <button type="button" class="btn btn-primary position-relative">Mails
                 <span class="position-absolute top-0  text-white translate-middle badge rounded-pill text-bg-secondary">+99 
                    </span>
            </button>
                </div> -->
            </div>
            <div id="contentMenu" class="h-50 mt-5 m-0 p-0 row   row d-none align-items-center justify-content-center">
                <div class="w-100 col-10 bg-primary p-3  text-center d-flex align-items-center justify-content-center">
                    <a href="homePageAdministration.php" class="w-100"><button class="btn btn-primary w-100 py-3  border border-1">Dash board</button></a>
                </div>
                <div class="w-100 col-10 bg-primary p-3 text-center d-flex align-items-center justify-content-center">
                    <a href="listeEtudiants.php" class="w-100"><button class="btn btn-primary w-100 py-3  border border-1">Dash board</button></a>
                </div>
                <div class="w-100 col-10 bg-primary p-3 text-center d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary w-100 py-3 border border-1">Liste etudiants</button>
                </div>
            </div>
        </div> 
    </div>
   



<script>
    let shwelemnts = document.getElementById('showmenu');
    var menuVar = document.getElementById('menu1Admin');
    let contentMenuVar = document.getElementById('contentMenu');
    shwelemnts.addEventListener("click",function fd() {
        menuVar.classList.toggle('menuClass2')   
        contentMenuVar.classList.toggle('showMenu2');
        // shwelemnts.classList.toggle('rttI');
        
    } )
    // shwelemnts.addEventListener("click", showIt)
    // function showIt() {
    //     console.log("dfd")
    // }
</script>
</body>
</html>