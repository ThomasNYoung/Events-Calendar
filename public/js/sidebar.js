var sidebarBox = document.querySelector('#box');
var sidebarBtn = document.querySelector('#btn');
var pageWrapper = document.querySelector('#page-wrapper');

sidebarBtn.addEventListener('click', function(event) {
		sidebarBtn.classList.toggle('active');
		sidebarBox.classList.toggle('active');
});

pageWrapper.addEventListener('click', function(event) {

		if (sidebarBox.classList.contains('active')) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
		}
});

window.addEventListener('keydown', function(event) {

		if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
		}
});