var formLogin = document.getElementById('FormLogin');
var formrecovery = document.getElementById('form-recovery');
var formRegister = document.getElementById('FormRecord');
var passwordInput = document.getElementById("new_pssw");
var passwordInput2 = document.getElementById("new_pssw2");
var showPasswordCheckbox = document.getElementById("showPassword");
var passwordInput0 = document.getElementById("user_pssw");
var showPasswordCheckbox0 = document.getElementById("showPassword0");
var link1 = document.getElementById('linkPassword');
// var link2 = document.getElementById('linkRecord');
var myButton = document.getElementById('btnrecovery');
var searchInput = document.getElementById('searchInput');

// Función para validar los campos del formulario de login
$("#sendopinion").click(function() 
{
	if ($("#nombre_user").val() == "") {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Nombre de usuario es requerido'
		})
		return false;

	}
	else if ($("#email_user").val() == "") 
	{
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Correo electronico es requerido'
		})
		return false;

	}
	else if ($("#text_user").val() == "") 
	{
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Mensaje es requerido'
		})
		return false;

	}
});

// Función para validar los campos del formulario de login
$("#btnlogin").click(function() 
{
	if ($("#user_name").val() == "") {
		document.getElementById('user_name').classList.add('is-invalid');
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Nombre de usuario es requerido'
		})
		return false;

	}
	else if ($("#user_pssw").val() == "") 
	{
		document.getElementById('user_pssw').classList.add('is-invalid');
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Contraseña es requerido'
		})
		return false;

	}
	else
	{
		document.getElementById('user_name').classList.add('is-valid');
		document.getElementById('user_pssw').classList.add('is-valid');
	}
});

// Función para validar los campos del formulario de registro
$("#btnregister").click(function() 
{
	if ($("#new_user").val() == "") 
	{
		document.getElementById('new_user').classList.add('is-invalid');
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Nombre de usuario es requerido'
		})
		return false;

	}
	else if ($("#new_email").val() == "") 
	{
		document.getElementById('new_email').classList.add('is-invalid');
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Correo Electronico es requerido'
		})
		return false;
	}
	else if($("#new_pssw").val() == "")
	{
		document.getElementById('new_pssw').classList.add('is-invalid');
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El Campo Contraseña es requerido'
		})
		return false;
	}
	else if ($("#new_pssw").val() != $("#new_pssw2").val() ) 
	{
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'Las contraseñas no coinciden'
		})
		return false;
		document.getElementById('new_user').classList.add('is-valid');
		document.getElementById('new_email').classList.add('is-valid');
		document.getElementById('new_pssw').classList.add('is-valid');
	}
	else 
	{
		document.getElementById('new_user').classList.add('is-valid');
		document.getElementById('new_email').classList.add('is-valid');
		document.getElementById('new_pssw').classList.add('is-valid');
	}
});

// Función para mostrar la contraseña en el form de registro
function togglePasswordVisibility() 
{
	if (showPasswordCheckbox.checked) {
		passwordInput.type = "text";
		passwordInput2.type = "text";
	} else {
		passwordInput.type = "password";
		passwordInput2.type = "password";
	}
}

// Función para mostrar la contraseña en el formulario de login
function ShowPasswordForm0() 
{
	if (showPasswordCheckbox0.checked) {
		passwordInput0.type = "text";
	} else {
		passwordInput0.type = "password";
	}
}

// Función para cambiar de vista de formularios
function MiButton(val)
{
	if(val == 'register')
	{
		formRegister.reset();
		formLogin.classList.remove("invisible");
		formRegister.classList.add("invisible");
	}
	if(val == 'login') 
	{
		formLogin.reset();
		formLogin.classList.add("invisible");
		formRegister.classList.remove("invisible");
	}
	togglePasswordVisibility();
	ShowPasswordForm0();
}

// Función para limpiar el formulario
function ClearForm()
{
	formrecovery.reset();
	myButton.type = 'button';
	grecaptcha.reset();
}

function Recuperar()
{

}

// Función para validar el captcha
function captchaValido() {
	// Verificar si el captcha es válido
	var response = grecaptcha.getResponse();
  
	if (response.length === 0 || $("#emailfound").val() == "") {
	  // El captcha no ha sido validado
	  const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		})

		Toast.fire({
			icon: 'error',
			title: 'El captcha y el correo deben de ser completados'
		});
	  return false;
	} else {
	  // Realizar acciones adicionales aquí
	  myButton.type = 'submit';
  
	  return true;
	}
}

// Función de busqueda
function searchItems() {
	var searchInput = document.getElementById('searchInput');
	var filter = searchInput.value.toLowerCase();
	
	var items = document.getElementsByClassName('item');
	for (var i = 0; i < items.length; i++) {
	   var item = items[i];
	   var text = item.textContent || item.innerText;
	   if (text.toLowerCase().indexOf(filter) > -1) {
		  item.style.display = '';
	   } else {
		  item.style.display = 'none';
	   }
	}
 }



