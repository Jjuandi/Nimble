function entradaSearchM(){
	const typed = new Typed('.spanM1', {
		strings: ['¿Cuál es el mejor perfume?', 
		'¿Por qué se comen palomitas en cine?', 
		'¿Qué hace un programador?', 
		'¿Cuál es la película mas antigua?',
		'¿Qué hora tiene la estación espacial?',
		'¿Cómo se producen las lágrimas?',
		'¿El corazón tiene neuronas?',
		'¿Cómo funciona un detector de mentiras?'],

	//stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 40, // Velocidad en mlisegundos para poner una letra,
	startDelay: 1000, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 20, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 2500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
	});
}

$(document).ready(function(){
	entradaSearchM();
});