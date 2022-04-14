const name = document.getElementByID('name')
const password = document.getElementByID('password')
const form = document.getElementByID('form')
const errorElement= document.getElementByID('error')

form.addEventlistener('submit', (e) => {
	let messages = []
	if (name.value == '' || name.value == null){
		alert ("Username required")
	}
	if (messages.length > 0){
		e.preventDefault()
		errorElement.innerText= messages.join(',')
	}
})