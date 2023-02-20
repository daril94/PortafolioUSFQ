const grid = new Muuri('.grid', {
    layout: {
        rounding: false
    }
});

window.addEventListener('load', () => {
    grid.refreshItems().layout();
    document.getElementById('grid').classList.add('imagenes-cargadas');

    const enlaces = document.querySelectorAll('#categorias-proyectos a')
    enlaces.forEach((elemento) => {
        elemento.addEventListener('click', (ev) => {
            ev.preventDefault();
            enlaces.forEach((enlace) => enlace.classList.remove('active'));
            ev.target.classList.add('active');

            const categoria = ev.target.innerHTML.toLowerCase();
            categoria === 'todos' ? grid.filter('[data-categoria]') : grid.filter(`[data-categoria="${categoria}"]`);

        })
    });
});