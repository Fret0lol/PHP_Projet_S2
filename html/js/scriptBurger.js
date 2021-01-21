const burger = document.querySelector('.burger');
const header_list = document.getElementById('header_menu');
burger.addEventListener('click', function () {
	header_list.classList.toggle('expanded');
});
