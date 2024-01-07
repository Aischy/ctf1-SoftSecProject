function login() {
    fetch('check_admin.php')
    .then(response => response.text())
    .then(data => document.getElementById('message').innerText = data)
    .catch(error => console.error('Error:', error));
}
