
const inputs = document.querySelectorAll(".form-control");
const errors = [...document.querySelectorAll(".error")];

const create_form = document.querySelector(".form-create");

create_form.addEventListener("click", function(e) {
    if (e.target.name) {
        var err_field = "error-" + e.target.name;
        var err_stmt = errors.find(error => error.className.includes(err_field)).innerText;
    } 
    $(e.target).on("change keyup paste", function() {
        if (rulesCheck(err_stmt, e.target.value)) {
            document.querySelector("." + err_field).innerHTML = '';
            let targ_input = 'input[name="' + e.target.name + '"]';
            document.querySelector(targ_input).classList.remove('border-danger');
        }
    })
})



function rulesCheck(error, prop) {
    switch(error) {
        case 'Username cannot be empty':
        case 'Email cannot be empty':
        case 'Password cannot be empty':
            return prop.length > 0;
        case 'Username must be between 6-20 chars & alphanumeric':
        case 'Password must be between 6-20 chars & alphanumeric':
            return prop.length >= 6;
        default: 
            break;
    }
}