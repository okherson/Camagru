// alert ("helloo");

var servResponse = document.querySelector('#response');


document.forms.ourForm.onsubmit = function (e) {
	e.preventDefault();//відключення дій за умовчанням


	var userInput = document.forms.ourForm.ourForm_input.value;//отримуємо значення введеному в інпут.
	userInput = encodeURIComponent(userInput);//закодовування ввідної інф-ї щоб уникнути некоректних запитів сервера.

	var xhr = new XMLHttpRequest();


// xhr.open = ('GET', 'form.php?'+'ourForm_input='+userInput+'&key2=value2') // method GET

	xhr.open('POST', 'form.php');
	/* POST має 3 кодування  які задаються через атрибут enctype: 
		1)application/x-www-form-urlenconded (таке кодування - у GET запиту)
		2)multipart/form-data
		3)text-plain
		*/

//	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlenconded');

	var formData = new FormData(document.forms.ourForm);

	xhr.onreadystatechange = function(){
		if (xhr.readyState === 4 && xhr.status === 200){
			servResponse.textContent = xhr.responseText;
		}
	}



	// xhr.send('ourForm_input=' + userInput);
	xhr.send(formData);


	

};
