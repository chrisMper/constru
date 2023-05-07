const messageInput = document.getElementById('messageInput');
const sendButton = document.getElementById('sendButton');
const messages = document.getElementById('messages');

sendButton.addEventListener('click', function() {
	const message = messageInput.value;
	if (message.trim() !== '') {
		const messageElement = document.createElement('div');
		messageElement.textContent = message;
		messageElement.classList.add('message');
		messages.appendChild(messageElement);
		messageInput.value = '';
		messages.scrollTop = messages.scrollHeight;
	}
});

messageInput.addEventListener('keydown', function(event) {
	if (event.key === 'Enter') {
		event.preventDefault();
		sendButton.click();
	}
});