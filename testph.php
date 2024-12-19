
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./assets/WhatsApp Image 2024-01-25 à 21.22.33_058732ec.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            /* border: 1px solid red !important; */
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        .sercle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin: auto;
        }
        .sercle i {
            position: relative;
            font-size: 15px;
            padding: 1px;
            border-radius: 50%;
        }
        .crclstp2 {
            width: 15px;
            height: 15px;
            margin: auto;
            border-radius: 50%;
        }
        h2 {
            font-size: 25px;
        }
        @media (max-width:600px) {
            h2 {
                font-size: 22px;
            }
       
        }        
        @keyframes progess {
            0% {   rotate: 0deg;   }
            16% {   rotate: 72deg;   }
            32% {   rotate: 144deg;   }
            48% {   rotate: 216deg;   }
            64% {   rotate: 288deg;   }
            100% {   rotate: 360deg;   }
            /* 80% {   rotate: 72deg;   } */
        }
        .serclAnim {
            animation: progess 5s normal infinite ease;
        }
        .inscrBtn {
            background: rgb(0,0,0);
            background: linear-gradient(90deg, rgba(0,0,0,0.9360994397759104) 38%, rgb(63, 62, 62) 90%);
        }
        .PersonHr {
            height: 5px;
            z-index: -2;
        } 
        .OptionInputForm:focus {
            outline: 0;
            border: 0;
        }
        input {
            outline: 0;
            border-radius: 0px !important; 
        }

        /* confirme donne div */
        .parent {
            position: absolute;
            margin-left: -12px !important;
            border-radius: 10px;
            display: none;
            min-height: fit-content;
            }   
        .afficheverifNumberNotif1 {
            display: none;
        }       
        .afficheverifNumberNotif2 {
            display: flex;
        }
        @media (max-width:750px) {
        .parent   {
            margin-top: -30px !important;
        } 
        }
        @media (min-width:750px) {
        .parent   {
            margin-top: -110px !important;
            /* width: 80vh; */
        } 
        }
        .btnPrmy {
            background-color: green ;
        }
        .btnPrm2 {
            background-color: green !important;
        }
              
         
    </style>
</head>
<body>
    <div class="position-relative m-4">
        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 2px;">
            <div class="progress-bar" style="width: 50%"></div>
            <div class="progress-bar2 bg-secondary" id="progsBar" style="width: 50%"></div>
        </div>
        <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
        <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
        <button id="idprogessVerif" type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary  rounded-pill" style="width: 2rem; height:2rem;">3</button>
    </div>
<!-- 
    <div class="position-relative m-4">
        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
            <div class="progress-bar" style="width: 50%"></div>
        </div>
        <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
        <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
        <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
    </div> -->





