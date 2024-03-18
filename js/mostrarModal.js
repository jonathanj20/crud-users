const btnAgregarUsuario = document.getElementById('btnAgregarUsuario');
const btnCerrarAddUser = document.getElementById('btnCerrarAddUser');
const modalAddUser = document.getElementById('addUser');

btnAgregarUsuario.addEventListener("click", () => {
    modalAddUser.style.display = ' block';
});

btnCerrarAddUser.addEventListener("click", () => {
    modalAddUser.style.display = 'none';
});