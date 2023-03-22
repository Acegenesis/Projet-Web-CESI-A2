var grid = document.getElementById('smiley-grid');
		var prevButton = document.getElementById('prev-button');
		var nextButton = document.getElementById('next-button');
		var page1Button = document.getElementById('page-1-button');
		var page2Button = document.getElementById('page-2-button');
		var page3Button = document.getElementById('page-3-button');
		var currentPage = 1;

		// Fonction pour générer une page de smileys
		function generatePage(pageNumber) {
			// Supprime tous les smileys de la grille
			while (grid.firstChild) {
				grid.removeChild(grid.firstChild);
			}

			// Détermine les indices de début et de fin pour la page donnée
			var startIndex = (pageNumber - 1) * 256;
			var endIndex = pageNumber * 256;

			// Boucle pour générer les smileys pour la page donnée
			for (var i = startIndex + 128512; i < endIndex + 128512; i++) {
				var smiley = document.createElement('div');
				smiley.className = 'smiley';
				smiley.textContent = String.fromCodePoint(i);
				grid.appendChild(smiley);
			}
		}

		// Ajoute un écouteur d'événements au bouton précédent
		prevButton.addEventListener('click', function () {
			if (currentPage > 1) {
				currentPage--;
				updatePagination();
			}
		});

		// Ajoute un écouteur d'événements au bouton suivant
		nextButton.addEventListener('click', function () {
			if (currentPage < 3) {
				currentPage++;
				updatePagination();
			}
		});

		// Ajoute un écouteur d'événements au bouton de la page 1
		page1Button.addEventListener('click', function () {
			if (currentPage != 1) {
				currentPage = 1;
				updatePagination();
			}
		});

		// Ajoute un écouteur d'événements au bouton de la page 2
		page2Button.addEventListener('click', function () {
			if (currentPage != 2) {
				currentPage = 2;
				updatePagination();
			}
		});

		// Ajoute un écouteur d'événements au bouton de la page 3
		page3Button.addEventListener('click', function () {
			if (currentPage != 3) {
				currentPage = 3;
				updatePagination();
			}
		});

		// Fonction pour mettre à jour l'état de la pagination
		function updatePagination() {
			// Met à jour l'état des boutons précédent et suivant
			if (currentPage == 1) {
				prevButton.disabled = true;
			} else {
				prevButton.disabled = false;
			}

			if (currentPage == 3) {
				nextButton.disabled = true;
			} else {
				nextButton.disabled = false;
			}

			// Met à jour l'état des boutons de la page
			switch (currentPage) {
				case 1:
					page1Button.classList.add('active');
					page2Button.classList.remove('active');
					page3Button.classList.remove('active');
					break;
				case 2:
					page1Button.classList.remove('active');
					page2Button.classList.add('active');
					page3Button.classList.remove('active');
					break;
				case 3:
					page1Button.classList.remove('active');
					page2Button.classList.remove('active');
					page3Button.classList.add('active');
					break;
			}

			// Génère la nouvelle page de smileys
			generatePage(currentPage);
		}

		// Génère la première page de smileys
		generatePage(1);