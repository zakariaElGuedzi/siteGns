    



// firstDivInput
let selectValueVar = document.getElementById('selectTypeForm');

let DivConfirmInfo = document.getElementById('ConfirmContainer');
const testTakeInput = document.getElementsByTagName('input');

let arrInputs = [];
let numberInputArray = [];


function toInputs() {
    arrInputs = [];
    // turn on all inputs and push it to array
    for ( i = 0; i<testTakeInput.length ; i++) {
        arrInputs.push(testTakeInput[i].value);
    }
    numberInputArray = arrInputs[1];
    // push selected value to array
    arrInputs.push(selectValueVar.value);
    
    return arrInputs ;
}
let verifNumberMsg = document.getElementById('verifNumberNotif');
let iscompleted  ;
function functValueTracker() {
    var valInputs = toInputs() ;
    for (n=0 ; n<valInputs.length ; n++) {
        if (valInputs[n] == "" || numberInputArray.length < 10 ) {
            console.log();
            iscompleted = false;                                    
            console.log('u should complet form');
            console.log(numberInputArray.length);
            if (numberInputArray.length < 10) {
                console.log("t2akd mn nemra");
                verifNumberMsg.classList.add('afficheverifNumberNotif2') ;
            } else {
                verifNumberMsg.classList.remove('afficheverifNumberNotif2') ;
            }
            break
        } 
        else {
            iscompleted = true ;
        }
    }

    return iscompleted
}   

let verifPgrss = document.getElementById("idprogessVerif");
let prgrBr = document.getElementById("progsBar");
 function td() {
    let funvValTruckr = functValueTracker() ;
    let y = toInputs();
    if (funvValTruckr == false ) {
        console.log("not send")
        console.log("iscompleted value : "+ iscompleted)
    } else  {
        console.log('good send');
        DivConfirmInfo.style.display = "flex";
        verifNumberMsg.classList.remove('afficheverifNumberNotif2') ;
        verifPgrss.classList.add("btnPrmy");
        prgrBr.classList.add("btnPrm2");
        document.getElementById("nomCompletverif").textContent = y[0];
        document.getElementById('numTelVerif').textContent = y[1];
        document.getElementById('villeVerifChosis').textContent = y[2];
        document.getElementById('optionFormationChs').textContent = y[3] ;
    }
 }

 let EditElements = document.querySelectorAll("#editDn");
 EditElements.forEach(elementEdit => {
    elementEdit.addEventListener("click",hideVerif)
 })

 function hideVerif() {
    event.preventDefault()

    if (DivConfirmInfo.style.display == "flex" ) {                       
        DivConfirmInfo.style.display = "none";
        verifPgrss.classList.remove("btnPrmy");
        prgrBr.classList.remove("btnPrm2");
    } else {
        DivConfirmInfo.style.display == "flex";
    }


 }




// let e  = document.querySelector























      // cal all inputs
    //   let testTakeInput = document.getElementsByTagName("input");
    //   console.log(testTakeInput.value)
    
    // let buttonToConfirm = document.getElementById('funcAfficheConf');
    // let DivConfirmInfo = document.getElementById('ConfirmContainer');

    //     buttonToConfirm.addEventListener('click',function () {

           

    //     if (testTakeInput.value !== "undefined" && testTakeInput.value !== "") {
    //         if (  DivConfirmInfo.style.display === "none" || DivConfirmInfo.style.display === "" ) {
    //             DivConfirmInfo.style.display = "flex" ;
    //             console.log('sf kharj form confirm');
    //         } else {
    //             DivConfirmInfo.style.display = "none" ;
    //         }  }
    //         else {
    //             alert('you must t3amr inputs');
            
    //         }
    //       });

    //     console.log("dffd");