const editButton = document.querySelectorAll("#editButton");

// Form Anatomy
const inputIdOp = document.querySelector("#operatorId");
const inputUsernameOp = document.querySelector("#operatorUsername");
const inputNameOp = document.querySelector("#operatorName");
const inputLevel = document.querySelector("#operatorLevel");

$(document).ready(function(){
    editButton.forEach(edit => {
        $(edit).on("click", ()=> {
            console.log(edit);
            let id = $(edit).attr("data-id");
            let username = $(edit).attr("data-username");
            let name = $(edit).attr("data-name");
            let level = $(edit).attr("data-level");

            if(level == 1){
                level = "Admin";
            } else{
                level = "Operator";
            }
    
            inputIdOp.setAttribute("value", id);
            inputUsernameOp.setAttribute("value", username);
            inputNameOp.setAttribute("value", name);
            inputLevel.setAttribute("value", level);
        });
    });
});
