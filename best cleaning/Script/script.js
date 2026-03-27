const editform = document.getElementById('customer-edit-form');
const about = document.getElementById('about');
const back = document.getElementById('back');
const editbtn = document.getElementById('editbtn');
editbtn.addEventListener('click', function () {
    editform.style.display = "block";
})
back.addEventListener('click', function () {
    editform.style.display = "none";
})


window.addEventListener('DOMContentLoaded', () => {
    const hash = window.location.hash;
    if (hash) {
        const target = document.querySelector(hash);
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    }
});


