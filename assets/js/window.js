const openSignIn = document.getElementById('open_sign_in');
const closeSignIn = document.getElementById('sign_in_close');
const signIn = document.getElementById('sign_in');

openSignIn.addEventListener('click', function(e){
    e.preventDefault();
    signIn.classList.add('active');
})

closeSignIn.addEventListener('click', () => {
    signIn.classList.remove('active');
})

const openSignUp = document.getElementById('open_sign_up');
const closeSignUp = document.getElementById('sign_up_close');
const signUp = document.getElementById('sign_up');

openSignUp.addEventListener('click', function(e){
    e.preventDefault();
    signUp.classList.add('active');
})

closeSignUp.addEventListener('click', () => {
    signUp.classList.remove('active');
})

//error

document.querySelectorAll('input').forEach(el => {
    el.addEventListener('blur', () => {
        if (el.value.length === 0) {
            showErr(el, "Это поле не может быть пустым");
        } else if (el.value.length > 35) {
            showErr(el, 'Максимум 35 символов');
        }
    });
});

function showErr(field, errText) {
    if (field.nextElementSibling 
        && field.nextElementSibling.textContent === errText) {
        return;
    }

    field.classList.add('field-err');

    const err = document.createElement('span');
    field.after(err);
    err.classList.add('err-message');
    err.textContent = errText;

    hideErr(field, err);
}

function hideErr(field, err) {
    field.addEventListener('input', () => {
        field.classList.remove('field-err');
        err.remove();
    });
}