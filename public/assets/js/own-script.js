const editButton = document.querySelectorAll("#editButton");
const blockUser = document.querySelectorAll("#blockUserButton");
const activateUser = document.querySelectorAll("#activateUserButton");

// Form Anatomy
const inputIdOp = document.querySelector("#operatorId");
const inputUsernameOp = document.querySelector("#operatorUsername");
const inputNameOp = document.querySelector("#operatorName");
const inputLevel = document.querySelector("#operatorLevel");

// User Block/Activate Anatomy
const inputIdUserBlock = document.querySelector("#userIdBlock");
const inputIdUserActivate = document.querySelector("#userIdActivate");

$(document).ready(function(){
    editButton.forEach(edit => {
        $(edit).on("click", ()=> {
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

    blockUser.forEach(block => {
        $(block).on("click", ()=>{
            let id = $(block).attr("data-id");
            inputIdUserBlock.setAttribute("value", id);
        });
    });

    activateUser.forEach(activate => {
        $(activate).on("click", ()=>{
            let id = $(activate).attr("data-id");
            inputIdUserActivate.setAttribute("value", id);
        });
    });
});
