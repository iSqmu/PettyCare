let showPswrd = document.querySelector('#showpswrd');

showPswrd.addEventListener('click', () => {
	let pwsrd = document.querySelector('#password');
	if (pwsrd.type === 'password') {
		pwsrd.type = 'text';
		showPswrd.innerHTML = '<i class="fa-solid fa-eye"></i>';
	} else {
		pwsrd.type = 'password';
		showPswrd.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
	}
});
