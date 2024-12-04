    
    // cal all inputs
    let testTakeInput = document.getElementsByTagName('input');


    // let s = 0 ;
    // let  elementsCalled = document.getElementsByTagName("input");

    // for (s = 0; s<elementsCalled.length ; s++) {

    //     console.log(elementsCalled[s])
    //     console.log("df"+[s])
    // }


function functionChekInpuVal() {
    
    

        for (i=0 ; i<testTakeInput.length ; i++ ) {
            if (testTakeInput[i].value === "") {
                testTakeInput[i].style.outline = "2px solid red"; 
                console.log("input khashaa t3mer")

            } else {
                console.log("sf raha 3amrat")
                testTakeInput[i].style.outline = "2px black solid";
            }
        }
        event.preventDefault()
    }

// function tchof ina input khawi
function chekinaWehdakhwya() {

        for (i=0 ; i<testTakeInput.length ; i++ ) {
            if (testTakeInput[i].value === "") {
                testTakeInput[i].style.outline = "2px solid red"; 
                console.log("rahom khawin")
            } else {
                console.log("rahom 3amrin kolhom")
            }
        }
        event.preventDefault()

    }


    function subm() {
     
        chekinaWehdakhwya();
        functionChekInpuVal();
        // if (inpttst.value === "") {
        //     functionChekInpuVal();
        // } else {
        //     inpttst.style.outline = "0"
        // }
        // functionChekInpuVal()
        
        event.preventDefault()
    }
    






const label = document.querySelector('label[for="selectTypeForm"]');
const select = document.getElementById('selectTypeForm');

label.addEventListener('click', () => {
    // select.focus(); // Focus on the select element
    select.style.backgroundColor = "#b2abab";
    console.log("red")
});