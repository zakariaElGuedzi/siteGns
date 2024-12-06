    

    let SelectOp = document.getElementById("selectTypeForm");
    let Valueselect = SelectOp.value ;
    // console.log(Valueselect+"d")
    
    SelectOp.addEventListener("change",function() {
        // let Valueselect = SelectOp.value ;
         Valueselect = SelectOp.value ;

    
        console.log(Valueselect)
    })

    // cal all inputs
    let testTakeInput = document.getElementsByTagName('input');
    

// function tchof ina input khawi
function chekinaWehdakhwya() {

        for (i=0 ; i<testTakeInput.length ; i++ ) {
            if (    testTakeInput[i].value === "" && Valueselect === "") {
               testTakeInput[i].style.outline = "2px solid red"; 
                console.log("rahom khawin");
                // functionChekInpuVal();
                SelectOp.style.outline = "2px solid red";
                console.log(testTakeInput[i])
            } 
            
            else  {
                console.log("rahom 3amrin kolhom - send form");
                SelectOp.style.outline = "2px solid black"
            }           
        }
        event.preventDefault()
    }

    function functionChekInpuVal() {
        for (i=0 ; i<testTakeInput.length ; i++ ) {
            if (testTakeInput[i].value === "") {
                testTakeInput[i].style.outline = "2px solid red"; 
                console.log("input khashaa t3mer")
                

            } else {
                console.log("sf raha 3amrat")
                testTakeInput[i].style.outline = "1px black solid";
            }
        }
        
    }