<div class="container d-flex align-items-center justify-content-center">
    <div class="col-md-12 d-flex align-items-center justify-content-center ">
        <div class="row p-3 bg-primary d-flex align-items-center justify-content-center">
                <h2 class="text-center my-3 mb-5">Remplissez le formulaire suivant</h2>
            <form action="welcomephp.php" method="GET" class="position-relative row col-md-7 m-0 ">
                <label for="" class="text-align-start pb-2 p-0  text-white fw-bold">Nom complet</label>
                <input  type="text" name="nom_complet" id="input1" class="inputform border-0 p-2 mb-4 mb-md-4 " placeholder="Entrez votre nom complet" required>

                <label for="" class="pb-2 p-0 text-capitalize  text-white fw-bold">numéro de telephone</label>
                <input  type="number" name="ntelephone" id="input2" pattern="\d{10,}" class="border-0 p-2 mb-3 inputsForm" placeholder="Entrez votre Numéro de téléphone" required>
                <p class="afficheverifNumberNotif1 text-black text-end fw-bold" id="verifNumberNotif">المرجوا التأكد من الرقم</p>


                <label for="" class="pb-2 p-0   text-white fw-bold">Ville de résidence</label>
                <input type="text" name="ville" id="input3" class="border-0 p-2 mb-4 inputsForm" placeholder="Entrez votre ville de résidence" required>


                    <label for="selectTypeForm" class="pb-2 p-0 text-white fw-bold">Formation souhaitée <span class="text-dark">choisis votre formation souhaitée</span>
                    <!-- <input type="number" name="" id="" class="border-0 p-2 mb-3" placeholder="choisis votre formation souhaitée"> -->
                    <div class=" m-0 p-2  bg-white d-flex align-items-center row container">
                        <select name="option_formation" id="selectTypeForm"  class="OptionInputForm   p-0 m-0 border-0 bg-transparent " required>
                            <option value="" selected class="11">choisis</option>
                            <option value="Chariot élévateur" class="11">• Chariot élévateur</option>
                            <option value="Engins de chantier"  class="21">• Engins de chantier</option>
                            <option value="Chariot télescopique" class="31">• Chariot télescopique</option>
                            <option value="Reach Stacker" class="41">• Reach Stacker</option>
                            <option value="Logistique et Gestion des stock" class="51">• Logistique et Gestion des stock</option>
                            <option value="LOGICIEL SAP" class="51">• LOGICIEL SAP </option>
                            <option value="Audit et Contrôle Logistique" class="51">• Audit et Contrôle Logistique</option>
                            <option value="Gestion des Transports et de la Distribution" class="51">• Gestion des Transports et de la Distribution</option>
                        </select>
                    </div>
                    </label>
                     <p class="inscrBtn border-0 py-3 mt-4 text-white my-3 fw-bold fs-5 text-center" onclick="td()" id="funcAfficheConf" >Inscrire maintenant</p>

                     <!-- Donnes confirmation -->
                <div class="parent  align-items-center justify-content-center w-100 m-0 w-md-25 h-100 bg-dark py-5 row" id="ConfirmContainer">
                    <div class="row pb-3">                    
                        <img src="assets/logon.png" class="w-25 h-25" alt="geniuscenter">
                    </div>
                    <div class="child  row bg-dark text-white  d-flex align-items-center justify-content-center py-2  m-0">
                        <h3 class="text-center "> Verification de données</h3>
                        <p class="pb-4 text-end" >المرجوا التأكد من المعلومات قبل الارسال في حالة هناك معلومات خاطئة اضغط على زر الرجوع أسفله وتغييرها</p>

                        <div class="row nom fw-bold ">
                            <div  class="col-8">
                                <i id="editDn"  class="fa-regular fa-pen-to-square d-inline"></i>
                                <p class="nomVal col-3 d-inline " id="nomCompletverif">-</p>
                            </div>
                            <p class="col-4 d-inline text-end">الاسم الكامل</p>
                            <hr>
                        </div>

                        <div class="row nom ">
                            <div class="col-8">
                                <i id="editDn" class="fa-regular fa-pen-to-square d-inline"></i>
                                <p class="nomVal  d-inline" id="numTelVerif" >-</p>
                            </div>
                            <p class="col-4 d-inline text-end">رقم الهاتف</p>
                            <hr>
                        </div>

                        <div class="row nom ">
                            <div class=" col-8">
                            <i id="editDn"  class="fa-regular fa-pen-to-square d-inline"></i>
                            <p class="nomVal  d-inline " id="villeVerifChosis">-</p>
                            </div>
                            <p class="col-4 d-inline text-end">المدينة</p>
                            <hr>
                        </div>

                        <div class="row nom ">
                            <div class="col-8">
                                <i id="editDn"  class="fa-regular fa-pen-to-square d-inline"></i>
                                <p class="nomVal d-inline" id="optionFormationChs">-</p>
                            </div>
                            <p class="col-4 d-inline text-end">دروة تكوينية</p>
                            <hr>
                        </div>
                        <div class="row pt-5">
                            <button class="col-6 fw-bold text-white bg-transparent border-0 " onclick="hideVerif()">retour</button>
                            <button class="col-6 fw-bold btn-success py-2" type="submit" name="submit">Envoyer</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  

<script src="registreJsFile.js"></script>
</body>
</html>