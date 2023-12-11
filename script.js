function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const message = messageInput.value;

    if (message.trim() !== '') {
        appendMessage('You', message);
        messageInput.value = '';
    }
}

function sendMedia() {
    const fileInput = document.getElementById('fileInput');
    fileInput.click();
}

fileInput.addEventListener('change', handleFile);

function handleFile(event) {
    const file = event.target.files[0];

    if (file) {
        appendMedia('You', file);
    }
}

function appendMessage(sender, message) {
    const chatMessages = document.getElementById('chatMessages');
    const messageElement = document.createElement('div');
    messageElement.textContent = `${sender}: ${message}`;
    chatMessages.appendChild(messageElement);
}

function appendMedia(sender, file) {
    const chatMessages = document.getElementById('chatMessages');
    const mediaElement = document.createElement('div');
    
    const mediaType = file.type.split('/')[0];
    if (mediaType === 'image') {
        const imgElement = document.createElement('img');
        imgElement.src = URL.createObjectURL(file);
        imgElement.alt = `${sender}'s image`;
        mediaElement.appendChild(imgElement);
    } else if (mediaType === 'video') {
        const videoElement = document.createElement('video');
        videoElement.src = URL.createObjectURL(file);
        videoElement.setAttribute('controls', 'controls');
        videoElement.setAttribute('width', '200');
        mediaElement.appendChild(videoElement);
    }

    chatMessages.appendChild(mediaElement);
}
