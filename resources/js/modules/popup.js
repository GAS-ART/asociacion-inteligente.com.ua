export function popUp(popupId) {
	const popUp = document.getElementById(popupId);
	const bodyLock = document.getElementById('body');
	const popupCloseIcon = popUp.querySelector('.close-popup');
	const popupBtn = popUp.querySelector('.confirm-button') || false;
	const popupSending = popUp.querySelector('.popup__load') || false;
	const filePreview = popUp.querySelector('.preview-file') || false;
	popUp.classList.add('open');
	bodyLock.classList.add('lock');

	popupCloseIcon.addEventListener('click', function (e) {
		popupClose(popUp);
		e.preventDefault();
	});

	if (popupBtn) {
		popupBtn.addEventListener('click', function () {
			popupClose(popUp);
		});
	}


	function popupClose(popupActive) {
		popupActive.classList.remove('open');
		bodyLock.classList.remove("lock");
		popUp.classList.remove('send');
		if (filePreview) {
			filePreview.innerHTML = '';
		}
	}

	popUp.addEventListener('mousedown', function (e) {
		if (popupSending) {
			if (!e.target.closest('.popup__content') && !popupSending.classList.contains('active')) popupClose(popUp);
		} else {
			if (!e.target.closest('.popup__content')) popupClose(popUp);
		}
	});
};